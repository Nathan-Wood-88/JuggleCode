<?php

# A simple testfile for the JuggleCode package.
# The aim is to simply produce a sentence by using
# all features JuggleCode provides...


# Include some classes:
require('test2.php');
$fox = new Fox;
$dog = new Dog;


function end_sentence($end_character) { return $end_character; }


# Collect words:
$words = array();
$words[] = 'The';
if ($fox->getAttributes()) {
	$words[] = $fox->getAttributes();
}
$words[] = $fox->getSpecies();
$words[] = Animal::jump();
$words[] = 'over';
$words[] = 'the';
if ($dog->getAttributes()) {
	$words[] = $dog->getAttributes();
}
$words[] = $dog->getSpecies();


# Concatenate words and output sentence:
$sentence = implode(' ', $words);
echo $sentence,end_sentence('.'),PHP_EOL;
