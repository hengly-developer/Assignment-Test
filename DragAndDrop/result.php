<!DOCTYPE html>
<html>
<head>
	<title>Drag and Drop Block</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>

<body>
	<br>
	<br>
	<div class="container"> 	
		<div class="row">
			<div class="leftbox" ondragover="allowDrop(event)" ondrop="drop(event)">
				<br>
				<input type="submit" draggable="true" ondragstart="drag(event)" id="item1" class="btn-color btn" name="item1" value="Item 1"><br><br>
				<input type="submit" draggable="true" ondragstart="drag1(event)" id="item2" class="btn-color btn" name="item2" value="Item 2"><br><br>
			</div>
			<div class="rightbox" ondragover="allowDrop(event)" ondrop="drop(event)">
				
			</div>

			<!-- <ul class="leftbox">
				<br>
				<li class="item">
					<input type="submit" class="btn-color btn" value="Item 1"><br><br>
				</li>
				<li class="item">
					<input type="submit" class="btn-color btn" value="Item 2"><br><br>
				</li>
			</ul>
			<div class="rightbox">
				
			</div> -->
		</div>
	</div>


<script rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- <script src="js/script.js" type="text/javascript"></script> -->
</body>
</html>
<script>

		function drag(ev){
			ev.dataTransfer.setData("Text", ev.target.id);
		}
		function drag1(ev){
			ev.dataTransfer.setData("Text", ev.target.id);
		}


		function allowDrop(ev){
			ev.preventDefault();
		}

		function drop(ev){
			ev.preventDefault();
			var data = ev.dataTransfer.getData("Text");
			ev.target.appendChild(document.getElementById(data)) ;
		}
	</script>

	