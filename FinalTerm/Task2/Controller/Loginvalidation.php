<?php
session_start();
$name = "";
$password = "";
$email = "";
$website = "";
$comment = "";
$gender = "";
$remember = false;

if(isset($_COOKIE["remember_user"]))
{
    $name = $_COOKIE["remember_user"];
}


if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name=trim($_POST["name"] ?? "");
        $password=trim($_POST["password"] ?? "");
        $email=trim($_POST["email"] ?? "");
        $website=trim($_POST["website"] ?? "");
        $comment=trim($_POST["comment"] ?? "");
        $gender = trim($_POST["Gender"] ?? "");
        $remember = isset($_POST["remember"]) && $_POST["remember"] == "1";

        $valid = true;

        if(!empty($name) && strlen($name)>=5)
            {
                echo "Name: ".$name;
                echo "<br>";
            }
            else{
                echo "User Name Must be at least 5 Charectar";
                echo "<br>";
                $valid = false;
            }

        if(!empty($email) &&  strlen($email)>=5)
        {
            echo "Email: ".$email;
            echo "<br>";
        }
        else{
            echo "email can not be empty";
             echo "<br>";
             $valid = false;
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
                     $valid = false;
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
                    $valid = false;
                }

        if (!empty($gender)) {
            echo "Gender: " . $gender;
            echo "<br>";
        } 
            else {
                echo "Please select a gender";
                echo "<br>";
                $valid = false;
                }

        if($valid)
            {
                $_SESSION["submitted"] = true;
                $_SESSION["username"] = $name;
                $_SESSION["email"] = $email;
                $_SESSION["website"] = $website;
                $_SESSION["comment"] = $comment;
                $_SESSION["gender"] = $gender;

                $message = "Form Submitted Successful! Session Created";


                if($remember)
                {
                    setcookie("remember_user", $name, time() + 60*60*24*7, "/");
                }
                else
                {
                    setcookie("remember_user", "", time() - 3600, "/");
                }
            }

    }
?>