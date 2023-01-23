<?php 
    echo  $_GET["lang"] == "en" ? $this->element('dashboard/en/footer') : $this->element('dashboard/ar/footer')  ;
?>
<!-- <script>
    $(document).ready(function() {
      if($('a').val() == "حذف"){
        alert(1);
      }
      
    })
</script> -->