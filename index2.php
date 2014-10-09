<html>
<head>
  <link href="/foundation/css/foundation.min.css" rel="stylesheet">
  <script src="/foundation/js/vendor/modernizr.js"></script>
  <script src="/foundation/js/jquery-2.1.1.min.js"></script>
  <script src="/foundation/js/foundation.min.js"></script>
</head>

<body>
  <nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name">
        <h1><a href="#">MobileFun</a></h1>
      </li>

      <li class="toggle-topbar menu-icon"><a href="#"></a></li>
    </ul>
    <section class="top-bar-section">
      <ul class="left">
        <li class="active">
          <a href="./">Home</a>
        </li>
        <li class="has-dropdown">
          <a>Accessories</a>
          <ul class="dropdown">
            <li><a>Test</a></li>
            <li class="active"><a>Test 2</a></li>
          </ul>
        </li>
        <li>
          <a>Cases</a>
        </li>
      </ul>
      <ul class="right">
        <li class="has-form">
          <div class="row collapse">
            <div class="large-8 small-9 columns">
              <input type="text" placeholder="Find Stuff">
            </div>
          <div class="large-4 small-3 columns">
            <a class="alert button expand">Search</a>
          </div>
        </li>
      </ul>
    </section>
  </nav>
    <div class="row">
      <div class="small-12 small-centered columns">
        <div class="row">
          <div class="small-12 columns">
<?php
  $images = array(
    'http://images.mobilefun.co.uk/graphics/450pixelp/flexishield-iphone-6-case-light-blue-p46910-450.jpg',
    'http://images.mobilefun.co.uk/graphics/450pixelp/encase-slimline-iphone-6-carbon-fibre-leather-style-flip-case-black-p46961-450.jpg',
    'http://images.mobilefun.co.uk/graphics/450pixelp/case-mate-tough-naked-iphone-6-case-100-clear-p48956-450.jpg',
    'http://images.mobilefun.co.uk/graphics/450pixelp/ultra-thin-iphone-6-shell-case-red-p48994-450.jpg',
    'http://images.mobilefun.co.uk/graphics/450pixelp/spigen-ultra-hybrid-iphone-6-bumper-case-mint-p48177-450.jpg',
    'http://images.mobilefun.co.uk/graphics/450pixelp/elements-ultra-thin-iphone-6-shell-case-silver-p48997-450.jpg',
    'http://images.mobilefun.co.uk/graphics/450pixelp/spigen-neo-hybrid-metal-iphone-6-case-metallic-blue-p48796-450.jpg',
    'http://images.mobilefun.co.uk/graphics/450pixelp/spigen-thin-fit-iphone-6-shell-case-mint-p48170-450.jpg'
  );
?>
            <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
              <?php
                foreach($images as $image) :
              ?>
              <li>
                <a>
                  <img src="<?= $image ?>" />
                  </a>
              </li>
              <?php
                endforeach;
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

<script src="/foundation/js/vendor/fastclick.js"></script>
<script>
  $(document).foundation();
</script>
</body>

</html>
