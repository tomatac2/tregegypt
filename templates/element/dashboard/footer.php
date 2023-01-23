<?php 
    echo  $_GET["lang"] == "en" ? $this->element('dashboard/en/footer') : $this->element('dashboard/ar/footer')  ;
?>
<script>
    $(document).ready(function() {
      if($('a').text() == "حذف"){
        alert($('a').text());
      }
      
    })
</script>