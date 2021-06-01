

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




<script>
$(document).ready(function(){

 load_ser();

 function load_ser(query)
 {
     $.ajax({
                url:'servicesearch.php',
                type:"POST",
                data:{
                    'q':query,
                },
   success:function(data)
   {
    $('#serviceresult').html(data);
   }
  });
 }
 
 $('#servicesearch_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_ser(search);
  }
  else
  {
   load_ser();
  }
 });
});
</script>
