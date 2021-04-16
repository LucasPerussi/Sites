<?php  
         $servername = "gitlab.tadsufpr.net.br";
         $username = "web1";
         $password = "tads";
         $dbname = "ds122_2021_especial_2";
         $conn = mysqli_connect($servername, $username, $password,$dbname);  
         
         if(!$conn) {  
            die('Could not connect: '.mysqli_connect_error());  
         }  
         echo 'Connected successfully<br/>';  
         $sql = "DROP TABLE grr20177828_form";
         
         if(mysqli_query($conn, $sql)) {  
            echo "Table is deleted successfully";  
         } else {  
            echo "Table is not deleted successfully\n";
         }  
         mysqli_close($conn);  
      ?>  