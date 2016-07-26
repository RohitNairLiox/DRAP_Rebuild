

<script src="<?php echo  base_url(); ?>ASSETS/bootstrap/js/bootstrap.min.js"></script>
<script> 	
/* tooltip */
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
}); 
</script>
<!-- rippler CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>ASSETS/rippler/dist/css/rippler.min.css">
<!-- rippler js -->
<script src="<?php echo base_url(); ?>ASSETS/rippler/src/js/rippler.js"></script>
<script>
    $(document).ready(function() {
        $(".rippler").rippler({
          effectClass      :  'rippler-effect'
          ,effectSize      :  16      // Default size (width & height)
          ,addElement      :  'div'   // e.g. 'svg'(feature)
          ,duration        :  400
        });
      });
</script>

</body></html>