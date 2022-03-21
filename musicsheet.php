<?php
	session_start();
	$note = $_SESSION['note'];
	$numar_note = $_SESSION['numar_note'];
	
	//temp for development
	$numar_note=13;
    $note[0]="E4";
    $note[1]="D4";    
    $note[2]="C4"; 
	$note[3]="E4"; 
	$note[4]="F4"; 
	$note[5]="G4"; 
	$note[6]="E4"; 
	$note[7]="F4"; 
	$note[8]="G4";
   $note[9]="F4";    
    $note[10]="E4"; 
	$note[11]="D4"; 
	$note[12]="C4"; 
	$note[13]="A5"; 
	$note[14]="B5"; 
	$note[15]="C5"; 
	$note[16]="F4"; 
	$note[17]="G4"; 
	$note[18]="A5"; 
	$note[19]="B5";  

	$command = 'C:\Users\D3zhu\.p2\pool\plugins\org.eclipse.justj.openjdk.hotspot.jre.full.win32.x86_64_15.0.2.v20210201-0955\jre\bin\java.exe -Dfile.encoding=Cp1252 -classpath "D:\eclipse\app2\bin;D:\eclipse\app\mps_client.jar" app2.App';
	for ($i = 0; $i <$numar_note; $i++) $command = $command." ".$note[$i];
    exec($command);    
	
?>

<!DOCTYPE html>
<html>
	<!--head-->
    <head> 
        <title>Music Sheet | Elysium</title>
		<link href="css/style.css" rel="stylesheet">
		<style>
			.hide{
			  display:none;
			}
			.show{
			  display:block;
			}
			#mark{
            
            height:30px;
            width:30px;
            position:absolute; 
            top:30%; 
            left:30%;
            display:none;
        };
		</style>
		<link rel="shortcut icon" href="images/ico/favicon.ico">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link href="css/style.css" rel="stylesheet">
		<script src="js/jquery.js"></script>
    </head>
	<!--body-->
    <body style='background: linear-gradient(to right, #ffffff, #333333)'>
		<div id="preloader"></div>
		<img style='position:absolute;top:0%;left:0%;' src='images/piano.jpg'/>	
			<div class="container">
			<button style='border-radius:5px; margin-top:5%; background-color:grey; color:white; width:140px; height:30px;cursor:pointer;' onclick="window.location.href='index.php'"> Back to Home </button>
            <button style='border-radius:5px; margin-left:83%; background-color:grey; color:white; width:170px; height:30px;cursor:pointer;' onclick="NameSong()"> Name your MusicSheet! </button>   
            <div style="margin-left:90%; margin-top:0.5%">
                <input class="hide" type="text" id="textInput" placeholder="Song name here" name="nume_pdf" />         			
            </div>     
			<div class="row">
				<div class="col-md-6">
                        <a onclick = "PlaySong();Move();">
							<img src="images/button2.png" style="width:180px;height:60px;margin-left:44%;cursor:pointer;"/>
						</a>
					<div class="html-content">
                        <div>  
							<img  id="mark"  src='images/arrow.png' /> 
						</div>
						<div style='background-color:white;height:177px; width:906px; border:3px solid black;margin-top:1%;margin-left:25%;'>
						<img   src='images/notes/Cheia_sol.png'/>
						<?php     
							 for ($i = 0; $i <$numar_note; $i++) {
								$note[$i] = str_replace(' ',"",$note[$i]);
								echo '<img src="images/notes/'. $note[$i] . '.png"/ style=\'margin-left:-0.5%;\'>' ;
								if($i==9) break;
							 }
							 ?>
							</div>
							<?php
								if($i == 9) {
									 echo "
									 <div style='background-color:white;height:177px; width:906px; border:3px solid black;margin-top:0%;margin-left:25%;'>
									 <img   src='images/notes/Cheia_sol.png'/>
								   	 ";
									 for ($i = 10; $i <$numar_note; $i++) {
										 $note[$i] = str_replace(' ',"",$note[$i]);
										echo '<img src="images/notes/'. $note[$i] . '.png" style=\'margin-left:-0.5%;\'/>' ;
										if($i==19) break;
									 }
									 echo '</div>';
								}
							?>
							<?php 
								if($i == 19) {
									 echo "
									 <div style='background-color:white;height:177px; width:906px; border:3px solid black;margin-top:0%;margin-left:25%;'>
									 <img   src='images/notes/Cheia_sol.png'/>
									 ";
									 for ($i = 20; $i <$numar_note; $i++) {
										$note[$i] = str_replace(' ',"",$note[$i]);
										echo '<img src="images/notes/'. $note[$i] . '.png" style=\'margin-left:-0.5%;\'/>' ;
										if($i==29) break;
									 }
									 echo '</div>';
								}
							?>  
					</div>
					<div style="width:906px; height:60px; margin-left:25%">
						<a onclick = "CreatePDFfromHTML()">
						<img src="images/download_pdf.png" style="width:180px;height:60px;cursor:pointer;margin-left:3%;"/>
				        </a>	
						<a href="song.wav" download="song.wav">
							<img src="images/download_song.png" style="width:180px;height:60px;cursor:pointer;margin-left:55%;"/>
						</a>
                    </div>         
				</div>
			</div>            
			<!-- used js scripts-->
		<script>	
			 <?php
				echo " 
                 async function Move(){
                 position=30.2;
                 aux = 30;
                 document.getElementById('mark').style.left = position+'%';
                 document.getElementById('mark').style.top = aux+'%';
                 document.getElementById('mark').style.display='block';
                 ";
				for($i=1;$i <$numar_note ;$i++) {           
					 echo " await new Promise(r => setTimeout(r, 660));
							var elem = document.getElementById('mark');
							";
					 if($i % 10 == 0) echo "position = 30.3;elem.style.left = '30.2%';aux = aux + 20;elem.style.top = aux + '%';";
					 else echo "
							position=position+4.2;
							elem.style.left = position+'%';"; 
					}
				 echo "await new Promise(r => setTimeout(r, 660));document.getElementById('mark').style.display='none';}";             
        ?>
		</script>
       	<script>
            function PlaySong() {
				var audio = new Audio('song.wav');
				audio.play();
			}
		</script>
		<script>
			function CreatePDFfromHTML() {
				var HTML_Width = $(".html-content").width();
				var HTML_Height = $(".html-content").height();
				var top_left_margin = 15;
				var PDF_Width = HTML_Width + (top_left_margin * 2);
				var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
				var canvas_image_width = HTML_Width;
				var canvas_image_height = HTML_Height;

				var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

				html2canvas($(".html-content")[0]).then(function (canvas) {
					var imgData = canvas.toDataURL("image/jpeg", 1.0);
					var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
					pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
					for (var i = 1; i <= totalPDFPages; i++) { 
						pdf.addPage(PDF_Width, PDF_Height);
						pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
					}
					
					
					var x = document.getElementById('textInput').value;
					
					if (x == '') pdf.save("musicsheet.pdf");
					else pdf.save(x);
				});
			}
		</script>
        <script>
            function NameSong() {
             document.getElementById('textInput').className="show";
             document.getElementById('submit').className="show";
            }
        </script>     
		<script src="js/jquery.js"></script>  
		<script src="js/plugins.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.prettyPhoto.js"></script>
		<script src="js/init.js"></script>
	    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
		<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>	
     </body>   
</html>