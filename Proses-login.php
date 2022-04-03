<?php

    session_start();
    if(!$_SESSION['logged-in']){
        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    * {
        font-family: Arial;
    }
    body{
        background-color: lightblue;
    }
    h1{
        display: flex;
        justify-content: center;
        margin-top: 5rem;
    }
    .btn-container{
        display: flex;
        justify-content: center;
        margin-top: 7rem;
    }
    button{
        border: none;
        font-size: 30px;
        width: 150px;
        height: 100px;
        background-color: lightyellow;
    }
</style>

</head>
<body>
    <?php

        include("config.php");

        $str_query = "select*from data_user"; 
        $query = mysqli_query($connection, $str_query);

        if(isset($_POST["Login"])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            while($row = mysqli_fetch_array($query)){
                if(($row['username'] == $username) && $row['password'] == $password) {
                    session_start();
                    $_SESSION['logged-in'] = true;
                    header("Location: home.php?username=".$row['username']);
                    exit();
                }
            }

            echo "<h1>Maaf Proses Login anda gagal, silahkan lakukan proses Login kembali...</h1>";
        }
        
    ?>

    <div class="btn-container">
        <a href="Login.php"><button>Kembali</button></a>
    </div>
</body>
</html>