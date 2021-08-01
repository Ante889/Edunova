<?php if(!isset($_GET['page'])){
  $_GET['page'] =1;
  }?>
<!-- Start orbit  -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/Test.jpg" alt="First slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- End orbit -->
<hr><br>

<h1 class="text-center">PRODUCTS</h1>
     
<!-- Aside -->
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-md-3">
          <h3 class="text-center">Category</h3>
            <ul>
                <li class="list-group-item"><a href="#"><i class="fa fa-home fa-fw"></i>Home</a></li>
                <li class="list-group-item"><a href=""><i class="fa fa-list-alt fa-fw"></i>Widgets</a></li>
                <li class="list-group-item"><a href=""><i class="fa fa-file-o fa-fw"></i>Pages</a></li>
                <li class="list-group-item"><a href=""><i class="fa fa-bar-chart-o fa-fw"></i>Charts</a></li>
                <li class="list-group-item"><a href=""><i class="fa fa-table fa-fw"></i>Table</a></li>
                <li class="list-group-item"><a href=""><i class="fa fa-tasks fa-fw"></i>Forms</a></li>
                <li class="list-group-item"><a href=""><i class="fa fa-calendar fa-fw"></i>Calender</a></li>
            </ul>
        </div>

        <?php $result = $product -> showProductsWihtOffset(6); ?>

        <div class="col-md-9 well">
          <div class="container">
            <div class="row">
            <?php for ($i=0; $i < count($result); $i++) {?>
              <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="images/<?php echo $result[$i]['image']?>" alt="Card image cap">
                  <h4><a href="index.php?item&Product_id=<?php echo $result[$i]['id']?>"><?php echo $result[$i]['title']?></a></h4>
                  <div class="card-body">
                    <p> Author: <?php echo $result[$i]['author']?></p>
                    <p><?php echo mb_strimwidth($result[$i]['content'], 0, 25, "...") ?></p>
                    <h5>Price: <?php echo $result[$i]['price']?>$</h5>
                    <a class="btn btn-primary btn-lg btn-block" href="index.php?item&Product_id=<?php echo $result[$i]['id']?>">Buy</a>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
        </div>
    </div>
    <nav aria-label="...">
              <ul class="pagination">
              <?php
              if(isset($_GET['page']) && $_GET['page'] > 1){
                $page=$_GET['page']-1;
                  echo "<li class='page-item'><a class='page-link' href='index.php?product&page=$page'>Previous</a></li>";
                }
              for ($i=1; $i <= $product->pager(6,0); $i++ ) { 
                if(isset($_GET['page']) && $i == $_GET['page']){
                  echo "<li class='page-item active'><a class='page-link' href='index.php?product&page=$i'>$i</a></li>";
                }else{
                  echo "<li class='page-item'><a class='page-link' href='index.php?product&page=$i'>$i</a></li>";
                }
              }
              if(empty($_GET['page']) || $product->pager(6,0) > $_GET['page']){
              if(!empty($_GET['page'])){
              $page=$_GET['page']+1;
              echo "<li class='page-item'><a class='page-link' href='index.php?product&page=$page'>Previous</a></li>";
              }else{
                echo "<li class='page-item'><a class='page-link' href='index.php?product&page=2'>Next</a></li>";
              }
              }
              ?>
              </ul>
            </nav>
</div>

<!-- End aside -->


   <!-- Pagination-->
<br><br><br>
<nav aria-label="pagination-centered">
<ul class="pagination">



</ul>
</nav>
<!-- End Pagination -->
</div>


<!--End Products -->



</div>

</div>

<!-- Best buy-->      

<br>
<div class="text-center">
  <h2>Best buy products</h2>
  <hr>
</div>
<div class="grid-container">
  <div class="grid-x grid-margin-x small-up-1 medium-up-6">
    <div class="cell">
      <div class="card">
        <img src="images/unnamed.png">
        <div class="card-section">
        <h5>This is a row of cards.</h5>
          <p>This row of cards is embedded in an X-Y Block Grid.</p>
        </div>
        <a class="button primary" href="#">See more</a>
      </div>
    </div>  
    </div>
  </div>
</div>
</div>


<!-- Best buy-->
