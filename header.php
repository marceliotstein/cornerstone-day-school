<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php
    /**
     * educator_edge_header_meta hook
     *
     * @see educator_edge_header_meta() - hooked with 10
     * @see educator_edge_user_scalable_meta - hooked with 10
     */
    do_action('educator_edge_header_meta');

    // determine current page
    global $wp;
    $current_url = home_url(add_query_arg(array(), $wp->request));
    $current_path = str_replace("http://cornerstone2.marceliotstein.net/","",$current_url);
    $current_path = str_replace("http://cornerstone2.marceliotstein.net","",$current_path);

    $current_page = "HOME";
    if ($current_path=="therapeutic-services") { 
      $current_page = "THERAPEUTIC";
    } else if ($current_path=="academics") { 
      $current_page = "ACADEMICS";
    }

    wp_head(); 
    ?>
    <link rel="stylesheet" id="educator-edge-child-style-css" href="http://cornerstone2.marceliotstein.net/wp-content/themes/educator-child/style.css?ver=RUEIOWESJFDKLS" type="text/css" media="all">
</head>
<body <?php body_class();?> itemscope itemtype="http://schema.org/WebPage">
    <?php
    /**
     * educator_edge_after_body_tag hook
     *
     * @see educator_edge_get_side_area() - hooked with 10
     * @see educator_edge_smooth_page_transitions() - hooked with 10
     */
    do_action('educator_edge_after_body_tag'); ?>

    <div class="edgt-wrapper">
        <div class="edgt-wrapper-inner">
            <?php educator_edge_get_header(); ?>
	
	        <?php
	        /**
	         * educator_edge_after_header_area hook
	         *
	         * @see educator_edge_back_to_top_button() - hooked with 10
	         * @see educator_edge_get_full_screen_menu() - hooked with 10
	         */
	        do_action('educator_edge_after_header_area'); ?>
	        
            <div class="edgt-content" <?php educator_edge_content_elem_style_attr(); ?>>
                <div class="edgt-content-inner">
                <?php if ($current_page=="THERAPEUTIC") { ?>
                  <div class="cds-picstrip"><div class="cds-narrowview"><img src="/wp-content/themes/educator-child/images/therapeutic1200.jpg" /></div><div class="cds-wideview"><img src="/wp-content/themes/educator-child/images/therapeutic1350.jpg" /></div></div>
                <?php } else if ($current_page=="ACADEMICS") { ?>
                  <div class="cds-picstrip"><div class="cds-narrowview"><img src="/wp-content/themes/educator-child/images/academics1200.jpg" /></div><div class="cds-wideview"><img src="/wp-content/themes/educator-child/images/academics1350.jpg" /></div></div>
                <?php } ?>
