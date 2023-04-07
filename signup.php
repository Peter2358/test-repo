<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/styleSign.css">
    <title>Cooking...</title>
</head>
<body>
<?php set_include_path('/resources/styleSign.css')?>    

<div class="loginBox">
    <h2>Welcome</h2>
    <form action="signup.php" method="GET">
        Name: <input type="text" name="txtBox1">
        Password: <input type="text" name="txtBox2">
        <input type="submit">
        <input type="button" value="Cancel">
    </form>
</div>

<?php
    $userName = $_GET["txtBox1"];
    $checkName = False;
    $userPass = $_GET["txtBox2"];
    $checkPass = False;
 
    if ($userName == ""){
        echo "Please enter name";
    }
    elseif ($userName == "Chubbs") {
        $checkName = True;
    }
    else {
        $checkName = False;
    }

    if ($userPass == "") {
        echo "Please enter password";
    }
    elseif ($userPass == "brokenBones") {
        $checkPass = True;
    }
    else {
        $checkPass = False;
    }

    if ($checkName = True && $checkPass = True) {
        echo "Login Successful";
    }
    elseif ($checkName = False || $checkPass = False) {
        echo "Login Unsuccessful";
    }
    
?>

</body>
</html>