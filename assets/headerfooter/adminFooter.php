
    <footer style="background: #e3e1e1;">
        <div style="padding: 50px;">
            <h4 style="text-align: center;">Argao Catholic Cemetery</h4>
            <p style="text-align: center;">Team Amaquin 2022</p>
            <div class="social-icons" style="background: rgba(255,255,255,0);padding: 0px;"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>


    <script>



    $(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"assets/php/fetchnotif.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.counter').html(data.unseen_notification);
    }
   }
  });
 }
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 1000);
 
});



</script>



    
</body>

</html>