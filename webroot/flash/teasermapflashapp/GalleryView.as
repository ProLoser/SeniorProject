package flash.teasermapflashapp{

	import flash.display.*;
	import fl.transitions.*;
	import fl.transitions.easing.*;
	import flash.events.*;
	import flash.net.*;

	public class GalleryView extends MovieClip {

		private var imageIndex:int;
		private var frames:Array;
		private var loader:Loader;
		private var loadingSymbol:MovieClip;
		private var tweens:Array;
		private var i:int;
		private var filler:Bitmap;
		private var oscilateTweens:Array;
		private var theParent:Controller;
		private var programFrames:Array;
		private var closingButton:Sprite;
		private var blankMap:Sprite;
		private var programButtons:Array;
		private var programTweens:Array;
		private var programIndex:int;
		private var mapView:MapView;

		public function GalleryView(aParent:Controller):void {
			imageIndex=0;
			frames = new Array();
			tweens = new Array();
			programButtons = new Array();
			//this.width=680;
			//this.height=323;
			loader = new Loader();
			oscilateTweens= new Array();
			programFrames = new Array();
			theParent=aParent;
			programTweens = new Array();
			programIndex=4;
		}

		public function startLoading():void {
			loader.contentLoaderInfo.addEventListener(Event.COMPLETE,loaded);
			loadingSymbol = new LoadingSymbol();
			loadingSymbol.x=460;
			loadingSymbol.y=155;
			tweens[0]=new Tween(loadingSymbol,"rotation",None.easeIn,0,-360,24);
			tweens[0].looping=true;
			addChild(loadingSymbol);
			tweens[0].start();
			i=1;
			beginLoading();
		}

		private function beginLoading() {
			loader.load(new URLRequest("flash/teasermapflashapp/images/" + i + "a.jpg"));
		}

		private function loaded(event:Event):void {
			//images = 547 x 323
			frames[i-1]=new Frame(loader.content);
			if (i>1) {
				frames[i-1].x=547+(43*(i-2));
			}
			if (i>=4) {
				i=0;
				continueLoading(null);
			} else {
				i++;
				beginLoading();
			}
		}

		private function continueLoading(event:Event):void {
			if (i==0) {
				loader = new Loader();
				loader.contentLoaderInfo.addEventListener(Event.COMPLETE,continueLoading);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/nzdest.jpg"));
			} else if (i==1) {
				frames[4]=new Frame(loader.content);
				frames[4].x=129;
				frames[4].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/sadest.jpg"));
			} else if (i==2) {
				frames[5]=new Frame(loader.content);
				frames[5].x=129;
				frames[5].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/thdest.jpg"));
			} else if (i==3) {
				frames[6]=new Frame(loader.content);
				frames[6].x=129;
				frames[6].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/audest.jpg"));
			} else if (i==4) {
				frames[7]=new Frame(loader.content);
				frames[7].x=129;
				frames[7].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/crdest.jpg"));
			} else if (i==5) {
				frames[8]=new Frame(loader.content);
				frames[8].x=129;
				frames[8].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/ecdest.jpg"));
			} else if (i==6) {
				frames[9]=new Frame(loader.content);
				frames[9].x=129;
				frames[9].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/eedest.jpg"));
			} else if (i==7) {
				frames[10]=new Frame(loader.content);
				frames[10].x=129;
				i++;
				frames[10].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				frames[11]=frames[3];
				loader.load(new URLRequest("flash/teasermapflashapp/images/flipflops.jpg"));
			} else if (i==8) {
				programFrames[0]= new Frame(loader.content);
				programFrames[0].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/monkeythought.jpg"));
			} else if (i==9) {
				programFrames[1] = new Frame(loader.content);
				programFrames[1].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/piggybackboy.jpg"));
			} else if (i==10) {
				programFrames[2] = new Frame(loader.content);
				programFrames[2].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/waterfallgroup.jpg"));
			} else if (i==11) {
				programFrames[3] = new Frame(loader.content);
				programFrames[3].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				programFrames[4] = frames[0];
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/close.gif"));
			} else if (i==12) {
				closingButton=new Sprite();
				closingButton.addChild(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/blankmap.jpg"));
			} else if (i==13) {
				blankMap = new Sprite();
				blankMap.addChild(loader.content);
				blankMap.x=676;
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/programbuttons/university.gif"));
			} else if (i==14) {
				programButtons[0] = new Sprite();
				programButtons[0].addChild(loader.content);
				programButtons[0].x=750;
				programButtons[0].y=55;
				programButtons[0].buttonMode=true;
				programButtons[0].addEventListener(MouseEvent.MOUSE_OVER,overProgramButton);
				programButtons[0].addEventListener(MouseEvent.MOUSE_OUT,outProgramButton);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/programbuttons/project.gif"));
			} else if (i==15) {
				programButtons[1] = new Sprite();
				programButtons[1].addChild(loader.content);
				programButtons[1].x=750;
				programButtons[1].y=85;
				programButtons[1].buttonMode=true;
				programButtons[1].addEventListener(MouseEvent.MOUSE_OVER,overProgramButton);
				programButtons[1].addEventListener(MouseEvent.MOUSE_OUT,outProgramButton);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/programbuttons/conservation.gif"));
			} else if (i==16) {
				programButtons[2] = new Sprite();
				programButtons[2].addChild(loader.content);
				programButtons[2].x=750;
				programButtons[2].y=115;
				programButtons[2].buttonMode=true;
				programButtons[2].addEventListener(MouseEvent.MOUSE_OVER,overProgramButton);
				programButtons[2].addEventListener(MouseEvent.MOUSE_OUT,outProgramButton);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/programbuttons/community.gif"));
			} else if (i==17) {
				programButtons[3] = new Sprite();
				programButtons[3].addChild(loader.content);
				programButtons[3].x=750;
				programButtons[3].y=145;
				programButtons[3].buttonMode=true;
				programButtons[3].addEventListener(MouseEvent.MOUSE_OVER,overProgramButton);
				programButtons[3].addEventListener(MouseEvent.MOUSE_OUT,outProgramButton);
				continue01();
			}
		}

		private function continue01():void {
			i=0;
			frames[0].setText("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur, nibh ut feugiat placerat, orci lacus accumsan erat, eget porttitor arcu velit a lacus.");
			frames[1].setText("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur, nibh ut feugiat placerat, orci lacus accumsan erat, eget porttitor arcu velit a lacus.");
			frames[2].setText("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur, nibh ut feugiat placerat, orci lacus accumsan erat, eget porttitor arcu velit a lacus.");
			frames[3].setText("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur, nibh ut feugiat placerat, orci lacus accumsan erat, eget porttitor arcu velit a lacus.");
			while (i < 4) {
				frames[i].alpha=0;
				tweens[i+1]=new Tween(frames[i],"alpha",None.easeIn,0,1,12);
				addChild(frames[i]);
				tweens[i+1].start();
				i++;
			}
			tweens[3].addEventListener(TweenEvent.MOTION_FINISH,tweenFinished);
			filler=new Bitmap(new BitmapData(400,430,false,0xFFFFFF));
			filler.x=547+43*3;
			addChild(filler);
		}

		private function tweenFinished(event:TweenEvent):void {
			tweens[0].stop();
			removeChild(loadingSymbol);
			i=0;
			imageIndex=0;
			while (i<4) {
				frames[i].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				i++;
			}
		}

		private function mouseOverFrame(event:MouseEvent):void {
			stopDestOscilation();
			for (var j:int=0; j<tweens.length; j++) {
				tweens[j].stop();
			}
			var newX:int=0;
			for (var l:int=0; l<4; l++) {
				tweens[l]=new Tween(frames[l],"x",Strong.easeInOut,frames[l].x,newX,24);
				tweens[l].start();
				if (frames[l]==event.target) {
					newX+=504;
					imageIndex=l;
				}
				newX+=43;
			}
			if (event.target==frames[3]) {
				oscilate();
			}
		}

		public function setImageIndex(newIndex:int):void {
			stopDestOscilation();
			for (var j:int=0; j<tweens.length; j++) {
				tweens[j].stop();
			}
			var newX:int=0;
			for (var i:int=0; i<4; i++) {
				tweens[i]=new Tween(frames[i],"x",Strong.easeInOut,frames[i].x,newX,24);
				tweens[i].start();
				if (i==newIndex) {
					newX+=504;
					imageIndex=newIndex;
				}
				newX+=43;
			}
		}

		public function toggleGallery() {
			if (frames[0].hasEventListener(MouseEvent.MOUSE_OVER)) {
				frames[0].removeEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				frames[1].removeEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				frames[2].removeEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				frames[3].removeEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
			} else {
				frames[0].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				frames[1].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				frames[2].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				frames[3].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
			}
		}
		
		public function setupByProgram(aMapView:MapView):void {
			mapView = aMapView;
			if (frames[0] != null && contains(frames[0])) {
				removeChild(frames[0]);
			}
			mapView.setupByProgram(this,blankMap,programButtons,programFrames,closingButton);
		}
		
		private function overProgramButton(event:MouseEvent):void {
			if (event.target==programButtons[0]) {
				mapView.setProgram(0);
			} else if (event.target==programButtons[1]) {
				mapView.setProgram(1);
			} else if (event.target==programButtons[2]) {
				mapView.setProgram(2);
			} else if (event.target==programButtons[3]) {
				mapView.setProgram(3);
			}
		}
		
		private function outProgramButton(event:MouseEvent):void {
			mapView.runByProgram();
		}

		public function oscilate():void {
			if (oscilateTweens[0]!=null) {
				oscilateTweens[0].stop();
			}
			oscilateTweens[0]=new Tween(frames[3],"alpha",None.easeIn,1,.99,48);
			oscilateTweens[0].addEventListener(TweenEvent.MOTION_FINISH, switchFrames);
			oscilateTweens[0].start();
		}

		private function switchFrames(event:TweenEvent):void {
			for (var j:int =4; j<frames.length; j++) {
				if (frames[3]==frames[j]&&j!=11) {
					frames[j+1].alpha=0;
					addChild(frames[j+1]);
					oscilateTweens[0]=new Tween(frames[3],"alpha",None.easeIn,1,0,24);
					oscilateTweens[1]=new Tween(frames[j+1],"alpha",None.easeIn,0,1,24);
					oscilateTweens[1].addEventListener(TweenEvent.MOTION_FINISH,framesSwitched);
					i=j+1;
				} else if (frames[3] ==frames[j] && j==11) {
					frames[4].alpha=0;
					addChild(frames[4]);
					oscilateTweens[0]=new Tween(frames[3],"alpha",None.easeIn,1,0,24);
					oscilateTweens[1]=new Tween(frames[4],"alpha",None.easeIn,0,1,24);
					oscilateTweens[1].addEventListener(TweenEvent.MOTION_FINISH,framesSwitched);
					theParent.setDot(null);
					i=4;
				}
				if (frames[3] ==frames[j]) {
					if (j==11) {
						theParent.setDot("nz");
					} else if (j==4) {
						theParent.setDot("sa");
					} else if (j==5) {
						theParent.setDot("th");
					} else if (j==6) {
						theParent.setDot("au");
					} else if (j==7) {
						theParent.setDot("cr");
					} else if (j==8) {
						theParent.setDot("ec");
					} else if (j==9) {
						theParent.setDot("ee");
					} else if (j==10) {
						theParent.setDot(null);
					}
				}
			}
		}

		private function framesSwitched(event:TweenEvent):void {
			if (i>3&&i<12) {
				frames[3]=frames[i];
				frames[3].alpha=1;
			} else {
				frames[3]=frames[11];
				frames[3].alpha=1;
			}
			for (var t:int =3; t<12; t++) {
				if (frames[t]!=null&&contains(frames[t])) {
					removeChild(frames[t]);
				}
				addChild(frames[3]);
			}
			oscilate();
		}

		public function stopDestOscilation():void {
			for (var k:int=0; k< oscilateTweens.length; k++) {
				oscilateTweens[k].stop();
			}
			for (var l:int=3; l<frames.length; l++) {
				if (frames[l] != null && contains(frames[l])) {
					removeChild(frames[l]);
				}
			}
			addChild(frames[3]);
			theParent.setDot(null);
			new Tween(frames[3],"alpha",None.easeIn,frames[3].alpha,1,12);
		}
		
		public function closeByPrograms():void {
			removeChild(frames[1]);
			removeChild(frames[2]);
			removeChild(frames[3]);
			addChild(frames[0]);
			addChild(frames[1]);
			addChild(frames[2]);
			addChild(frames[3]);
		}
	}
}