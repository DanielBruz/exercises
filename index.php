		<?php
			// Nacteni hlavicky
			include 'header.php';
			
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

			// Vypis slozitejsiho stringu
			echo "I\'m";

			echo '<br>----<br>';

			//String s promennymi
			echo "Koupil jsi <strong>$item_count</strong> polozek za <strong>{$sum}$</strong>";   

			echo '<br>----<br>';
		?>