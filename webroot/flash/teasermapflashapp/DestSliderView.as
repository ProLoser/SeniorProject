package flash.teasermapflashapp{

	import flash.display.*;
	import fl.transitions.*;
	import fl.transitions.easing.*;
	import flash.events.*;
	import flash.net.*;

	public class DestSliderView extends MovieClip {

		private var loader:Loader;
		private var oscilateTweens:Array;
		private var frames:Array;
		private var theParent:GalleryModel;
		private var i:int;
		private var something:Bitmap;
		private var allowed:Boolean;
		private var frameTweens:Array;

		public function DestSliderView(aParent:GalleryModel):void {
			theParent=aParent;
			loader = new Loader();
			oscilateTweens = new Array();
			frameTweens=new Array();
			frames = new Array();
			something=new Bitmap(new BitmapData(1,1,true,0xFFFFFF));
			something.x=-1;
			addChild(something);
			i=1;
			allowed=true;
		}

		public function startLoading():void {
			loader.contentLoaderInfo.addEventListener(Event.COMPLETE,continueLoading);
			loader.load(new URLRequest("flash/teasermapflashapp/images/audest.jpg"));
		}

		private function continueLoading(event:Event) {
			if (i==1) {
				frames[0]=new Frame(loader.content);
				frames[0].x=129;
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/crdest.jpg"));
			} else if (i==2) {
				frames[1]=new Frame(loader.content);
				frames[1].x=129;
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/ecdest.jpg"));
			} else if (i==3) {
				frames[2]=new Frame(loader.content);
				frames[2].x=129;
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/eedest.jpg"));
			} else if (i==4) {
				frames[3]=new Frame(loader.content);
				frames[3].x=129;
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/nzdest.jpg"));
			} else if (i==5) {
				frames[4]=new Frame(loader.content);
				frames[4].x=129;
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/sadest.jpg"));
			} else if (i==6) {
				frames[5]=new Frame(loader.content);
				frames[5].x=129;
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/thdest.jpg"));
			} else if (i==7) {
				frames[6]=new Frame(loader.content);
				frames[6].x=129;
				i=-1;
				frames[0].setText("During the Australia Adventure Tour you’ll discover the thrill of white water rafting, surfing, ocean rafting, rappelling, and snorkeling \"Down Under\"!");
				frames[1].setText("During the Costa Rica Adventure Tour you’ll discover the rainforests, volcanoes, wildlife and beaches of the exotic \"Rich Coast\"!");
				frames[2].setText("Ecuador offers you the Andes Mountains, Tropical glaciers, The Amazon, the Pacific coast, scenic rivers, cloud forests and many cultural attractions!");
				frames[3].setText("Travel through Eastern Europe from its rugged mountains where tumbling rivers give way to rolling plains scattered with medieval castles and villages.");
				frames[4].setText("New Zealand activities include both white and black water rafting, glow worm caves, geothermal wonders, glacier trekking, Kiwi nightlife and zorbing!");
				frames[5].setText("Explore South Africa’s surfing meccas, rugged coastlines, Cango Caves, treetop forest canopies, wildlife of all kinds and best of all, bungy jumping!");
				frames[6].setText("Thailand offers such rich diversity as elephant care, rock climbing, jungle treks, sea kayaking, snorkeling and even classes for cooking Thai style!");
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
				if (i!=6) {
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
				if (i==0) {
					theParent.setDot("au");
				} else if (i==1) {
					theParent.setDot("cr");
				} else if (i==2) {
					theParent.setDot("ec");
				} else if (i==3) {
					theParent.setDot("ee");
				} else if (i==4) {
					theParent.setDot("nz");
				} else if (i==5) {
					theParent.setDot("sa");
				} else if (i==6) {
					theParent.setDot("th");
				} else if (i==-1) {
					theParent.setDot(null);
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
			theParent.setDot(null);
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
				if (oscilateTweens[0] != null && oscilateTweens[0].isPlaying) {
					oscilateTweens[0].stop();
				}
				if (oscilateTweens[1] != null && oscilateTweens[1].isPlaying) {
					oscilateTweens[1].stop();
				}
			} else {
				allowed=true;
				oscilate();
			}
		}

		public function setDestSlider(newIndex:int):void {
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