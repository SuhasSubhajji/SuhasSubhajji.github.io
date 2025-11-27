<?php
$file = "note.txt";
$content = $_POST["content"] ?? "";

if (file_put_contents($file, $content) !== false) {
    echo "Saved to server ✔";
} else {
    echo "Error saving!";
}
?>
