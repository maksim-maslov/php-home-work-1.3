<?php
$multiArray = [
    'Africa' => ['Vulpes pallida', 'Herpestes ichneumon', 'Atelerix algirus', 'Loxodonta', 'Felis margarita'],
    'Australia' => ['Pelecanus conspicillatus', 'Sarcophilus harrisii', 'Zaglossus bruijni', 'Macropus agilis', 'Phascolarctos cinereus'],
    'Eurasia' => ['Tamias sibiricus', 'Mus spicilegus', 'Talpa caucasica', 'Bison', 'Castor fiber']
];

$twoWordsArrays = [];

foreach ($multiArray as $continent => $animal) {
    foreach ($animal as $animalName) {
        if (substr_count ($animalName, ' ') > 0) {
        	$twoWordsArrays[] = $animalName;
        }
    }
}

?>
