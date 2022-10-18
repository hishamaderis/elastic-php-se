<?php

require_once 'config.php';

if (!empty($_POST)) {

	if(isset($_POST['title'], $_POST['year'], $_POST['synopsis'])) {
	
		$title = $_POST['title'];
		$year = $_POST['year'];
		$synopsis = explode(',', $_POST['synopsis']);

		$indexed = $client->index([
			'index' => 'movies',
			'type' => 'movie',
			'body' => [
				'title' => $title,
				'year' => $year,
				'synopsis' => $synopsis	
			]
		]);

//		if($indexed) {
//			print_r($indexed);
//		
//	}
}

}

?>
<html>
	<head>
		<title> Add | ES </title>
	</head>
	<body>
		<form action="add.php" method="post" autocomplete="off">
			<label>
				Title
				<input type="text" name="title">
			</label>		
			<br><br>
			<label>
				Year
				<input type="text" name="year">
			</label>		
			<br><br>
			<label>
				Synopsis
				<textarea name="synopsis" rows="8"></textarea>
			</label>		

  <br><br>
		<input type="submit" value="Add">
		</form>
	</body>	
</html>
