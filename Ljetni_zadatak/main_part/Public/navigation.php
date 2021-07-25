<div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="responsive-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text"><?php echo TITLE;?></li>
      <li><a href="?product">Products</a></li>
      <li><a href="?cart">Cart</a></li>
      
      <?php
      if(isset($_SESSION['id'])){
        echo "<li><a href='?logout'>Logout</a></li>";
      }else{
        echo "<li><a href='?login'>Login</a></li>";
      }
      if(isset($_SESSION['role']) && $_SESSION['role']== 'admin'){
        echo "<li><a href='?admin'>Admin</a></li>";
      }
      ?>
      

    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><input type="search" placeholder="Search"></li>
      <li><button type="button" class="button">Search</button></li>
    </ul>
  </div>
</div>