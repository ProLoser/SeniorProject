package flash.teasermapflashapp {
	
	import flash.display.*;
	import flash.events.*;
	import fl.controls.*;
	import fl.data.DataProvider;
	
	public class QuickSelectView extends MovieClip {
		
		private var yearOne:RadioButton;
		private var yearTwo:RadioButton;
		private var byProgram:ComboBox;
		private var byVolunteer:ComboBox;
		private var byDestination:ComboBox;
		private var goButton:Button;
		private var quickSelectBackground:Sprite;
		private var byAdventure:MovieClip;
		private var theParent:RightPanelModel;
		
		public function QuickSelectView(theQuickSelectBackground:Sprite,aParent:RightPanelModel):void {
			theParent=aParent;
			quickSelectBackground=theQuickSelectBackground;
			addChild(quickSelectBackground);
			
			yearOne = new RadioButton();
			yearOne.selected=true;
			yearOne.x=34;
			yearOne.y=120;
			yearOne.label="2011";
			addChild(yearOne);
			
			yearTwo = new RadioButton();
			yearTwo.x=85;
			yearTwo.y=120;
			yearTwo.label="2012";
			addChild(yearTwo);
			
			byProgram = new ComboBox();
			var data:XML = <items></items>;
			data.appendChild(<item label={"(select one)"} id={0} />);
			data.appendChild(<item label={"Standard 4 Week"} id={1} />);
			data.appendChild(<item label={"50/50 2 Week"} id={2} />);
			data.appendChild(<item label={"2 Week Volunteer"} id={3} />);
			data.appendChild(<item label={"High School"} id={4} />);
			data.appendChild(<item label={"Custom Program"} id={5} />);
			data.appendChild(<item label={"Custom Group"} id={6} />);
			data.appendChild(<item label={"Academic Credit"} id={7} />);
			var dp:DataProvider = new DataProvider(data);
			byProgram.dataProvider=dp;
			byProgram.x=34;
			byProgram.y=160;
			byProgram.width=196;
			byProgram.height=20;
			addChild(byProgram);
			
			byVolunteer = new ComboBox();
			data = <items></items>;
			data.appendChild(<item label={"(select one)"} id={0} />);
			data.appendChild(<item label={"Conservation"} id={1} />);
			data.appendChild(<item label={"Community Development"} id={2} />);
			dp = new DataProvider(data);
			byVolunteer.dataProvider=dp;
			byVolunteer.x=34;
			byVolunteer.y=200;
			byVolunteer.width=196;
			byVolunteer.height=20;
			addChild(byVolunteer);
			
			byDestination = new ComboBox();
			data = <items></items>;
			data.appendChild(<item label={"(select one)"} id={0} />);
			data.appendChild(<item label={"Australia"} id={1} />);
			data.appendChild(<item label={"Costa Rica"} id={2} />);
			data.appendChild(<item label={"Dominican Republic"} id={3} />);
			data.appendChild(<item label={"Eastern Europe"} id={4} />);
			data.appendChild(<item label={"Ecuador"} id={5} />);
			data.appendChild(<item label={"New Zealand"} id={6} />);
			data.appendChild(<item label={"South Africa"} id={7} />);
			data.appendChild(<item label={"Thailand"} id={8} />);
			dp = new DataProvider(data);
			byDestination.dataProvider=dp;
			byDestination.x=34;
			byDestination.y=240;
			byDestination.width=196;
			byDestination.height=20;
			addChild(byDestination);
			
			goButton = new Button();
			goButton.label="Go!";
			goButton.x=83;
			goButton.y=270;
			goButton.addEventListener(MouseEvent.CLICK,clickGo);
			addChild(goButton);
		}
		
		private function clickGo(event:MouseEvent):void {
			if (yearOne.selected) {
				trace("2011");
			} else {
				trace("2012");
			}
			trace(byProgram.selectedLabel);
			trace(byVolunteer.selectedLabel);
			trace(byDestination.selectedLabel);
		}
	}
}