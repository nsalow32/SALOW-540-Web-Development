//Week 8 Assignment 4.11. Nicole Salow. October 15-17, 2021.
  //  FUNCTION: counter
    //PARAMETER: A string
    //RETURNS: The numbers of negative elements, zeros and values greater than zero in the given array.
    //NOTE: You must use switch statement in the function (not - can use if-then-else)
    
var numbers = prompt("Enter some numbers separated by commas: ");

function counter(x) {
    var negative_count = 0;
    var zero_count = 0;
    var greater_count = 0;
    var i;

    var input_array = x.split(",");

    
    for (i = 0; i < input_array.length; i++) {
       
        if (input_array[i] < 0) {
            negative_count++;
        }         
        else if (input_array[i] == 0) {
            zero_count++;
        }     
        else {
            greater_count++;
        }
    }

    countNums = [negative_count, zero_count, greater_count];

    return countNums;
    
}


document.write("Your numbers = " + numbers + "<br />");

document.write("Count of Numbers Less Than Zero: " + counter(numbers)[0] + "<br />");

document.write("Count of Numbers Equal to Zero: " + counter(numbers)[1] + "<br />");

document.write("Count of Numbers Greater than Zero: " + counter(numbers)[2]);



