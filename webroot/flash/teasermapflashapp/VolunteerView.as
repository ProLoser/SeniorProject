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
	
	public class VolunteerView extends MovieClip {
		
		private var volunteerList:List;
		private var volunteerList2:List;
		private var loader:Loader;
		private var backgroundTabs:Sprite;
		private var conservation:TextField;
		private var comDev:TextField;
		private var theParent:RightPanelModel;
		
		public function VolunteerView(aParent:RightPanelModel):void {
			loader = new Loader();
			backgroundTabs = new Sprite();
			theParent=aParent;
			startLoading();
		}
		
		public function startLoading():void {
			loader.contentLoaderInfo.addEventListener(Event.COMPLETE,mapLoaded);
			loader.load(new URLRequest("flash/teasermapflashapp/images/tabPanelJMVolunteers.jpg"));
		}

		private function mapLoaded(event:Event) {
			backgroundTabs.addChild(loader.content);
			continueBuilding();
		}

		private function continueBuilding() {
			addChild(backgroundTabs);
			
			conservation = new TextField();
			var conFormat:TextFormat = new TextFormat("Verdana",11);
			conservation.defaultTextFormat=conFormat;
			conservation.x=36;
			conservation.y=100;
			conservation.height=20;
			conservation.width=150;
			conservation.text="Conservation";
			addChild(conservation);
			
			volunteerList = new List();
			var data:XML = <items></items>;
			data.appendChild(<item label={"Australia"} id={0} />);
			data.appendChild(<item label={"Costa Rica"} id={1} />);
			data.appendChild(<item label={"Dominican R."} id={2} />);
			data.appendChild(<item label={"Ecuador"} id={3} />);
			data.appendChild(<item label={"E. Europe"} id={4} />);
			data.appendChild(<item label={"New Zealand"} id={5} />);
			data.appendChild(<item label={"S. Africa"} id={6} />);
			data.appendChild(<item label={"Thailand"} id={7} />);
			volunteerList.selectable=true;
			volunteerList.addEventListener(MouseEvent.CLICK, clickVolunteerList);
			volunteerList.addEventListener(ListEvent.ITEM_ROLL_OVER,mouseOverConservation);
			volunteerList.addEventListener(ListEvent.ITEM_ROLL_OUT,mouseOutConservation);
			var dp:DataProvider = new DataProvider(data);
			volunteerList.dataProvider=dp;
			volunteerList.width=192;
			volunteerList.height=65;
			volunteerList.x=36;
			volunteerList.y=120;
			addChild(volunteerList);
			
			comDev = new TextField();
			var comFormat:TextFormat = new TextFormat("Verdana",11);
			comDev.defaultTextFormat=comFormat;
			comDev.x=36;
			comDev.y=190;
			comDev.height=20;
			comDev.width=150;
			comDev.text="Community Development";
			addChild(comDev);
			
			volunteerList2 = new List();
			data = <items></items>;
			data.appendChild(<item label={"Costa Rica"} id={0} />);
			data.appendChild(<item label={"Dominican R."} id={1} />);
			data.appendChild(<item label={"Ecuador"} id={2} />);
			data.appendChild(<item label={"E. Europe"} id={3} />);
			data.appendChild(<item label={"New Zealand"} id={4} />);
			data.appendChild(<item label={"S. Africa"} id={5} />);
			data.appendChild(<item label={"Thailand"} id={6} />);
			volunteerList2.selectable=true;
			volunteerList2.addEventListener(MouseEvent.CLICK, clickVolunteerList2);
			volunteerList2.addEventListener(ListEvent.ITEM_ROLL_OVER,mouseOverComDev);
			volunteerList2.addEventListener(ListEvent.ITEM_ROLL_OUT,mouseOutComDev);
			dp = new DataProvider(data);
			volunteerList2.dataProvider=dp;
			volunteerList2.width=192;
			volunteerList2.height=65;
			volunteerList2.x=36;
			volunteerList2.y=210;
			addChild(volunteerList2);
		}
		
		private function clickVolunteerList(event:MouseEvent):void {
			
		}
		
		private function clickVolunteerList2(event:MouseEvent):void {
			
		}
		
		private function mouseOutConservation(event:ListEvent):void {
			theParent.pausePlayOscilation("play");
		}
		
		private function mouseOverConservation(event:ListEvent):void {
			theParent.setOpenSlider(event.index);
			theParent.pausePlayOscilation("pause");
		}
		
		private function mouseOutComDev(event:ListEvent):void {
			theParent.pausePlayOscilation("play");
		}
		
		private function mouseOverComDev(event:ListEvent):void {
			theParent.setOpenSlider(event.index+1);
			theParent.pausePlayOscilation("pause");
		}
		
		public function setVol(vol:int):void {
			volunteerList.selectedIndex=vol;
			volunteerList.scrollToSelected();
			if (vol != 0) {
				volunteerList2.selectedIndex=vol-1;
			}
			volunteerList2.scrollToSelected();
		}
	}
}