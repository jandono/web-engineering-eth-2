            <?php 

                $args = array(
                    'post_type' => 'menu-item',
                    'posts_per_page' => 100,
                    'order' => 'asc',
                    'meta_key' => 'type',
                );

                $the_query = new WP_Query( $args );

                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        get_template_part( 'content', get_post_type() );
                    }
                    /* Restore original Post Data */
                    wp_reset_postdata(); 
                } else {
                // no posts found
                }
            ?>
          </aside>
        </div>
      </section>

      <!-- Third -->
      <div id="events" class="section">
        <section id="our-events" class="text text-centered">
            <div class="jq-from-left">
                <h2>Our Events</h2>
                <p>In our Philosophy, a restaurant is not only a place where to eat but also to communicate and know new people. For these reasons we organize various events every month.<br />
                </p>
            </div>
        </section>
          
        <div id="upcoming-past-wrapper">
          <section id="upcoming-events" class="text text-centered white">
            <div class="jq-from-bottom">
                <h2><b> Upcoming Events </b></h2>
                
                <?php 
                    date_default_timezone_set('Europe/Skopje');
                    $now = date('Y/m/d H:i');
                
                    $args = array(
                        'post_type' => 'event-item',
                        'posts_per_page' => 3,
                        'order' => 'asc',
                        'meta_key' => 'date_from',
                        'orderby' => 'meta_value',
                        'meta_query' => array(
                            array(
                                'key' => 'date_from',
                                'value' => $now,
                                'compare' => '>='
                            )
                        )
                    );

                    $the_query = new WP_Query( $args );

                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            get_template_part( 'content', get_post_type() );
                        }
                        /* Restore original Post Data */
                        wp_reset_postdata(); 
                    } else {
                    // no posts found
                    }   
                ?>
                
            </div>   
          </section>
          <br /> <br />
          <section id="past-events" class="text text-centered white jq-from-left">
            <h2> <b> Past Events </b> </h2>
              
            <?php 
                date_default_timezone_set('Europe/Skopje');
                $now = date('Y/m/d H:i');
              
                $args = array(
                    'post_type' => 'event-item',
                    'posts_per_page' => 4,
                    'order' => 'desc',
                    'meta_key' => 'date_from',
                    'orderby' => 'meta_value',
                    'meta_query' => array(
                        array(
                            'key' => 'date_from',
                            'value' => $now,
                            'compare' => '<'
                        )
                    )
                );

                $the_query = new WP_Query( $args );

                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        get_template_part( 'content-past', get_post_type() );
                    }
                    /* Restore original Post Data */
                    wp_reset_postdata(); 
                } else {
                // no posts found
                }   
            ?>  
          </section>
          <footer id="pe-see-more" class="text text-centered">
                <br /> <br />
                <a id="see-more" href="#">See More</a>
          </footer>
        </div>
      </div>