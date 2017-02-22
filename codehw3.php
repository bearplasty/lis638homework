   <!DOCTYPE html>
<html>
    <head>
		<title>Thomas Kiedrowski Homework 3</title>
	</head>
	<!--add somewhat fancy styling-->
	<style>
	th {background-color: black}
	thead {color: white}
	tr:nth-child(even) {background: lightblue}
	tr:nth-child(odd) {background: cyan}
	</style>
	<body>
	<h2>Book Information</h2>
	<!-- create table-->
   <table>
      <thead>
        <tr>
			<th>Title</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Number of pages</th>
			<th>Type</th>
			<th>Price</th>
		</tr>
      </thead>
      <tbody>
<?php
  #create array
$bookData = array(
				array("Title"=>"PHP and MySQL Web Development","First Name"=>"Luke","Last Name"=>"Welling", "Number of pages"=>144,"Type"=>"Paperback", "Price"=>31.63),
				array("Title"=>"Web Design with HTML, CSS, JavaScript and jQuery","First Name"=>"Jon","Last Name"=>"Duckett", "Number of pages"=>135,"Type"=>"Paperback","Price"=>41.23),
				array("Title"=>"PHP Cookbook: Solutions & Examples for PHP Programmers","First Name"=>"David","Last Name"=>"Sklar", "Number of pages"=>14,"Type"=>"Paperback", "Price"=>40.88),
				array("Title"=>"JavaScript and JQuery: Interactive Front-End Web Development","First Name"=>"Jon","Last Name"=>"Duckett", "Number of pages"=>251,"Type"=>"Paperback", "Price"=>22.09),
				array("Title"=>"Modern PHP: New Features and Good Practices","First Name"=>"Josh","Last Name"=>"Lockhart", "Number of pages"=>7,"Type"=>"Paperback", "Price"=>28.49),
				array("Title"=>"Programming PHP","First Name"=>"Kevin","Last Name"=>"Tatroe", "Number of pages"=>26,"Type"=>"Paperback", "Price"=>28.96),
							);
				#set sum = 0
				$sum=0;
				foreach ($bookData as $row) {
					echo '<tr>';
					foreach ($row as $key => $value) {
						echo "<td>{$value}</td>";
					}	
							if ($key=="Price") {
								$sum+=$value;
							}
				echo '</tr>';
				}
   ?>
      </tbody>
	  <!-- close table-->
    </table>
	<?php
		#display statement for total # of book prices
		echo "Your total price is:<br>$$sum";
   ?>
<h2>Coin Toss - Part  c</h2>
	<?php
# run function looking for 3 heads in a row	
headFlipper(3);
	
#create function $headFlipper
function headFlipper($count) {
		$heads = "http://www.marshu.com/articles/images-website/articles/presidents-on-coins/penny-cent-coin-head.jpg";
		$tails = "http://www.marshu.com/articles/images-website/articles/presidents-on-coins/penny-cent-coin-tail.jpg";
		$headCount = 0;
		$flipCount = 0;
	#display beginning statement for $count # of heads
	echo "<br>Beginning the coin flipping, looking for $count heads in a row.<br>";	
	#begin while statement
	while ($headCount < $count) {
		$flip = mt_rand(0,1);
		$flipCount++;
		if ($flip){
			$headCount++;
			 echo "<img src='$heads' height=\"80\" width=\"80\">";
			 #set flipCount for global reach
			 global $flipCount;
		}
		else {
			$headCount=0;
			echo "<img src='$tails' height=\"80\" width=\"80\">";
		}
	}
}
	#display total number of flips
	echo "<p>It took {$flipCount} flips!</p>";
	?>
    </body>
</html>