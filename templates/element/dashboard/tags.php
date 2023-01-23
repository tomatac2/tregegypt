
<!-- <link rel="stylesheet" href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css"> -->
<link rel="stylesheet" href="<?=URL?>dashboard/dist/css/tags.css">

<style>

  .bootstrap-tagsinput >span > span{color:red !important;    padding: 5px;}
  .bootstrap-tagsinput{
    width: 100% !important;background:#293551;    min-height: 100px;    padding: 20px;
    line-height: 50px !important;
  }

  .bootstrap-tagsinput .tag {
    color: white;
    background: #0046afc2;
    padding: 5px;
    font-size: 15px;
}

input {color:white}
</style>




<script>
//  console.clear();

$(function() {
  $('input').on('change', function(event) {

    var $element = $(event.target);
    var $container = $element.closest('.example');

    if (!$element.data('tagsinput'))
      return;

    var val = $element.val();
    if (val === null)
      val = "null";
    var items = $element.tagsinput('items');
  

    $('code', $('pre.val', $container)).html(($.isArray(val) ? JSON.stringify(val) : "\"" + val.replace('"', '\\"') + "\""));
    $('code', $('pre.items', $container)).html(JSON.stringify($element.tagsinput('items')));


  }).trigger('change');
});

$("#button").click(function() {
  var input = $("input[name='tags']").tagsinput('items');
});
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script>
  console.clear();

$(function() {

  $('input').on('change', function(event) {
    var $element = $(event.target);
    var $container = $element.closest('.example');

    if (!$element.data('tagsinput'))
      return;

    var val = $element.val();
    if (val === null)
      val = "null";
    var items = $element.tagsinput('items');

    $('code', $('pre.val', $container)).html(($.isArray(val) ? JSON.stringify(val) : "\"" + val.replace('"', '\\"') + "\""));
    $('code', $('pre.items', $container)).html(JSON.stringify($element.tagsinput('items')));


  }).trigger('change');
});

$("#button").click(function() {
  var input = $("input[name='tags']").tagsinput('items');
  console.clear();
  console.log(input);
  console.log(JSON.stringify(input));
  console.log(input[input.length - 1]);
});
</script>
<!-- <div id="container" class="example example_markup">
  <div class="bs-example">
    <input type="text" name="tags" value="pfTag1,pfTag2,pfTag3" data-role="tagsinput" />
  </div>

</div> -->