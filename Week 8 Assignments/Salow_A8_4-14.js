//<!--Week 8 Assignment 4.14. Nicole Salow. October 15-16, 2021.
  //  FUNCTION: reverser
    //PARAMETER: A number
   // RETURNS: The number with its digits in reverse order.

var input_number = prompt("Enter a number: ");

function reverser(x) {
    var number_string = x.toString()

    var number = number_string.split("");

    var reverse_number = number.reverse();

    return reverse_number.join("");
}

document.write("Your test number is: " + input_number + "<br />");
document.write("The reverse of your number is: " + reverser(input_number));