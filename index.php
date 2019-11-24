<html>
<head>
<title>jQuery Image Rotate</title>
<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<script>
function rotateImage(degree) {
	$('#demo-image').animate({  transform: degree }, {
    step: function(now,fx) {
        $(this).css({
            '-webkit-transform':'rotate('+now+'deg)', 
            '-moz-transform':'rotate('+now+'deg)',
            'transform':'rotate('+now+'deg)'
        });
    }
    });
}
</script>
<style>
#demo-image{padding:25px 10px;}
.btnRotate {padding: 5px 10px;background-color: #09F;border: 0;color: #FFF;cursor: pointer;}
</style>
</head>
<body>
<div>
<label>Rotate Image:</label>
<input type="button" class="btnRotate" value="90" onClick="rotateImage(this.value);" />
<input type="button" class="btnRotate" value="-90" onClick="rotateImage(this.value);" />
<input type="button" class="btnRotate" value="180" onClick="rotateImage(this.value);" />
<input type="button" class="btnRotate" value="360" onClick="rotateImage(this.value);" />
</div>
<div><img src="coffee.jpg" id="demo-image" /></div>
</body>
</html>

