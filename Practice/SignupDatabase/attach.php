<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .A {
            width: 30%;
            margin: 10px;
            float: left;
            border-style: solid;
            border-width: 1px;
            border-radius: 10px;
            text-align: center;
        }


        img {
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
            width: 100%;
        }
    </style>
</head>

<body>
    <?php

    include 'Connection.php';

    $sql = "select * from signup_customers";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="A">
                    <h1> <?php echo $row['id']; ?></h1>
                    <h1><?php echo $row['Username'];?></h1>
                    <h3><?php echo $row['Email'];?></h3>
                    <h3><?php echo $row['Password'];?></h3>
                </div>
            <?php
            }
    }
    else
    {
        echo "data not found";
    }

    
    
    ?>
</body>

</html>