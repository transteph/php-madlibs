<?php 

    $today = date("F j, Y");  

    // set the page title
    $page_title = 'Baby Celebration';
    include( 'includes/html-top.inc.php' );
include( 'includes/nav.inc.php' ); ?>

<article class="non-index">

    <h2 class="baby-header">Hello Baby!</h2>
     

  <p>&nbsp;</p>
   

   <div class="text" id="baby-page">
        
       <h3 id="baby-name">Welcome to the world, <br>
       <span class="capitalize"><?php echo $_POST["name1"]; ?></span> '<span class="capitalize"><?php echo $_POST["noun0"]; ?></span>' <span class="capitalize"><?php echo $_POST["lastname"]; ?></span>
       </h3> <br>
        
         <p>
           Born on <span><?php echo $today ?></span> in <span><?php echo $_POST["place0"]; ?></span>, sweet little <span><?php echo $_POST["name1"]; ?></span> was welcomed into this world. Weighing <span><?php echo $_POST["number0"]; ?></span> pounds, parents <span><?php echo $_POST["firstname"]; ?></span> and <span><?php echo $_POST["name2"]; ?></span> are incredibly happy with their new bundle of joy. So excited about their little newborn, new parents immediately went <span><?php echo $_POST["verb0"]; ?></span> a little after their baby's welcoming into the world.
        
       </p>
<br>
       <p>
           Baby <span><?php echo $_POST["name1"]; ?></span> joins siblings <span><?php echo $_POST["name0"]; ?></span> and <span><?php echo $_POST["name3"]; ?></span> to the <span><?php echo $_POST["lastname"]; ?></span> family.
           
       </p>
       
    
    </div>

</article>        
        
        
<?php include( 'includes/html-bottom.inc.php' ); ?>