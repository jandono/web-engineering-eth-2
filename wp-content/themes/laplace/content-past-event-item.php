<article id="<?php echo get_the_ID() ?>" class="past-event">
    <a href="">
        <?php the_post_thumbnail( 'full', array( 'alt' => the_title_attribute( 'echo=0' )) ); ?>
    </a>

    <h3 class="ajax-event" style="cursor: pointer"><?php the_title() ?></h3>
    <h4>
        <?php 
            $from = get_post_meta(get_the_ID(), 'date_from', true);
            $to = get_post_meta(get_the_ID(), 'date_to', true);

            echo $from;

            if ( $to != null){
                list($date_test, $time_test) = explode(' ', $to);
                echo ' - ' . $time_test;
            }

        ?>
    </h4>
</article>

