package flash.teasermapflashapp{

	import flash.display.*;
	import fl.transitions.*;
	import fl.transitions.easing.*;
	import flash.events.*;
	import flash.net.*;

	public class AdvSliderView extends MovieClip {

		private var loader:Loader;
		private var oscilateTweens:Array;
		private var frames:Array;
		private var theParent:GalleryModel;
		private var i:int;
		private var something:Bitmap;
		private var frameTweens:Array;
		private var allowed:Boolean;

		public function AdvSliderView(aParent:GalleryModel):void {
			theParent=aParent;
			loader = new Loader();
			oscilateTweens = new Array();
			frames = new Array();
			something=new Bitmap(new BitmapData(1,1,true,0xFFFFFF));
			something.x=-1;
			addChild(something);
			i=0;
			frameTweens= new Array();
			allowed=true;
		}

		public function startLoading():void {
			loader.contentLoaderInfo.addEventListener(Event.COMPLETE,continueLoading);
			loader.load(new URLRequest("flash/teasermapflashapp/images/Adventureimages7.jpg"));
		}

		private function continueLoading(event:Event) {
			if (i==0) {
				frames[0]=new Frame(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/Adventureimages1.jpg"));
			} else if (i==1) {
				frames[1]=new Frame(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/Adventureimages8.jpg"));
			} else if (i==2) {
				frames[2]=new Frame(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/Adventureimages6.jpg"));
			} else if (i==3) {
				frames[3]=new Frame(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/Adventureimages3.jpg"));
			} else if (i==4) {
				frames[4]=new Frame(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/Adventureimages5.jpg"));
			} else if (i==5) {
				frames[5]=new Frame(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/Adventureimages2.jpg"));
			} else if (i==6) {
				frames[6]=new Frame(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/Adventureimages4.jpg"));
			} else if (i==7) {
				frames[7]=new Frame(loader.content);
				i=-1;
				for (var j:int=0; j<frames.length; j++) {
					frames[j].x=43;
				}

				//7 = AU
				//1 = CR
				//8 = DR
				//6 = EE
				//3 = EC
				//5 = NZ
				//2 = SA
				//4 = TH
				frames[0].setText("During the Australia Adventure Tour you’ll discover the thrill of white water rafting, surfing, ocean rafting, rappelling, and snorkeling \"Down Under\"!");
				frames[1].setText("During the Costa Rica Adventure Tour you’ll discover the rainforests, volcanoes, wildlife and beaches of the exotic \"Rich Coast\"!");
				frames[2].setText("In the Dominican Republic, you’ll explore large limestone caves, colorful coral reefs, lush canyons and rivers, the Dominican Alps, and breathtaking beaches!");
				frames[3].setText("Ecuador offers you the Andes Mountains, Tropical glaciers, The Amazon, the Pacific coast, scenic rivers, cloud forests and many cultural attractions!");
				frames[4].setText("Travel through Eastern Europe from its rugged mountains where tumbling rivers give way to rolling plains scattered with medieval castles and villages.");
				frames[5].setText("New Zealand activities include both white and black water rafting, glow worm caves, geothermal wonders, glacier trekking, Kiwi nightlife and zorbing!");
				frames[6].setText("Explore South Africa’s surfing meccas, rugged coastlines, Cango Caves, treetop forest canopies, wildlife of all kinds and best of all, bungy jumping!");
				frames[7].setText("Thailand offers such rich diversity as elephant care, rock climbing, jungle treks, sea kayaking, snorkeling and even classes for cooking Thai style!");
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
				theParent.setAdventure(i);
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
			theParent.setAdventure(-1);
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

		public function setAdvSlider(newIndex:int):void {
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