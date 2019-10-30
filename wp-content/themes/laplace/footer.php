<!-- Basic Elements -->
      <!-- Fourth -->
      <section id="contacts" class="section">
        <header  class="text text-centered">
          <h2>Contact us</h2>
          <p>Feel free to contact us for any kind of issues or questions</p>
        </header>
        <div id="contact-form-wrapper">
          <form method="post" action="#" class="jq-from-left">
            <div id="contact-form-content">
              <div id="contact-form-inputs">
                <input id="name" type="text" placeholder="Name" />
                <input id="email" type="text" placeholder="Email" />
              </div>
              <div id="contacts-message"><textarea name="message" placeholder="Message"></textarea></div>
            </div>
            <div id="contact-submit-clear-form" class="text-centered">
              <input id="contact-submit-form" type="submit"  value="Send Message" />
              <input id="contact-clear-form" type="reset"  value="Clear Form" />
            </div>
          </form>
        </div>
      </section>


      <!-- 5th -->	
      <section id="book" class="section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/book-table.jpg');">
        <div id="inner-book" class="text text-centered white jq-from-bottom">
          <h2>Book a table</h2>
          <form method="post" action="#">
           <div class="book-form-entries">
              <input class="book-form-entry" type="text" placeholder="Name" />
              <input class="book-form-entry" type="text" placeholder="Phone" />
            </div>
            <div class="book-form-entries">
              <input type="text" placeholder="Date" />
              <input type="text" placeholder="Time" />
            </div>
            <div id="book-message" >
              <textarea name="message" placeholder="Message"></textarea>
            </div>
            <br />
            <div id="book-submit-form">
              <input type="submit"  value="Book" />	
            </div>
          </form>
        </div>
      </section>


      <!-- Footer -->
      <footer id="mainFooter" class="section">
        <div class="jq-from-left">
            <div class="filler"><br/></div>
            <section id="footer-left" class="text">
                <h2> Opening Hour </h2>
                <p> <b> MONDAY : </b><?php echo get_post_meta(get_the_ID(), 'monday', true) ?></p>
                <br />
                <p> <b>TUE-FRI : </b>8am - 12am</p>
                <br />
                <p> <b>SAT-SUN : </b>7am - 1am</p>
                <br />
                <p> <b>HOLYDAYS : </b>12pm-12am</p>
                <br />
            </section>
            <section id="footer-right" class="text">
                <h2>  Contacts </h2>
                <p> <b>ADDRESS : </b>4578 Zurich</p>
                <br />
                <p> Badenerstrasse 500</p>
                <br />
                <p> <b>PHONE : </b>(606) 144-0100 </p>
                <br />
                <p> <b>EMAIL : </b>admin@laplace.com</p>
                <br />
            </section>
            <div class="filler"></div>
        </div>
      </footer>
          
      <section id="legal" class="section text-centered">
        <ul >
          <li>&copy; Untitled. All rights reserved.</li>
          <li>Design: ETH Zurich, Globis Group</li>
        </ul>
      </section>
    </div>
<!--       
      <div id="appetizers-detail1" class="details">
        <div>                                
          <a href="#close" title="Close" class="close">x</a>
          <h2>Bruschette with Tomatoes</h2>
          <img src="images/appetizers-pic01.jpg" alt="" />
          <p>Pronounced “brusketta”, this classic Italian appetizer is a perfect way to capture the flavors of garden ripened tomatoes, fresh basil, garlic, and olive oil. Think of it as summer on toast!</p>
        </div>
      </div>
        <div id="appetizers-detail2" class="details">
            <div>
                <a href="#close" title="Close" class="close">x</a>
                <h2>Green Rolls</h2>
                <img src="images/appetizers-pic02.jpg" alt="" />
                <p>Refreshing veggie spring rolls! Full of bright herbs, crisp pea shoots, and creamy avocado, they make a wonderful light lunch or healthy appetizer!</p>
            </div>
        </div>

       <div id="appetizers-detail3" class="details">
            <div>                                
                <a href="#close" title="Close" class="close">x</a>
                <h2>Eggplants</h2>
                <div><img  src="images/appetizers-pic03.jpg" alt="" /></div>
                <p>This homey, soul-satisfying dish consists of caramelized roasted eggplant served over stewed lentils with crunchy roasted pine nuts and incredibly light, creamy tahini sauce.</p>
            </div>
        </div>
        <div id="appetizers-detail4" class="details">
             <div>                                 
                <a href="#close" title="Close" class="close">x</a>
                <h2>Bruschette</h2>
                <img src="images/appetizers-pic04.jpg" alt="" />
                <p>Bruschetta is an antipasto from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.</p>
             </div>
        </div>
        <div id="appetizers-detail5" class="details">
            <div>                                
                <a href="#close" title="Close" class="close">x</a>
                <h2>Meatballs</h2>
                <img src="images/appetizers-pic05.jpg" alt="" />
                <p>Classic Italian meatballs with 12 hour slow cooked Napoli sauce served with parmesan crisp, crispy basil and house pesto.</p>
            </div>
        </div>
        <div id="appetizers-detail6" class="details">
             <div>                                 
                <a href="#close" title="Close" class="close">x</a>
                <h2>Spicy Beans</h2>
                <img src="images/appetizers-pic06.jpg" alt="" />
                <p>Tangy and sweet old-fashioned baked beans with a little jalapeno. Two humble ingredients have big impact here: The Parmesan rind adds richness; the dried beans deliver creaminess.</p>
            </div>
        </div> 
-->
        <?php wp_footer(); ?>
   </body>
</html>