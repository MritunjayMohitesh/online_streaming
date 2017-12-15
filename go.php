<!DOCTYPE html>
<html>
<head>
	<title>hh</title>
</head>
<body>
<div id="boxes">

  <div id="dialog" class="window">

    Your Content Goes Here

    <div id="popupfoot"> <a href="#" class="close agree">I agree</a> | <a class="agree"style="color:red;" href="#">I do not agree</a> </div>

  </div>

  <div id="mask"></div>

</div>
<script type="text/javascript">
$(document).ready(function() { 
var id = '#dialog';
var maskHeight = $(document).height();
var maskWidth = $(window).width();
$('#mask').css({'width':maskWidth,'height':maskHeight});
$('#mask').fadeIn(500);
$('#mask').fadeTo("slow",0.9); 
//Get the window height and width
var winH = $(window).height();
var winW = $(window).width();
$(id).css('top',  winH/2-$(id).height()/2);
$(id).css('left', winW/2-$(id).width()/2);
$(id).fadeIn(2000);  
$('.window .close').click(function (e) {
e.preventDefault();
$('#mask').hide();
$('.window').hide();
});
$('#mask').click(function () {
$(this).hide();
$('.window').hide();
});
});
</script>
</body>
</html>