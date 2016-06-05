<?php

$letters = array( 'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я' );

$regions = array( 
		   'Алтайский край', 'Адыгея республика', 'Брянская область', 'Владимирская область', 'Воронежская область', 'Курганская область', 'Ямало-Ненецкий автономный округ' 
		   );

$countRegions = count( $regions );


foreach ( $letters as $letter ) {
	echo "<h3>$letter</h3>";
	for ( $i = 0; $i < $countRegions; $i++ ) {
		$firstLetter = mb_substr( $regions[$i], 0, 1 );
		if ( $firstLetter == $letter ) {
			echo "$regions[$i]<br>";
		}
	}
}

