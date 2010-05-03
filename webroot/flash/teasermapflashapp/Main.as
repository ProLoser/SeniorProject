package flash.teasermapflashapp {
	import flash.display.*;
	
	public class Main extends MovieClip {
		
		private var views:Array;
		
		public function Main():void {
			views = new Array();
			new Controller(this);
		}
		
		public function addView(view:DisplayObject):void {
			addChild(view);
			views[views.length]=view;
		}
		
		public function removeView(view:DisplayObject):void {
			if (view != null && views.indexOf(view) != -1) {
				removeChild(view);
				views[views.indexOf(view)] = null;
			}
		}
		
		public function hasView(view:DisplayObject):int {
			var returnValue:int = -1;
			if (view != null) {
				returnValue = views.indexOf(view);
			}
			return returnValue;
		}
		
	}
}