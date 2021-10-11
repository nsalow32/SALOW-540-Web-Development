// SalowA6_4-4.js
var user_sentence = prompt("Enter a string of words: ");

var user_words = user_sentence.split(' ');

alert("Your words in alphabetical order: " + user_words.sort())

document.write("<p class='text'>Your words in alphabetical order: </p>" + user_words.sort())
