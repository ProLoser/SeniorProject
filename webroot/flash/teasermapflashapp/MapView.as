package flash.teasermapflashapp{

	import flash.display.*;
	import flash.text.*;
	import flash.net.*;
	import flash.events.*;
	import fl.transitions.*;
	import fl.transitions.easing.*;

	public class MapView extends MovieClip {

		private var selectedCountry:String;
		private var map:Sprite;
		private var byMap:Sprite;
		private var byProgram:Sprite;
		private var loader:Loader;
		private var i:int;
		private var theParent:Controller;
		private var blankMap:Sprite;
		private var dot:MovieClip;
		private var regionDot:String;
		private var tweens:Array;
		private var theBlankMap:Sprite;
		private var programButtons:Array;
		private var programTweens:Array;
		private var programFrames:Array;
		private var programIndex:int;
		private var galleryView:GalleryView;
		private var closingButton:Sprite;

		public function MapView(aParent:Controller):void {
			loader = new Loader();
			map = new Sprite();
			byMap = new Sprite();
			byProgram = new Sprite();
			blankMap= new Sprite();
			programTweens = new Array();
			programFrames = new Array();
			i=0;
			theParent=aParent;
			dot = new MovieClip();
			tweens = new Array();
			dot = new MovieClip();
			dot.alpha=0;
			dot.x=800;
			dot.y=160;
			programIndex=4;
		}

		public function startLoading():void {
			loader.contentLoaderInfo.addEventListener(Event.COMPLETE,mapLoaded);
			loader.load(new URLRequest("flash/teasermapflashapp/images/map.jpg"));
		}

		private function mapLoaded(event:Event) {
			if (i==0) {
				map.addChild(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/bymap.gif"));
			} else if (i==1) {
				byMap.addChild(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/byprogram.gif"));
			} else if (i==2) {
				byProgram.addChild(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/blankmap.jpg"));
			} else if (i==3) {
				blankMap.addChild(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/dot.gif"));
			} else if (i==4) {
				dot.addChild(loader.content);
				continueBuilding();
			}
		}

		private function continueBuilding() {
			map.x=676;
			addChild(map);

			byProgram.x=791;
			byProgram.y=60;
			byProgram.buttonMode=true;
			byProgram.addEventListener(MouseEvent.CLICK,clickByProgram);
			addChild(byProgram);

			byMap.x=702;
			byMap.y=60;
			byMap.width=87;
			byMap.buttonMode=true;
			byMap.addEventListener(MouseEvent.CLICK,clickByMap);
			addChild(byMap);
			
			addChild(dot);
		}

		private function clickByMap(event:MouseEvent):void {
			theParent.loadMap("byMap");
		}
		private function clickByProgram(event:MouseEvent):void {
			theParent.loadMap("byProgram");
		}

		public function toggleMap() {
			if (byMap.hasEventListener(MouseEvent.CLICK)) {
				byMap.removeEventListener(MouseEvent.CLICK,clickByMap);
				byProgram.removeEventListener(MouseEvent.CLICK,clickByProgram);
			} else {
				byMap.addEventListener(MouseEvent.CLICK,clickByMap);
				byProgram.addEventListener(MouseEvent.CLICK, clickByProgram);
			}
		}
		
		public function setupByProgram(aGalleryView:GalleryView, aBlankMap:Sprite,
									   theProgramButtons:Array, someProgramFrames:Array,
									   closerButton:Sprite) {
			galleryView = aGalleryView;
			theBlankMap = aBlankMap
			programFrames=someProgramFrames;
			programButtons = theProgramButtons;
			closingButton = closerButton;
			addChild(theBlankMap);
			addChild(programFrames[4]);
			for (var k:int =0; k<programButtons.length; k++) {
				addChild(programButtons[k]);
			}
			closingButton.x=770;
			closingButton.y=175;
			closingButton.addEventListener(MouseEvent.CLICK,endByProgram);
			closingButton.buttonMode=true;
			addChild(closingButton);
			runByProgram();
		}
		public function runByProgram():void {
			programTweens[0] = new Tween(programFrames[programIndex],"alpha",None.easeIn,1,.99,48);
			programTweens[0].addEventListener(TweenEvent.MOTION_FINISH,programWaitFinished);
			programTweens[0].start();
		}
		
		private function programWaitFinished(event:TweenEvent):void {
			if (programIndex!=4) {
				addChild(programFrames[programIndex+1]);
				programFrames[programIndex+1].alpha=0;
				programTweens[0] = new Tween(programFrames[programIndex],"alpha",None.easeIn,1,0,12);
				programTweens[1] = new Tween(programFrames[programIndex+1],"alpha",None.easeIn,0,1,12);
				programTweens[1].addEventListener(TweenEvent.MOTION_FINISH,programTweenFinished);
				programTweens[0].start();
				programTweens[1].start();
			} else if (programIndex == 4) {
				addChild(programFrames[0]);
				programFrames[0].alpha=0;
				programTweens[0] = new Tween(programFrames[4],"alpha",None.easeIn,1,0,12);
				programTweens[1] = new Tween(programFrames[0],"alpha",None.easeIn,0,1,12);
				programTweens[1].addEventListener(TweenEvent.MOTION_FINISH,programTweenFinished);
				programTweens[0].start();
				programTweens[1].start();
			}
		}
		
		private function programTweenFinished(event:TweenEvent):void {
			if (programIndex != 4) {
				if (contains(programFrames[programIndex])) {
					removeChild(programFrames[programIndex]);
				}
				programIndex++;
			} else if (programIndex == 4) {
				if (contains(programFrames[4])) {
					removeChild(programFrames[4]);
				}
				programIndex=0;
			}
			runByProgram();
		}
		
		public function stopByProgram():void {
			for (var k:int=0; k<programTweens.length;k++) {
				if (programTweens[k] != null) {
					programTweens[k].stop();
				}
			}
			for (var l:int=1; l<programFrames.length;l++) {
				if (programFrames[l] != null && contains(programFrames[l])) {
					removeChild(programFrames[l]);
				}
			}
			addChild(programFrames[programIndex]);
			programFrames[programIndex].alpha=0;
			new Tween(programFrames[programIndex],"alpha",None.easeIn,programFrames[programIndex].alpha,1,12);
		}
		
		public function setProgram(index:int):void {
			programIndex=index;
			stopByProgram();
		}
		
		private function endByProgram(event:MouseEvent):void {
			stopByProgram();
			for (var k:int=0;k<programFrames.length;k++) {
				if (contains(programFrames[k])) {
					removeChild(programFrames[k]);
				}
			}
			for (var l:int = 0; l<programButtons.length; l++) {
				if (contains(programButtons[l])) {
					removeChild(programButtons[l]);
				}
			}
			programFrames[4].alpha=1;
			removeChild(theBlankMap);
			removeChild(closingButton);
			theParent.closeByPrograms();
		}

		public function setDot(region:String):void {
			for (var k:int=0; k<tweens.length; k++) {
				if (tweens[k]!=null&&tweens[k].isPlaying) {
					tweens[k].stop();
				}
			}
			if (regionDot==null) {
				tweens[0]=new Tween(dot,"alpha",None.easeIn,0,1,12);
			}
			if (region=="au") {
				tweens[1]=new Tween(dot,"x",Strong.easeInOut,dot.x,880,12);
				tweens[2]=new Tween(dot,"y",Strong.easeInOut,dot.y,165,12);
			} else if (region == "nz") {
				tweens[1]=new Tween(dot,"x",Strong.easeInOut,dot.x,890,12);
				tweens[2]=new Tween(dot,"y",Strong.easeInOut,dot.y,175,12);
			} else if (region == "sa") {
				tweens[1]=new Tween(dot,"x",Strong.easeInOut,dot.x,810,12);
				tweens[2]=new Tween(dot,"y",Strong.easeInOut,dot.y,160,12);
			} else if (region == "th") {
				tweens[1]=new Tween(dot,"x",Strong.easeInOut,dot.x,861,12);
				tweens[2]=new Tween(dot,"y",Strong.easeInOut,dot.y,140,12);
			} else if (region == "cr") {
				tweens[1]=new Tween(dot,"x",Strong.easeInOut,dot.x,752,12);
				tweens[2]=new Tween(dot,"y",Strong.easeInOut,dot.y,137,12);
			} else if (region == "ec") {
				tweens[1]=new Tween(dot,"x",Strong.easeInOut,dot.x,757,12);
				tweens[2]=new Tween(dot,"y",Strong.easeInOut,dot.y,147,12);
			} else if (region == "ee") {
				tweens[1]=new Tween(dot,"x",Strong.easeInOut,dot.x,810,12);
				tweens[2]=new Tween(dot,"y",Strong.easeInOut,dot.y,115,12);
			} else if (region == null) {
				tweens[0]=new Tween(dot,"alpha",None.easeIn,dot.alpha,0,12);
			}
			regionDot=region;
		}
	}
}