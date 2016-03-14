<?php

/* allow shortcodes in text widget - specifically [email] */
add_filter( 'widget_text', 'shortcode_unautop' );
add_filter( 'widget_text', 'do_shortcode' );