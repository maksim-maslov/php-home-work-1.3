<?php
$multiArrays = [
    'Africa' => ['Vulpes pallida', 'Herpestes ichneumon', 'Atelerix algirus', 'Loxodonta', 'Felis margarita'],
    'Australia' => ['Pelecanus conspicillatus', 'Sarcophilus harrisii', 'Zaglossus bruijni', 'Macropus agilis', 'Phascolarctos cinereus'],
    'Eurasia' => ['Tamias sibiricus', 'Mus spicilegus', 'Talpa caucasica', 'Bison', 'Castor fiber']
];

$twoWordsArray = [];

foreach ($multiArrays as $continent => $animal) {
    foreach ($animal as $animalName) {
        if (substr_count($animalName, ' ') === 1) {
        	$twoWordsArray[] = $animalName;
        }
    }
}

$twoWordsArrayShuffle = $twoWordsArray;
shuffle($twoWordsArrayShuffle);


foreach ($twoWordsArray as $key => $value) {
	$itemstwoWordsArray = explode(' ', $value);
	$itemsArrayShuffle = explode(' ', $twoWordsArrayShuffle[$key]);
	$twoWordsArray[$key] = str_replace($itemstwoWordsArray[1], $itemsArrayShuffle[1], $value);	
}

foreach ($multiArrays as $continent => $animal) {

	?>

	<h2><?= $continent ?></h2>

	<?php

	$outputArray = [];
	foreach ($twoWordsArray as $twoWordsArrayItem) {
		foreach ($animal as $animalName) {			
	        if (substr_count($animalName, substr($twoWordsArrayItem, 0, strpos($twoWordsArrayItem, ' ') - 1)) > 0) {
	        	$outputArray [] = $twoWordsArrayItem;
	        }
	    }		
	}
	echo implode(', ', $outputArray);
}

?>
