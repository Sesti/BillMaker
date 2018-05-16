
var View = function( querySelector ){
 	var query = querySelector;
 	var element = document.querySelector(querySelector);
 	var transitionTime = 1000;
 	
 	this.slideOut = function() {
		element.classList.add( 'app__view-slideOut' );
		setTimeout( function (){
		 	element.classList.add( 'app__view-hidden');
		 	element.classList.remove( 'app__view-slideOut' );
		}, transitionTime );
	}
	this.slideIn = function (){
	 	element.classList.remove( 'app__view-hidden' );
	 	element.classList.add( 'app__view-slideIn');
	 	setTimeout(function(){
	 		element.classList.remove( 'app__view-slideIn' );
		}, transitionTime);
	}
	this.getQuery = function(){
 	 	return query;
	}
	this.getElement = function(){
 	 	return element;
	}
};

var Controller = function(){
 	var currentState = undefined;
 	this.spawn = function(state){
	 	currentState = state;
	 	currentState.getElement().classList.remove( 'app__view-hidden' );
	 	currentState.getElement().classList.remove( 'app__view-start' );
	}
	this.change = function(state){
 	 	currentState.slideOut();
 	 	currentState = state;
 	 	currentState.slideIn();
 	 	
	}
};
var viewMain;
var viewAddEntry;
var controller;
var choiceList;

document.addEventListener( "DOMContentLoaded", function (){
 	viewMain = new View( '.app__view-main' );
 	viewAddEntry = new View( '.app__view-add-entry' );
 	controller = new Controller();
 	controller.spawn( viewMain );
 
 	choiceList = document.querySelectorAll( '.content__choice-box' );
 	choiceList.forEach( function (choice){
  		choice.addEventListener( 'click', function ( event ){
  		
			if ( !event.currentTarget.matches( '.content__choice-box' ) ) return;
	
			self = event.currentTarget;
	
			if ( self.matches( '.content__choice-add-entry' ) ) {
	 			controller.change( viewAddEntry );
			}else if( self.matches( '.content__choice-view-start')){
			 	controller.change( viewMain );
			}
  		}, false );
 	} );
 
} );

