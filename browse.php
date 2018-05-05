<?php include 'header.php'; ?>

<div class="eventContainer">
	<?php
		
		$result = mysqli_query($conn, "SELECT * FROM search");

			while ($row = mysqli_fetch_array($result))
			{
				echo  "<div class='eventBox'>
				<h3>".$row['title']."</h3>
				<p>".$row['description']."</p>
				<p>By ".$row['author']."</p>
				<p>".$row['date']."</p></div>";
				echo "<p></p>";
			}
		
	?>
</div>

