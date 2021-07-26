<?php

$result = $product -> showProducts();
if(isset($_GET['delete'])){
    $product-> deleteProducts($_GET['delete']);
}

?>

<table>
  <thead>
    <tr>
      <th class="text-center">TIITLE</th>
      <th class="text-center">AUTHOR</th>
      <th class="text-center">IMAGE</th>
      <th class="text-center">PRICE</th>
      <th class="text-center">CATEGORY</th>
      <th class="text-center">QUANTITY</th>
      <th class="text-center">CONTENT</th>

      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php for ($i=0; $i < count($result); $i++) { ?>
    <tr>
      <td class="text-center"><h5><?php echo $result[$i]['title'];?></h5></td>
      <td class="text-center"><h5><?php echo $result[$i]['author'];?></h5></td>
      <td class="text-center"><img style="max-width:120px" src="images/<?php echo $result[$i]['image'];?>"></td>
      <td class="text-center"><h5><?php echo $result[$i]['price'];?>$</h5></td>
      <td class="text-center"><h5><?php echo $result[$i]['category'];?></h5></td>
      <td class="text-center"><h5><?php echo $result[$i]['quantity'];?></h5></td>
      <td class="text-center"><h5><?php echo $result[$i]['content'];?></h5></td>
      <td class="text-center"><a href="index.php?productAdd" class="button">Add</a></td>
      <td class="text-center"><a href="index.php?productChange" class="success button">Change</a></td>
      <td class="text-center"><a href="index.php?admin&delete=<?php echo $result[$i]['id'];?>" class="alert button">Delete</a></td>
    </tr>
    <?php }?>
  </tbody>
</table>