<!DOCTYPE html>
<html lang="sk">
    <head>
        <meta charset="utf-8">
		<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
		       <script src = "p5.js"></script>
		    <title>Naklon lietadla</title>
		
	
<style>
#graph{
width: 80%;
height: 410px;
margin-left: auto;
margin-right: auto;
border: 5px solid lightblue;
}

</style>

    </head>
	<body>
	<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="objGulicka.php">Gulička na tyči</a></li>
    <li><a href="objKyvadlo.php">Inverzné kyvadlo</a></li>
    <li><a href="objTlmic.php">Tlmič automobil</a></li>
    <li><a href="objLietadlo.php">Náklon Lietadla</a></li>
</ul>
		<br><p>Zadaj nove r:</p><input type="number" id="r" name="r">
		
		<div id="graph"></div> 
			
		<p class="d"><b>Posielané dáta</b></p><div id="result"></div>
			<div id="result2"></div>
	    <div class="check">
				
          <input type="checkbox" class="ch" onclick="sin();" checked><b>Sínus</b><br>
          
          <input type="checkbox" class="ch" onclick="cos();" checked><b>Kosínus</b><br>       
		</div>
		
		<button id="terminate" onclick="terminate();" class="button">Stop</button>
		  
        <button id="start" style="display: none;" onclick="start();" class="button">Pokračuj</button>
        
	
	<script>
	var stream = null;
		
            var url = "http://147.175.121.210:8168/skuska/lietadlo/server4.php";
			
			
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
                createStream("server4.php");
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
			  os_y1.push(data.lietadl);
			  //os_y2.push(data.klapka);
			  if(data.t >= 40){
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
				name: 'sin(x * a)',
				line: {
				  color: 'rgb(255, 153, 0)',
				  dash: 'line',
				  width: 3
				}
			  };
			  
			  /*
			  trace2 = {
				x: (updateData == true) ? os_x : os_x_old,
				y: (updateData == true) ? os_y2 : os_y2_old,
				mode: 'lines+markers',
				name: 'cos(x * a)',
				line: {
				  color: 'rgb(55, 128, 191)',
				  dash: 'line',
				  width: 3
				}
			  };
			 */
			  data1 = [trace1];
			  //data2 = [trace2];
			  
			  var layout = {
			  title: '<b>Test skuskaaa</b>',
				showlegend: true
			  };
			  
			  Plotly.newPlot(graph, [], layout);     
			/*  
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
				
			  }	 */
			  Plotly.addTraces(graph, data1); 
			}
	
			sendDataR();   // vykonanie funkcie
 
	</script>
	
		<script>
		/* NĂKLON LIETADLA */
		var canvas;
		let angle = 0;
		function setup() {

			canvas = createCanvas(600, 600);
			//canvas = createCanvas(windowWidth, windowHeight);
			angleMode(DEGREES);
		}
		function draw() {
			var target = document.getElementById('result').innerHTML;
			var uhol = 0;
					
			var ci = parseInt(target.substring(12, 19));
				
			
			document.getElementById("result2").innerHTML = parseFloat(target.substring(12, 19));
			uhol = parseFloat(document.getElementById("result2").innerHTML);
				
	
	
			uhol = uhol * 180/3.14159;
		   background(220);

			push();
			fill(255,255,255); //farba
			translate(165,300)
			rotate(uhol);
			stroke(255);
			rect(0,0,280, 35, 10);
			//angle = angle + 1
			pop();

   

		}
		</script>
	
	</body>
	
</html>
	