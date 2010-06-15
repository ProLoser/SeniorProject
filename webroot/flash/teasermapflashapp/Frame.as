package flash.teasermapflashapp {
	
	import flash.display.*;
	import flash.text.*;
	import flash.net.*;
	import flash.events.*;
	import fl.controls.TextArea;
	
	public class Frame extends MovieClip {
		
		private var image:DisplayObject;
		private var caption:TextArea;
		
		public function Frame(anImage:DisplayObject):void {
			image = anImage;
			caption = new TextArea();
			addChild(image);
			mouseChildren=false;
			
			caption.x=83;
			caption.y=250;
			caption.height=75;
			caption.width=425;
			caption.editable=false;
			caption.setStyle("upSkin",new Bitmap(new BitmapData(425,75,true,0xFFFFFF)));
			caption.setStyle("textFormat", new TextFormat("Verdana", 11, 0xFFFFFF));
			caption.wordWrap=true;
			addChild(caption);
		}
		
		public function setText(someText:String):void {
			caption.text=someText;
		}
			
	}
}