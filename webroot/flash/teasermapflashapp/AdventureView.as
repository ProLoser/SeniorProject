package flash.teasermapflashapp {
	
	import flash.display.*;
	import flash.text.*;
	import flash.net.*;
	import flash.events.*;
	import fl.events.ListEvent;
	import fl.transitions.*;
	import fl.transitions.easing.*;
	import fl.controls.List;
	import fl.data.DataProvider;
	
	public class AdventureView extends MovieClip {
		
		private var adventureList:List;
		private var loader:Loader;
		private var backgroundTabs:Sprite;
		private var theParent:RightPanelModel;
		
		public function AdventureView(aParent:RightPanelModel):void {
			loader = new Loader();
			backgroundTabs = new Sprite();
			theParent=aParent;
			startLoading();
		}
		
		public function startLoading():void {
			loader.contentLoaderInfo.addEventListener(Event.COMPLETE,mapLoaded);
			loader.load(new URLRequest("flash/teasermapflashapp/images/tabPanelJMAdventures.jpg"));
		}

		private function mapLoaded(event:Event) {
			backgroundTabs.addChild(loader.content);
			continueBuilding();
		}

		private function continueBuilding() {
			addChild(backgroundTabs);
			
			
			adventureList = new List();
			var data:XML = <items></items>;
			data.appendChild(<item label={"Australia"} id={0} />);
			data.appendChild(<item label={"Costa Rica"} id={1} />);
			data.appendChild(<item label={"Dominican R."} id={2} />);
			data.appendChild(<item label={"Ecuador"} id={3} />);
			data.appendChild(<item label={"E. Europe"} id={4} />);
			data.appendChild(<item label={"New Zealand"} id={5} />);
			data.appendChild(<item label={"S. Africa"} id={6} />);
			data.appendChild(<item label={"Thailand"} id={7} />);
			adventureList.selectable=true;
			adventureList.addEventListener(MouseEvent.CLICK, clickAdventureList);
			adventureList.addEventListener(ListEvent.ITEM_ROLL_OVER,mouseOverAdventure);
			adventureList.addEventListener(ListEvent.ITEM_ROLL_OUT,mouseOutAdventure);
			var dp:DataProvider = new DataProvider(data);
			adventureList.dataProvider=dp;
			adventureList.width=192;
			adventureList.height=165;
			adventureList.x=36;
			adventureList.y=110;
			addChild(adventureList);
		}
		
		private function clickAdventureList(event:MouseEvent):void {
			
		}
		
		private function mouseOutAdventure(event:ListEvent):void {
			theParent.pausePlayOscilation("play");
		}
		
		private function mouseOverAdventure(event:ListEvent):void {
			theParent.setOpenSlider(event.index);
			theParent.pausePlayOscilation("pause");
		}
		
		public function setAdventure(adventure:int):void {
			adventureList.selectedIndex=adventure;
		}
	}
}