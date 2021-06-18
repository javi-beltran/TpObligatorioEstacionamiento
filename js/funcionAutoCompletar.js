$(function(){
             
			  var patentes = [ 

			    	
			    "BBB999","gdfg222","gdfgxxxx","gdfgvvv","SSS555","GGG997","gdf777","gdf777","55555","55555","55555","1111","1111","BBBjjj","BBBjjj","88888","*****","////","////","////","////","0000","33333","33333",".0.0",".0.0","323","55500","55500","5555","5555","5555","5555","555544","45454","9898","aaaaa","ssss","9999","3333","777---","9999--","5555555","5555555","5555555","888888","7777","2222",	



			  ];


			  
			  // setup autocomplete function pulling from patentes[] array
			  $('#autocomplete').autocomplete({
			    lookup: patentes,
			    onSelect: function (suggestion) {
			      var thehtml = '<strong>patente: </strong> ' + suggestion.value + ' <br> <strong>ingreso: </strong> ' + suggestion.data;
			      $('#outputcontent').html(thehtml);
			         $('#botonIngreso').css('display','none');
      						console.log('aca llego');
			    }
			  });
			  

			});