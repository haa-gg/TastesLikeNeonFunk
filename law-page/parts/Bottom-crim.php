<?php
// Partial template
// pulled for Footer
?>


<div class="r5-bg-wrap">

  <div class="row r5 lower-info-region" >

    <div class="column small-12"><h3>Lorem ipsum dolor sit amet.</h3>

    </div>

    </div>

    <div class="row r3 mobile-show">

  <div class="columns small-12 large-12 r3-c1">

    <?php
    include(__DIR__.'/what-you-need-crim.php');
    ?>

  </div>

</div>

<div class="row r5 lower-info-region" >

    <div class="columns small-12 medium-12 large-4 r5-c1" >

      <img alt="picture"
      src="<?php echo get_stylesheet_directory_uri();?>/law-lp/assets/images/scales.jpg"
      class="r4-portrait">

    </div>

    <div class="columns small-12 medium-12 large-8 r5-c2 explaination" >

     <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</b></p>

     <div class="row explain-bot align-middle desk-show">

      <div class="columns small-12 large-12 explain-cta align-middle">

        <div class="ex-cta-in">

          <h3>Call Us Now! <?php echo $phone; ?></h3>

        </div>

      </div>

    </div>

  </div>

</div>

</div>

<div class="row">

  <div class="columns small-12 large-5 r3-c2 hide-for-medium">

    <?php
    include('testimonials.php');
    ?>

  </div>

</div>





<div class="row footer">

  <div class="column small-12">

   <div class="row r6">

    <h5>Legal Disclaimer:</h5>
    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
    </p>

    <p><sup>*</sup>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>



    <div class="wrap"> <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat
    </p></div>

    <p>
     © <?php echo date('Y'); ?>. The content on this page is owned by us and/or our licensors. Do not copy any content (including images) without our consent. <br>
   </p>






 </div>
</div>
</div>

<div class="reveal cf" id="exampleModal1" data-reveal>

  <h2>Tell Us About Your Case</h2>

  <form action="<?php echo $base;?>/mail/mail_daemon.php" method="post">

    <div class="row">

      <div class="small-12 medium-12 large-12 columns textarea">
        <label>
          <textarea name="usrmsg" placeholder="Brief description of your case"></textarea>
        </label>
      </div>

      <div class="small-12 medium-12 large-12 columns">
        <label>
          <input type="text" name="usrfirstname" placeholder="First Name*" required>
        </label>
      </div>

      <div class="small-12 medium-12 large-12 columns">
        <label>
          <input type="text" name="usrlastname" placeholder="Last Name*" required>
        </label>
      </div>

      <div class="small-12 medium-12 large-12 columns">
        <label>
          <input type="text" name="usrphone" placeholder="Phone XXX-XXX-XXXX">
        </label>
      </div>

      <div class="small-12 medium-12 large-12 columns">
        <label>
          <input type="text" name="usremail" placeholder="Email*" required>
        </label>
      </div>

      <span style="display:none">
        <input type="text" name="haa-hny" placeholder="">
        <input type="text" value="888-685-3138" name="companyphone">
      </span>

      <input type="submit" class="button" value="Submit">

    </div>

  </form>


  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<nav class="mob-c2a for-mob hide-for-medium">
  <div class="row">
    <div class="small-3 columns align-self-middle">
      <a class="mob-call" href="tel:<?php echo $phonelink;?>" id="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/phone-icon.png">
      </a>
    </div>
    <div class="small-9 columns">
      <ul id="MobileNav" class="mobile-nav">
        <li class="cb-headline">Call Us Now!</li>
        <li class="bc-subhead">Free Confidential Consultation</li>
      </ul>
    </div>
  </div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/foundation.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/plugins/foundation.equalizer.js"></script> -->

  <script>
    setTimeout(function () {
      jQuery(document).foundation();

    }, 100);
  </script>

  <script>
   //I had to make it select the nonexistent class of 'fake' because it refused to toggle on a single class in the script... It's really strange!
   if (jQuery(window).width() < 1024) {
    console.log('mobile');

    jQuery('#wyn-toggle-1,.fake').click(function() {
     jQuery('#wyn-reveal-1,.wyn-statement-1').toggle('slow');
     console.log('wyn-mobile-1-fire');
   });
    jQuery('#wyn-toggle-2,.fake').click(function() {
     jQuery('#wyn-reveal-2,.wyn-statement-2').toggle('slow');
   });
    jQuery('#wyn-toggle-3,.fake').click(function() {
     jQuery('#wyn-reveal-3,.wyn-statement-3').toggle('slow');
   });
    jQuery('#wyn-toggle-4,.fake').click(function() {
     jQuery('#wyn-reveal-4,.wyn-statement-4').toggle('slow');
   });
    jQuery('#wyn-toggle-5,.fake').click(function() {
     jQuery('#wyn-reveal-5,.wyn-statement-5').toggle('slow');
   });
    jQuery('#wyn-toggle-6,.fake').click(function() {
     jQuery('#wyn-reveal-6,.wyn-statement-6').toggle('slow');
   });
  }
  else {
    console.log('desk');

    jQuery('#wyn-toggle-1,.fake').click(function() {
     jQuery('#wyn-reveal-1,.fake').toggle('slow');
     console.log('click desk 1');
   });
    jQuery('#wyn-toggle-2,.fake').click(function() {
     jQuery('#wyn-reveal-2,.fake').toggle('slow');
   });
    jQuery('#wyn-toggle-3,.fake').click(function() {
     jQuery('#wyn-reveal-3,.fake').toggle('slow');
   });
    jQuery('#wyn-toggle-4,.fake').click(function() {
     jQuery('#wyn-reveal-4,.fake').toggle('slow');
   });
    jQuery('#wyn-toggle-5,.fake').click(function() {
     jQuery('#wyn-reveal-5,.fake').toggle('slow');
   });
    jQuery('#wyn-toggle-6,.fake').click(function() {
     jQuery('#wyn-reveal-6,.fake').toggle('slow');
   });
  }
</script>


</body>

</html>