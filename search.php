<html>

 

<head>

    <title>Insert into page</title>

</head>

 

<body>

    <center>

        <?php

 

        // servername => localhost

        // username => root1

        // password => root

        // database name => staff

        $conn = mysqli_connect("localhost", "peter", "abc123", "dbsl");

         

        // Check connection

        if($conn === false){

            die("ERROR: Could not connect. "

                . mysqli_connect_error());

        }

         

        // Taking all 6 values from the form data(input)

	

        $Firstname =  $_REQUEST['Firstname'];

        $Lastname = $_REQUEST['Lastname'];

        $Mobileno =  $_REQUEST['Mobileno'];

        $Emailid = $_REQUEST['Emailid'];	

        $Password = $_REQUEST['Password'];
		
		$Bloodgroups = $_REQUEST['Bloodgroups'];

         

        // Performing insert query execution

        // here our table name is donors

        $sql = "INSERT INTO donors VALUES ('$Firstname',

            '$Lastname','$Mobileno','$Emailid','$Password','$Bloodgroups')";

         

        if(mysqli_query($conn, $sql)){

            echo"<h3>data stored in a database successfully."

                ." Please browse your localhost php my admin"

                ." to view the updated data</h3>";

 

            echo nl2br("\n$Firstname\n $Lastname\n "

                ."$Mobileno\n $Emailid\n $Password\n $Bloodgroups");

        }  else{

            echo"ERROR: Hush! Sorry $sql. "

                .mysqli_error($conn);

        }

         

        // Close connection

        mysqli_close($conn);

        ?>

    </center>

	<a href="blood.html"><center>Click here to go Home page</center></a>

</body>

 

</html>



