<?php

/**
 * Template Name: Home Page
 */
get_header();
?>

<!-- Banner Starts Here  -->
<div class="banner">
  <div class="container">
    <div class="banner-caption">
      <h1 class="congested">Why We</h1>
      <h2 class="congested">Shine</h2>
      <p>Survivors of child sexual abuse can and do lead rich, fulfilling lives. Healing happens, and hope is
        possible. It’s time to bring the conversation about abuse out of the shadows and into the light.
        It’s time to #SHINE.</p>
      <div class="learn-more-wrap">
        <a href="#about" class="layout-btn layout-btn-yellow">Learn More <img src="<?php echo get_template_directory_uri() .  '/assets/images/learn-more-arrow.png' ?>" class="img-fluid" alt=""></a>
      </div>
    </div>
  </div>
</div>
<!-- Banner Ends Here  -->

<!-- Content Starts Here -->
<div class="content">
  <!-- Tell Your Story Section Starts Here  -->
  <section class="share-with text-center">
    <div class="container">
      <p class="d-flex align-items-center justify-content-center">
        <span class="congested">share why you shine</span>

        <span class="buttons-wrapper">
          <a href="#share-your-story" class="layout-btn layout-btn-dark reveal-story-form">Tell Your Story</a>
          <a href="#share-your-story" class="layout-btn layout-btn-dark reveal-pledge-form">Take the Pledge</a>
        </span>
      </p>
    </div>
  </section>
  <!-- Tell Your Story Section Ends Here  -->

  <!-- Shine Campaign Section Starts Here  -->
  <section id="about" class="shine-campaign">
    <div class="shine-compaign-inner container-lg">
      <div class="shine-compaign-thumbnail">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/photos/storyteller-1.jpg' ?>" class="img-fluid shine-campaign-image" alt="">
      </div>
      <div class="shine-compaign-content">
        <div class="compaign-content-wrap">
          <h3 class="congested">shine campaign <br><span>#Whyweshine</span></h3>
          <span>We are stars, lighting a universe of support for survivors.</span>
          <p>SHINE is a national campaign to transform the conversation about child sexual abuse. For too
            many, childhood is where the trauma starts. But survivors need to know they are not
            alone--their light connects to other lights in a universe of support. It’s time for us to be
            a light that survivors can turn to. Follow us on Instagram and Facebook to read survivor
            stories, and be the light in your community that helps kids suffering now through your local
            Children's Advocacy Center.</p>
          <p>Read and share #whyweshine survivor stories.</p>
          <div class="btn-wrap text-center">
            <a href="https://www.instagram.com/whyweshine/" class="layout-btn" target="_blank">Read
              Stories</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Shine Campaign Section Ends Here  -->

  <!-- Your Shine Story Starts Here  -->
  <section id="share-your-story" class="shine-story">
    <div class="shine-story-wrap">
      <h3 class="congested">join the campaign</h3>
      <ul class="tabs-heading">
        <li class="make-pledge"><a href="#" class="active">Take the Pledge</a></li>
        <li class="share-story"><a href="#">Share your story</a></li>
      </ul>
      <div class="tabs-content">
        <div class="make-pledge-tab">
          <p>No matter who you are, you can help make a difference for survivors of child abuse. There are a million ways to help end the stigma, support adult survivors, and provide real help to children experiencing abuse now.</p>

          <p>You can choose to support your local CAC, share your support on social media, share your own story, or just to listen and believe survivors. You can come up with your own pledge. You can do all of these things and more, and you will inspire others to #SHINE.</p>

          <p>You can be a star in the Universe of Support. Tell us: what’s your pledge?</p>

          <form id="make-a-pledge-form" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" action="https://ncaforkids.wufoo.com/forms/z16edepw0ekdhf3/#public">
            <div class="form-row contains-two">
              <div class="input-wrap">
                <input type="text" class="form-control" name="Field1" placeholder="Your First Name   *" required>
              </div>

              <div class="input-wrap">
                <input type="text" class="form-control" name="Field2" placeholder="Last Name or Initial">
              </div>
            </div>

            <div class="form-row">
              <div class="input-wrap">
                <input type="email" class="form-control" name="Field4" placeholder="Your Email Address   *" required>
              </div>
            </div>

            <br>

            <div class="checkbox-wrap">
              <input class="styled-checkbox" type="checkbox" id="Field6" name="Field6">
              <label for="Field6">Support my local Children’s Advocacy Center</label>
            </div>

            <div class="checkbox-wrap">
              <input class="styled-checkbox" type="checkbox" id="Field7" name="Field7">
              <label for="Field7">Support a survivor in my life</label>
            </div>
            <div class="checkbox-wrap">
              <input class="styled-checkbox" type="checkbox" id="Field8" name="Field8">
              <label for="Field8">Share my support on my social media profiles</label>
            </div>
            <div class="checkbox-wrap">
              <input class="styled-checkbox" type="checkbox" id="Field9" name="Field9">
              <label for="Field9">Share my own story of survivorship</label>
            </div>

            <div class="form-row checkbox-wrap pledge-other-field">
              <div class="input-wrap">
                <span>Other</span>
                <input type="text" class="form-control" name="Field107" placeholder="" style="padding-left: 10px;">
              </div>
            </div>

            <div class="checkbox-wrap">
              <input id="Field10" class="styled-checkbox" type="checkbox" name="Field10">
              <label for="Field10">I want to receive communications from the SHINE Campaign.</label>
            </div>

            <div class="submit-wrap text-center">
              <input type="submit" class="layout-btn" name="" value="Submit">
            </div>

            <div class="hidden">
              <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
              <input type="hidden" id="idstamp" name="idstamp" value="D7dxmHvnuEV68x1qKZtTI2dHtXMHQl+fdjlMAM/9HG0=" />
            </div>
          </form>
        </div>

        <div class="share-story-tab">
          <p>You can help survivors come out of the shadows, find support, and end the stigma by
            listening, being
            an ally, sharing your story, and inspiring others to #SHINE.</p>
          <p>Share your story of hope. Perhaps you are an ally who cares deeply about the survivors in
            your life.
            Perhaps you are a survivor yourself and want others to know they are not alone. Whoever you
            are, you
            can be a part of the universe of support. Let us know you are one more star by filling out
            the form
            below.</p>
          <form id="share-your-story-form" enctype="multipart/form-data" method="post" action="https://ncaforkids.wufoo.com/forms/z1iurubh0scqjiv/#public">
            <div class="form-row contains-two">
              <div class="input-wrap">
                <input type="text" class="form-control" name="Field4" placeholder="Your First Name   *" required>
              </div>
              <div class="input-wrap">
                <input type="text" class="form-control" name="Field6" placeholder="Last Name or Initial">
              </div>
            </div>
            <div class="form-row">
              <div class="input-wrap">
                <input type="email" class="form-control" name="Field7" placeholder="Your Email Address   *" required>
              </div>
            </div>
            <div class="form-row">
              <div class="input-wrap">
                <textarea name="Field8" class="form-control" placeholder="Share why you support survivors of child sexual abuse." required></textarea>
              </div>
            </div>
            <div class="upload-photo-wrap">
              <p>Join the Universe of Support by uploading a photo of yourself!</p>
              <div class='file-input'>
                <span class='label' data-js-label>Upload a photo</span>
                <input type='file' id="Field10" name="Field10">
                <span class='button'><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
              </div>
            </div>

            <div class="checkbox-wrap">
              <input id="Field11" class="styled-checkbox" type="checkbox" name="Field11" value="Field11" required>
              <label for="Field11">I have read <a href="https://www.dropbox.com/s/qw8lv815mg7afhn/SHINE-Story-Guide-and-Release.pdf?dl=0" target="_blank">the guidelines</a> and I fully understand the nature and
                consequences of
                sharing my story with the general public.</label>
            </div>

            <div class="checkbox-wrap">
              <input id="Field12" class="styled-checkbox" type="checkbox" name="Field12" value="Field12" required>
              <label for="Field12">Yes share my story, message of support, and/or photo with the SHINE
                Campaign for use in promotion and on social media channels. I certify that I am over
                18
                years of age, and I agree to hold the National Children’s Alliance harmless from any
                outcome
                of my story being shared.</label>
            </div>
            <div class="checkbox-wrap">
              <input id="Field13" class="styled-checkbox" type="checkbox" name="Field13">
              <label for="Field13">I want to receive communications from the SHINE Campaign.</label>
            </div>
            <div class="submit-wrap text-center">
              <input type="submit" class="layout-btn" name="" value="Submit">
            </div>

            <div class="hidden">
              <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
              <input type="hidden" id="idstamp" name="idstamp" value="ZgqQhYFa/ukVicAeyz0gBWFV0hvYAxZMFBpAkWJUTtA=" />
            </div>
          </form>
        </div>

      </div>

    </div>
  </section>
  <!-- Your Shine Story Ends Here  -->

  <!-- Recent Shine Posts Section  Starts Here-->
  <section class="shine-posts">
    <div class="bg-yellow">
      <div class="container">
        <h3>#WHYWESHINE Posts</h3>
        <span>Read recent SHINE stories from the Universe of Support.</span>
      </div>
    </div>
    <div class="insta-gallery">
      <ul>
        <li>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/photos/storyteller-1.jpg' ?> " alt="story-teller-1">
          <div class="overlay"></div>

          <div class="icons">
            <a href="https://www.facebook.com/SHINEcause/photos/a.282086825801252/287869725222962/?type=3&theater" target="_blank">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>

            <a href="https://www.instagram.com/p/Bt1W5nHnUIk/" target="_blank">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/photos/storyteller-2.jpg' ?>" alt="story-teller-2">
          <div class="overlay"></div>

          <div class="icons">
            <a href="https://www.facebook.com/SHINEcause/photos/a.280153399327928/290570074952927/?type=3&theater" target="_blank">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>

            <a href="https://www.instagram.com/p/BuHvdfPBLN4/" target="_blank">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/photos/storyteller-3.jpg' ?>" alt="story-teller-3">
          <div class="overlay"></div>

          <div class="icons">
            <a href="https://www.facebook.com/SHINEcause/photos/a.280153399327928/293441027999165/?type=3&theater" target="_blank">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>

            <a href="https://www.instagram.com/p/Bubr8gFBxyk/" target="_blank">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/photos/storyteller-4.jpg' ?>" alt="story-teller-4">
          <div class="overlay"></div>

          <div class="icons">
            <a href="https://www.facebook.com/SHINEcause/photos/a.282086825801252/287116898631578/?type=3&theater" target="_blank">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>

            <a href="https://www.instagram.com/p/BtwjWRRB164/" target="_blank">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/photos/storyteller-5.jpg' ?>" alt="story-teller-5">
          <div class="overlay"></div>

          <div class="icons">
            <a href="https://www.facebook.com/SHINEcause/photos/a.282086825801252/284952268848041/?type=3&theater" target="_blank">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>

            <a href="https://www.instagram.com/p/BtjqozBhNmc/" target="_blank">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/photos/storyteller-6.jpg' ?>" alt="story-teller-6">
          <div class="overlay"></div>

          <div class="icons">
            <a href="https://www.facebook.com/SHINEcause/photos/a.282086825801252/282407815769153/?type=3&theater" target="_blank">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>

            <a href="https://www.instagram.com/p/BtTo4QqBypk/" target="_blank">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </li>
      </ul>
      <h3>Follow #whyweshine to read and share survivor stories and follow #SHINE to join the campaign.</h3>
    </div>
  </section>
  <!-- Recent Shine Posts Section  Ends Here-->
</div>
<!-- Content Ends Here -->

<?php get_footer(); ?>