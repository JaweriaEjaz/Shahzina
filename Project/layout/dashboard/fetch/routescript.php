

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




<script>
$(document).ready(function(){

 load_rou();

 function load_rou(query)
 {
     $.ajax({
                url:'routesearch.php',
                type:"POST",
                data:{
                    'r':query,
                },
   success:function(data)
   {
    $('#routeresult').html(data);
   }
  });
 }
 
 $('#routesearch_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_rou(search);
  }
  else
  {
   load_rou();
  }
 });
});
</script>
