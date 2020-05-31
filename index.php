<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB2</title>
</head>
<body>
    <div id="wrapper">
        <?php
            require_once("userclass.php");
            $nguyennhat = new User('nhat nguyen','nhatnguyenhong@gmail.com');
            echo "<h2>User Info</h2>";
            echo "UserID: ".$nguyennhat->GetUserID()."<br/>";
            echo "UserName: ".$nguyennhat->GetUserName()."<br/>";
        ?>
    </div>
</body>
</html>