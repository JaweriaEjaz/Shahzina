

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




<script>
$(document).ready(function(){

 load_bu();

 function load_bu(query)
 {
     $.ajax({
                url:'bussearch.php',
                type:"POST",
                data:{
                    'b':query,
                },
   success:function(data)
   {
    $('#busresult').html(data);
   }
  });
 }
 
 $('#bussearch_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_bu(search);
  }
  else
  {
   load_bu();
  }
 });
});
</script>
