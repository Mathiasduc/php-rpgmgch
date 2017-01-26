<?php 
$products = require('products.php');
?>
<html>
<div class="center table products">
	<table>
		<?php 
		
		for ($i=0; $i < count($products); $i++) { 
			$id = $products[$i]->get_id();
			$name = $products[$i]->get_name();
			$price = $products[$i]->get_price();
			$productor = NULL;
			$expireAt = NULL;
			$brand = NULL;
			echo "
			<tr>
				<th>name:</th>
				<th>Id:</th>
				<th>price:</th>";
				if(method_exists($products[$i],"get_brand")){
					$brand = $products[$i]->get_brand();
					echo "<th>brand:</th>";
				}
				if(method_exists($products[$i], "get_productorName")){
					$productor = $products[$i]->get_productorName();
					$expireAt = date("Y-m-d H:i:s",$products[$i]->get_expireAt());
					echo "<th>productor:</th>
					<th>expire at :</th>";
				}
				echo "</tr>
				<tr>
					<td>$name</td>
					<td>$id</td>
					<td>$price</td>";
					if(isset($brand)){
						echo "<td>$brand</td>";
					}
					if(isset($productor)){
						echo " <td>$productor</td>
						<td>$expireAt</td>	
						";
					}
					echo "
				</tr>
				";	
			} 
			?> 
		</table>
	</div>
	</html>