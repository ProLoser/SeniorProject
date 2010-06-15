package flash.teasermapflashapp{

	import flash.display.*;
	import fl.transitions.*;
	import fl.transitions.easing.*;
	import flash.events.*;
	import flash.net.*;

	public class GalleryModel extends MovieClip {

		private var imageIndex:int;
		private var frames:Array;
		private var loader:Loader;
		private var loadingSymbol:MovieClip;
		private var tweens:Array;
		private var i:int;
		private var filler:Bitmap;
		private var theParent:Controller;
		private var destSliderView:DestSliderView;
		private var progSliderView:ProgSliderView;
		private var advSliderView:AdvSliderView;
		private var volSliderView:VolSliderView;
		private var closeTween:Tween;
		private var timerTween:Tween;
		private var oscilate:Boolean;

		public function GalleryModel(aParent:Controller):void {
			imageIndex=0;
			frames = new Array();
			tweens = new Array();
			loader = new Loader();
			theParent=aParent;
			oscilate=true;
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
				frames[0].buttonMode=true;
				frames[0].addEventListener(MouseEvent.CLICK, clickByProgram);
				frames[1].buttonMode=true;
				frames[1].addEventListener(MouseEvent.CLICK, clickByAdventure);
				frames[2].buttonMode=true;
				frames[2].addEventListener(MouseEvent.CLICK, clickByVolunteer);
				frames[3].buttonMode=true;
				frames[3].addEventListener(MouseEvent.CLICK, clickByDestination);
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
				/*loader.load(new URLRequest("flash/teasermapflashapp/images/close.gif"));
			} else if (i==1) {
				closingButton = new Sprite();
				closingButton.addChild(loader.content);
				closingButton.buttonMode=true;*/
				continue01();
			}
		}

		private function continue01():void {
			i=0;
			frames[0].setText("ISV Programs combine meaningful volunteering with action-packed adventure tours. Come meet new people, discover new places and travel with a purpose!");
			frames[1].setText("ISV Volunteers provide urgent care for communities and habitats around the world while being taken care of every step along the way, both here and abroad.");
			frames[2].setText("ISV Adventures pack more excitement in two weeks than most people experience in a lifetime! Explore the many wonders that every destination has to offer!");
			frames[3].setText("ISV Destinations span six continents and include Australia, Costa Rica, Dominican Republic, Eastern Europe, Ecuador, New Zealand, South Africa and Thailand.");
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
				frames[i].addEventListener(MouseEvent.MOUSE_OUT, mouseOutFrame);
				i++;
			}
			oscilateGallery();
		}

		///////////////////Finished Loading////////////////////////////

		private function mouseOverFrame(event:MouseEvent):void {
			stopOscilating();
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
		}

		private function mouseOutFrame(event:MouseEvent):void {
			oscilateGallery();
		}

		private function clickByProgram(event:MouseEvent):void {
			toggleGallery();
			setImageIndex(0);
			theParent.setImageIndex(0);
			theParent.setState("Program");
			if (progSliderView!=null) {
				if (contains(progSliderView)) {
					removeChild(progSliderView);
				}
				addChild(progSliderView);
				progSliderView.oscilate();
			} else {
				progSliderView=new ProgSliderView(this);
				progSliderView.startLoading();
				addChild(progSliderView);
			}
			theParent.toggleCloseButton();
		}
		private function clickByAdventure(event:MouseEvent):void {
			toggleGallery();
			setImageIndex(1);
			theParent.setImageIndex(1);
			theParent.setState("Adventure");
			if (advSliderView!=null) {
				if (contains(advSliderView)) {
					removeChild(advSliderView);
				}
				addChild(advSliderView);
				advSliderView.oscilate();
			} else {
				advSliderView=new AdvSliderView(this);
				advSliderView.startLoading();
				addChild(advSliderView);
			}
			theParent.toggleCloseButton();
		}
		private function clickByVolunteer(event:MouseEvent):void {
			toggleGallery();
			setImageIndex(2);
			theParent.setImageIndex(2);
			theParent.setState("Volunteer");
			if (volSliderView!=null) {
				if (contains(volSliderView)) {
					removeChild(volSliderView);
				}
				addChild(volSliderView);
				volSliderView.oscilate();
			} else {
				volSliderView=new VolSliderView(this);
				volSliderView.startLoading();
				addChild(volSliderView);
			}
			theParent.toggleCloseButton();
		}
		private function clickByDestination(event:MouseEvent):void {
			toggleGallery();
			setImageIndex(3);
			theParent.setImageIndex(3);
			theParent.setState("Map");
			if (destSliderView!=null) {
				if (contains(destSliderView)) {
					removeChild(destSliderView);
				}
				addChild(destSliderView);
				destSliderView.oscilate();
			} else {
				destSliderView=new DestSliderView(this);
				destSliderView.startLoading();
				addChild(destSliderView);
			}
			theParent.toggleCloseButton();
		}

		public function setImageIndex(newIndex:int):void {
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

		public function oscilateGallery():void {
			oscilate=true;
			timerTween=new Tween(filler,"alpha",None.easeIn,1,.99,120);
			timerTween.addEventListener(TweenEvent.MOTION_FINISH,loopOscilate);
			timerTween.start();
		}

		private function loopOscilate(event:TweenEvent):void {
			if (oscilate) {
				if (imageIndex!=3) {
					setImageIndex(imageIndex+1);
					theParent.setImageIndex(imageIndex+1);
				} else {
					setImageIndex(0);
					theParent.setImageIndex(0);
				}
				oscilateGallery();
			}
		}

		public function stopOscilating():void {
			oscilate=false;
			if (timerTween!=null&&timerTween.isPlaying) {
				timerTween.stop();
			}
		}

		public function toggleGallery() {
			if (frames[0].hasEventListener(MouseEvent.MOUSE_OVER)) {
				stopOscilating();
				frames[0].removeEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				frames[1].removeEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				frames[2].removeEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				frames[3].removeEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				frames[0].removeEventListener(MouseEvent.MOUSE_OUT, mouseOutFrame);
				frames[1].removeEventListener(MouseEvent.MOUSE_OUT, mouseOutFrame);
				frames[2].removeEventListener(MouseEvent.MOUSE_OUT, mouseOutFrame);
				frames[3].removeEventListener(MouseEvent.MOUSE_OUT, mouseOutFrame);
				frames[0].removeEventListener(MouseEvent.CLICK, clickByProgram);
				frames[1].removeEventListener(MouseEvent.CLICK, clickByAdventure);
				frames[2].removeEventListener(MouseEvent.CLICK, clickByVolunteer);
				frames[3].removeEventListener(MouseEvent.CLICK, clickByDestination);
				frames[0].buttonMode=false;
				frames[1].buttonMode=false;
				frames[2].buttonMode=false;
				frames[3].buttonMode=false;
			} else {
				frames[0].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				frames[1].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				frames[2].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				frames[3].addEventListener(MouseEvent.MOUSE_OVER, mouseOverFrame);
				frames[0].addEventListener(MouseEvent.MOUSE_OUT, mouseOutFrame);
				frames[1].addEventListener(MouseEvent.MOUSE_OUT, mouseOutFrame);
				frames[2].addEventListener(MouseEvent.MOUSE_OUT, mouseOutFrame);
				frames[3].addEventListener(MouseEvent.MOUSE_OUT, mouseOutFrame);
				frames[0].addEventListener(MouseEvent.CLICK, clickByProgram);
				frames[1].addEventListener(MouseEvent.CLICK, clickByAdventure);
				frames[2].addEventListener(MouseEvent.CLICK, clickByVolunteer);
				frames[3].addEventListener(MouseEvent.CLICK, clickByDestination);
				frames[0].buttonMode=true;
				frames[1].buttonMode=true;
				frames[2].buttonMode=true;
				frames[3].buttonMode=true;
				oscilateGallery();
			}
		}

		public function setDot(destination:String):void {
			theParent.setDot(destination);
		}

		public function setProgram(program:int):void {
			theParent.setProgram(program);
		}

		public function setAdventure(adventure:int):void {
			theParent.setAdventure(adventure);
		}

		public function setVol(vol:int):void {
			theParent.setVol(vol);
		}

		public function stopOpenOscilation():void {
			if (imageIndex==3) {
				destSliderView.stopOscilation();
				removeChild(destSliderView);
			} else if (imageIndex == 0) {
				progSliderView.stopOscilation();
				removeChild(progSliderView);
			} else if (imageIndex == 1) {
				advSliderView.stopOscilation();
				removeChild(advSliderView);
			} else if (imageIndex == 2) {
				volSliderView.stopOscilation();
				removeChild(volSliderView);
			}
		}
		
		public function pausePlayOscilation(playState:String):void {
			if (imageIndex == 0) {
				progSliderView.pausePlayOscilation(playState);
			} else if (imageIndex==1) {
				advSliderView.pausePlayOscilation(playState);
			} else if (imageIndex==2) {
				volSliderView.pausePlayOscilation(playState);
			} else if (imageIndex ==3) {
				destSliderView.pausePlayOscilation(playState);
			}
		}
		public function setOpenSlider(index:int):void {
			if (imageIndex==0) {
				progSliderView.setProgSlider(index);
			} else if (imageIndex==1) {
				advSliderView.setAdvSlider(index);
			} else if (imageIndex==2) {
				volSliderView.setVolSlider(index);
			} else if (imageIndex==3) {
				destSliderView.setDestSlider(index);
			}
		}
	}
}