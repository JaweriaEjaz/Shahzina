

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




<script>
$(document).ready(function(){

 load_da();

 function load_da(query)
 {
     $.ajax({
                url:'dateviewsearch.php',
                type:"POST",
                data:{
                    'd':query,
                },
   success:function(data)
   {
    $('#dateviewresult').html(data);
   }
  });
 }
 
 $('#dateviewsearch_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_da(search);
  }
  else
  {
   load_da();
  }
 });
});
</script>
