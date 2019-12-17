<?php
$me = mysqli_connect('localhost', 'root', '', 'lcode', '3308');
mysqli_query($me, "set character set utf8");
$mine = mysqli_query($me, 'select * from languages');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="description" content="first site">
    <meta name="keywords" content="php,sql,message">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.js"></script>
</head>
<body>
<table>
    <div class="container">
        <div class="col-4">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Language Rank</th>
                    <th>Types</th>
                    <th>Spectrum Ranking</th>
                </tr>
                </thead>
                <?php foreach ($mine as $t): ?>
                <tbody>
                <tr>
                    <td><?php print ($t['id'].'.'.$t['language'])?></td>
                    <td><?php print ($t['web'].''.$t['computer'].''.$t['android'].''.$t['security'])?></td>
                    <td>
                        <div class="progress" style="height: 20px">
                            <div class="bg-warning progress-bar" role="progressbar" style="width:<?php print ($t['spectrum'])?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </td>

                </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</table>
</body>