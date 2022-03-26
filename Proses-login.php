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

        session_start();

        if(isset($_POST['Login'])) {
            if(isset($_SESSION)) {
                if(($_POST['username'] == $_SESSION['username-regis']) && ($_POST['password'] == $_SESSION['password-1'])) {
                    header('Location: home.php');
                    exit();
                } else {
                    echo "<h1>Maaf Login Belum berhasil</h1>";
                }
            }
        }

    ?>

    <div class="btn-container">
        <a href="Login.php"><button>Kembali</button></a>
    </div>
</body>
</html>