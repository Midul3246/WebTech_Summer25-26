<?php
$name = "";
$password = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name=trim($_POST["name"] ?? "");
        $password=trim($_POST["password"] ?? "");
        $email=trim($_POST["email"] ?? "");
        $website=trim($_POST["website"] ?? "");
        $comment=trim($_POST["comment"] ?? "");
        $gender = trim($_POST["Gender"] ?? "");

        if(!empty($name) && strlen($name)>=5)
            {
                echo "Name: ".$name;
                echo "<br>";
            }
            else{
                echo "User Name Must be at least 5 Charectar";
                echo "<br>";
            }

        if(!empty($email) &&  strlen($email)>=5)
        {
            echo "Email: ".$email;
            echo "<br>";
        }
        else{
            echo "email can not be empty";
             echo "<br>";
        }

        if(!empty($website))
            {
                echo "Website: ".$website;
                echo "<br>";
            }
            else
                {
                    echo "websit can not be empty"; 
                     echo "<br>";
                }

        if (!empty($comment)) 
            {
                echo "Comment: " . $comment;
                echo "<br>";
            } 
                else 
                {
                    echo "Comment Is empty";
                    echo "<br>";
                }

        if (!empty($gender)) {
            echo "Gender: " . $gender;
            echo "<br>";
        } 
            else {
                echo "Please select a gender";
                echo "<br>";
                }

        
    }




?>