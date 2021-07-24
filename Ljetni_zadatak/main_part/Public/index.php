<?php include "header.php";?>
<body>

<!-- Start Top Bar -->

<?php include "navigation.php";?>

<!-- End Top Bar -->


<!-- Start orbit  -->
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <div class="orbit-wrapper">
    <div class="orbit-controls">
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    </div>
    <ul class="orbit-container">
      <li class="is-active orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="Test.jpg" alt="Space">
          <a href=""> 
          <figcaption class="orbit-caption">Space, the final frontier.</figcaption>
          </a>
        </figure>
      </li>
    </ul>
  </div>
  <nav class="orbit-bullets">
    <button class="is-active" data-slide="0">
      <span class="show-for-sr">First slide details.</span>
      <span class="show-for-sr" data-slide-active-label>Current Slide</span>
    </button>
    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
  </nav>
</div>

<!-- End orbit -->


<!-- Products -->

        <div class="grid-x grid-margin-x small-up-1 medium-up-3">
          <!--Product-->
          <div class="cell small-6">
            <div class="card">
              <img src="Test.jpg">
              <div class="card-section">
              <h4>This is a row of cards.</h4>
                <p>This row of cards is embedded in an X-Y Block Grid.</p>
                <h5>Price: 12.99$ </h5>
              </div>
              <a class="button primary" href="product.php?Product_id='Id'">Buy</a>
            </div>
          </div>
          <!--Product-->
        </div>


<!--End Products -->

<?php include "footer.php";?>
<?php include "js.php";?>

</body>
</html>



