<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
	<title>Whiteboard</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<script type="text/javascript" src="js/excanvas.js"></script>
	<script src="//code.jquery.com/jquery-1.9.1.js"></script>
	<script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script type="text/javascript" src="js/linearalgebra-1.0.js"></script>
	<script type="text/javascript" src="js/drawing-1.0.js"></script>
	<script type="text/javascript" src="js/jquery.hammer.min.js"></script>
	<script type="text/javascript" src="code.js"></script>
	<script>
		$(function() {
			$("#clear").click(function(){
				clearDrawing(false);
			});
			$("#bgs>div").click(function(){
				var n = $(this).html();
				$("#bgs>div").removeClass("active");
				$(this).addClass("active");
				if(n===0) {
					$("html,body").css({background:"none"});
				} else {
					$("html,body").css({background:"url(img/bg" + $(this).html() + ".png)"});
				}
			});
		});
	</script>
</head>

<body>
	<div id="sidebar" class="open">
		<div id="sideexpand"><i class="icon-angle-right"></i><i class="icon-angle-left"></i></div>
		<p>Whiteboard</p>
		<hr />
		<div id="palettes">
			<div id="palexpand"><i class="icon-angle-right"></i><i class="icon-angle-left"></i></div>
		</div>
		<hr />
		<div id="sizes">
		</div>
		<hr />
		<div id="tools">
			<div id="pen" class="active"><i class="icon-pencil"></i></div>
			<div id="highlighter"><i class="icon-sun"></i></div>
			<div id="eraser"><i class="icon-eraser"></i></div>
		</div>
		<hr />
		<div id="bgs">
			<div>0</div>
			<div>1</div>
			<div>2</div>
			<div class="active">3</div>
			<div>4</div>
		</div>
		<hr />
		<div id="functions">
			<div id="clear"><i class="icon-remove"></i></div>
		</div>
		<hr />
	</div>
	<div id="overlay"></div>
	<canvas id="whiteboard"></canvas>
</body>
</html>

