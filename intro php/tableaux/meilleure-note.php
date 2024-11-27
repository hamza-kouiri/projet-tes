<?php
$max = 0;
$notes = [10, 12.5, 14, 7, 15, 9.5, 8];

foreach ($notes as $note) {
    if ($note > $max) {
        $max = $note;
    }

}
echo "$max";
