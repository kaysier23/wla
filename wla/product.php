<?php
//credits: john paul maja :D
$json = file_get_contents("http://rdapi.herokuapp.com/product/read.php");

$data = json_decode($json,true);
$list = $data['records'];
 
if(isset($_POST['search'])){
   $search = $_POST['search'];
   $jsearch = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s='.$search);
   $res = json_decode($jsearch,true);

   $list = $res['records'];
   
}else{
   $list = $data['records'];
}
?>

<h1> Product List </h1> <!-- credits: john paul maja :D <3 -->

<form action="index.php?navigation=product" method="POST">
    <input type="text" name="search" placeholder="Search Product Name">
	<input type="submit" name="submit" value="Search">
</form>

<table><!-- credits: john paul maja :D <3 -->
    <tr>
        <th>ID</th> 
        <th>Product</th>
        <th>Price</th>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['id'];?></td>
        <td><a href="index.php?navigation=details&id=<?php echo $value['id'];?>"><?php echo $value['name'];?></a></td>
        <td><?php echo $value['price'];?></td>
    </tr> <!-- credits: john paul maja :D <3 -->
<?php
}
    ?>
</table><!-- credits: john paul maja :D <3 -->
