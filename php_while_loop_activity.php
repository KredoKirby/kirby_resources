<?php
    include "php_while_loop_activity_functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <h1 class="display-4 fw-bold mt-5 text-center">While Loop Counting</h1>
    <div class="container w-50 mx-auto mt-5">
        <form action="#" method="post">
        <div class="row g-3">
                <div class="form-floating col-md-6">
                    <input type="number" name="first_number" id="first_number" class="form-control form-control-lg text-center" placeholder="First Number" required>
                    <label for="first_number">First Number</label>
                </div>
                <div class="form-floating col-md-6">
                    <input type="number" name="second_number" id="second_number" class="form-control form-control-lg text-center" placeholder="Second Number" required>
                    <label for="second_number">Second Number</label>
                </div>
                <div class="col-md-12 mb-4">
                    <input type="submit" value="Submit" name="submit" class="btn btn-lg btn-success form-control">
                </div>
            </div>
        </form>

        <?php
        
            if(isset($_POST['submit'])){
                $first_number = $_POST['first_number'];
                $second_number = $_POST['second_number'];

                whileCount($first_number, $second_number);
            }
        
        ?>
    </div>
</body>
</html>