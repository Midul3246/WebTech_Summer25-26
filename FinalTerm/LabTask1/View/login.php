<?php
include "../Controller/Loginvalidation.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Login Page </title>
        <h1>PHP Form Validation Example </h1>
        <script>
            function collect_data()
            {
                let name = document.getElementById("name").value.trim();
                let email = document.getElementById("email").value.trim();
                let website = document.getElementById("website").value.trim();
                let comment = document.getElementById("comment").value.trim();

                let gender = document.querySelector('input[name="Gender"]:checked');

                let valid = true;
                let message = "";

                if (name.length < 5)
                {
                    message += "Name must be at least 5 characters.\n";
                    valid = false;
                }

                if (email == "")
                {
                    message += "Email cannot be empty.\n";
                    valid = false;
                }

                if (website == "")
                {
                    message += "Website cannot be empty.\n";
                    valid = false;
                }

                if (comment == "")
                {
                    message += "Comment cannot be empty.\n";
                    valid = false;
                }

                if (gender == null)
                {
                    message += "Please select a gender.\n";
                    valid = false;
                }

                if (!valid)
                {
                    alert(message);
                }

                return valid;
            }
        </script>
    </head>
    <body>
       <form method="post" action="" onsubmit="return collect_data()"> 
       <label style="color: red;">* requered field </label>
        <table>
            <tr>
                <td> <label for="name"> Name: </label></td>
                <td> <input type="text" id="name" name="name">
                 <label style= color:red>*</label>
                <?php echo $name ?>
            </td>
            </tr>

            <tr>
                <td> <label for="email"> E-mail: </label></td>
                <td> <input type="text" id="email" name="email">
                 <label style= color:red>*</label>
                <?php echo $email ?>
            </td>
            </tr>


            <tr>
                <td> <label for="website"> Website: </label></td>
                <td> <input type="text" id="website" name="website">
                 <label style= color:red>*</label>
                <?php echo $website; ?>
            </td>
            </tr>

            <tr>
            <td><label for="comment">Comment:</label></td>
            <td>
                 <textarea id="comment" name="comment" rows="5" cols="40"></textarea>
                 <label style="color:red;">*</label>
                 <?php echo $comment; ?>
            </td>
            </tr>

            <tr>
                <td><label for="Gender">Gender:</label></td>
                <td>
                    <input type="radio" id="Male" name="Gender" value="Male">
                    <label for="Male">Male</label>
                    <input type="radio" id="Female" name="Gender" value="Female">
                    <label for="Female">Female</label>
                    <input type="radio" id="other" name="Gender" value="other">
                    <label for="Female">other</label>
                    <label style= color:red>*</label>
                </td>
            </tr>


            <tr>
                <td>
                    <input type="submit" id="submit" value="Submit">
                    
                </td>
            </tr>
        </table>
       </form>
    </body>
</html>