<html>

 

<head>

    <title></title>

</head>

 

<body>

    <center>

        <?php

 

        // servername => localhost

        // username => root1

        // password => root

        // database name => staff

        $conn = mysqli_connect("localhost", "peter", "abc123", "project");

         

        // Check connection

        if($conn === false){

            die("ERROR: Could not connect. "

                . mysqli_connect_error());

        }

         

        // Taking all 6 values from the form data(input)

	

        $Fullname =  $_REQUEST['Fullname'];
		
		$Emailid = $_REQUEST['Emailid'];	
		
		$Mobileno =  $_REQUEST['Mobileno'];

		$DateofBirth =  $_REQUEST['DateofBirth'];
		
		$Jobrole =  $_REQUEST['Jobrole'];
		
		$Address =  $_REQUEST['Address'];
		
		$Education =  $_REQUEST['Education'];
		
		$Skills =  $_REQUEST['Skills'];

        $Projects = $_REQUEST['Projects'];
		
		$WorkExperience = $_REQUEST['WorkExperience'];
		
		$Objective = $_REQUEST['Objective']
		
		$Declaration= $_REQUEST['Declaration']


         

        // Performing insert query execution

        // here our table name is cv

        $sql = "INSERT INTO cv VALUES ('$Fullname',

            '$Emailid','$Mobileno','$DateofBirth','$Jobrole','$Address','$Education','$Skills','$Projects','$WorkExperience','$Objective','$Declaration')";

         

        if(mysqli_query($conn, $sql)){

            echo"<h3>data stored in a database successfully."

                ." Please browse your localhost php my admin"

                ." to view the updated data</h3>";

 

            echo nl2br("\n$Fullname\n $Emailid\n "

                ."$Mobileno\n $Dateofbirth\n $Jobrole\n $Address\n $Education\n $Skills\n $Projects\n $WorkExperience\n $Objective\n $Declaration");

        }  else{

            echo"ERROR: Hush! Sorry $sql. "

                .mysqli_error($conn);

        }

         

        // Close connection

        mysqli_close($conn);

        ?>

    </center>


</body>

 

</html>