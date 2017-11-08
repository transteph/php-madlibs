<?php 
    // set the page title
    $page_title = 'Mad Libs'; 
    include( 'includes/html-top.inc.php' );
   include( 'includes/nav.inc.php' ); 
      ?>
<article class="non-index">
    
        <h2 class="baby-header">Your Future Baby</h2>

    <form action="baby.php" method="post">

    <label>Your First Name:</label>
    <input type="text" name="firstname">
    <br>
    <label>Your Last Name:</label>
    <input type="text" name="lastname">
    <br>
    <label>Favourite Character's First Name:</label>
    <input type="text" name="name1">
    <br>
    <label>Noun:</label>
    <input type="text" name="noun0">
    <br>
    <label>Place:</label>
    <input type="text" name="place0">
    <br>
      <label>Your Celebrity Crush's Name:</label>
    <input type="text" name="name2">
    <br>
     <label>Verb (ending in -ing):</label>
    <input type="text" name="verb0">
    <br>
    <label>Number:</label>
    <input type="text" name="number0">
    <br>
    <label>Any Name:</label>
    <input type="text" name="name3">
    <br>
    <label>Any Name:</label>
    <input type="text" name="name0">
    <br>
    
    <input type="submit">
</form>
	<a class="random" href="surprise-baby.php">
<div id="triangle-isosceles">
I'm lazy. Do it for me.
		</div></a>
	
</article>
	
<?php include( 'includes/html-bottom.inc.php' ); ?>