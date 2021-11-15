<!DOCTYPE html>
<html lang = "en">

    <head>
       <title>Processing the Form with PHP</title>
        <meta charset = "utf-8" />
        <style type = "text/css">
        td, th, table { border: think solid black;} 
        </style>
    </head>

        <body>

        <!--Get form data values-->
            <?php
                $Four25W = $_POST["Four25W"];
                $Eight25W = $_POST["Eight25W"];
                $Four25Wlong = $_POST["Four25Wlong"];
                $Eight25Wlong = $_POST["Eight25Wlong"];

                $fname = $_POST["fname"];
                $lname = $_POST["lname"];

                $paymentmethod = $_POST["paymentmethod"];

                // If any checkboxes are blank/unchecked, set to zero (0)//
                if ($Four25W == NULL) $Four25W = 0;
                if ($Eight25W == NULL) $Eight25W = 0;
                if ($Four25Wlong == NULL) $Four25Wlong = 0;
                if ($Eight25Wlong == NULL) $Eight25Wlong = 0;

                // Compute item cost and total cost with tax//
                $Four25W_cost = 2.39 * $Four25W;
                $Eight25W_cost = 4.29 * $Eight25W;
                $Four25Wlong_cost = 3.95 * $Four25Wlong;
                $Eight25Wlong_cost = 7.49 * $Eight25Wlong;

                $total_price = $Four25W_cost + $Eight25W_cost + $Four25Wlong_cost + $Eight25Wlong_cost;

                $final_price = $total_price * .062;
                ?>

            <p>
                <?php
                    print ("$fname $lname");
                ?>
            </p>

            <table>
                <tr>
                    <th> Your purchased Items </th>
                    <th> Price </th>
                </tr>

                <tr>
                    <td> Four 25-Watt Light Bulbs </td>
                    <td> <?php print ("$Four25W_cost" * .062); ?> </td>
                </tr>

                <tr>
                    <td> Eight 25-Watt Light Bulbs </td>
                    <td> <?php print ("$Eight25W_cost" * .062); ?> </td>
                </tr>

                <tr>
                    <td> Four 25-Watt Long-Life Light Bulbs </td>
                    <td> <?php print ("$Four25Wlong_cost" * .062); ?> </td>
                </tr>

                <tr>
                    <td> Eight 25-Watt Long-Life Light Bulbs </td>
                    <td> <?php print ("$Eight25Wlong_cost" * .062); ?> </td>
                </tr>

                <?php print ("$fname" + "$lname" + ", Your total cost is $" + $final_price); ?>
            
            
            </table>
    </body>

</html>

