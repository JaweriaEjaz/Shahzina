

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




<script>
$(document).ready(function(){

 load_rc();

 function load_rc(query)
 {
     $.ajax({
                url:'routecitiessearch.php',
                type:"POST",
                data:{
                    'c':query,
                },
   success:function(data)
   {
    $('#routecitiesresult').html(data);
   }
  });
 }
 
 $('#routecitiessearch_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_rc(search);
  }
  else
  {
   load_rc();
  }
 });
});
</script>
