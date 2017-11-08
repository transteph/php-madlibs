<?php 
    // set the page title
    $page_title = 'Food Competition Master!';
    include( 'includes/html-top.inc.php' );
    include( 'includes/nav.inc.php' ); 
 include( 'includes/arrays.php' );
?>
   
<article class="non-index"  id="champion-page">
    <h2 class="champ-heading"><span class="capitalize"><?php echo $noun[6]; ?></span> Eating Champion</h2>
     
     <div class="text">
        <p>
        
      <span><?php echo $name[0]; ?></span> <span class="capitalize">"The <?php echo $noun[0]; ?></span>" <span><?php echo $noun[5]; ?></span> shocked the world this past Sunday when <span class="capitalize"><?php echo $name[0]; ?></span> broke the world record for most <span><?php echo $adjective[0]; ?></span> <span><?php echo $noun[6]; ?></span>s eaten while <span><?php echo $verb[0]; ?></span>. "People said I could never do it", said <span><?php echo $name[0]; ?></span>, "but no one has really seen how hard I train behind closed doors other than my pet <span><?php echo $animal[0]; ?></span>". 
         </p>
         <br>
         <p>
        Downing over <span><?php echo $number[0]; ?></span> pounds of fresh <span><?php echo $adjective[0]; ?></span> <span><?php echo $noun[6]; ?></span>s in 20 minutes, spectators were left speechless by the sight. "Never in my lifetime have I seen something like that," stated <span><?php echo $name[8]; ?></span>, "Someone even snuck in a <span><?php echo $noun[4]; ?></span> into the food pile, and <span class="capitalize"><?php echo $name[0]; ?></span> still ate that!".
         </p>
     <br>
         <p>
             After <span><?php echo $name[0] ?></span>'s historic meal, town mayor <span><?php echo $name[5] ?></span> appeared on stage to offer the key to the city to the World <span><?php echo $adjective[0]; ?></span> <span><?php echo $noun[6]; ?>-eating</span> champion. However, at yet another shock to the audience, <span><?php echo $name[0]; ?></span> accidentally mistook the key for chocolate, immediately consuming it before the cries of the crowd could be heard. <span><?php echo $name[0]; ?></span>'s bowel movements are now under strict monitoring for evidence of the city's 24 Karat Gold key. 
             
         </p>
    </div>
	
	
 	  <a class="random" href="<?php echo $surprisePages[0] ?>">
	<div class="gimmie">
		Gimmie another random page!
	</div>
</a>
    
    
</article>

        
        
        
<?php include( 'includes/html-bottom.inc.php' ); ?>