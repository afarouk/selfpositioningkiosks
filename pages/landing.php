<!-- section slider start -->
<section id="slider-part">
  <div class="bg-overlay pattern"></div>
  <div class="container">
    <div class="row">
      <div class="  col-md-12 col-lg-12 col-sm-12 col-xs-12 wow fadeInLeft">
        <div class="slider-content text-center">
          <h2 class="slider-title">Self Positioning Kiosks</h2>
          <h4 class="slider-title">A machine that can see us can adapt to us</h4>
        </div>
      </div>
    </div>

  </div>
  <!-- container end -->
</section>
<!-- section slider end -->
<!-- Section 'what we do' start -->
<section id="highlights" class="white_background">
  <div class="container">
    <div class="row">
      <div class="heading-inner text-center">
        <h2 class="sec-title"> Giving <BR> Machine-Vision to the <span> Kiosk </span></h2>
          <h4 class="sec-sub-title text-center"> Fixed position kiosks can be frustrating, even impossible to use if you are disabled. We can do better. </h4>
        </div>
      </div>
    </div>
    <!-- container end -->


    <hr style="border: none;" />
    <hr/>
    <hr style="border: none;" />
  </div>
</section>


<section id="summary"  >
  <div class="container-fluid  ">
    <div class="row  ">
      <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-12 col-sm-10   col-md-8   col-lg-8">
        <div style="padding-top:140px;padding-bottom:20px;">
          <p class="text-center h1" style="color:white; "> Fixed-Position Kiosks Ignore Us </p>
        </br>
        <p class="secondary_block_text text-center h3" style="color:white; padding-bottom:100px;">
          We end up straining, or bending or just plain feeling miserable
        </p>
      </div>
    </div>
  </div>
</div>
</section>




<section id="unifiedorders" class="white_background">
  <div class="container-fluid">
    <div class="row" style="padding-bottom:140px;">
      <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-10 col-lg-offset-1">
        <img src="images/landing/strainPain.png" class="center-block img-responsive" </>
      </div>
    </div>
  </div>
</section>
<!-- section Contact start -->
<section id="contact" >
  <div class="bg-overlay pattern"></div>
  <div class="container">
    <div class="col-md-12">
      <div class=" text-center">
        <h2 class="sec-title">Contact <span>us</span></h2>
        <div class="line-btm c-white"></div>
        <p>
          Questions, comments please let us know
        </p>
      </div>
    </div>
    <!-- heading row end -->
    <div class="row" id="contactUsFormRow">
      <div class="col-md-12">
        <form class="contact-inner" id="contactUsForm" method="post" autocomplete="off">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label > Name</label>
                <input type="text" class="form-control" id="name" name="senderName" placeholder="Your Name" required>
              </div>
              <div class="validationErrorMessageClass" style="color:red"></div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label > Email</label>
                <input type="text" class="form-control" id="email" name="replyToEmail" placeholder="Your Email" data-fv-emailaddress='true' data-fv-emailaddress-message='please enter valid email' required >
              </div>
              <div class="validationErrorMessageClass" style="color:red"></div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label > Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
              </div>
              <div class="validationErrorMessageClass" style="color:red"></div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label > Message</label>
                <textarea id="message" name="description" cols="30" rows="8" class="form-control" placeholder="Message" required></textarea>
              </div>
              <div class="validationErrorMessageClass" style="color:red"></div>
            </div>
          </div>
          <!-- row end -->
          <div class="row">
            <div class="col-md-12 text-center">
              <button class="btn btn-default" id="contactSubmit" >
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- row end -->
    <div class="row" id="contactUsSuccessRow">
      <span class="glyphicon glyphicon-ok icon-size" aria-hidden="true"></span>
      <h1 id='contactUsSuccessDiv'></h1>
    </div>
    <div class="row" id="contactUsErrorRow">
      <!-- <span class="glyphicon glyphicon-remove icon-size" aria-hidden="true"></span> -->
      <h1 id='contactUsErrorDiv'></h1>
    </div>
  </div>
  <!-- container end -->
</section>
<!-- section Contact end -->
<!-- Back To Top Button -->
<div id="back-top">
  <a href="#slider-part" class="page-scroll btn btn-primary" ><i class="fa fa-angle-double-up"></i></a>
</div>
<!-- End Back To Top Button -->
<script>new WOW().init();</script>
<script>
$.backstretch([ "images/bg/bg1.jpg"  ], {
  fade : 850,
  duration : 3000
});
</script>
<script>
$('.counter').counterUp({
  delay : 100,
  time : 2000
});
</script>
