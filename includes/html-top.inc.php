<?php include( 'includes/config.inc.php' ); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Mad Libs</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
	    <!--FAVICON-->
    <link rel="icon" type="image/png" href="favicon.png" />
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
    <!--JQUERY SCRIPT-->
    <script>
    
        $(document).ready(function(){
            
            if ( $(window).width() > 768) {     
            }
            else {
                //remove hover effects on nav
          	
				$( "nav" ).remove( "span" );
        }
            
        });
        
        
    
    </script>

	
	<script src="js/modernizr.custom.js"></script>
</head>

<body id="index">
