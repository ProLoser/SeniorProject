package flash.teasermapflashapp {
	
	import flash.display.*;
	
	public class Controller {
		
		private var main:Main;
		private var mapView:MapView;
		private var galleryView:GalleryView;
		private var bigMapView:BigMapView;
		
		public function Controller(theMain:Main):void {
			main=theMain;
			galleryView = new GalleryView(this);
			main.addView(galleryView);
			galleryView.startLoading();
			mapView = new MapView(this);
			main.addView(mapView);
			mapView.startLoading();
		}
		
		public function loadMap(type:String):void {
			galleryView.toggleGallery();
			mapView.toggleMap();
			if (type == "byMap") {
				galleryView.setImageIndex(3);
				bigMapView = new BigMapView(this);
				main.addView(bigMapView);
				bigMapView.startLoading();
				
			} else if (type == "byProgram") {
				galleryView.setImageIndex(0);
				galleryView.setupByProgram(mapView);
				
			}
		}
		
		public function closeMap():void {
			main.removeView(bigMapView);
			galleryView.toggleGallery();
			mapView.toggleMap();
		}
		
		public function setDot(region:String):void {
			mapView.setDot(region);
		}
		
		public function closeByPrograms():void {
			galleryView.closeByPrograms();
			mapView.toggleMap();
			galleryView.toggleGallery();
		}
	}
}