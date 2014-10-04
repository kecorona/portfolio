<?php

		$special = array('!', '@', '#', '$', '^', '&', '*');

		if($word_list = file("words.txt", FILE_IGNORE_NEW_LINES)) {
			$password = "";
			$count = (empty($_POST["word_count"]) ? 4 : $_POST["word_count"]);
			for ($i = 0; $i < $count; $i++) {
				$word = $word_list[rand(0, 235886)];

				if (isset($_POST["lowercase"])) {
					$word = strtolower($word);
				}
				
				if (isset($_POST["uppercase"])) {
					$word = ucfirst($word);
				}

				if(isset($_POST["numeric"])) {
					$password .= rand(0, 9);
				}
				if(isset($_POST["special"])) {
					$password .= $special[array_rand($special, 1)];
				}

				if ($i != 0) {
					$password .= (" ".$word);
				} else {
					$password .= $word;
				}
			}
				
		}
?>