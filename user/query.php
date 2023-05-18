<?php
include("../signin/navigation3.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGkCFQFc0dRVnFNKYPyAUN7UfnojKLQHrJ97WYWAAxqDtjFwdRPTKgKZWCfv9e-GgzTxA&usqp=CAU">

    <title>CMS</title>
    <style>
        table {
            display: inline-;
            border-collapse: collapse;
            width: 80%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }

        th {
            background-color: #588c7e;
            color: white;
        }

        tr {
            background-color: #f2f2f2
        }

        #div1 {
            
            align-items: center;
            justify-content: center;
            display: flex;

           
        }
    </style>
</head>

<body>



    <div id="div1">
        <table border="1">
           <h1> <caption style="text-align: center;"> Feedback </caption></h1>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Department</th>
                <th>Message</th>


            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "canteen_delivery_system");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // $sql = "SELECT *  FROM queries";


            // $result = $conn->query($sql);
            $result = mysqli_query($conn, "SELECT *  FROM queries");
            if ($result->num_rows >= 0) {
                // output data of each row
                // while ($row = $result->fetch_assoc()) {
                    while($row = mysqli_fetch_array($result)) {

                    echo "<tr><td>" . $row["firstName"] . "</td><td>" . $row["lastName"] . "</td><td>" . $row["dept"] . "</td><td>" . $row["message"] . "</td>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </table>
    </div>

    </table>


    <br>
    <br>

    </div>

</body>

</html>