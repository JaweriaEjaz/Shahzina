

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




<script>
$(document).ready(function(){

 load_book();

 function load_book(query)
 {
     $.ajax({
                url:'bookingsearch.php',
                type:"POST",
                data:{
                    'bb':query,
                },
   success:function(data)
   {
    $('#bookingresult').html(data);
   }
  });
 }
 
 $('#bookingsearch_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_book(search);
  }
  else
  {
   load_book();
  }
 });
});
</script>
