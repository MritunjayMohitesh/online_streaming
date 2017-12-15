<!DOCTYPE html>
<html>
<head>
	<title>frh</title>
</head>
<script type="text/javascript">
	
	function openPopup() {
    document.getElementById('test').style.display = 'block';
}

function closePopup() {
    document.getElementById('test').style.display = 'none';
}
</script>
<style type="text/css">
	
	.popup
{
    position:absolute;
    top:0px;
    left:0px;
    margin:100px auto;
    width:200px;
    height:150px;
    font-family:verdana;
    font-size:13px;
    padding:10px;
    background-color:rgb(240,240,240);
    border:2px solid grey;
    z-index:100000000000000000;
    display:none
}

.cancel
{
    display:relative;
    cursor:pointer;
    margin:0;
    float:right;
    height:10px;
    width:14px;
    padding:0 0 5px 0;
    background-color:red;
    text-align:center;
    font-weight:bold;
    font-size:11px;
    color:white;
    border-radius:3px;
    z-index:100000000000000000;
}
</style>
<body>
<button onClick="openPopup();">click here</button>
<div id="test" class="popup">
    <a href=index.php>you can click me</a>
    <div class="cancel" onclick="closePopup();"></div>
</div>
</body>
</html>