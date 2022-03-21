<?php
session_start();
if ( $_SERVER['REQUEST_METHOD'] == 'POST')
{
     $command = 'C:\Users\D3zhu\.p2\pool\plugins\org.eclipse.justj.openjdk.hotspot.jre.full.win32.x86_64_15.0.2.v20210201-0955\jre\bin\java.exe -Dfile.encoding=Cp1252 -classpath "D:\eclipse\app\bin;D:\eclipse\app\mps_client.jar" -XX:+ShowCodeDetailsInExceptionMessages app.App';
     exec($command,$output);
	 
     @$note = $_SESSION['note'];
     $nota = str_replace('"',"",$output[0]);
	 switch($nota) {
	case 28:
        $nota = "C3"; 
		break;
    case 29:
        $nota = "C3Sharp";
		break;
    case 30:
        $nota = "D3";
		break;
    case 31: 
        $nota = "D3Sharp";
		break;
    case 32:
        $nota = "E3";
		break;
    case 33:
        $nota = "F3";
		break;
    case 34:
        $nota = "F3Sharp";
		break;
    case 35:
        $nota = "G3";
		break;
    case 36:
        $nota = "G3Sharp";
		break;
    case 37:
        $nota = "A4";
		break;
    case 38:
        $nota = "A4Sharp";
		break;
    case 39:
        $nota = "B4";
		break;
  //------------------------------      
    case 40:
        $nota = "C4";   
		break;		
    case 41: 
        $nota = "C4Sharp";
		break;
    case 42:
        $nota = "D4";
		break;
    case 43:
        $nota = "D4Sharp";
		break;
    case 44:
        $nota = "E4";
		break;
    case 45:
        $nota = "F4";
		break;
    case 46:
        $nota = "F4Sharp";
		break;
    case 47:
        $nota = "G4";
		break;
    case 48:
        $nota = "G4Sharp";
		break;
    case 49:
        $nota = "A5";
		break;
    case 50:
        $nota = "A5Sharp";
		break;
    case 51: 
        $nota = "B5"; 
		break;
    case 52:
        $nota = "C5";
		break;
	case 59:
        $nota = "!";
		break;
    
	 }
	 $note[$_SESSION['numar_note']]=$nota;
	 $_SESSION['note'] = $note;
	 $_SESSION['numar_note'] += 1;
	 
}

?>

<!DOCTYPE html>
<html>
	<!--head-->
    <head> 
        <title>Record | Elysium</title>
        <style>
                        body {
                            font-family: sans-serif;
                            background: linear-gradient(to right, #ff7070, #84c5fa)
                        }

                        .box {
                            width: 500px;
                            padding: 40px;
                            position: absolute;
                            top: 10%;
                            left: 50%;
                            background: #191919;
                            ;
                            text-align: center;
                            transition: 0.25s;
                            margin-top: 100px
                        }

                        .box input[type="email"],
                        .box input[type="password"] {
                            border: 0;
                            background: none;
                            display: block;
                            margin: 20px auto;
                            text-align: center;
                            border: 2px solid #3498db;
                            padding: 10px 10px;
                            width: 250px;
                            outline: none;
                            color: white;
                            border-radius: 24px;
                            transition: 0.25s
                        }

                        .box h1 {
                            color: white;
                            text-transform: uppercase;
                            font-weight: 500
                        }

                        .box input[type="email"]:focus,
                        .box input[type="password"]:focus {
                            width: 300px;
                            border-color: #2ecc71
                        }

                        .box input[type="submit"] {
                            border: 0;
                            background: none;
                            display: block;
                            margin: 20px auto;
                            text-align: center;
                            border: 2px solid #2ecc71;
                            padding: 14px 40px;
                            outline: none;
                            color: white;
                            border-radius: 24px;
                            transition: 0.25s;
                            cursor: pointer
                        }

                        .box input[type="submit"]:hover {
                            background: #2ecc71
                        }

                        .forgot {
                            text-decoration: underline
                        }

                        ul.social-network {
                            list-style: none;
                            display: inline;
                            margin-left: 0 !important;
                            padding: 0
                        }

                        ul.social-network li {
                            display: inline;
                            margin: 0 5px
                        }

                        .social-network a.icoFacebook:hover {
                            background-color: #3B5998
                        }

                        .social-network a.icoTwitter:hover {
                            background-color: #33ccff
                        }

                        .social-network a.icoGoogle:hover {
                            background-color: #BD3518
                        }

                        .social-network a.icoFacebook:hover i,
                        .social-network a.icoTwitter:hover i,
                        .social-network a.icoGoogle:hover i {
                            color: #fff
                        }

                        a.socialIcon:hover,
                        .socialHoverClass {
                            color: #44BCDD
                        }

                        .social-circle li a {
                            display: inline-block;
                            position: relative;
                            margin: 0 auto 0 auto;
                            border-radius: 50%;
                            text-align: center;
                            width: 50px;
                            height: 50px;
                            font-size: 20px
                        }

                        .social-circle li i {
                            margin: 0;
                            line-height: 50px;
                            text-align: center
                        }

                        .social-circle li a:hover i,
                        .triggeredHover {
                            transform: rotate(360deg);
                            transition: all 0.2s
                        }

                        .social-circle i {
                            color: #fff;
                            transition: all 0.8s;
                            transition: all 0.8s
                        }
            
            
                       #register
                        {               width:95px;
                                        border: 0;
                                        background: none;
                                        display: block;
                                        margin: 20px auto;
                                        text-align: center;
                                        border: 2px solid #2ecc71;
                                        padding: 14px 40px;
                                        outline: none;
                                        color: white;
                                        border-radius: 24px;
                                        transition: 0.25s;
                                        cursor: pointer;
                                        font-size:13px;
                                        text-decoration:none;
                        }
            
            
                      #register:hover {
                            background: #2ecc71
                        }
            
                     #register:focus{    border: 0;
                            background: none;
                            display: block;
                            margin: 20px auto;
                            text-align: center;
                            border: 2px solid #2ecc71;
                            padding: 14px 40px;
                            outline: none;
                            color: white;
                            border-radius: 24px;
                            transition: 0.25s;
                            cursor: pointer}
            
            
        </style>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Home | Elysium</title>
		<link rel="shortcut icon" href="images/ico/favicon.ico">
		<link href="css/style.css" rel="stylesheet">
		<script src="js/jquery.js"></script>
    </head>
	<!--body-->
    <body style='background: linear-gradient(to right, #ffffff, #333333)'>
		<div id="preloader"></div>
		<img style='position:absolute;top:0%;left:0%;' src='images/piano.jpg'/>
		<a href='index.php'>
			<img src='images/back.png' style='position:absolute; top:10%;' width='32px' heigth='32px' />
			<img src='images/crop.png' style='margin-left:18.4%;margin-top:18%;'/>
		</a>	
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<form class="box" action='record.php' nctype='multipart/form-data' method='post' style="margin-left:-15%;" >
							<h1 style='margin-left:1%;'>Record now!</h1>
							<div id='record' style='width:25px;height:25px;border-radius:100%;background-color:red;margin-left:47.5%;'></div>
							<br/>
							<div id='disclaimer' style='width:300px;height:25px;margin-left:20%;color:rgba(0,0,0,0);font-size:16px;'>*Recording*</div>
							<input type="submit" name="" value="Record!" href="#" onclick="record();disclaimer()"> 
							<br/>
							<i style='color:white;margin-right:60%;font-size:14px;'>Number of notes recorded:<?php echo $_SESSION['numar_note'];?></i>  
						</form>
						<button style='position:absolute;top:55.3%;left:56%;border-radius:10%;cursor:pointer;' onclick="window.location.href='musicsheet.php'" >Generate Music Sheet</button>
					</div>
				</div>
			</div>
		</div>
		<!--used js scripts-->	
		<script>
			function record() {
					 var x = document.getElementById( 'record' );
					 x.style.backgroundColor = 'green';
					}
			function disclaimer() {
					 var x = document.getElementById( 'disclaimer' );
					 x.style.color = 'white';
					}
		</script>
		<script src="js/plugins.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.prettyPhoto.js"></script>
		<script src="js/init.js"></script>
    </body>   
</html>