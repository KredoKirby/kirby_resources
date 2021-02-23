<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isset Function</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="name">
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $first_name = $_POST['name'];

            echo "Hello, ".$first_name;
        }
    ?>
</body>
</html>

