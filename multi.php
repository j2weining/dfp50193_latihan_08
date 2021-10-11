<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'menu.php'; ?>
    <h2>MULTIDIMENSIONAL ARRAY</h2>

    <?php
    $perserta = [
        'ali'=> [
            'nama'=>'Ghazali',
            'umur'=>16,
            'jantina'=> 'Lelaki',
        ],
        'adi'=>[
            'nama'=>'Norhadi',
            'umur'=>26,
            'jantina'=> 'Lelaki',
        ]
    ];
        ?>
    <table border="1" cellspacing="0">
        <tr>
            <th>Bil</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jantina</th>
        </tr>
        <?php
        $bil = 1;
        foreach ($peserta as $pelajar){

        }
        ?>
    </table>
</body>
</html>