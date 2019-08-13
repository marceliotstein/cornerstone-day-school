<aside class="edgt-sidebar">
  <?php 
    // determine current page
    global $wp;
    $current_url = home_url(add_query_arg(array(), $wp->request));
    $current_path = str_replace("http://cornerstone2.marceliotstein.net/","",$current_url);
    $current_path = str_replace("http://cornerstone2.marceliotstein.net","",$current_path);

    $current_page = "HOME";
    if ($current_path=="therapeutic-services") { 
      $current_page = "THERAPEUTIC";
    }

    if ($current_page=="THERAPEUTIC") {
      ?>
      <div class="cds-side-index">
        <div class="cds-side-title">Therapeutic Services</div>
        <div class="cds-side-anchor">&#9679;&nbsp; <a href="#clinical-services">Clinical Services</a></div>
        <div class="cds-side-anchor">&#9679;&nbsp; <a href="#specialized-services">Specialized Services</a></div>
      </div>
      <?php
    }
  ?>

  <?php
    $edgt_sidebar = educator_edge_get_sidebar();
    
    if (is_active_sidebar($edgt_sidebar)) {
      dynamic_sidebar($edgt_sidebar);
    }
  ?>
</aside>
