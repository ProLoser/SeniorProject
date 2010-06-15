package flash.teasermapflashapp{

	import flash.display.*;
	import fl.transitions.*;
	import fl.transitions.easing.*;
	import flash.events.*;
	import flash.net.*;

	public class ProgSliderView extends MovieClip {

		private var loader:Loader;
		private var oscilateTweens:Array;
		private var frames:Array;
		private var theParent:GalleryModel;
		private var i:int;
		private var something:Bitmap;
		private var frameTweens:Array;
		private var allowed:Boolean;

		public function ProgSliderView(aParent:GalleryModel):void {
			theParent=aParent;
			loader = new Loader();
			oscilateTweens = new Array();
			frames = new Array();
			something=new Bitmap(new BitmapData(1,1,true,0xFFFFFF));
			something.x=-1;
			addChild(something);
			i=0;
			frameTweens = new Array();
			allowed=true;
		}

		public function startLoading():void {
			loader.contentLoaderInfo.addEventListener(Event.COMPLETE,continueLoading);
			loader.load(new URLRequest("flash/teasermapflashapp/images/flipflops.jpg"));
		}

		private function continueLoading(event:Event) {
			if (i==0) {
				frames[0]=new Frame(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/monkeythought.jpg"));
			} else if (i==1) {
				frames[1]=new Frame(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/piggybackboy.jpg"));
			} else if (i==2) {
				frames[2]=new Frame(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/waterfallgroup.jpg"));
			} else if (i==3) {
				frames[3]=new Frame(loader.content);
				oscilate();
			}
		}

		public function oscilate():void {
			if (oscilateTweens[0]!=null) {
				oscilateTweens[0].stop();
			}
			oscilateTweens[0]=new Tween(something,"alpha",None.easeIn,0,.01,72);
			oscilateTweens[0].addEventListener(TweenEvent.MOTION_FINISH, switchFrames);
			oscilateTweens[0].start();
		}

		private function switchFrames(event:TweenEvent):void {
			if (allowed) {
				if (i!=3) {
					frames[i+1].alpha=0;
					addChild(frames[i+1]);
					if (i!=-1) {
						oscilateTweens[0]=new Tween(frames[i],"alpha",None.easeIn,1,0,24);
					}
					oscilateTweens[1]=new Tween(frames[i+1],"alpha",None.easeIn,0,1,24);
					oscilateTweens[1].addEventListener(TweenEvent.MOTION_FINISH,framesSwitched);
					i++;
					//Set Program Here
					theParent.setProgram(i);
				} else {
					oscilateTweens[0]=new Tween(frames[i],"alpha",None.easeIn,1,0,24);
					oscilateTweens[0].addEventListener(TweenEvent.MOTION_FINISH,framesSwitched);
					i=-1;
					theParent.setProgram(-1);
				}
			}
		}

		private function framesSwitched(event:TweenEvent):void {
			if (allowed) {
				if (i!=-1) {
					frames[i].alpha=1;
				}
				for (var j:int=0; j<frames.length; j++) {
					if (i!=j&&contains(frames[j])) {
						removeChild(frames[j]);
					}
				}
				oscilate();
			}
		}

		public function stopOscilation():void {
			theParent.setProgram(-1);
			for (var k:int=0; k< oscilateTweens.length; k++) {
				oscilateTweens[k].stop();
			}
			for (var j:int=0; j<frames.length; j++) {
				if (contains(frames[j])) {
					removeChild(frames[j]);
				}
			}
			i=-1;
		}

		public function pausePlayOscilation(playState:String):void {
			if (playState=="pause") {
				allowed=false;
				if (oscilateTweens[0]!=null&&oscilateTweens[0].isPlaying) {
					oscilateTweens[0].stop();
				}
				if (oscilateTweens[1]!=null&&oscilateTweens[1].isPlaying) {
					oscilateTweens[1].stop();
				}
			} else {
				allowed=true;
				oscilate();
			}
		}
		
		public function setProgSlider(newIndex:int):void {
			frames[newIndex].alpha=0;
			addChild(frames[newIndex]);
			if (i!=-1) {
				frameTweens[0]=new Tween(frames[i],"alpha",None.easeIn,1,0,24);
			}
			frameTweens[1]=new Tween(frames[newIndex],"alpha",None.easeIn,0,1,24);
			frameTweens[1].addEventListener(TweenEvent.MOTION_FINISH,setFramesSwitched);
			i=newIndex;
		}

		private function setFramesSwitched(event:TweenEvent):void {
			if (i!=-1) {
				frames[i].alpha=1;
			}
			for (var j:int=0; j<frames.length; j++) {
				if (i!=j&&contains(frames[j])) {
					removeChild(frames[j]);
				}
			}
		}
	}
}