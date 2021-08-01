<?php

$result = $product -> showProducts();
if(isset($_GET['delete'])){
    $product-> deleteProducts($_GET['delete']);
}

?>
<a href="index.php?productAdd" class="btn btn-primary">Add product</a>

<div class="container">

   <table class="table table-bordered table-striped table-responsive-stack" id="tableOne">
      <thead class="thead-dark">
         <tr>
      <th class="text-center col">TIITLE</th>
      <th class="text-center col">AUTHOR</th>
      <th class="text-center col">IMAGE</th>
      <th class="text-center col">PRICE</th>
      <th class="text-center col">CATEGORY</th>
      <th class="text-center col">QUANTITY</th>
      <th class="text-center col">CONTENT</th>
         </tr>
      </thead>
      <tbody>
    <?php for ($i=0; $i < count($result); $i++) { ?>
    <tr>
      <td class="text-center" data-label="TIITLE"><h5><?php echo $result[$i]['title'];?></h5></td>
      <td class="text-center" data-label="AUTHOR"><h5><?php echo $result[$i]['author'];?></h5></td>
      <td class="text-center" data-label="IMAGE"><img style="max-width:120px" src="images/<?php echo $result[$i]['image'];?>"></td>
      <td class="text-center" data-label="PRICE"><h5><?php echo $result[$i]['price'];?>$</h5></td>
      <td class="text-center" data-label="CATEGORY"><h5><?php echo $result[$i]['category'];?></h5></td>
      <td class="text-center" data-label="QUANTITY"><h5><?php echo $result[$i]['quantity'];?></h5></td>
      <td class="text-center" data-label="CONTENT"><h5><?php echo $result[$i]['content'];?></h5></td>
      <td class="text-center btn btn btn-primary"><a href="index.php?productChange=<?php echo $result[$i]['id'];?>" class="success button">Change</a></td>
      <td class="text-center btn btn-outline-danger"><a href="index.php?admin&delete=<?php echo $result[$i]['id'];?>" class="alert button">Delete</a></td>
    </tr>
    <?php }?>
  </tbody>
</table>
<h3>Database diagram</h3>
<hr>
<img style="" src="Diagram.png">
<hr>
   


</div>
<!-- /.container -->