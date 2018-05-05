<?php
	include 'header.php';

	$output = '';

?>

<section class="main-wrapper">
	<div class="main-wrapper">
		

	</div>

</section>


<div id="searchcontainer">

<form action="search.php" method="POST" >
			<input type="text" id="searchBar" name="searchBar" placeholder="Search"  maxlength="25" autocomplete="off" />
			<input type="text" id="locationBar" placeholder="Location" maxlength="25"  autocomplete="off" /> 
			<p />
			<br>
			<p />
			<div><input type="submit" id="searchBtn" value="Search" /></div>
		</form>



</div>

<?php
	include 'footer.php';
?>