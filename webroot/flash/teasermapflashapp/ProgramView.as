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
	
	public class ProgramView extends MovieClip {
		
		private var loader:Loader;
		private var programList:List;
		private var backdrop:Sprite;
		private var theParent:RightPanelModel;
		
		public function ProgramView(aParent:RightPanelModel):void {
			backdrop = new Sprite();
			loader = new Loader();
			theParent=aParent;
			loader.contentLoaderInfo.addEventListener(Event.COMPLETE,continue01);
			loader.load(new URLRequest("flash/teasermapflashapp/images/tabPanelJMPrograms.jpg"));
		}
		
		private function continue01(event:Event):void {
			backdrop.addChild(loader.content);
			addChild(backdrop);
			
			programList = new List();
			var data:XML = <items></items>;
			data.appendChild(<item label={"Standard 4 Week"} id={0} />);
			data.appendChild(<item label={"50/50 2 Week"} id={1} />);
			data.appendChild(<item label={"2 Week Volunteer"} id={2} />);
			data.appendChild(<item label={"High School"} id={3} />);
			data.appendChild(<item label={"Custom Program"} id={4} />);
			data.appendChild(<item label={"Custom Group"} id={5} />);
			data.appendChild(<item label={"Academic Credit"} id={6} />);
			programList.selectable=true;
			programList.addEventListener(MouseEvent.CLICK, clickProgramList);
			programList.addEventListener(ListEvent.ITEM_ROLL_OVER,mouseOverProgram);
			programList.addEventListener(ListEvent.ITEM_ROLL_OUT,mouseOutProgram);
			var dp:DataProvider = new DataProvider(data);
			programList.dataProvider=dp;
			programList.width=192;
			programList.height=165;
			programList.x=36;
			programList.y=110;
			addChild(programList);
		}
		
		public function setProgram(program:int):void {
			programList.selectedIndex=program;
		}
		
		private function clickProgramList(event:MouseEvent):void {
			//TODO later
		}
		
		private function mouseOutProgram(event:ListEvent):void {
			theParent.pausePlayOscilation("play");
		}
		
		private function mouseOverProgram(event:ListEvent):void {
			if (event.index <=3) {
				theParent.setOpenSlider(event.index);
			}
			theParent.pausePlayOscilation("pause");
		}
	}
}