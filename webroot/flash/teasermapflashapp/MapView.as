package flash.teasermapflashapp{

	import flash.display.*;
	import flash.text.*;
	import flash.net.*;
	import flash.events.*;
	import fl.events.ListEvent;
	import fl.transitions.*;
	import fl.transitions.easing.*;
	import fl.controls.List;
	import fl.data.DataProvider;

	public class MapView extends MovieClip {

		private var loader:Loader;
		private var i:int;
		private var theParent:Controller;
		private var blankMap:Sprite;
		private var dot:MovieClip;
		private var regionDot:String;
		private var tweens:Array;
		private var theBlankMap:Sprite;
		private var closingButton:Sprite;
		public var regionList:List;
		private var map:Sprite;

		public function MapView(aParent:Controller):void {
			loader = new Loader();
			blankMap= new Sprite();
			map= new Sprite();
			i=0;
			theParent=aParent;
			dot = new MovieClip();
			tweens = new Array();
			dot = new MovieClip();
			dot.alpha=0;
			dot.x=800;
			dot.y=160;
			startLoading();
		}

		public function startLoading():void {
			loader.contentLoaderInfo.addEventListener(Event.COMPLETE,mapLoaded);
			loader.load(new URLRequest("flash/teasermapflashapp/images/tabPanelJMDestinations.jpg"));
		}

		private function mapLoaded(event:Event) {
			if (i==0) {
				map.addChild(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/dot.gif"));
			} else if (i==1) {
				dot.addChild(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/plainMap.gif"));
			} else if (i==2) {
				loader.content.x=22;
				blankMap.addChild(loader.content);
				continueBuilding();
			}
		}

		private function continueBuilding() {
			addChild(map);
			blankMap.x=12;
			blankMap.y=110;
			addChild(blankMap);
			addChild(dot);
			
			
			regionList = new List();
			var data:XML = <items></items>;
			data.appendChild(<item label={"Australia"} id={0} />);
			data.appendChild(<item label={"Costa Rica"} id={1} />);
			data.appendChild(<item label={"Dominican R."} id={2} />);
			data.appendChild(<item label={"Ecuador"} id={3} />);
			data.appendChild(<item label={"E. Europe"} id={4} />);
			data.appendChild(<item label={"New Zealand"} id={5} />);
			data.appendChild(<item label={"S. Africa"} id={6} />);
			data.appendChild(<item label={"Thailand"} id={7} />);
			regionList.selectable=true;
			regionList.addEventListener(MouseEvent.CLICK, clickRegionList);
			regionList.addEventListener(ListEvent.ITEM_ROLL_OVER,mouseOverRegion);
			regionList.addEventListener(ListEvent.ITEM_ROLL_OUT,mouseOutRegion);
			var dp:DataProvider = new DataProvider(data);
			regionList.dataProvider=dp;
			regionList.width=192;
			regionList.height=65;
			regionList.x=36;
			regionList.y=210;
			addChild(regionList);
		}
		
		private function mouseOutRegion(event:ListEvent):void {
			theParent.pausePlayOscilation("play");
		}
		
		private function mouseOverRegion(event:ListEvent):void {
			if (event.index <= 1) {
				theParent.setOpenSlider(event.index);
			} else {
				theParent.setOpenSlider(event.index -1);
			}
			if (event.index == 0) {
				setDot("au");
			} else if (event.index==1) {
				setDot("cr");
			} else if (event.index ==2) {
				setDot("dr");
			} else if (event.index==3) {
				setDot("ec");
			} else if (event.index==4) {
				setDot("ee");
			} else if (event.index==5) {
				setDot("nz");
			} else if (event.index==6) {
				setDot("sa");
			} else if (event.index==7) {
				setDot("th");
			} else if (event.index==-1) {
				setDot(null);
			}
			theParent.pausePlayOscilation("pause");
		}
		
		private function clickRegionList(event:MouseEvent):void {
			trace(regionList.selectedIndex);
			//Navigate to another Site
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
				tweens[1]=new Tween(dot,"x",Strong.easeInOut,dot.x,204,12);
				tweens[2]=new Tween(dot,"y",Strong.easeInOut,dot.y,165,12);
				regionList.selectedIndex=0;
			} else if (region == "nz") {
				tweens[1]=new Tween(dot,"x",Strong.easeInOut,dot.x,214,12);
				tweens[2]=new Tween(dot,"y",Strong.easeInOut,dot.y,175,12);
				regionList.selectedIndex=5;
			} else if (region == "sa") {
				tweens[1]=new Tween(dot,"x",Strong.easeInOut,dot.x,134,12);
				tweens[2]=new Tween(dot,"y",Strong.easeInOut,dot.y,160,12);
				regionList.selectedIndex=6;
			} else if (region == "th") {
				tweens[1]=new Tween(dot,"x",Strong.easeInOut,dot.x,185,12);
				tweens[2]=new Tween(dot,"y",Strong.easeInOut,dot.y,140,12);
				regionList.selectedIndex=7;
			} else if (region == "cr") {
				tweens[1]=new Tween(dot,"x",Strong.easeInOut,dot.x,76,12);
				tweens[2]=new Tween(dot,"y",Strong.easeInOut,dot.y,137,12);
				regionList.selectedIndex=1;
			} else if (region == "ec") {
				tweens[1]=new Tween(dot,"x",Strong.easeInOut,dot.x,81,12);
				tweens[2]=new Tween(dot,"y",Strong.easeInOut,dot.y,147,12);
				regionList.selectedIndex=3;
			} else if (region == "ee") {
				tweens[1]=new Tween(dot,"x",Strong.easeInOut,dot.x,134,12);
				tweens[2]=new Tween(dot,"y",Strong.easeInOut,dot.y,115,12);
				regionList.selectedIndex=4;
			} else if (region == "dr") {
				tweens[1]=new Tween(dot,"x",Strong.easeInOut,dot.x,79,12);
				tweens[2]=new Tween(dot,"y",Strong.easeInOut,dot.y,143,12);
				regionList.selectedIndex=2;
			} else if (region == null) {
				tweens[0]=new Tween(dot,"alpha",None.easeIn,dot.alpha,0,12);
				regionList.selectedIndex=-1;
			}
			regionList.scrollToSelected();
			regionDot=region;
		}
	}
}