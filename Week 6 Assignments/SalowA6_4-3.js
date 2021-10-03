//Input three numbers using prompt to get each
//output the largest of the three input numbers 
//hint: use the predefined function math.max//

function numprompt() {
    var num1 = prompt("Enter the first of three numbers:");
    var num2 = prompt("Enter the second of three numbers:");
    var num3 = prompt("Enter the third of three numbers:");
    var mathmax = Math.max(num1, num2, num3)

    alert(mathmax);
}