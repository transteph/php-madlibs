<?php 

    // pages
    $pages = array();
    $pages[ 0 ] = 'discovery.php';
    $pages[ 1 ] = 'champion.php';
    $pages[ 2 ] = 'baby.php';

    // surprise pages
    $surprisePages = array();
    $surprisePages[ 0 ] = 'surprise-discovery.php';
    $surprisePages[ 1 ] = 'surprise-champion.php';
    $surprisePages[ 2 ] = 'surprise-baby.php';

    // shuffle each array
    shuffle($pages);


    // set the page title
    $page_title = 'Mad Libs'; 
    include( 'includes/html-top.inc.php' );
include( 'includes/nav.inc.php' ); 
      ?>
 <article class="non-index surprise-form">   
    <h2 id="future-heading"> Surprise!</h2>

    <form action="<?php echo $pages[0] ?>" method="post">

    <label>Your First Name:</label>
    <input type="text" name="firstname">
    <br>
    <label>Your Last Name:</label>
    <input type="text" name="lastname">
    <br>
     <label>Your Pronoun:</label>
    <input type="text" name="pronoun0">
    <br>
    <label>Any First Name:</label>
    <input type="text" name="name0">
    <br>
    <label>Noun:</label>
    <input type="text" name="noun0">
    <br>
    <label>Animal:</label>
    <input type="text" name="animal0">
    <br>  
    <label>Verb (ending in -ing):</label>
    <input type="text" name="verb0">
    <br>
    <label>Adjective:</label>
    <input type="text" name="adjective0">
    <br>
    <label>Adjective:</label>
    <input type="text" name="adjective1">
    <br> 
    <label>Noun:</label>
    <input type="text" name="noun1">
    <br>
    <label>Noun:</label>
    <input type="text" name="noun2">
    <br>
     <label>Any First Name:</label>
    <input type="text" name="name1">
    <br>
    <label>Any Occupation:</label>
    <input type="text" name="job0">
    <br>
    <label>Place:</label>
    <input type="text" name="place0">
    <br>
      <label>Any First Name:</label>
    <input type="text" name="name2">
    <br>
     <label>Food (singular):</label>
    <input type="text" name="food0">
    <br>
     <label>Verb (ending in -ing):</label>
    <input type="text" name="verb1">
    <br>
    <label>Verb (ending in -ing):</label>
    <input type="text" name="verb2">
    <br>
    <label>Noun:</label>
    <input type="text" name="noun3">
    <br>
    <label>Number:</label>
    <input type="text" name="number0">
    <br>
    <label>Any First Name:</label>
    <input type="text" name="name3">
    <br>
    <label>Any First Name:</label>
    <input type="text" name="name4">

    
    <input type="submit">
</form>
	 
<div id="triangle-isosceles">
<a class="random" href="<?php echo $surprisePages[0] ?>">I'm lazy. Do it for me.</a>
	 </div>	
	
</article>
<?php include( 'includes/html-bottom.inc.php' ); ?>