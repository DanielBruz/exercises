<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>fun times php</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="container">

	<div class="page-header">
		<h1 class="text-muted">fun times php</h1>

	</div>
		<?php
			// ulozime hodnoty do promennych
			$item_count = 5;
			$item_price = 350;
			
			// vynasobime je a vysledek ulozime do promenne $sum
			$sum = $item_count * $item_price;

			// promennou $sum vypiseme na stranku
			// na strance se objevi cislo
			echo $sum;
			
			echo '<br>----<br>';
			
			// porovnani cisel
			$number_1 = 50;
			$number_2 = 10;
			if ($number_1 > $number_2)
			{
				echo 'Prvni cislo je vetsi.';
			}
			else if ($number_1 < $number_2)
			{
				echo 'Druhe cislo je vetsi.';
			}
			else
			{
				echo 'Obe cisla se rovnaji';
			}
			
			echo '<br>----<br>';
			
			// porovnani stringu
			$word_1 = 'aaaaa';
			$word_2 = 'aaaaaaaa';
			$length_word_1 = strlen($word_1);
			$length_word_2 = strlen($word_2);

			if ($length_word_1 > $length_word_2)
			{
				echo 'Prvni slovo je delsi.';
			}
			else if ($length_word_1 < $length_word_2)
			{
				echo 'Druhe slovo je delsi.';
			}
			else
			{
				echo 'Obe slova jsou stejne dlouha.';
			}

			echo '<br>----<br>';

			// Porovnani s minimalnim cislem
			$number = 8;
			$min = 6;
			if ($number > $min)
			{
				echo 'Cislo je <strong>vyssi</strong> nez minimum.';
			}
			else if ($number < $min)
			{
				echo 'Cislo je <strong>nizsi</strong> nez minimum.';
			}
			else
			{
				echo 'Obe cisla <strong>se rovnaji.</strong>';
			}
			echo '<p>';
			echo '<br>----<br>';

		?>
</body>
</html>