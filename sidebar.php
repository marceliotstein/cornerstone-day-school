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
    } else if ($current_page=="ACADEMICS") {
      ?>
      <div class="cds-side-index">
        <div class="cds-side-title">Academics</div>
        <div class="cds-side-anchor">&#9679;&nbsp; <a href="#meeting-varied-abilities">Meeting Varied Abilities</a></div>
        <div class="cds-side-anchor">&#9679;&nbsp; <a href="#middle-school"></a>Middle School</div>
        <div class="cds-side-anchor">&#9679;&nbsp; <a href="#high-school"></a>High School</div>
        <div class="cds-side-anchor">&#9679;&nbsp; <a href="#early-college-and-work-study-programs"></a>Early College and Work Study Programs</div>
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

  <div class="cds-sidebar-experience">
    <a href="/cornerstone-experience"><div id="experience-cycle2"><img src="/wp-content/themes/educator-child/images/transparent600x400.gif" /></div></a>
  </div>

  <div class="cds-sidebar-virtual-tour">
    <a href="/virtual-tour"><img src="/wp-content/themes/educator-child/images/cds-virtualtour-promo.jpg" /></a>
  </div>

  <div class="cds-sidebar-parents-faq">
    <a href="/parents-faq"><img src="/wp-content/themes/educator-child/images/cds-parents-faq.jpg" /></a>
  </div>

  <div class="cds-sidebar-pubs">
    <a href="/publications"><img src="/wp-content/themes/educator-child/images/cds-pubs-vertical.jpg" /></a>
  </div>

  <div class="cds-parent-quotes">
    <div class="cds-sidebar-feature">Quotes From Parents</div>
    <?php if ($current_page=="THERAPEUTIC") { ?>
      <blockquote class="wp-block-quote cds-parent-quote"><p>Therapy, school and the doc, under one roof, uniquely structured so my daughter can return to the “normal” routines of school, homework, socialization and living, never possible before.<br /><i>Parent, Colts Neck, NJ</i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p>Cornerstone is the third therapeutic school he has attended: I know it’s his last. Here he is gaining both self-confidence and management techniques so he can move forward on a strong foundation.<br /><i>Parent: Morristown, NJ</i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p>Cornerstone was my gasoline. I was the engine saying “STOP”, but the gas kept me running. I went in as an old El Camino and came out as a new Maserati!<br /><i>Student, Westfield, NJ</i></p></blockquote>
    <?php } else if ($current_page=="ACADEMICS") { ?>
      <blockquote class="wp-block-quote cds-parent-quote"><p>My son has been able to establish a meaningful relationship with his teachers for the first time.<br /><i>Parent: Millburn, NJ</i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p>Our daughter started college this year. We can credit the excellent staff at Cornerstone Day School with helping to bring out the best in her.<br /><i>Parent, Rutherford, NJ</i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p>I never expected rigorous academics in a therapeutic school, but my son is now in honors classes, real ones, and doing great. Thanks.<br /><i>A skeptical parent, Summit, NJ</i></p></blockquote>
    <?php } else { ?>
      <blockquote class="wp-block-quote cds-parent-quote"><p>After being in partial programs twice and then being on home instruction, finally there is a light at the end of the tunnel. I only wish we had found Cornerstone for our son a couple of years ago.<br /><br /><i>Parent: Freehold, New Jersey</i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p>My son has been able to establish a meaningful relationship with his teachers for the first time.<br /><br /><i>Parent: Millburn, New Jersey</i></p></blockquote>
    <?php } ?>
  </div>
</aside>
