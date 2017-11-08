<?php 
    // set the page title
    $page_title = 'Discovery'; 
    include( 'includes/html-top.inc.php');
           include( 'includes/nav.inc.php' ); 
   
      ?>
    <article class="non-index" id="discover-page">
    
		  <h2>Your Groundbreaking Discovery<br></h2>
		<p id="subtitle">As told by your loving Auntie</p>
		
    <div class="text">
        <p>Dear <span><?php $_POST["firstname0"] ?></span>,
           <br>  <br>
            I saw you on the television news and immediately went to write you a letter. It's so incredible to hear that you discovered the <span><?php $_POST["verb0"] ?></span> species of <span><?php $_POST["animal0"] ?></span>! I always knew you were a curious little <span><?php $_POST["noun0"] ?></span>. I honestly thought you went to <span><?php $_POST["place0"] ?></span> just to vacation. Little did I know that you'd go <span><?php $_POST["verb1"] ?></span> and end up discovering a new species! Now, the news anchor said that you were found looking pretty <span><?php $_POST["adjective0"] ?></span> when the scientists found you. I surely do hope that you're taking care of yourself! I've heard <span><?php $_POST["noun1"] ?></span> mixed with a little <span><?php $_POST["adjective1"] ?></span> <span><?php $_POST["noun2"] ?></span> does wonders for your health.
            <br>  <br>
            Anywho, I must go back to <span><?php $_POST["verb2"] ?></span> now. Let your mom know that I'm bringing <span><?php $_POST["noun2"] ?></span> for dinner next week! 
             <br>  <br>
             Love,
             <br>  <br>
             <span><?php $_POST["name1"] ?></span>
      
    </div>

</article>
   <?php include( 'includes/html-bottom.inc.php' ); ?>