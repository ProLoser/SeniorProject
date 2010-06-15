package flash.teasermapflashapp {
	
	import flash.display.*;
	
	public class Controller {
		
		private var main:Main;
		private var mapView:MapView;
		private var quickSelectView:QuickSelectView;
		private var programView:ProgramView;
		private var volunteerView:VolunteerView;
		private var rightPanelModel:RightPanelModel;
		private var galleryModel:GalleryModel;
		
		public function Controller(theMain:Main):void {
			main=theMain;
			galleryModel = new GalleryModel(this);
			main.addView(galleryModel);
			galleryModel.startLoading();
			rightPanelModel = new RightPanelModel(this);
			rightPanelModel.x=676;
			main.addView(rightPanelModel);
			rightPanelModel.loadQuickSelect();
		}
		
		public function toggleCloseButton():void {
			rightPanelModel.toggleCloseButton();
		}
		
		public function setState(newState:String):void {
			rightPanelModel.setState(newState);
		}
		
		public function setDot(region:String):void {
			rightPanelModel.setDot(region);
		}
		public function setProgram(program:int):void {
			rightPanelModel.setProgram(program);
		}
		public function setAdventure(adventure:int):void {
			rightPanelModel.setAdventure(adventure);
		}
		public function setVol(vol:int):void {
			rightPanelModel.setVol(vol);
		}
		public function toggleGallery():void {
			galleryModel.toggleGallery();
		}
		public function stopOpenOscilation():void {
			galleryModel.stopOpenOscilation();
		}
		public function setImageIndex(imageIndex:int):void {
			rightPanelModel.setImageIndex(imageIndex);
		}
		public function pausePlayOscilation(playState:String):void {
			galleryModel.pausePlayOscilation(playState);
		}
		public function setOpenSlider(index:int):void {
			galleryModel.setOpenSlider(index);
		}
	}
}