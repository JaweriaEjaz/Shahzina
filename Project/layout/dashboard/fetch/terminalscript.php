

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




<script>
$(document).ready(function(){

 load_ter();

 function load_ter(query)
 {
     $.ajax({
                url:'terminalsearch.php',
                type:"POST",
                data:{
                    't':query,
                },
   success:function(data)
   {
    $('#terminalresult').html(data);
   }
  });
 }
 
 $('#terminalsearch_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_ter(search);
  }
  else
  {
   load_ter();
  }
 });
});
</script>
