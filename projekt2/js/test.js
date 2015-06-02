$(document).ready(function(){
    //alert('ff');
    $(document).on('click', '.test', function(){
	
	$('.square').toggle(//function(){
	    //$('.test').css({width:'200px'})
	);
    });
   
    $(document).on('mouseover', '.square', function(){
	$('.dupa').css({'background-color':'blue'});
    });
    
    $(document).on('mouseout', '.square', function(){
	$('.dupa').css({'background-color':'green'});   
    });  
});
