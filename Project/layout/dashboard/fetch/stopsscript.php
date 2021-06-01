

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




<script>
$(document).ready(function(){

 load_stp();

 function load_stp(query)
 {
     $.ajax({
                url:'stopssearch.php',
                type:"POST",
                data:{
                    'sp':query,
                },
   success:function(data)
   {
    $('#stopsresult').html(data);
   }
  });
 }
 
 $('#stopssearch_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_stp(search);
  }
  else
  {
   load_stp();
  }
 });
});
</script>
