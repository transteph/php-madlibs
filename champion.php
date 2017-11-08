<?php 
    // set the page title
    $page_title = 'Food Competition Master!';
    include( 'includes/html-top.inc.php' );
include( 'includes/nav.inc.php' ); ?>
   
<article class="non-index" id="champion-page">
    <h2 class="champ-heading"><span class="capitalize"><?php echo $_POST["food0"]; ?></span> Eating Champion</h2>
     
     <div class="text">
        <p>
        
      <span><?php echo $_POST["firstname"]; ?></span> <span class="capitalize">"The <?php echo $_POST["noun0"]; ?></span>" <span><?php echo $_POST["lastname"]; ?></span> shocked the world this past Sunday when <span class="lowercase"><?php echo $_POST["pronoun0"]; ?></span> broke the world record for most <span><?php echo $_POST["adjective0"]; ?></span> <span><?php echo $_POST["food0"]; ?></span>s eaten while <span><?php echo $_POST["verb0"]; ?></span>. "People said I could never do it", said <span><?php echo $_POST["firstname"]; ?></span>, "but no one has really seen how hard I train behind closed doors other than my pet <span><?php echo $_POST["animal0"]; ?></span>". 
         </p>
         <br>
         <p>
        Downing over <span><?php echo $_POST["number0"]; ?></span> pounds of fresh <span><?php echo $_POST["adjective0"]; ?></span> <span><?php echo $_POST["food0"]; ?></span>s in 20 minutes, spectators were left speechless by the sight. "Never in my lifetime have I seen something like that," stated retired <span><?php echo $_POST["job0"]; ?></span> <span><?php echo $_POST["name0"]; ?></span> <span><?php echo $_POST["lastname0"]; ?></span>, "Someone even snuck in a <span><?php echo $_POST["food1"]; ?></span> into the food pile, and <span class="lowercase"><?php echo $_POST["pronoun0"]; ?></span> still ate that!".
         </p>
     <br>
         <p>
             After <span><?php echo $_POST["firstname"]; ?></span>'s historic meal, town mayor <span><?php echo $_POST["name1"]; ?></span> appeared on stage to offer the key to the city to the World <span><?php echo $_POST["adjective0"]; ?></span> <span><?php echo $_POST["food0"]; ?></span> champion. However, at yet another shock to the audience, <span><?php echo $_POST["firstname"]; ?></span> accidentally mistook the key for chocolate, immediately consuming it before the cries of the crowd could be heard. <span><?php echo $_POST["firstname"]; ?></span>'s bowel movements are now under strict monitoring for evidence of the city's 24 Karat Gold key. 
             
         </p>
    </div>
</article>

        
        
        
<?php include( 'includes/html-bottom.inc.php' ); ?>