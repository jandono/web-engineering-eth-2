<!DOCTYPE HTML>
<html>
  <head>
    <title>LaPlace Restaurant</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <?php wp_head();?>
  </head>
  <body>
    <!-- Header -->
    <header id="mainHead" class="section">
      <nav id="mainNav" class="text-centered">
        <ul>
           <li><a href="#about" >About</a></li>
           <li><a href="#menu" >Menu</a></li>
           <li id="li-img"><a href="index.html"  ><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt=""> </a></li>
           <li><a href="#events" >Events</a></li>
           <li><a href="#contacts">Contacts</a></li>
        </ul>
      </nav>
    </header>

    <!-- Website Wrapper -->   
    <div id="website-wrapper"> 
      <section id="banner" class="section white text-centered">  
            <img src="<?php echo get_template_directory_uri(); ?>/images/header.jpg"/>
            <h1 class="jq-from-left"> LaPlace - Zurich </h1>
            <a href="#book" class="white">Book a Table</a>
      </section>
          
      <section id="about" class="section text-centered" style="    background-image: url('<?php echo get_template_directory_uri(); ?>/images/small1.jpg');">
        <!-- First About-->
        <article id="welcome" class="text">
            <div class="jq-from-bottom">
                <h2>Welcome</h2>
                <p>LaPlace Restaurant was founded in May of 2015. The cuisine we serve is created with the utmost attention to details. Our emphasis is on providing fresh, locally sourced, exquisite food. As such our menus change on a regular basis, allowing us to offer you mouth watering, perfectly prepared dishes.
                </p>
            </div> 
        </article>
        <!-- Second About -->		
        <article id="hq-cousine" class="text white jq-from-left">
           <h2  >High Quality Cuisine</h2>
           <p >Our cuisine is a melting pot of different cultures which have come together to form a unique blend of flavours and techniques.<br />
        </article>
        <!-- Third About -->				
        <article id="best-ingredients" class="text">
            <div class="jq-from-left">
               <h2>Only the Best Ingredients</h2>
               <p>It's vital to our operation to make sure everybody is aware of the quality of the ingredients we use. As the choices we make in terms of which supplies we buy for our recipes is intrinsic to factors such as the healthiness of the food we make to the price you pay for it. That's why on our menus you find the origins of each of our ingredients.</p>
            </div>
        </article>
      </section>
          
      <!-- Menu -->
      <section id="menu" class="section">
        <div id="lr-menu-wrapper">
          <section id="menu-left" class="text white">
              <h2 class="text-centered">Our Menu</h2>
              <h3 class="text-centered">Appetizers</h3>
              <p>We serve a seasonal tasting menu that focuses on local ingredients. Our appetizers may vary during the year to always ensure the best quality.
                 For the appetizers, we are famous for our bruschettas that we serve in several different variants.
              </p>
              <nav id="menu-options">
                 <a id="appetizers" href="#appetizers" class="white in-center">Appetizers</a>
                 <a id="pasta" href="#fresh-pasta" class="white in-center">Fresh Pasta</a>
                 <a id="meat" href="#meat-fish" class="white in-center">Meat - Fish</a>
                 <a id="dessert" href="#dessert" class="white in-center">Dessert</a>
              </nav>
          </section>

          <aside id="menu-right">