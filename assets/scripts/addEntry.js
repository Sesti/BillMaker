var Form = {
 	animationTime : 2000,
 	fadeTime : 400,
 	self : this,
 	query: "",
 	element: "",
 	
 	setForm : function(querySelector){
	
	 	this.query = querySelector;
	 	this.element = document.querySelector( querySelector );
	},
 	submit : function(callback){
 	
		var formArray = new Array();
	 	var formInputs = document.querySelectorAll( '#form_add_entry input, #form_add_entry textarea' );
	 	[].forEach.call( formInputs, function(input){
	 	 	formArray.push(input.name+"="+ encodeURIComponent( input.value ));
		});
	 	
  		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function (){
		 	if ( xhr.readyState > 3 && xhr.status == 200 ) {
			 	callback( xhr.responseText );
		 	}
		};
	 	xhr.open( 'POST', '../../controller/AddEntrySubmit.php' );
	 	xhr.setRequestHeader( 'Content-Type', 'application/x-www-form-urlencoded' );
	 	xhr.send( formArray.join( "&" ) );
 	},
 	
 	complete : function(data){
	 	var response = JSON.parse( data );
	 	
 	 	if( response.status == 200){
		 	console.log( 'Success : ' + response.message );
		 	Form.showSuccess();
		 	
		}else if( response.status == 500){
 	 	 	console.log( 'Error : ' + response.message);
		}
	},
	
	showSuccess : function(){
	 var success = document.querySelector( '.form__notification-success' );
	  	success.classList.remove( 'form__notification-hidden' );
	  	setTimeout( function (){
			success.classList.add( 'form__notification-fade' );
	  	}, this.animationTime );
	  	setTimeout( function (){
			success.classList.add( 'form__notification-hidden' );
			success.classList.remove( 'form__notification-fade' );
	  	}, this.animationTime + this.fadeTime );
	}
};