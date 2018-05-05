<?php include 'header.php'; ?>

<h2>Search results</h2>

<div class="eventContainer">
<?php


	if (isset($_POST['searchBar'])) {
		$searchq = $_POST['searchBar'];
		
		$query = mysqli_query($conn, "SELECT * FROM search WHERE CONCAT(title, description, author) LIKE '%$searchq%'") or die("Could not search!");
		$count = mysqli_num_rows($query);
		if ($count == 0) {
			$output = 'There are no events!';

		}else{
			while ($queryRow = mysqli_fetch_array($query)) {
				$titleq = $queryRow['title'];
				$descriptionq = $queryRow['description'];
				$authorq = $queryRow['author'];

				$output .= '<div><h3>'.$titleq.'</h3>Description: '.$descriptionq.'<br>Author: '.$authorq.'</div>';
 			}
 		}

	} 

	echo "$output";

?>	


</div>