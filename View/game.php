<?php

    if(isset($_POST['word']))
    {
        session_start();
        $_SESSION['word'] = $_POST['word'];
        $length = strlen($_SESSION['word']);
    }

    if(isset($_GET['letter']))
    {
        $letter = $_GET['letter'];
    }

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Pendu</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="style/style_index.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="container">
            <div class="py-5 text-center">
                <div id="theword">
                    <?php
                    $arrraye = array();
                        for($i = 0; $i < $length; $i++){
                            array_push($arrraye, "_");
                            echo("_ ");
                        }
                        var_dump($arrraye);
                    ?>
                </div>
            </div>
        </div>


        <div class="container" style="width: 400px; height: 400px;">
            <div class="py-5 text-center">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group" role="group" aria-label="First group">
                        <button type="button" class="btn btn-secondary">a</button>
                        <button type="button" class="btn btn-secondary">z</button>
                        <button type="button" class="btn btn-secondary">e</button>
                        <button type="button" class="btn btn-secondary">r</button>
                        <button type="button" class="btn btn-secondary">t</button>
                        <button type="button" class="btn btn-secondary">y</button>
                        <button type="button" class="btn btn-secondary">u</button>
                        <button type="button" class="btn btn-secondary">i</button>
                        <button type="button" class="btn btn-secondary">o</button>
                        <button type="button" class="btn btn-secondary">p</button>
                    </div>
                    <div class="btn-group" role="group" aria-label="Second group">
                        <button type="button" class="btn btn-secondary">q</button>
                        <button type="button" class="btn btn-secondary">s</button>
                        <button type="button" class="btn btn-secondary">d</button>
                        <button type="button" class="btn btn-secondary">f</button>
                        <button type="button" class="btn btn-secondary">g</button>
                        <button type="button" class="btn btn-secondary">h</button>
                        <button type="button" class="btn btn-secondary">j</button>
                        <button type="button" class="btn btn-secondary">k</button>
                        <button type="button" class="btn btn-secondary">l</button>
                        <button type="button" class="btn btn-secondary">m</button>
                    </div>
                    <div class="btn-group" role="group" aria-label="Third group">
                        <button type="button" class="btn btn-secondary">w</button>
                        <button type="button" class="btn btn-secondary">x</button>
                        <button type="button" class="btn btn-secondary">c</button>
                        <button type="button" class="btn btn-secondary">v</button>
                        <button type="button" class="btn btn-secondary">b</button>
                        <button type="button" class="btn btn-secondary">n</button>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(".btn").click(function (e) {

            $.post(
                "../controller/displayword.php",
                {
                    "letter": $(this).text(), // le text du boutton
                },
                function (data) {
                    data = JSON.parse(data);
                    //console.log(data.word);
                    //$('#theword').html(data);
                });
        })
    </script>
</body>

</html>