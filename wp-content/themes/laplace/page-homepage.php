<?php

/**
    Template name: homepage
**/

get_header();
get_template_part( 'content', get_post_type() );
get_footer();