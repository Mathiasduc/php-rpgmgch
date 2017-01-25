<?php 
$users = require('Users.php');
?>
<html>
<div class="center table users">
	<table>
		<?php 
		
		for ($i=0; $i < count($users); $i++) { 
			$id = $users[$i]->getId();
			$email = $users[$i]->getEmail();
			$createdAt = date("Y-m-d H:i:s",$users[$i]->getCreatedAt());
			echo "
			<tr>
				<th>Id:</th>
				<th>Email:</th>
				<th>Created at:</th>
			</tr>
			<tr>
				<td>$id</td>
				<td>$email</td>
				<td>$createdAt</td>
			</tr>
			";	
		} 
		?> 
	</table>
</div>
</html>