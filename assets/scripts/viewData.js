var DataFactory = {
	
	rows : 0,
	cols : 0,
	requestData : function(){
		
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function (){
			if ( xhr.readyState > 3 && xhr.status == 200 ) {
				DataFactory.displayData( xhr.responseText );
			}
		};
		xhr.open( 'POST', '../../controller/ViewData.php' );
		xhr.setRequestHeader( 'Content-Type', 'application/x-www-form-urlencoded' );
		xhr.send( );
	},
	displayData : function(data){
		
		var data = JSON.parse( data );
		var container = document.querySelector( '.app__view-view-data .content__container' );
		var container = this.renderTable(container);
		this.rows = 0;
		this.setHeader(data.shift(), container.querySelector('.data__table-header'));
		for(var key in data){
			this.setContent(data[key], container.querySelector( '.data__table-content' ));
			this.rows++;
		}
	},
	setContent : function(array, container){
		
		var html = '<div class="data__table-row">';
		for(var key in array){
			html += '<div>' + array[key] + '</div>';
			this.rows++;
		}
		html += '</div>';
		container.insertAdjacentHTML('beforeend',html);
	},
	setHeader : function(array, container){
		
		var html = '';
		this.cols = 0;
		for(var key in array){
			html += '<div>' + array[key] + '</div>';
			this.cols++;
		}
		container.innerHTML = html;
	},
	renderTable: function(container){
		
		var html = '<div class="data__table">' +
			'			<div class="data__table-header"></div>' +
			'			<div class="data__table-content"></div>' +
			'		</div>'
		container.innerHTML = html;
		return container.querySelector('.data__table');
	}
};