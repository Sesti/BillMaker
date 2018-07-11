
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
	this.constructor = function(){
 		console.log('No constructor implemented yet...');
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

