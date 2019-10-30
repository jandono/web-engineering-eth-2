<article class="menu-item <?php echo get_post_meta(get_the_ID(), 'type', true); if(get_post_meta(get_the_ID(), 'type', true) !== 'appetizers') echo ' hidden' ?>">
      <a href="#" >
        <?php the_post_thumbnail( 'full', array( 'alt' => the_title_attribute( 'echo=0' )) ); ?>
        <div class="newAppearance"> </div>  
      </a>
      <div class="overlay"> 
         <a href="#<?php echo get_the_ID() ?>" class="white"> <?php the_title() ?>
         </a>
      </div> 
</article>

<div id="<?php echo get_the_ID() ?>" class="details">
    <div>
        <a href="#close" title="Close" class="close">x</a>
        <h2><?php the_title() ?></h2>
        <div><?php the_post_thumbnail( 'full', array( 'alt' => the_title_attribute( 'echo=0' )) ); ?></div>
        <?php the_content() ?>
    </div>
</div>