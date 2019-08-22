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
    } else if ($current_path=="school-avoidance") { 
      $current_page = "AVOIDANCE";
    } else if ($current_path=="transitions") {
      $current_page = "TRANSITIONS";
    } else if ($current_path=="admissions") {
      $current_page = "ADMISSIONS";
    } else if ($current_path=="the-cornerstone-experience") {
      $current_page = "EXPERIENCE";
    } else if ($current_path=="who-we-are") {
      $current_page = "WHO";
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
    } else if ($current_page=="SCHOOL AVOIDANCE") {
      ?>
      <div class="cds-side-index">
        <div class="cds-side-title">School Avoidance</div>
        <div class="cds-side-anchor">&#9679;&nbsp; <a href="#pathways">Pathways</a></div>
      </div>
      <?php
    } else if ($current_page=="TRANSITIONS") {
      ?>
      <div class="cds-side-index">
        <div class="cds-side-title">Transitions</div>
      </div>
      <?php
    } else if ($current_page=="ADMISSIONS") {
      ?>
      <div class="cds-side-index">
        <div class="cds-side-title">Admissions</div>
      </div>
      <?php
    } else if ($current_page=="WHO") {
      ?>
      <div class="cds-side-index">
        <div class="cds-side-title">Who We Are</div>
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
      <blockquote class="wp-block-quote cds-parent-quote"><p>Therapy, school and the doc, under one roof, uniquely structured so my daughter can return to the “normal” routines of school, homework, socialization and living, never possible before.<i>Parent, Colts Neck, NJ</i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p>Cornerstone is the third therapeutic school he has attended: I know it’s his last. Here he is gaining both self-confidence and management techniques so he can move forward on a strong foundation.<br /><i>Parent, Morristown, NJ</i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p>Cornerstone was my gasoline. I was the engine saying “STOP”, but the gas kept me running. I went in as an old El Camino and came out as a new Maserati!<br /><i>Student, Westfield, NJ</i></p></blockquote>
    <?php } else if ($current_page=="ACADEMICS") { ?>
      <blockquote class="wp-block-quote cds-parent-quote"><p>My son has been able to establish a meaningful relationship with his teachers for the first time.<br /><i>Parent, Millburn, NJ</i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p>Our daughter started college this year. We can credit the excellent staff at Cornerstone Day School with helping to bring out the best in her.<br /><i>Parent, Rutherford, NJ</i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p>I never expected rigorous academics in a therapeutic school, but my son is now in honors classes, real ones, and doing great. Thanks.<br /><i>A skeptical parent, Summit, NJ</i></p></blockquote>
    <?php } else if ($current_page=="AVOIDANCE") { ?>
      <blockquote class="wp-block-quote cds-parent-quote"><p>After being in partial programs twice and then being on home instruction, finally there is a light at the end of the tunnel. I only wish we had found Cornerstone for our son a couple of years ago.<br /><i>Parent, Freehold, NJ</i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p>Because of the open and honest relationship between the staff and us, they were able to help us navigate through this very tough passage our family was going through.<br /><i>Parent, Boonton, NJ</i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p>It’s the place that made everything else that I wanted in my life (my future) possible.<br /><i>Student, Whippany, NJ</i></p></blockquote>
    <?php } else if ($current_page=="TRANSITIONS") { ?>
      <blockquote class="wp-block-quote cds-parent-quote"><p>We were fortunate that we found CDS for our son. He attended for just over a year and then was transitioned bck to our district HS.<br /><i>Parent, Paramus, NJ</i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p>A huge thank you to all of you for all your hard work helping my son get better and transition to High School. We feel extraordinarily fortunate and truly know that Cornerstone helped him to survive and move on to be the best he can be (Of course the journey will continue!). We appreciate all of the concern, expertise and patience you have shown these last 18+ months. All best wishes to you.<br /><i>Parent, Cranford, NJ</i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p>Our daughter feels ready to transition back to district, although part of me wants her to stay at Cornerstone because I know how much they have done for her.<br /><i>Parent, Montville, NJ</i></p></blockquote>
    <?php } else if ($current_page=="ADMISSIONS") { ?>
      <blockquote class="wp-block-quote cds-parent-quote"><p>Though I didn't know it at the time, CDS meant everything to me. Ultimately, I was the one who made the choice to turn my life around and go down a new path.<br /><i>Student, Fort Lee, NJ</i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p>I want to personally thank you for all of your help with this very difficult family. Their son is in great need of treatment and I know both parents are comforted by the high level of care that he will receive at Cornerstone. For them I know that they see the 24/7 hot line as a godsend: Mom said that it's the first time that she can really sleep at night.<br /><i>Case Manager, Essex County, NJ</i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p>Cornerstone meant a lot to me. It taught me how to cope. It has truly made me the person I am today, and I couldn't be more grateful.<br /><i>Student, Union, NJ</i></p></blockquote>
    <?php } else if ($current_page=="EXPERIENCE") { ?>
      <blockquote class="wp-block-quote cds-parent-quote"><p><br /><i></i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p><br /><i></i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p><br /><i></i></p></blockquote>
    <?php } else if ($current_page=="WHO") { ?>
      <blockquote class="wp-block-quote cds-parent-quote"><p><br /><i></i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p><br /><i></i></p></blockquote>
      <blockquote class="wp-block-quote cds-parent-quote"><p><br /><i></i></p></blockquote>
    <?php } ?>
  </div>
</aside>
