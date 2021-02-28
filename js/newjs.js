$(document).ready(function(){
	

	var moments= function(){
		$.ajax({
           url:"https://api.boxklip.com/api/blob",
     dataType: 'jsonp', // Notice! JSONP <-- P (lowercase)
     success:function(json){
         // do stuff with json (in this case an array)
         alert("Success");
     },
     error:function(json){
        alert("Error" + json);
   }      
});
	} ;
    moments();

})