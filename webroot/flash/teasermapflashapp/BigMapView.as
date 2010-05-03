package flash.teasermapflashapp {
	
	import flash.display.*;
	import flash.events.*;
	import flash.net.*;
	import fl.transitions.*;
	import fl.transitions.easing.None;
	import fl.controls.Button;
	import flash.text.*;
	
	public class BigMapView extends MovieClip {
		
		private var selectedRegion:String;
		private var bigMap:MovieClip;
		private var loader:Loader;
		private var closingButton:Sprite;
		private var theParent:Controller;
		private var tweens:Array;
		private var africa:Africa;
		private var asia:Asia;
		private var australia:Australia;
		private var carribean:Carribean;
		private var centralAmerica:CentralAmerica;
		private var ecuador:Ecuador;
		private var europe:Europe;
		private var newZealand:NewZealand;
		private var regionTweens:Array;
		private var buttons:Array;
		private var blankMap:Sprite;
		private var i:int;
		private var regionTitle:TextField;
		private var regionCaption:TextField;
		
		public function BigMapView(aParent:Controller):void {
			theParent=aParent;
			bigMap=new MovieClip();
			loader = new Loader();
			closingButton = new Sprite();
			tweens = new Array();
			regionTweens = new Array();
			buttons = new Array();
			blankMap = new Sprite();
			buttons = new Array();
			i=0;
		}
		
		public function startLoading():void {
			loader.contentLoaderInfo.addEventListener(Event.COMPLETE, continue01);
			loader.load(new URLRequest("flash/teasermapflashapp/images/bigmap2.jpg"));
		}
		
		private function continue01(event:Event):void {
			bigMap.addChild(loader.content);
			loader.contentLoaderInfo.removeEventListener(Event.COMPLETE, continue01);
			loader.contentLoaderInfo.addEventListener(Event.COMPLETE, continue02);
			loader.load(new URLRequest("flash/teasermapflashapp/images/close.gif"));
		}
		
		private function continue02(event:Event):void {
			closingButton.addChild(loader.content);
			loader.contentLoaderInfo.removeEventListener(Event.COMPLETE, continue02);
			loader.contentLoaderInfo.addEventListener(Event.COMPLETE, continue03);
			loader.load(new URLRequest("flash/teasermapflashapp/images/blankmap2.jpg"));
		}
		
		private function continue03(event:Event):void {
			if (i==0) {
				blankMap.addChild(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/mapbuttons/au.gif"));
			} else if (i==1) {
				buttons[0] = new Sprite();
				buttons[0].addChild(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/mapbuttons/nz.gif"));
			} else if (i==2) {
				buttons[1] = new Sprite();
				buttons[1].addChild(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/mapbuttons/ee.gif"));
			} else if (i==3) {
				buttons[2] = new Sprite();
				buttons[2].addChild(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/mapbuttons/ec.gif"));
			} else if (i==4) {
				buttons[3] = new Sprite();
				buttons[3].addChild(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/mapbuttons/cr.gif"));
			} else if (i==5) {
				buttons[4] = new Sprite();
				buttons[4].addChild(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/mapbuttons/dr.gif"));
			} else if (i==6) {
				buttons[5] = new Sprite();
				buttons[5].addChild(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/mapbuttons/th.gif"));
			} else if (i==7) {
				buttons[6] = new Sprite();
				buttons[6].addChild(loader.content);
				i++;
				loader.load(new URLRequest("flash/teasermapflashapp/images/mapbuttons/sa.gif"));
			} else if (i==8) {
				buttons[7] = new Sprite();
				buttons[7].addChild(loader.content);
				continue04();
			}
		}
		
		private function continue04():void {
			
			bigMap.x=172;
			bigMap.alpha=0;
			tweens[0] = new Tween(bigMap,"alpha",None.easeIn,0,1,24);
			tweens[0].start();
			addChild(bigMap);
			
			closingButton.x=172;
			closingButton.buttonMode=true;
			tweens[1] = new Tween(closingButton,"alpha",None.easeIn,0,1,24);
			tweens[1].start();
			closingButton.addEventListener(MouseEvent.CLICK,clickClose);
			addChild(closingButton);
			
			africa=new Africa();
			africa.x=385;
			africa.y=101;
			africa.alpha=0;
			africa.buttonMode=true;
			africa.addEventListener(MouseEvent.MOUSE_OVER,overRegion);
			africa.addEventListener(MouseEvent.MOUSE_OUT,outRegion);
			addChild(africa);
			
			asia=new Asia();
			asia.x=468;
			asia.y=73;
			asia.alpha=0;
			asia.buttonMode=true;
			asia.addEventListener(MouseEvent.MOUSE_OVER,overRegion);
			asia.addEventListener(MouseEvent.MOUSE_OUT,outRegion);
			addChild(asia);
			
			ecuador=new Ecuador();
			ecuador.x=281;
			ecuador.y=141;
			ecuador.alpha=0;
			ecuador.buttonMode=true;
			ecuador.addEventListener(MouseEvent.MOUSE_OVER,overRegion);
			ecuador.addEventListener(MouseEvent.MOUSE_OUT,outRegion);
			addChild(ecuador);
			
			centralAmerica = new CentralAmerica();
			centralAmerica.x=282;
			centralAmerica.y=131;
			centralAmerica.alpha=0;
			centralAmerica.buttonMode=true;
			centralAmerica.addEventListener(MouseEvent.MOUSE_OVER,overRegion);
			centralAmerica.addEventListener(MouseEvent.MOUSE_OUT,outRegion);
			addChild(centralAmerica);
			
			carribean=new Carribean();
			carribean.x=302;
			carribean.y=129;
			carribean.alpha=0;
			carribean.buttonMode=true;
			carribean.addEventListener(MouseEvent.MOUSE_OVER,overRegion);
			carribean.addEventListener(MouseEvent.MOUSE_OUT,outRegion);
			addChild(carribean);
			
			europe = new Europe();
			europe.x=398;
			europe.y=51;
			europe.alpha=0;
			europe.buttonMode=true;
			europe.addEventListener(MouseEvent.MOUSE_OVER,overRegion);
			europe.addEventListener(MouseEvent.MOUSE_OUT,outRegion);
			addChild(europe);
			
			australia = new Australia();
			australia.x=562;
			australia.y=163;
			australia.alpha=0;
			australia.buttonMode=true;
			australia.addEventListener(MouseEvent.MOUSE_OVER,overRegion);
			australia.addEventListener(MouseEvent.MOUSE_OUT,outRegion);
			addChild(australia);
			
			newZealand = new NewZealand();
			newZealand.x=618;
			newZealand.y=215;
			newZealand.alpha=0;
			newZealand.buttonMode=true;
			newZealand.addEventListener(MouseEvent.MOUSE_OVER,overRegion);
			newZealand.addEventListener(MouseEvent.MOUSE_OUT,outRegion);
			addChild(newZealand);
			
			blankMap.x=676;
			addChild(blankMap);
			new Tween(blankMap,"alpha",None.easeIn,0,1,12);
			
			buttons[0].x=680;
			buttons[0].y=55;
			buttons[0].buttonMode=true;
			buttons[0].addEventListener(MouseEvent.MOUSE_OVER,mouseOverButton);
			buttons[0].addEventListener(MouseEvent.MOUSE_OUT,mouseOutButton);
			addChild(buttons[0]);
			
			buttons[1].x=680;
			buttons[1].y=85;
			buttons[1].buttonMode=true;
			buttons[1].addEventListener(MouseEvent.MOUSE_OVER,mouseOverButton);
			buttons[1].addEventListener(MouseEvent.MOUSE_OUT,mouseOutButton);
			addChild(buttons[1]);
			
			buttons[2].x=810;
			buttons[2].y=55;
			buttons[2].buttonMode=true;
			buttons[2].addEventListener(MouseEvent.MOUSE_OVER,mouseOverButton);
			buttons[2].addEventListener(MouseEvent.MOUSE_OUT,mouseOutButton);
			addChild(buttons[2]);
			
			buttons[3].x=810;
			buttons[3].y=85;
			buttons[3].buttonMode=true;
			buttons[3].addEventListener(MouseEvent.MOUSE_OVER,mouseOverButton);
			buttons[3].addEventListener(MouseEvent.MOUSE_OUT,mouseOutButton);
			addChild(buttons[3]);
			
			buttons[4].x=680;
			buttons[4].y=115;
			buttons[4].buttonMode=true;
			buttons[4].addEventListener(MouseEvent.MOUSE_OVER,mouseOverButton);
			buttons[4].addEventListener(MouseEvent.MOUSE_OUT,mouseOutButton);
			addChild(buttons[4]);
			
			buttons[5].x=810;
			buttons[5].y=115;
			buttons[5].buttonMode=true;
			buttons[5].addEventListener(MouseEvent.MOUSE_OVER,mouseOverButton);
			buttons[5].addEventListener(MouseEvent.MOUSE_OUT,mouseOutButton);
			addChild(buttons[5]);
			
			buttons[6].x=680;
			buttons[6].y=145;
			buttons[6].buttonMode=true;
			buttons[6].addEventListener(MouseEvent.MOUSE_OVER,mouseOverButton);
			buttons[6].addEventListener(MouseEvent.MOUSE_OUT,mouseOutButton);
			addChild(buttons[6]);
			
			buttons[7].x=810;
			buttons[7].y=145;
			buttons[7].buttonMode=true;
			buttons[7].addEventListener(MouseEvent.MOUSE_OVER,mouseOverButton);
			buttons[7].addEventListener(MouseEvent.MOUSE_OUT,mouseOutButton);
			addChild(buttons[7]);
			
			regionTitle = new TextField();
			var tf:TextFormat = new TextFormat("Myriad Pro",17,0x003366,true);
			tf.align=TextFormatAlign.CENTER;
			regionTitle.defaultTextFormat=tf;
			regionTitle.x=708;
			regionTitle.y=235;
			regionTitle.height=30;
			regionTitle.width=200;
			regionTitle.text="";
			addChild(regionTitle);
			
			regionCaption = new TextField();
			var tf2:TextFormat = new TextFormat("Myriad Pro",11,0xFFFFFF);
			tf2.align=TextFormatAlign.CENTER;
			regionCaption.defaultTextFormat=tf2;
			regionCaption.x=708;
			regionCaption.y=270;
			regionCaption.height=30;
			regionCaption.width=200;
			regionTitle.text="";
			addChild(regionCaption);
		}
		
		private function mouseOverButton(event:MouseEvent):void {
			if (event.target==buttons[0]) {
				regionTitle.text="Australia";
				regionCaption.text="See all adventures in Australia";
				fadeInRegion(australia);
			} else if (event.target==buttons[1]) {
				regionTitle.text="New Zealand";
				regionCaption.text="See all adventures in New Zealand";
				fadeInRegion(newZealand);
			} else if (event.target==buttons[2]) {
				regionTitle.text="Eastern Europe";
				regionCaption.text="See all adventures in Eastern Europe";
				fadeInRegion(europe);
			} else if (event.target==buttons[3]) {
				regionTitle.text="Ecuador";
				regionCaption.text="See all adventures in Ecuador";
				fadeInRegion(ecuador);
			} else if (event.target==buttons[4]) {
				regionTitle.text="Costa Rica";
				regionCaption.text="See all adventures in Costa Rica";
				fadeInRegion(centralAmerica);
			} else if (event.target==buttons[5]) {
				regionTitle.text="Dominican Republic";
				regionCaption.text="See all adventures in the Dominican Rep.";
				fadeInRegion(carribean);
			} else if (event.target==buttons[6]) {
				regionTitle.text="Thailand";
				regionCaption.text="See all adventures in Thailand";
				fadeInRegion(asia);
			} else if (event.target==buttons[7]) {
				regionTitle.text="South Africa";
				regionCaption.text="See all adventures in South Africa";
				fadeInRegion(africa);
			}
		}
		
		private function mouseOutButton(event:MouseEvent):void {
			regionTitle.text="";
			regionCaption.text="";
			fadeOutRegions(null);
		}
		
		private function overRegion(event:MouseEvent):void {
			fadeInRegion(event.currentTarget);
		}
		
		private function fadeInRegion(obj:Object):void {
			for (var i:int = 0;i<regionTweens.length;i++) {
				regionTweens[i].stop();
			}
			africa.alpha=0;
			asia.alpha=0;
			australia.alpha=0;
			carribean.alpha=0;
			centralAmerica.alpha=0;
			ecuador.alpha=0;
			europe.alpha=0;
			newZealand.alpha=0;
			regionTweens[0] = new Tween(obj,"alpha",None.easeIn,0,1,12);
			regionTweens[0].start();
		}
		
		private function fadeOutRegions(currentTarget:Object):void {
			for (var i:int = 0;i<regionTweens.length;i++) {
				regionTweens[i].stop();
			}
			if (africa != currentTarget) {
				regionTweens[1] = new Tween(africa, "alpha", None.easeIn,africa.alpha,0,12);
			} 
			if (asia != currentTarget) {
				regionTweens[2] = new Tween(asia, "alpha", None.easeIn,asia.alpha,0,12);
			}
			if (australia != currentTarget) {
				regionTweens[3] = new Tween(australia, "alpha", None.easeIn,australia.alpha,0,12);
			}
			if (carribean != currentTarget) {
				regionTweens[4] = new Tween(carribean, "alpha", None.easeIn,carribean.alpha,0,12);
			}
			if (centralAmerica != currentTarget) {
				regionTweens[5] = new Tween(centralAmerica, "alpha", None.easeIn,centralAmerica.alpha,0,12);
			}
			if (ecuador != currentTarget) {
				regionTweens[6] = new Tween(ecuador, "alpha", None.easeIn,ecuador.alpha,0,12)
			}
			if (europe != currentTarget) {
				regionTweens[7] = new Tween(europe, "alpha", None.easeIn,europe.alpha,0,12)
			}
			if (newZealand != currentTarget) {
				regionTweens[8] = new Tween(newZealand, "alpha", None.easeIn,newZealand.alpha,0,12)
			}
			for (var j:int=1; j<regionTweens.length; j++) {
				regionTweens[j].start();
			}
		}
		
		private function outRegion(event:MouseEvent):void {
			fadeOutRegions(null);
			
		}
		
		private function clickClose(event:MouseEvent):void {
			for (var i:int = 0;i<tweens.length;i++) {
				tweens[i].stop();
			}
			tweens[0] = new Tween(this,"alpha",None.easeIn,1,0,12);
			tweens[0].addEventListener(TweenEvent.MOTION_FINISH,fadeOut);
			tweens[0].start();
		}
		
		private function fadeOut(event:TweenEvent):void {
			theParent.closeMap();
		}
	}
}