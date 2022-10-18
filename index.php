<?php

require_once 'config.php';

if(isset($_GET['q'])) {

//for testing --> 	echo 'a';
	$q = $_GET['q'];

	$query = $client->search([
		'body' => [
			'query' => [ 
				'multi_match' => [
					'query' => $q,
					'fields' => [
						'title',
						'year',
						'synopsis',

					]
				]
			]
		]
	]);

	if($query['hits']['total'] >=1) {
		$results = $query['hits']['hits'];
	}
	
}

?>

<html>
	<head>
		<title>Search | ES</title>
	</head>
	<body>
		<form action="index.php" method="get" autocomplete="off">
			<label>
				Search for something
					<input type="text" name="q">			
			</label>
			
			<input type="submit" value="Search">
		</form>
		
		
		<?php
		if (isset($results)) {
			foreach($results as $r) {
		?>
			<div class="result">
				<a href="#<?php echo $r['_id']; ?>"><?php echo $r['_source']['title'];?></a>
				<div class="year"><?php echo $r['_source']['year']; ?></div>
				<div class="synopsis"><?php echo implode(', ', $r['_source']['synopsis']); ?></div>
				<br>
	<?php
	}
	}

	?>

	</body>
</html>
