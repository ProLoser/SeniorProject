package flash.teasermapflashapp {
	
	import flash.display.*;
	import flash.text.*;
	import flash.net.*;
	import flash.events.*;
	import fl.controls.TextArea;
	
	public class Frame extends MovieClip {
		
		private var image:DisplayObject;
		private var caption:TextArea;
		private var loader:Loader;
		private var captionBackground:Sprite;
		
		public function Frame(anImage:DisplayObject):void {
			image = anImage;
			caption = new TextArea();
			addChild(image);
			loader=new Loader();
			loader.contentLoaderInfo.addEventListener(Event.COMPLETE,completeLoad);
			loader.load(new URLRequest("flash/teasermapflashapp/images/moviebackground.jpg"));
			mouseChildren=false;
		}
		
		private function completeLoad(event:Event):void {
			captionBackground = new Sprite();
			captionBackground.alpha=.7;
			captionBackground.addChild(loader.content);
			captionBackground.x=83;
			captionBackground.y=222;
			addChild(captionBackground);
			
			caption.x=83;
			caption.y=232;
			caption.height=75;
			caption.width=425;
			caption.editable=false;
			caption.setStyle("upSkin",new Bitmap(new BitmapData(425,75,true,0xFFFFFF)));
			caption.setStyle("textFormat", new TextFormat("Verdana", 12, 0xFFFFFF));
			caption.wordWrap=true;
			addChild(caption);
		}
		
		public function setText(someText:String):void {
			caption.text=someText;
		}
			
	}
}