<?php 
    // set the page title
    $page_title = 'Baby Celebration';
    include( 'includes/html-top.inc.php' );
include( 'includes/nav.inc.php' ); 
    include( 'includes/arrays.php' );?>

<article class="non-index">
    <h2 class="baby-header">Hello Baby!</h2>
     

  <p>&nbsp;</p>
   
   <div class="text" id="baby-page">
        
       <h3 id="baby-name">Welcome to the world,<br>
       <span class="capitalize"><?php echo $name[0]; ?></span> <span class="capitalize"><?php echo $noun[1]; ?></span>! 
       </h3> <br>
        
         <p>
           Born on <span><?php echo $today ?></span> in <span><?php echo $place[0]; ?></span>, sweet little <span><?php echo $name[0]; ?></span> was welcomed into this world. Weighing <span><?php echo $number[0]; ?></span> pounds, parents <span><?php echo $name[1]; ?></span> <span class="capitalize"><?php echo $noun[1]; ?></span>  and <span><?php echo $name[2]; ?></span> <span class="capitalize"><?php echo $noun[1]; ?></span>  are incredibly happy with their new bundle of joy. So excited about their little newborn, new parents immediately went <span><?php echo $verb[0]; ?></span> a little after their baby's welcoming into the world.
        
       </p>
<br>
       <p>
           Baby <span><?php echo $name[0]; ?></span> joins siblings <span><?php echo $name[3]; ?></span> and <span><?php echo $name[4]; ?></span> to the <span class="capitalize"><?php echo $noun[1]; ?></span> family.
           
       </p>
       
    
    </div>
    
	  <a class="random" href="<?php echo $surprisePages[0] ?>">
	<div class="gimmie">
		Gimmie another random page!
	</div>
</a>
    
</article>

        
        
        
<span><?php include( 'includes/html-bottom.inc.php' ); ?>