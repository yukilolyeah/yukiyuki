<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный сайт студента Geekbrains</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="content">
    <?php
include "menu.php";
?>

        <div class="contentWrap">
            <div class="content">
                <div class="center">
                    <h1>Игра в загадки</h1>

                    <div class="box">

<?php 

if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])) {

        $userAnswer = $_GET["userAnswer1"];
        $score = 0;
        if($userAnswer == "овца" || $userAnswer == "баран") {
        $score++;
        }

        $userAnswer = $_GET["userAnswer2"];
        if($userAnswer == "свинья" || $userAnswer == "поросенок") {
        $score++;
        }

        $userAnswer = $_GET["userAnswe3"];
        if($userAnswer == "кот" || $userAnswer == "котенок") {
        $score++;
        }
}

echo "Вы угадали " . $score . " загадок";
?>

                    <form method="GET">
                        <p>По горам, по долам ходит шуба да кафтан.</p>
                        <input type="text" name="userAnswer1">

                        <p>Пятак есть, а ничего не купит</p>
                        <input type="text" name="userAnswer2">

                        <p>Кто родится с усами?</p>
                        <input type="text" name="userAnswer3">

                        <br>
                        <input type="submit" value="Ответить" name="">
                    </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        Copyright &copy; Yuliya Goncharuk
    </div>

</body>

</html>
