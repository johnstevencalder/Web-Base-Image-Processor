<?php include ("../assets/includes/headers.php");?>
<title>HTML5 Image Processor by John Calder</title>
<?php include ("../assets/includes/bootstrap.php");?>


<?php
 $image = $_GET["image"];
 $name = $_GET["name"];
 $font = $_GET["font"];
 $size = $_GET["size"];
 $scale = $_GET["scale"];
 $fontcolor = $_GET["fontcolor"];
 $fontstyle = $_GET["fontstyle"];
 $pagecolor = $_GET["pagecolor"];
 $pad = $_GET["pad"];
 $right = $_GET["right"];
 $centerP = $_GET["center"];
 $left = $_GET["left"];
 $vert = $_GET["vert"];
 $sourceImage = $image; 

list($width, $height, $type, $attr) = getimagesize($sourceImage);
$fontSize = $size;
$padding = $pad;
$canvasW = $width + $padding + $padding;
$canvasH = $height + $padding + $padding;
$shim = $padding/2;
$vertical = $vert;

If ($vert == "B"){ 
$vertical = ($canvasH - $shim + $fontSize);
$canvasH = ($height + $fontSize + $padding + $padding);
} elseif  ( $vert == "T") {
$vertical = $fontSize;
} elseif  ( $vert == "C") {
$vertical = $canvasH/2;
};
?>
</head>
<body class="textCenter">
<br>
<div class="container textCenter">
          <span class="h1 red ">HTML5 Image Processor<br>
          <a href="http://www.johnstevencalder.com/apps/FileProcessor.php" target="_self">File</a> | <a href="http://www.johnstevencalder.com/apps/WebProcessor.php" target="_self">Web</a></span>
          <span class="h3 text-info" style="text-align: center"><br> 
          By John Steven Calder</span>          
          <br>For best results use Firefox Version 35+<br>
          <span class="license" style="text-align: center"><a href="mailto:jcalder@well.com?subject=JohnStevenCalder%20Web%20Processor%20code%20contact">Source code available for free for Non-Commercial use</a></span>
        <br><hr class="style-eight"><br>
      <a href="http://www.johnstevencalder.com/apps/WebProcessor.php?image=http://www.johnstevencalder.com/veterans_projects/portraits/sample.jpg&amp;center=John%20Steven%20Calder&amp;left=United%20States%20Air%20Force&amp;right=Jul-21-1976%20%20Feb-15-1980&amp;font=Helvetica&amp;size=20&amp;fontcolor=Black&amp;pagecolor=White&amp;pad=40&amp;vert=B&amp;fontstyle=None&amp;scale=300" title="Processor_Demo" target="_top" class="hack">Click to Demo</a>

<h5><br>
  <span> Copy Special Characters, Paste into Text Fields</span>:
  <br>&nbsp;&copy;&nbsp;&reg;&nbsp;&euro;<br>
</h5>
    <form class="form-horizontal" role="form" name="processor" id="processor" action="../processor.php" method="GET">
	<fieldset class="formA">
   	<div class="form-group">
	<label class="control-label col-sm-2" for="image">URL:</label>
    <div class="col-sm-10">
    <input data-storage="true" id="image" name="image" type="text" value="<?php echo $_GET['image'] ?>" class="form-control input-md">
     </div></div>          
    
     <div class="form-group">
	<label class="control-label col-sm-2" for="scale">Printer Resolution - DPI:</label>
    <div class="col-sm-10">
    <select name="scale" id="scale" class="form-control input-md" >
					<option value="<?php echo $_GET['scale']?>"><?php echo $scale ?></option> 
                    <option value="720">720</option>
                    <option value="300">300</option>
                    <option value="150">150</option>
                    <option value="96">96</option>
                    <option value="72">72</option>
    </select>
    </div></div> 

    <div class="form-group">
	<label class="control-label col-sm-2" for="left">Left Justified Text:</label>
     <div class="col-sm-10">
    <input data-storage="true" id="left" name="left" type="text" value="<?php echo $_GET['left'] ?>" class="form-control input-md" >
    </div></div>          
   	<div class="form-group">
	<label class="control-label col-sm-2" for="right">Right Justified Text:</label>
    <div class="col-sm-10">
    <input id="right" name="right" type="text" value="<?php echo $_GET['right'] ?>" class="form-control input-md">
    </div></div>          
   	<div class="form-group">
	<label class="control-label col-sm-2" for="center">Center Justified Text:</label>
    <div class="col-sm-10">
    <input id="center" name="center" type="text" value="<?php echo $_GET['center'] ?>" class="form-control input-md">
    </div></div>          
   	<div class="form-group">
	<label class="control-label col-sm-2" for="font">Font:</label>
    <div class="col-sm-10">
    <select name="font" id="font" class="form-control input-md" >
					<option value="<?php echo $_GET['font']?>"><?php echo $font ?></option> 
                    <option value="Helvetica">Helvetica *</option>
                    <option value="Arial">Arial *</option>
					<option value="Times">Times *</option>
					<option value="Georgia">Georgia *</option>
					<option value="Courier">Courier *</option>
                    <option value="Courier New">Courier New *</option>
					<option value="Trebuchet MS">Trebuchet MS *</option>
					<option value="Times New Roman">Times New Roman *</option> 
					<option value="Times">Times *</option> 
                    <option value="Verdana">Verdana *</option>                    
					<option value="Avant Garde">Avant Garde</option>
                    <option value="Comic Sans MS">Comic Sans MS</option>
					<option value="Impact">Impact</option>
					<option value="Arial Black">Arial Black</option>
					<option value="Tahoma">Tahoma</option>
					<option value="Trebuchet MS">Trebuchet MS</option>
    </select>
    </div></div>          
   	<div class="form-group">
	<label class="control-label col-sm-2" for="size">Font Size:</label>
    <div class="col-sm-10">
    <input id="size" name="size" type="number" value="<?php echo $_GET['size'] ?>" class="form-control input-md">
    </div></div>          
   	 <div class="form-group">
	<label class="control-label col-sm-2" for="fontstyle">Font Style:</label>
    <div class="col-sm-10">
    <select name="fontstyle" id="fontstyle" class="form-control input-md" >
  					<option value="<?php echo $_GET['fontstyle']?>"><?php echo $fontstyle ?></option> 
					<option value="Bold ">Bold</option>
					<option value="Italic ">Italic</option>
					<option value="Bold Italic ">Bold & Italic</option>
					<option value="None">Normal</option>
    </select>
    </div></div>          
	<div class="form-group">
	<label class="control-label col-sm-2" for="fontcolor">Font Color:</label>
    <div class="col-sm-10">
    <select name="fontcolor" id="fontcolor" class="form-control input-md" >
  					<option value="<?php echo $_GET['fontcolor']?>"><?php echo $fontcolor ?></option> 
					<option value="Black">Black</option>
					<option value="White">White</option>
					<option value="Red">Red</option>
		    		<option value="Orange">Orange</option>
		   			<option value="Pink">Pink</option>
		    		<option value="Blue">Blue</option>
					<option value="Red">Purple</option>
                    <option value="Olive">Olive</option>
                    <option value="Silver">Silver</option>
                    <option value="Grey">Grey</option>
                    <option value="DarkBlue">DarkBlue</option>
                    <option value="LightBlue">LightBlue</option>
                    <option value="LightBlue">LightBlue</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Magenta">Magenta</option>
                    <option value="Green">Green</option>
                    <option value="Lime">Lime</option>
                    <option value="Maroon">Maroon</option>
    </select>
    </div></div>          
   	<div class="form-group">
	<label class="control-label col-sm-2" for="pagecolor">Background Color:</label>
    <div class="col-sm-10">
	<select name="pagecolor" id="pagecolor" class="form-control input-md" >
  					<option value="<?php echo $_GET['pagecolor']?>"><?php echo $pagecolor ?></option> 
					<option value="White">White</option>
					<option value="Black">Black</option>
                    <option value="Red">Red</option>
		    		<option value="Orange">Orange</option>
		   			<option value="Pink">Pink</option>
		    		<option value="Blue">Blue</option>
					<option value="Red">Purple</option>
                    <option value="Olive">Olive</option>
                    <option value="Silver">Silver</option>
                    <option value="Grey">Grey</option>
                    <option value="DarkBlue">DarkBlue</option>
                    <option value="LightBlue">LightBlue</option>
                    <option value="LightBlue">LightBlue</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Magenta">Magenta</option>
                    <option value="Green">Green</option>
                    <option value="Lime">Lime</option>
                    <option value="Maroon">Maroon</option>
	</select>
    </div></div>          
   	<div class="form-group">
	<label class="control-label col-sm-2" for="pad">Border Size:</label>
    <div class="col-sm-10">
	<input id="pad" name="pad" type="number" value="<?php echo $_GET['pad'] ?>" class="form-control input-md">
    </div></div>          
   	<div class="form-group">
	<label class="control-label col-sm-2" for="vert">Vertical Placement:<br>
    T = Top, B = Bottom<br>C = Center or Number</label>
    <div class="col-sm-10">
	<input id="vert" name="vert" type="text" value="<?php echo $_GET['vert'] ?>" class="form-control input-md">
    </div></div>          
                <div>
 			 	<button class="hack" type="submit" formaction="WebProcessor.php">Process Image</button>
                </div>	<!-- contactForm -->			
				<span> <br>
				<strong>Notes:</strong></span>
				<span> <br>
				- The border is not saved in the image. Used for spacing reference</span>
				<span> <br>- Vertical option "B" will center the text vertically by adding 1/2 Border value</span>
	  			<span> <br><strong>*</strong>&nbsp;Indicates Mobile Safe Font</span>
                </fieldset>
				</form>
				</div><!-- Container  -->
  <br>
  <br>
 <canvas style="margin-left: auto; margin-right: auto; border:1px solid grey; box-shadow: 10px 10px 5px #888888;
" id="myCanvas" width="<?php echo $canvasW ?>" height="<?php echo $canvasH ?>" class="img-responsive"></canvas>
  <script>
   var image_width = "<?php echo $width; ?>";
   var image_height = "<?php echo $height; ?>";
   var fontHeight = "<?php echo $fontSize; ?>";
   var canvasHeight = "<?php echo $canvasH; ?>";
   var canvasWidth = "<?php echo $canvasW; ?>";
   var padding = "<?php echo $pad; ?>";
   var sourceImage = "<?php echo $sourceImage; ?>";
   var vertical = "<?php echo $vertical; ?>";
   var contentL = "<?php echo $left; ?>";
   var contentC = "<?php echo $centerP; ?>";
   var contentR = "<?php echo $right; ?>";
   var padding = "<?php echo $padding; ?>";
   var wfont = "<?php echo $font; ?>";
   var size = "<?php echo $size; ?>";
   var scale = "<?php echo $scale; ?>";
   var pagecolor = "<?php echo $pagecolor; ?>";
   var fcolor = "<?php echo $fontcolor; ?>";
   var fstyle = "<?php echo $fontstyle; ?>";   
   var shim = "<?php echo $shim; ?>";
   var posR = parseInt(image_width) + parseInt(padding);
   var posC = parseInt(image_width/2) + parseInt(padding);
   var posL = parseInt(padding);
		
		window.onload = function(){
   var canvas = document.getElementById("myCanvas");
   var context = canvas.getContext("2d");
   var imageObj = new Image();

	imageObj.setAttribute('crossOrigin', 'anonymous');
	context.rect( 0, 0, canvasWidth, canvasHeight);
	context.fillStyle= pagecolor;
	context.fill();	 
	imageObj.onload = function(){
		context.drawImage(imageObj, padding, padding, image_width, image_height);
		if (fstyle == 'None'){ fstyle ='';};

		context.font = fstyle + fontHeight + "pt " + wfont ;
		context.fillStyle = fcolor;
		context.textAlign = 'start';
		context.fillText(contentL, posL, vertical);
     	context.textAlign = 'center';
		context.fillText(contentC, posC, vertical);
      	context.textAlign = 'end';
		context.fillText(contentR, posR, vertical);
     };
     imageObj.src = sourceImage; 
};
	document.getElementById("myCanvas").addEventListener("click", function(){
    var dataURL = myCanvas.toDataURL("image/jpeg");
	var Mywindow = window.open("", "contentC");
	Mywindow.document.write('<img src="'+dataURL+'" />');
});
  	var res = "<?php echo $scale; ?>";
	document.write('<br><h3>Source Image Height = ' + image_height + 'px <br>Source Image Width = ' + image_width + 'px</h3><br>'); 
	document.write('<h3>Output Image Height = ' + canvasHeight + 'px <br>Output Image Width = ' + canvasWidth + 'px</h3><br>'); 
	document.write('<h3>Printed Height = ' + ((canvasHeight/res).toFixed(2)) + ' inches at ' + res +' DPI<br>Printed Width = ' + ((canvasWidth/res).toFixed(2)) + ' inches at ' + res +' DPI</h3><br>'); 
	document.write('<h3>Right Click Image and "Save As" 32 bit PNG <br>Left Click to Open Image in New Window as 24 bit JPEG</h3>'); 
	document.write('<h4 red >For best results use Firefox Version 35+</h4><br>'); 

var link = document.createElement('a');
link.innerHTML = '<button class="hack">Download PNG Image</button>';
link.addEventListener('click', function(ev) {
    link.href = myCanvas.toDataURL();
    link.download = contentC + ".png";
}, false);
document.body.appendChild(link) 
</script> 
<br>
<br>
<?php include ("../assets/includes/footer.php");?>
<br>
</body>
</html>