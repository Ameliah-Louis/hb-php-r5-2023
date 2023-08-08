<?php

// Fonction file de la SPL
echo "<h2>file</h2>";
$arrayFileContent = file('emails.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
var_dump($arrayFileContent);

echo "<h2>file_get_contents</h2>";
$rawFileContent = file_get_contents('emails.txt');
var_dump($rawFileContent);
$emailsArrayExplode = explode("\n", $rawFileContent);
$emailsFiltered = array_filter($emailsArrayExplode, fn ($email) => $email !== '');
var_dump($emailsArrayExplode);
var_dump($emailsFiltered);

echo "<h2>fopen</h2>";
$file = fopen('emails.txt', 'a+');

$emails = [];
while (($line = fgets($file)) !== false) {
  $line = str_replace(PHP_EOL, '', $line);
  $emails[] = $line;
}

var_dump($emails);

fclose($file);

echo "<h2>SplFileInfo / SplFileObject</h2>";

$fileInfo = new SplFileInfo("emails.txt");
var_dump($fileInfo);

$file = $fileInfo->openFile('a+');
$file->setFlags(SplFileObject::DROP_NEW_LINE | SplFileObject::READ_AHEAD | SplFileObject::SKIP_EMPTY);

$emails = iterator_to_array($file);
var_dump($emails);

foreach ($file as $row) {
  var_dump($row);
}
