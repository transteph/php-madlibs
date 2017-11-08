<?php 

    // set the page title
    $page_title = 'Mad Libs'; 
    include( 'includes/html-top.inc.php');
        include( 'includes/nav.inc.php' );
      ?>
    <article class="non-index" id="champion-page">
    <h2 class="champ-heading">Your Future Championship Title</h2>

    <form action="champion.php" method="post">

    <label>Your First Name:</label>
    <input type="text" name="firstname">
    <br>
    <label>Your Last Name:</label>
    <input type="text" name="lastname">
    <br>
    <label>Your Pronoun:</label>
    <input type="text" name="pronoun0">
    <br>
    <label>Noun:</label>
    <input type="text" name="noun0">
    <br>
    <label>Food (singular):</label>
    <input type="text" name="food0">
    <br>
    <label>Adjective:</label>
    <input type="text" name="adjective0">
    <br>
    <label>Verb (ending in -ing):</label>
    <input type="text" name="verb0">
    <br>
    <label>Animal:</label>
    <input type="text" name="animal0">
    <br>
    <label>Number:</label>
    <input type="text" name="number0">
    <br>
    <label>First Name:</label>
    <input type="text" name="name0">
    <br>
    <label>Occupation:</label>
    <input type="text" name="job0">
    <br>
     <label>Celebrity Last Name:</label>
    <input type="text" name="lastname0">
    <br>
     <label>Food (singular):</label>
    <input type="text" name="food1">
    <br>
    <label>Celebrity Full Name:</label>
    <input type="text" name="name1">
    <br>
    

    <input type="submit">
</form>

<div id="triangle-isosceles">
<a class="random" href="surprise-champion.php">I'm lazy. Do it for me.</a>
</div>
</article>
<?php include( 'includes/html-bottom.inc.php' ); ?>