<?php

include_once "form-2-function.php";

$fruits = array('Apple', 'banana', 'orange', 'mango', 'pineapple');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <style>
        body{
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column colum-60 column-offset-20 ">
                <h1>Welcome PHP local Server</h1>
                <p>Lorem ipsum dolor sit amat consectetur adipisicing elit. Et dolore voluptate quia!</p>


                <p>
                    <?php
                    print_r($_POST);

                    if (isset($_POST['fruits']) && $_POST['fruits']!='' ) {
                        printf("You have selected: %s ", filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING ));
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="fruits">Select Some fruits</label>
                    <select style="height:200px;" name="fruits[]" id="fruits" multiple="multiple">
                        <option value="" disabled selected >Select Some Fruits</option>
                        <?php displayOptions($fruits); ?>
                    </select>

                    <input type="submit" value ='submit' >
                </form>
            </div>
        </div>
    </div>
</body>
</html>