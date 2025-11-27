<?php
$file = "note.txt";

if (file_exists($file)) {
    echo file_get_contents($file);
} else {
    echo ""; // return empty on first run
}
?>
