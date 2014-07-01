<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to RealE</title>

    <!-- CSS Includes -->
    <link rel="stylesheet" href='<?= "$foundation_css"; ?>'/>
    <link rel="stylesheet" href='<?= "$fa_css"; ?>' />
    <link rel="stylesheet" href='<?= "$jscroll_css"; ?>' />
    <link rel="stylesheet" type="text/css" href='<?= "$app_css"; ?>' />
    <!-- End of CSS Includes -->
  </head>
  <body>

    <header>
      <!-- Le Header -->
      <div class="row">
        <div class="small-4 medium-3 large-2 columns">
          <div id="logo">
            <img src="<?= base_url('assets/imgs/logo.png'); ?>" alt="Real-e">
          </div>
        </div>
        <div class="small-8 medium-6 large-7 columns">
          <div id="search">       
            <?= form_open(); ?>
              <?= form_input(['placeholder'=>'Search for properties and people...']); ?>
            <?= form_close(); ?>
          </div>
        </div>
        <div class="medium-3 large-3 show-for-medium-up columns">
          <div id="user-tab">

            <div class="small-3 columns">

              <div class="small-6 columns">
                <div class="profile-image small-profile">
                  <div class="rounded-image">
                    <div class="notification">
                      <p>14</p>
                    </div>
                    <img src="<?= base_url('assets/imgs/profile-pic.jpg'); ?>" alt="Profile-pic">
                  </div>
                </div>
              </div>

              <div class="small-5 columns"></div>
              <div class="small-1 columns"></div>

            </div>
            
            <div class="small-9 columns" style="float:left;">
              <p>Shinsengumi</p>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End Header -->

    <!-- Le Content -->
    <div id="content-container">
      <div class="row">
        <div class="small-12 columns no-padding">

          <div class="small-2 meduim-2 large-2 show-for-medium-up columns stripes no-padding">
            <div>
              <div class="menu-item">
                <div>
                  <h5><i class="fa fa-th"></i></h5>
                </div>
              </div>
            </div>
            <div>
              <div class="menu-item">
                <div>
                  <h5><i class="fa fa-home"></i></h5>
                </div>
              </div>
            </div>
            <div>
              <div class="menu-item">
                <div>
                  <h5><i class="fa fa-briefcase"></i></h5>
                </div>
              </div>
            </div>
            <div>
              <div class="menu-item">
                <div>
                  <h5><i class="fa fa-users"></i></h5>
                </div>
              </div>
            </div>
            <div>
              <div class="menu-item">
                <div>
                  <h5><i class="fa fa-university"></i></h5>
                </div>
              </div>
            </div>
          </div>

          <div id="content" class="small-12 medium-8 large-8 columns no-padding">
            <div id="page-title">
              <p>Property</p>
              <hr/>
            </div>
            <div id="page-content">
              <?= $yield; ?>
            </div>
          </div>

          <div class="small-2 meduim-2 large-2 show-for-medium-up columns stripes no-padding">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>

        </div>
      </div>
    </div>
    
    <!-- End Content -->
    

    <footer class="row">
      
    </footer>
    <!-- JS Includes -->
    <script src="<?= "$jquery"; ?>"></script> 
    <script src="<?= "$modernizr_js"; ?>"></script>
    <script src="<?= "$jscroll_js"; ?>"></script>
    <script src='<?= "$foundation_js"; ?>'></script>
    <script src='<?= "$foundation_topbar_js"; ?>'></script>
    <script src='<?= "$foundation_reveal_js"; ?>'></script>
    <script src='<?= "$app_js"; ?>'></script>
    <!-- End of JS Includes -->
  </body>
</html>
