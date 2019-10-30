<div class="single-event-wrapper">
    <div id="single-event" class="single-event">
        <h2><?php the_title() ?></h2>
        <h3><?php 
            $from = get_post_meta(get_the_ID(), 'date_from', true); 
            $to = get_post_meta(get_the_ID(), 'date_to', true);
            
            echo $from;

            if ( $to != null){
                list($date_test, $time_test) = explode(' ', $to);
                echo ' - ' . $time_test;
            }
            
            ?></h3>
        <a>
                <?php the_post_thumbnail( 'full', array( 'alt' => the_title_attribute( 'echo=0' )) ); ?>  
        </a>
        <?php the_content() ?>
    </div>
</div>