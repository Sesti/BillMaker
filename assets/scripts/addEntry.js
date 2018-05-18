var Form = function( querySelector ){
 	var query = querySelector;
 	var element = document.querySelector( querySelector );
 	
 	this.submit = function(callback){
 	
		var formArray = new Array();
	 	var formInputs = document.querySelectorAll( '#form_add_entry input, #form_add_entry textarea' );
	 	[].forEach.call( formInputs, function(input){
	 	 	formArray.push(input.name+"="+ encodeURIComponent( input.value ));
		});
	 	
	 	console.log(formArray.join("&"));
  		var xhr = new XMLHttpRequest();
  		//xhr.addEventListener( 'load', this.complete( newXHR.responseText) );
		xhr.onreadystatechange = function (){
		 	if ( xhr.readyState > 3 && xhr.status == 200 ) {
			 	callback( xhr.responseText );
		 	}
		};
	 	xhr.open( 'POST', '../../controller/AddEntrySubmit.php' );
	 	xhr.setRequestHeader( 'Content-Type', 'application/x-www-form-urlencoded' );
	 	xhr.send( formArray.join( "&" ) );
 	}
 	
 	this.complete = function(data){
 	 	if(data.status = 200){
		 	console.log( 'returned : ' + data );
		}else if(data.status = 500){
 	 	 	console.log( 'Error' );
		}
	}
};