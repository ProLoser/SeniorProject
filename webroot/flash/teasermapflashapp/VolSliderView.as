package flash.teasermapflashapp{

	import flash.display.*;
	import fl.transitions.*;
	import fl.transitions.easing.*;
	import flash.events.*;
	import flash.net.*;

	public class VolSliderView extends MovieClip {

		private var loader:Loader;
		private var oscilateTweens:Array;
		private var frames:Array;
		private var theParent:GalleryModel;
		private var i:int;
		private var something:Bitmap;
		private var frameTweens:Array;
		private var allowed:Boolean;

		public function VolSliderView(aParent:GalleryModel):void {
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
			startLoading();
		}

		public function startLoading():void {
			loader.contentLoaderInfo.addEventListener(Event.COMPLETE,continueLoading);
			loader.load(new URLRequest("flash/teasermapflashapp/images/Volunteerimages6.jpg"));
		}

		private function continueLoading(event:Event) {
			if (i==0) {
				frames[0]=new Frame(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/Volunteerimages5.jpg"));
			} else if (i==1) {
				frames[1]=new Frame(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/Volunteerimages7.jpg"));
			} else if (i==2) {
				frames[2]=new Frame(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/Volunteerimages1.jpg"));
			} else if (i==3) {
				frames[3]=new Frame(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/Volunteerimages2.jpg"));
			} else if (i==4) {
				frames[4]=new Frame(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/Volunteerimages4.jpg"));
			} else if (i==5) {
				frames[5]=new Frame(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/Volunteerimages3.jpg"));
			} else if (i==6) {
				frames[6]=new Frame(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/Volunteerimages8.jpg"));
			} else if (i==7) {
				frames[7]=new Frame(loader.content);
				i=-1;
				for (var j:int=0; j<frames.length; j++) {
					frames[j].x=86;
				}
				//6=AU
				//5=CR
				//7=DR
				//1=EC
				//2=EE
				//4=NZ
				//3=SA
				//8=TH
				frames[0].setText("Help conserve Australia's threatened ecosystems and wildlife! Projects focus on habitat restoration inside wildlife sanctuaries, scientific research and outdoor education.");
				frames[1].setText("Costa Rica is incredibly biodiverse and culturally rich. Be part of researching, monitoring endangered habitats and species or building a sustainable community environment!");
				frames[2].setText("Make a difference in the Dominican Republic. Help build sustainable communities, inspire and educate children or help rural areas preserve their natural resources.");
				frames[3].setText("In Ecuador you may be working in an organic farm, a rural community or a natural reserve; doing species monitoring or helping children learn, laugh and love.");
				frames[4].setText("Eastern Europe’s projects range from providing care and protection of Croatia’s brown bears to habitat and community restoration in Bosnia, Herzegovina and Romania");
				frames[5].setText("Some of New Zealand’s most beautiful regions need your help. Projects focus on much needed conservation efforts with local communities to preserve their many varied habitats.");
				frames[6].setText("Help South Africa by surveying and monitoring for conservation management or working with wildlife rehabilitation or assisting with community development projects");
				frames[7].setText("Help conserve Thailand's threatened wildlife and support local communities and disadvantaged children! Go much deeper than a tourist and touch a heart with your helping hand.");
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
				if (i!=7) {
					frames[i+1].alpha=0;
					addChild(frames[i+1]);
					if (i!=-1) {
						oscilateTweens[0]=new Tween(frames[i],"alpha",None.easeIn,1,0,24);
					}
					oscilateTweens[1]=new Tween(frames[i+1],"alpha",None.easeIn,0,1,24);
					oscilateTweens[1].addEventListener(TweenEvent.MOTION_FINISH,framesSwitched);
					i++;
				} else {
					oscilateTweens[0]=new Tween(frames[i],"alpha",None.easeIn,1,0,24);
					oscilateTweens[0].addEventListener(TweenEvent.MOTION_FINISH,framesSwitched);
					i=-1;
				}
				theParent.setVol(i);
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
			theParent.setVol(-1);
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

		public function setVolSlider(newIndex:int):void {
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
	}
}