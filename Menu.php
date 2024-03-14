<!DOCTYPE html>
<html>
	<head> 
		<title>Menu with PHP </title>
		
		<link rel="stylesheet" href="css/mystyles.css" />
		<script type="text/javascript" src="js/myjs.js"></script>
		
	</head>
	<?php include ("db_connection.php"); ?>


	

	<body bgcolor="#c7c94d">
	<img class="logo" src="img/jbulogo.webp"/>
	
	<h1 align="center"> Online Store </h1>
	
	<ul>
		<li class="menu-item"><a href="#" class="drp">Books </a>
			<div class="menu-content">
				<a  href="add_book.php">Add Book</a><br>
				<a  href="remove_book.php">Remove Book</a><br>
				<a href="display_books.php">Display all Books</a>
			</div>
		
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Books </a>
		<div class="menu-content">
			<a  href="add_book.php">Add Book</a><br>
			<a  href="remove_book.php">Remove Book</a><br>
			<a href="display_books.php">Display all Books</a>
		</div>
		
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Users </a>	
		<div class="menu-content">
			<a href="add_user.php">Add User</a><br>
			<a href="remove_user.php">Remove User</a><br>
			<a href="display_users.php">Display all Users</a>
		</div>
		</li>
		<li>
		<img class="cart" src="img/cart.png" onclick="showMyCart()"/>
		<div class="cartDiv" id="cart">
			<p id="cartContent"></p>
		</div>
		</li>
	</ul>
	
	<p align="center"> Welcome to JBU's Online store - open for faculty/staff and students!</p>
	<table align="center">
		<tr>
	<?php
		$i = 0;
		$sql_product="SELECT * FROM product_tab";
		$result_product=$connect->query($sql_product);
		while($row_product = $result_product->fetch_assoc())
		{
	?>
			<td>
				<?php echo "<img src='".$row_product["product_image"]."' /><br>";?>
				<a href="javascript:void(0)" onclick="popupOpen('<?php echo $row_product["sid"]?>')"> <?php echo $row_product["product_name"]?> </a><br>
				<button style="width:100px; height:20px" onclick="javascript:addToCart('<?php echo $row_product["product_name"]?>')"> Add To Cart </button>
			</td>
			
		<?php
		$i ++;
		if ($i % 5 == 0)
		{
			echo "</tr> <tr>";
		}
		}
	?>
		</tr>
	</table>
	<div id="fade" class="black_content"></div>
	
	<div id="popup1" class="white_content">
		<p align=center><br><br>
			<?php echo "<img src='".$row_product["product_image"]."' /><br>";?>
			<?php echo "<img src='".$row_product["product_name"]."' /><br>";?>
			Price: <?php echo "<img src='".$row_product["unit_price"]."' /><br>";?>
			<a href = "javascript:void(0)" onclick = "popupClose('1')">Close Window</a>
		</p>
	</div>
	<div id="popup2" class="white_content">
		<p align=center><br><br>
			<img src="img/laptop.jpg" width=30% /><br>Ideapad<br><br>Price:$1500<br>Rating: 4<br>
			<a href = "javascript:void(0)" onclick = "popupClose('2')">Close Window</a>
		</p>
	</div>
	<div id="popup3" class="white_content">
		<p align=center><br><br>
			<img src="img/textbook.jpg" width=30% /><br>Algorithms Textbook<br><br>Price:$200<br>Rating: 4<br>
			<a href = "javascript:void(0)" onclick = "popupClose('3')">Close Window</a>
		</p>
	</div>
	<div id="popup4" class="white_content">
		<p align=center><br><br>
			<img src="img/waterbottle.jpg" width=30% /><br>Yeti Waterbottle<br><br>Price:$160<br>Rating: 4<br>
			<a href = "javascript:void(0)" onclick = "popupClose('4')">Close Window</a>
		</p>
	</div>
	<div id="popup5" class="white_content">
		<p align=center><br><br>
			<img src="img/airpods.jpg" width=30% /><br>Airpods<br><br>Price:$160<br>Rating: 4<br>
			<a href = "javascript:void(0)" onclick = "popupClose('5')">Close Window</a>
		</p>
	</div>
	<div id="popup6" class="white_content">
		<p align=center><br><br>
			<img src="img/beats.jpg" width=30% /><br>Beats Headphones<br><br>Price:$300<br>Rating: 4<br>
			<a href = "javascript:void(0)" onclick = "popupClose('6')">Close Window</a>
		</p>
	</div>
	
	</body>
</html>
