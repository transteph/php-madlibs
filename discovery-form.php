<?php 
    // set the page title
    $page_title = 'Mad Libs'; 
    include( 'includes/html-top.inc.php');
           include( 'includes/nav.inc.php' ); 
      ?>
    <article class="non-index" id="discover-page">
    <h2>Your Groundbreaking Discovery<br></h2>

    <form action="discovery.php" method="post">

    <label>Your First Name:</label>
    <input type="text" name="firstname">
    <br>
    <label>Verb (ending in -ing):</label>
    <input type="text" name="verb0">
    <br>
    <label>Animal:</label>
    <input type="text" name="animal0">
    <br>  
     <label>Noun:</label>
    <input type="text" name="noun0">
    <br>
    <label>Place:</label>
    <input type="text" name="place0">
    <br>
       <label>Verb (ending in -ing):</label>
    <input type="text" name="verb1">
    <br>
       <label>Adjective:</label>
    <input type="text" name="adjective0">
    <br>
     <label>Noun:</label>
    <input type="text" name="noun1">
    <br>  
      <label>Adjective:</label>
    <input type="text" name="adjective1">
    <br> 
       <label>Noun:</label>
    <input type="text" name="noun2">
    <br>
       <label>Verb (ending in -ing):</label>
    <input type="text" name="verb2">
    <br>
       <label>Noun (Plural):</label>
    <input type="text" name="noun2">
    <br>  
       <label>Celebrity Full Name:</label>
    <input type="text" name="name1">
    <br>
    
    <input type="submit">
</form>
      
<div id="triangle-isosceles">
	<a class="random" href="surprise-discovery.php">I'm lazy. Do it for me.</a>
 </div>
</article>
<?php include( 'includes/html-bottom.inc.php' ); ?>