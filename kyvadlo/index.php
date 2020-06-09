
<?php include "../config.php";
$checkStatistic = "SELECT * FROM navstevnost stat WHERE stat.id = 2";
$resultStatistic = $conn->query($checkStatistic);
if($rowStatistic = $resultStatistic->fetch_assoc()){
    $checkStatistic = $rowStatistic["count"] + 1;
    $statistic = "UPDATE navstevnost stat SET stat.count = '$checkStatistic' WHERE stat.id = 2";
}


if(isset($_POST['submit'])){
	$r = $_POST['r'];
	$sql = "UPDATE vstup SET kyvadlo='$r' WHERE id=1";
	$conn->query($sql);
}

if($conn->query($statistic) === FALSE){ echo $conn->error; }
$conn->close();
?>

<!DOCTYPE html>
<html lang="sk">
<head>

     <title>Záverečný projekt z WEBTECH2</title>
<!-- 

Known Template 

https://templatemo.com/tm-516-known

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   
     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/font-awesome.min.css">
     <link rel="stylesheet" href="../css/owl.carousel.css">
     <link rel="stylesheet" href="../css/owl.theme.default.min.css">

        



     <!-- MAIN CSS -->
          <link rel="stylesheet" href="../css/templatemo-style.css">

<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
		 <script src = "http://147.175.121.210:8166/Skuska/p5.js"></script>
		
<style>
#graph{
width: 80%;
height: 410px;
margin-left: auto;
margin-right: auto;
border: 5px solid lightblue;
}

#result2{
display: none;
}

#result{
  font-weight: bold;
  margin-bottom: 100pxô
}
</style>



</head>

	<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER 
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>-->


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">Záverečný projekt z WEBTECH2</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                        <li><a href="/Skuska/index.php" class="smoothScroll">Domov</a></li>
                        <li><a href="/Skuska/kyvadlo/index.php" class="smoothScroll">Inverzné kyvadlo</a></li>
                        <li><a href="/Skuska/gulicka/gulicka.php" class="smoothScroll">Gulička na tyči</a></li>
                        <li><a href="/Skuska/auto/tlmic.php" class="smoothScroll">Tlmič auta</a></li>
                        <li><a href="/Skuska/lietadlo/naklon.php" class="smoothScroll">Náklon klapky</a></li>

                    </ul>


               </div>

          </div>
     </section>

     <div class="check">

         <input type="checkbox" onclick="graf()" checked><b>Graf</b>
         <input type="checkbox" onclick="animacia()" checked><b>Animácia</b>
     </div>
		<form method="post" action="index.php">
		<br><p>Zadaj nove r:</p><input type="number" step="0.01" id="r" name="r" min="-1" max="1">
		 <input type="submit" name="submit">
		</form>
		
		<div id="graph"></div> 
					
		<button id="terminate" onclick="terminate();" class="button">Stop</button>
		  
        <button id="start" style="display: none;" onclick="start();" class="button">Pokračuj</button>
        
		<p class="d"><b>Posielané dáta</b></p><div id="result"></div>
			<div id="result2"></div>


	
	<script>
	var stream = null;
		
            var url = "http://147.175.121.210:8168/skuska/server.php";
			
			
            function createStream(url){
                if(stream !== null){
                    stream.close();
                }
                stream = new EventSource(url);
			
                stream.addEventListener('message', function(e){
                    var d = JSON.parse(e.data);
                    document.getElementById("result").innerHTML = JSON.stringify(d);
					
					
					
					
					
					
					
					
					
                }, false);
            }
            if(typeof(EventSource) !== 'undefined'){
                createStream("server.php");
            }else{
                document.getElementById("result").innerHTML = "Error";
            }
			
						///////////////////////////////////////////////////
						
			var os_x = [0];
			var os_y1 = [0];
			var os_y2 = [0];
			var os_x_old = [];
			var os_y1_old = [];
			var os_y2_old = [];
								  ////
			var trace1, trace2, data1, data2, stream;

			var updateData = true;
			var displayG1 = true;
			var displayG2 = true;  

			function sendDataR()
			{  
			  stream.addEventListener("message", function(e)
			  {
				listenerContent(e);    
				}); 
			}

			function sin()
			{
			  if(displayG1 == true)
			  {
				displayG1 = false;
			  }
			  else
			  {
				displayG1 = true;
			  } 
			  drawGraph();
			}

			function cos()
			{
			  if(displayG2 == true)
			  {
				displayG2 = false;
			  }
			  else
			  {
				displayG2 = true;
			  } 
			  drawGraph();
			}


			function terminate()
			{
			  updateData = false;
			  document.getElementById("terminate").style.display = "none";
			  document.getElementById("start").style.display = "block";
			  
			  os_x_old = os_x.slice();
			  os_y1_old = os_y1.slice();
			  os_y2_old = os_y2.slice();
			}

			function start()
			{
			  updateData = true;
			  document.getElementById("terminate").style.display = "block";
			  document.getElementById("start").style.display = "none";
			  
			  drawGraph(); 
			}


			function listenerContent(e)
			{
				
			  var data = JSON.parse(e.data); //parsovanie
			  os_x.push(data.t);
			  os_y1.push(data.pozicia);
			  os_y2.push(data.uhol);
			  if(data.t >= 10){
				  updateData = false;
			  }
			  
			  if(updateData == true)  {
				drawGraph();  
			  }  
			}

			function drawGraph()
			{
			  trace1 = {
				x: (updateData == true) ? os_x : os_x_old,
				y: (updateData == true) ? os_y1 : os_y1_old,
				mode: 'lines+markers',
				name: 'pozícia kyvadla',
				line: {
				  color: 'rgb(255, 153, 0)',
				  dash: 'line',
				  width: 3
				}
			  };
			  
			  
			  trace2 = {
				x: (updateData == true) ? os_x : os_x_old,
				y: (updateData == true) ? os_y2 : os_y2_old,
				mode: 'lines+markers',
				name: 'uhol kyvadla',
				line: {
				  color: 'rgb(55, 128, 191)',
				  dash: 'line',
				  width: 3
				}
			  };
			 
			  data1 = [trace1];
			  data2 = [trace2];
			  
			  var layout = {
			  title: '<b>Inverzné kyvadlo</b>',
				showlegend: true
			  };
			  
			  Plotly.newPlot(graph, [], layout);     
			  
			  if(displayG1 == true && displayG2 == true )
			  {
				Plotly.addTraces(graph, data1);
				
				Plotly.addTraces(graph, data2);
				
			  }
			  else if(displayG1 == true && displayG2 == false)
			  {
				Plotly.addTraces(graph, data1); 
			  }
			  else if(displayG1 == false && displayG2 == true)
			  {
				Plotly.addTraces(graph, data2); 
			  }	 
			  
			}
	
			sendDataR();   // vykonanie funkcie
 
	</script>
	
	 
	
	
	<script>
/* INVERZNĂ‰ KYVADLO */

var canvas;
//let angle = 0;
function setup() {
    canvas = createCanvas(600, 600);
    angleMode(DEGREES);
    //canvas.position(160,100);
}
function draw() {
	
	var target = document.getElementById('result').innerHTML;
	var uhol = 0;
		
	var ci = parseInt(target.substring(12, 15));
	
	if(target[12] === "-"){
		document.getElementById("result2").innerHTML = parseFloat(target.substring(30, 39));
		uhol = parseFloat(document.getElementById("result2").innerHTML);
	}else if(ci > 99){
		document.getElementById("result2").innerHTML = parseFloat(target.substring(31, 40));
		uhol = parseFloat(document.getElementById("result2").innerHTML);
	}else if(ci > 9){
		document.getElementById("result2").innerHTML = parseFloat(target.substring(30, 39));
		uhol = parseFloat(document.getElementById("result2").innerHTML);
	}	
	else{ //neni minus
		document.getElementById("result2").innerHTML = parseFloat(target.substring(29, 38));
		uhol = parseFloat(document.getElementById("result2").innerHTML);
	}
	
	
	uhol = uhol * 180/3.14159;

    background(220);

    push();
    fill(50, 100, 100); //farba
    translate(300,350)
    rotate(uhol-90);
    stroke(255);
    rect(0,0,210, 25, 10);
    //angle = angle + 1
    pop();

    push();
    fill(100, 100, 100); //farba
    stroke(255);
    square(170,350,260,20);
    pop();
}
</script>
     <script>
         function graf() {
             var x = document.getElementById("graph");
             if (x.style.display === "none") {
                 x.style.display = "block";
                 drawGraph();
             } else {
                 x.style.display = "none";
             }
         }
     </script>
     <script>
         function animacia() {
             var x = document.getElementById("defaultCanvas0");
             if (x.style.display === "none") {
                 x.style.display = "block";
             } else {
                 x.style.display = "none";
             }
         }
     </script>


	</body>
	
</html>
	