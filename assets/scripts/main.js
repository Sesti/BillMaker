var viewMain, viewAddEntry, viewViewData;
var controller;
var choiceList;

document.addEventListener( "DOMContentLoaded", function (){
 	viewMain = new View( '.app__view-main' );
 	viewAddEntry = new View( '.app__view-add-entry' );
 	viewViewData = new View( '.app__view-view-data');
 	viewViewData.constructor = DataFactory.requestData;
 	controller = new Controller();
  	controller.spawn( viewMain );
 
 	choiceList = document.querySelectorAll( '.content__choice-box' );
 	choiceList.forEach( function ( choice ){
  		choice.addEventListener( 'click', function ( event ){
	
		if ( !event.currentTarget.matches( '.content__choice-box' ) ) return;
	
			self = event.currentTarget;
	
			if ( self.matches( '.content__choice-add-entry' ) ) {
	 			controller.change( viewAddEntry );
			} else if ( self.matches( '.content__choice-view-start' ) ) {
	 			controller.change( viewMain );
			} else if ( self.matches( '.content__choice-view-data') ) {
				controller.change( viewViewData );
				viewViewData.constructor();
			}
  		}, false );
 	} );
 	
 	var formDOM = document.querySelector(".js__submit-add-entry");
 	formDOM.addEventListener( 'click', function( event ){
 	 	event.preventDefault();
	 	Form.setForm("#form_add_entry");
	 	Form.submit(Form.complete);
	});
 	
 
} );