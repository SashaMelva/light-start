<?php

// Версия 1
function getLines($file) {
    $f = fopen($file, 'r');
    try {
        while ($line = fgets($f)) {
            yield $line;
        }
    } finally {
        fclose($f);
    }
}
// Версия 2
function getLines($file) {
    $f = fopen($file, 'r');
    try {
        $result = []
        while ($line = fgets($f)) {
            $result[] = $line;
        }
    } finally {
        fclose($f);
    }
    return $result;
}

foreach (getLines("file.txt") as $n => $line) {
    ...
}
