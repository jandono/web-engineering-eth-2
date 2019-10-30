<article id="<?php echo get_the_ID() ?>" class="upcoming-event">
    <a href="">
        <?php the_post_thumbnail( 'full', array( 'alt' => the_title_attribute( 'echo=0' )) ); ?>  
    </a>

    <h3 class='ajax-event' style="cursor: pointer"><?php the_title() ?></h3>
    <h4>

    <?php 
        $from = get_post_meta(get_the_ID(), '_event_from', true);
        $to = get_post_meta(get_the_ID(), '_event_to', true);

        echo $from;

        if ( $to != null){
            list($date_test, $time_test) = explode(' ', $to);
            echo ' - ' . $time_test;
        }

    ?>
    </h4>
    <?php 
        the_excerpt();
    ?>
</article>