<?php 
    // set the page title
    $page_title = 'Discovery'; 
    include( 'includes/html-top.inc.php' );
include( 'includes/nav.inc.php' ); 
    include( 'includes/arrays.php' );
   
      ?>
    <article class="non-index" id="discover-page">

		  <h2>Your Groundbreaking Discovery<br></h2>
		<p  id="subtitle">As told by your loving Auntie</p>
    
    <div class="text">
        <p>Dear <span><?php echo $name[0] ?></span>,
           <br>  <br>
            I saw you on the television news and immediately went to write you a letter. It's so incredible to hear that you discovered the <span><?php echo $verb[0] ?></span> species of <span><?php echo $animal[0] ?></span>! I always knew you were a curious little <span><?php echo $noun[0] ?></span>. I honestly thought you went to <span><?php echo $place[0] ?></span> just to vacation. Little did I know that you'd go <span><?php echo $verb[1] ?></span> and end up discovering a new species! Now, the news anchor said that you were found looking pretty <span><?php echo $adjective[0] ?></span> when the scientists found you. I surely do hope that you're taking care of yourself! I've heard <span><?php echo $noun[1] ?></span> mixed with a little <span><?php echo $adjective[1] ?></span> <span><?php echo $noun[2] ?></span> does wonders for your health.
            <br>  <br>
            Anywho, I must go back to <span><?php echo $verb[2] ?></span> now. Let your mom know that I'm bringing <span><?php echo $noun[2] ?>s</span> for dinner next week! 
             <br>  <br>
             Love,
             <br>  <br>
             <span><?php echo $name[1] ?></span>
      
    </div>
 	  <a class="random" href="<?php echo $surprisePages[0] ?>">
	<div class="gimmie">
		Gimmie another random page!
	</div>
</a>

</article>
   <?php include( 'includes/html-bottom.inc.php' ); ?>