$(document).ready(function(){
  
    function animateDivers() {
	$('#animation').
	    css({position:'relative', 'background-color':'#456da1', height:'100px', width:'100px'}).
	    animate({'left':'1000'},3000).
	    animate({'left':'0px'},3000, animateDivers);

    }
    
    animateDivers();
    
    var x = $("#animation").offset().left;
    var y = $("#animation").offset().top;

    console.log('x: ' + x + ' y: ' + y);

}); 
