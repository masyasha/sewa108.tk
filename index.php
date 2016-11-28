<!DOCTYPE HTML>
<html>

    <head>
        <meta charset="utf-8">
        <title>Real Sandbox</title>
        <link rel="icon" href="icon.png">
        <link href="https://fonts.googleapis.com/css?family=Rubik:700&amp;subset=cyrillic" rel="stylesheet">    
        <style type="text/css">
            body { 
                overflow-x: hidden;
                background: #f7fa26;
                background: -moz-linear-gradient(-45deg,  #f7fa26 0%, #fc48b7 34%, #4fcdff 72%, #70fe4c 100%);
                background: -webkit-linear-gradient(-45deg,  #f7fa26 0%,#fc48b7 34%,#4fcdff 72%,#70fe4c 100%);
                background: linear-gradient(135deg,  #f7fa26 0%,#fc48b7 34%,#4fcdff 72%,#70fe4c 100%);
      	         }

      	    * {
      		      font-family: "Rubik", sans-serif;
      		      font-size: 40px;
      	      }

      	    .input {
      		    	text-align: center;
      		      width:50%;
            		margin-top:7%;
            		margin-right: 25%;
            		margin-left:25%;
            		margin-bottom: 50px;
            		padding: 10px;
            	     }

      	    .penis {
            		text-align: center;
            		width:80%;
            		margin: auto;
            		color: white;
      	           }

      	    p {
      		      margin: 5px;
      	      }

      	    p:hover {
      		      color:black;
      		      transition: 0.5s;
      	            }
      </style>
    </head>

    <body>
    	<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    		<input class="input" type="text" name="input">
    	</form>
    	<div class="penis wiggle">
    	<?php
    	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    		$input = $_POST["input"];
    		$penis = fopen("penis.txt", "r");
    		if (strlen($input) < 6){
    			$vagina = "<p style='font-size:200px;margin:1;'>" . $input . "</p>\n" . fread($penis, filesize("penis.txt"));
    		} elseif (strlen($input) < 16){
    			$vagina = "<p style='font-size:100px;'>" . $input . "</p>\n" . fread($penis, filesize("penis.txt"));
    		} elseif (strlen($input) < 25){
    			$vagina = "<p style='font-size:50px;'>" . $input . "</p>\n" . fread($penis, filesize("penis.txt"));
    		} else {
    			$vagina = "<p>" . $input . "</p>\n" . fread($penis, filesize("penis.txt"));
    		}
    		
    		fclose($penis);
    		$penis = fopen("penis.txt", "w");
    		fwrite($penis, $vagina);
    		fclose($penis);
    	}
    	$penis = fopen("penis.txt", "r");
    	echo fread($penis, filesize("penis.txt"));
    	fclose($penis);
    	?>
    	</div>
    </body>
</html>