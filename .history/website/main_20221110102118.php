<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dakujem za vyplnenie dotasnika lol</h1>
    <?php
        function OpenCon()
        {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "1234";
        $db = "example";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
        
        return $conn;
        }
        
on CloseCon($conn)
            {
        $conn -> close();
            }
    ?>
</body>
</html>
