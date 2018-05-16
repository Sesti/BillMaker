var App = function () {
 	
 	// Constructor
 	console.log( "App init : " + this );
 	viewMain = viewModel('app__view-main');
 	viewAddEntry = viewModel('app__view-add-entry');
 	currentState = viewMain;
 	
 	this.switch = function (state){
 	 	console.log('Change state to ' + state);
 	 	currentState.out();
 	  	currentState = state;
 	  	currentState.in();
	};
 	
 	this.spawn = function (state){
 		console.log('Spawning state ' + state);
	}
};

viewModel = function(querySelector){
 
 	var element = document.querySelector( querySelector );
 
 	this.out = function(){
 		element.classList.add('app__view-slideOut');
 		setTimeout(function(){
 			element.classList.add('app__view-hidden');
 			element.classList.remove('app__view-slideOut');
		},550);
 	};
 	
 	this.in = function(){
	 	element.classList.remove( 'app__view-hidden' );
 		element.classList.add('app__view-slideIn');
	};
};

