<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


        $servername = "localhost";
        $username = "root";
        $password = "1234";
        $dbname = "LOGIN";



        $conn =  mysqli_connect($servername, $username, $password, $dbname);

        if($conn->connect_error){
            echo "Unsuccesful";
        }

        else{
            echo "succesful";
        }


        // if(isset($_POST['submit']))
        // {
        //     $email= $_POST["fname"];
        //     $pass = $_POST["pass"];


        //     if (valid_email($email) && valid_pass($pass))
        //     {
        //         echo "Submitted";
        //     }

        //     else{
        //         echo "Invalid Entry";
        //     }




            // $sql= "CREATE TABLE IF NOT EXISTS login(
            //     username VARCHAR(50) PRIMARY KEY,
            //     password VARCHAR(30) NOT NULL)";

            // if($conn->query($sql)==true){
            //     echo "Table created";
            // }     
            



            // $sql1 = "INSERT INTO login VALUES('$email','$pass')";

            // echo $email;
            // echo $pass;

            // if($conn->query($sql1)==true){
            //     echo "Data Inserted";
            // } 




    if(isset($_POST['search'])){
    
        $find_email= $_POST["find"];
        $sql_find = "select * FROM login";
        $result = mysqli_query($conn,"select * FROM login where username='satyamjha@gmail.com'");
        $row = mysqli_fetch_array($result);
        echo var_dump($row);

        // if($conn->query($sql_find)==true){
        //     echo "Data Search";
        // } 

    }






        





       






        function valid_email($email){

            return filter_var($email,FILTER_VALIDATE_EMAIL);
        }


        function valid_pass($pass){
            $uppercase = preg_match('@[A-Z]@', $pass);
            $lowercase = preg_match('@[a-z]@', $pass);
            $number    = preg_match('@[0-9]@', $pass);
            $specialChars = preg_match('@[^\w]@', $pass);



            if ($uppercase || $lowercase || $number || $specialChars || strlen($pass)<8)
            {
                return True;

            }

            else{
                return false;
            }

        }



     




    
    
    
    ?>
</body>
</html>