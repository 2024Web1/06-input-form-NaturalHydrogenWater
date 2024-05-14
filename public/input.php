<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input.php</title>
</head>

<body>
    <h4><!-- ここに"出席番号 名前"を入れてください --></h4>
    <?php
    echo '<p>' . $_POST['name'] . 'さんの年齢は' . $_POST['age'] . '才です。</p>';
    ?>
    <a href='input.html'>戻る</a>
</body>

</html>