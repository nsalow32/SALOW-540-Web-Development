// SalowA8_4-10.js
//Week 8 Assignment 4.10. Nicole Salow. October 16, 2021.
    //FUNCTION: first_vowel
    //PARAMETER: A string.
    //RETURNS: The position in the string of the leftmost vowel.


    function first_vowel(str) {
        var letter;
        for (var position = 0; position < str.length; position++) {
            letter = str.charAt(position);
            if (letter == 'a' || letter == 'e' || letter == 'i' || letter == 'o' || letter == 'u' || letter == 'y' || letter == 'A' || letter == 'E' || letter == 'I' || letter == 'O' || letter == 'U' || letter == 'Y') {
                return position;
            }
        }
        return -1;
    }
    
    var input_sentence = prompt("Enter a sentence or word: ");

    var vowel_position = first_vowel(input_sentence);

    if (vowel_position === -1)
        document.write(input_sentence + " <h2>does not have any vowels, please try again.</h2>");



