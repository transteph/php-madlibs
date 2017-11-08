<?php 
    // set the page title
    $page_title = 'Mad Libs'; 
    include( 'includes/html-top.inc.php' );
   
 include( 'includes/arrays.php' );
      ?>  
      <section class="front-page">

  <header>
    <a href="index.php">
    <h1>Mad Libs</h1>
        <p>Words are Fun!</p>
        </a>
        </header>
    <!-- page content begins -->
    
    <div class="wrapper">
<nav id="nav">
    <a class="icon-icons-hamburger" id="show-button" href="#nav"><span>&nbsp;</span></a>
        <a class="icon-icons-close" id="hide-button" href="#"><span>&nbsp;</span></a>
    <ul id="menu">
                      <li class="nav-item"><a href="baby-form.php">Baby Announcement</a></li>
                       <li class="nav-item"><a href="champion-form.php">Championship</a></li>
                      <li class="nav-item"><a href="discovery-form.php">New Discovery</a></li>
                      <li class="nav-item"><a href="surprise-form.php">Surprise Mad Lib</a></li>
                </ul>

</nav>      
          <div id="arrow"><i class="fa fa-hand-o-up  "></i><br>
              <p>Make <br>your <br>own!</p>
          </div>
    <div class="paper-body">
<section class="paper">
 <article class="head">
   <div id=example>
        <h4 id="ex-header">Example</h4></div>
    <h2 id="story-title">You Made History!</h2>
    </article>
    
  <p>&nbsp;</p>
   

    <div class="home">
        <p>Dear <span><?php echo $name[0] ?></span>,
           <br>
            I saw you on the television news and immediately went to write you a letter. It's so incredible to hear that you discovered the <span><?php echo $verb[0] ?></span> species of <span><?php echo $animal[0] ?></span>! I always knew you were a curious little <span><?php echo $noun[0] ?></span>. I honestly thought you went to <span><?php echo $place[0] ?></span> just to vacation. Little did I know that you'd go <span><?php echo $verb[1] ?></span> and end up discovering a new species! Now, the news anchor said that you were found looking pretty <span><?php echo $adjective[0] ?></span> when the scientists found you. I surely do hope that you're taking care of yourself! I've heard <span><?php echo $noun[1] ?></span> mixed with a little <span><?php echo $adjective[1] ?></span> <span><?php echo $noun[2] ?></span> does wonders for your health.
            <br>
            Anywho, I must go back to <span><?php echo $verb[2] ?></span> now. Let your mom know that I'm bringing <span><?php echo $noun[2] ?>s</span> for dinner next week! 
             <br>
             Love,
             <br>
             <span><?php echo $name[1] ?></span>
      
    </div>
</section>
</div>
          
<div id="latest">
    <h3>Latest Mad Libs</h3>
</div>
          

<a href="baby-form.php">
     <figure class="lib-form grow" id="link1"> 
         
        
             <p>Your Future Baby</p>
 
         
    </figure>
</a>
  
<a href="champion-form.php">
    <figure class="lib-form grow" id="link2"> 
        <p>Your Championship Title</p>
    </figure>
 </a>
          
<a href="discovery-form.php">
     <figure class="lib-form grow" id="link3"> 
         <p>Your Historic Discovery</p>
    </figure>
</a>
		  
<a href="surprise-form.php">
     <figure class="lib-form grow" id="link4"> 
         <p>Surprise Mad Lib</p>
    </figure>
</a>		  

</div>
          
</section>



<?php include( 'includes/html-bottom.inc.php' ); ?>
