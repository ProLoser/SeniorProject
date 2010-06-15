package flash.teasermapflashapp{
	import flash.display.*;
	import flash.net.*;
	import flash.events.*;
	import fl.transitions.*;
	import fl.transitions.easing.*;
	import fl.controls.Button;

	public class RightPanelModel extends MovieClip {

		private var mapView:MapView;
		private var volunteerView:VolunteerView;
		private var adventureView:AdventureView;
		private var quickSelectView:QuickSelectView;
		private var programView:ProgramView;
		private var loader:Loader;
		private var theState:String;
		private var theParent:Controller;
		private var i:int;
		private var quickSelectBackground:Sprite;
		private var miscTweens:Array;
		private var closingButton:Button;
		private var closeTween:Tween;
		private var allowed:Boolean;
		private var imageIndex:int;
		private var filler:Bitmap;
		private var closingTween:Tween;

		public function RightPanelModel(aParent:Controller):void {
			loader = new Loader();
			miscTweens = new Array();
			theState="QuickSelect";
			theParent=aParent;
			i=0;
			filler = new Bitmap(new BitmapData(1,1,true,0xFFFFFF));
			filler.y=-1;
			filler.alpha=0;
			addChild(filler);
			allowed=true;
		}

		public function loadQuickSelect():void {
			theState="QuickSelect";
			loader.contentLoaderInfo.addEventListener(Event.COMPLETE,loadedQuickSelect);
			loader.load(new URLRequest("flash/teasermapflashapp/images/tabPanelJMQuickselect.jpg"));
		}

		private function loadedQuickSelect(event:Event):void {
			quickSelectBackground = new Sprite();
			quickSelectBackground.addChild(loader.content);
			quickSelectView=new QuickSelectView(quickSelectBackground,this);
			addChild(quickSelectView);
			
			closingButton = new Button();
			closingButton.x=82;
			closingButton.y=280;
			closingButton.label="Close";
			closingButton.addEventListener(MouseEvent.CLICK,clickClose);
		}

		public function getState():String {
			return theState;
		}
		public function setState(newState:String):void {
			for (var k:int=0; k<miscTweens.length;k++) {
				if (miscTweens[k] != null && miscTweens[k].isPlaying) {
					miscTweens[k].stop();
				}
			}
			
			if (newState=="Program") {
				if (programView == null) {
					programView = new ProgramView(this);
				}
				programView.alpha=0;
				addChild(programView);
			} else if (newState == "Map") {
				if (mapView == null) {
					mapView=new MapView(theParent);
				}
				mapView.alpha=0;
				addChild(mapView);
			} else if (newState == "Adventure") {
				if (adventureView == null) {
					adventureView = new AdventureView(this);
				}
				adventureView.alpha=0;
				addChild(adventureView);
			} else if (newState == "Volunteer") {
				if (volunteerView == null) {
					volunteerView = new VolunteerView(this);
				}
				volunteerView.alpha=0;
				addChild(volunteerView);
			}

			if (programView!=null&&newState!="Program"&&contains(programView)) {
				miscTweens[0]=new Tween(programView,"alpha",Strong.easeInOut,programView.alpha,0,24);
			}
			if (mapView!=null&&newState!="Map"&&contains(mapView)) {
				miscTweens[1]=new Tween(mapView,"alpha",Strong.easeInOut,mapView.alpha,0,24);
			}
			if (adventureView!=null&&newState!="Adventure"&&contains(adventureView)) {
				miscTweens[2]=new Tween(adventureView,"alpha",Strong.easeInOut,adventureView.alpha,0,24);
			}
			if (volunteerView!=null&&newState!="Volunteer"&&contains(volunteerView)) {
				miscTweens[3]=new Tween(volunteerView,"alpha",Strong.easeInOut,volunteerView.alpha,0,24);
			}
			if (quickSelectView!=null&&newState!="QuickSelect"&&contains(quickSelectView)) {
				miscTweens[4]=new Tween(quickSelectView,"alpha",Strong.easeInOut,quickSelectView.alpha,0,24);
			}

			if (newState=="Map") {
				miscTweens[5]=new Tween(mapView,"alpha",Strong.easeInOut,mapView.alpha,1,24);
			} else if (newState=="Program") {
				miscTweens[5]=new Tween(programView,"alpha",Strong.easeInOut,programView.alpha,1,24);
			} else if (newState=="Adventure") {
				miscTweens[5]=new Tween(adventureView,"alpha",Strong.easeInOut,adventureView.alpha,1,24);
			} else if (newState=="Volunteer") {
				miscTweens[5]=new Tween(volunteerView,"alpha",Strong.easeInOut,volunteerView.alpha,1,24);
			} else if (newState=="QuickSelect") {
				quickSelectView.alpha=0;
				addChild(quickSelectView);
				miscTweens[5]=new Tween(quickSelectView,"alpha",Strong.easeInOut,quickSelectView.alpha,1,24);
			}
			theState=newState;
			miscTweens[5].addEventListener(TweenEvent.MOTION_FINISH,finishedTransition);
		}

		private function finishedTransition(event:TweenEvent):void {
			if (theState !="QuickSelect" && quickSelectView!=null&&contains(quickSelectView)) {
				removeChild(quickSelectView);
			}
			if (theState!="Program"&&programView != null && contains(programView)) {
				removeChild(programView);
			}
			if (theState!="Adventure"&&adventureView != null && contains(adventureView)) {
				removeChild(adventureView);
			}
			if (theState!="Volunteer"&&volunteerView !=null && contains(volunteerView)) {
				removeChild(volunteerView);
			}
			if (theState!="Map"&&mapView !=null && contains(mapView)) {
				removeChild(mapView);
			}
		}
		
		public function setDot(destination:String):void {
			mapView.setDot(destination);
		}
		
		public function setProgram(program:int):void {
			programView.setProgram(program);
		}
		
		public function setAdventure(adventure:int):void {
			adventureView.setAdventure(adventure);
		}
		
		public function setVol(vol:int):void {
			volunteerView.setVol(vol);
		}
		
		public function toggleCloseButton():void {
			allowed = false;
			if (! contains(closingButton)) {
				closingButton.addEventListener(MouseEvent.CLICK, clickClose);
				addChild(closingButton);
				closingTween = new Tween(closingButton,"alpha",None.easeIn,0,1,12);
				closingTween.start();
			} else {
				closingButton.addEventListener(MouseEvent.CLICK, clickClose);
				removeChild(closingButton);
			}
			closeTween = new Tween(filler,"alpha",None.easeIn,1,.99,24);
			closeTween.addEventListener(TweenEvent.MOTION_FINISH, enableClose);
			closeTween.start();
		}
		
		private function enableClose(event:TweenEvent):void {
			allowed = true;
		}
		
		public function setImageIndex(newImageIndex:int):void {
			imageIndex = newImageIndex;
		}

		private function clickClose(event:MouseEvent):void {
			if (allowed) {
				theParent.stopOpenOscilation();
				toggleCloseButton();
				theParent.toggleGallery();
				setState("QuickSelect");
			}
		}
		
		public function pausePlayOscilation(playState:String):void {
			theParent.pausePlayOscilation(playState);
		}
		public function setOpenSlider(index:int):void {
			theParent.setOpenSlider(index);
		}
	}
}