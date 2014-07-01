 
  <base href="<?=site_url('/login/ajax_check');?>">
  <?php $login = ''.site_url('/login/login_user_ajax'); ?>
  <?php $signup = ''.site_url('/signup/signup_user_ajax'); ?>

  <!-- Real-E  Logo --> 
  <div class="row logo">
    <div class="small-4 small-centered columns">
      <img src="<?= base_url('assets/imgs/logo.png'); ?>" alt="Real-e">
    </div>
  </div>
   
  <!--Foundation Orbit Slider-->
  <div class="small-12 columns slider">
    <ul data-orbit data-options="animation:slide;
                                slide_number: false;
                                pause_on_hover:false;
                                animation_speed:500;
                                navigation_arrows:false;
                                timer_show_progress_bar: false;
                                timer: false;
                                bullets:false;
                                next_on_click: false;">
      <li data-orbit-slide="login">
        <div class="row">
          <div class="small-8 small-centered columns">

            <!--Circles-->
            <div class="small-9 columns">

              <!--Start Circles-->
              <div id="main">
                <div id="grey-grad">
                  <div id="purple-grad">
                    <div class="login-form norm-form">
                      <?= form_open('login'); ?>

                        <div class="row">
                          <div class="small-2 columns error-message username-error">&nbsp;</div>
                          <div class="small-8 columns">
                            <label>
                              <?=form_input(array('name'=>'username', 'value'=>'', 'placeholder'=>'Username', 'id'=>'username'))?>
                            </label>
                          </div>
                          <div class="small-2 columns"><p></p></div>
                        </div>

                        <div class="row">
                          <div class="small-2 columns error-message password-login-error">&nbsp;</div>
                          <div class="small-8 columns">
                            <label>
                              <?=form_password(array('name'=>'password-login', 'value'=>'', 'placeholder'=>'Password', 'id'=>'password-login'))?>
                            </label>
                          </div>
                          <div class="small-2 columns"><p></p></div>
                        </div>

                        <div class="row">
                          <div class="small-4 small-centered center-text columns">
                            <?=form_submit(array('name'=>'submit','value'=>'Login', 'class'=>'small radius button', 'id'=>'login_submit', 'href'=>$login))?>
                          </div>
                        </div>
                      
                      <?= form_close(); ?>

                    </div>
                  </div>
                </div> 
                <!--Pointy End-->
                <div id="pointer"></div>
              </div>
              <!--End Circles-->
            </div>
            <!--End Circles-->

            <!--Social Icons-->
            <div class="small-3 columns">
              <div class="social-icon">
                <p>or log in with</p>
                <a><p class="icon facebook"><i class="fa fa-facebook"></i></p></a>
                <a><p class="icon twitter"><i class="fa fa-twitter"></i></p></a>
                <a><p class="icon google-plus"><i class="fa fa-google-plus"></i></p></a>
              </div>
            </div>
            <!--End Social Icons-->

          </div>
        </div>
      </li>


      <li data-orbit-slide="signup">
        <div class="row">
          <div class="small-8 small-centered columns">

            <!--Circles-->
            <div class="small-9 columns">

              <!--Start Circles-->
              <div id="main">
                <div id="grey-grad">
                  <div id="purple-grad">
                    <div class="signup-form norm-form">
                      <?= form_open('signup'); ?>
                        <div class="row">
                          <div class="small-2 columns error-message firstname-error">&nbsp;</div>
                          <div class="small-8 columns">
                            <label>
                              <?=form_input(['name'=>'firstname', 'value'=>'', 'placeholder'=>'Fisrt Name', 'id'=>'firstname'])?>
                            </label>
                          </div>
                          <div class="small-2 columns"></div>
                        </div>
                        
                        <div class="row">
                          <div class="small-2 columns error-message lastname-error">&nbsp;</div>
                          <div class="small-8 columns">
                            <label>
                              <?=form_input(['name'=>'lastname', 'value'=>'', 'placeholder'=>'Last Name', 'id'=>'lastname'])?>
                            </label>
                          </div>
                          <div class="small-2 columns"></div>
                        </div>
                        
                        <div class="row">
                          <div class="small-2 columns error-message email-error">&nbsp;</div>
                          <div class="small-8 columns">
                            <label>
                              <?=form_input(['name'=>'email', 'value'=>'', 'placeholder'=>'Email', 'id'=>'email'])?>
                            </label>
                          </div>
                          <div class="small-2 columns"></div>
                        </div>
                        
                        <div class="row">
                          <div class="small-2 columns error-message password-signup-error">&nbsp;</div>
                          <div class="small-8 columns">
                            <label>
                              <?=form_password(['name'=>'password-signup', 'value'=>'', 'placeholder'=>'Password', 'id'=>'password-signup'])?>
                            </label>
                          </div>
                          <div class="small-2 columns"></div>
                        </div>
                        
                        <div class="row">
                          <div class="small-4 small-centered center-text columns">
                            <?=form_submit(['name'=>'submit','value'=>'Sign Up', 'class'=>'small radius button', 'id'=>'signup_submit', 'href'=>$signup])?>
                          </div>
                        </div>
                      <?= form_close(); ?>
                    </div>
                  </div>
                </div>
                <!--Pointy End-->
                <div id="pointer"></div>
              </div>
              <!--End Circles-->              
            </div>
            <!--End Circles-->

            <!--Social Icons-->
            <div class="small-3 columns">
              <div class="social-icon">
                <p>or sign up with</p>
                <a><p class="icon facebook"><i class="fa fa-facebook"></i></p></a>
                <a><p class="icon twitter"><i class="fa fa-twitter"></i></p></a>
                <a><p class="icon google-plus"><i class="fa fa-google-plus"></i></p></a>
              </div>
            </div>
             <!--End Social Icons-->
          </div>
        </div>
      </li>
    </ul>
  </div>

  <div class="small-12 columns">
    <div class="hollow-button">
      <a class="small button radius" data-orbit-link="signup">Sign Up</a>
    </div>
  </div>
  
  <footer class="row">
  </footer>
