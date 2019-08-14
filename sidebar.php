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
    } else if ($current_path=="academics") { 
      $current_page = "ACADEMICS";
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

  <div class="cds-sidebar-pubs">
    <a href="/publications"><img src="/wp-content/themes/educator-child/images/cds-pubs-vertical.jpg" /></a>
  </div>
  <div class="cds-parent-quotes">
    <div class="cds-sidebar-feature">Quotes From Parents</div>
    <blockquote class="wp-block-quote cds-parent-quote"><p>After being in partial programs twice and then being on home instruction, finally there is a light at the end of the tunnel. I only wish we had found Cornerstone for our son a couple of years ago.<br />Parent: Freehold, New Jersey</p></blockquote>
    <blockquote class="wp-block-quote cds-parent-quote"><p>My son has been able to establish a meaningful relationship with his teachers for the first time.<br />Parent: Millburn, New Jersey</p></blockquote>
  </div>

  <div class="cds-parent-quotes">
    <div class="cds-sidebar-feature">Cornerstone Experience, Parents FAQ, Publications</div>
  </div>
</aside>
