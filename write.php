<?php
// ファイルに書き込み

// $filepath = pathinfo('q001.php');
// $filename = $filepath['filename'];

$Q001 = $_POST['Q001'];
$C001 = $_POST['C001'];
$Q002 = $_POST['Q002'];
$C002 = $_POST['C002'];
$Q003 = $_POST['Q003'];
$C003 = $_POST['C003'];
$Q004 = $_POST['Q004'];
$C004 = $_POST['C004'];
$Q005 = $_POST['Q005'];
$C005 = $_POST['C005'];
$Q006 = $_POST['Q006'];
$C006 = $_POST['C006'];
$Q007 = $_POST['Q007'];
$C007 = $_POST['C007'];


//文字作成
$str = Q001 . ',' . $Q001 . ',' . $C001 . "\n"
     . Q002 . ',' . $Q002 . ',' . $C002 . "\n"
     . Q003 . ',' . $Q003 . ',' . $C003 . "\n"
     . Q004 . ',' . $Q004 . ',' . $C004 . "\n"
     . Q005 . ',' . $Q005 . ',' . $C005 . "\n"
     . Q006 . ',' . $Q006 . ',' . $C006 . "\n"
     . Q007 . ',' . $Q007 . ',' . $C007 . "\n";


$file = fopen('data/response.csv','a');
fwrite($file, $str);
fclose($file);
?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>回答しました。</h1>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>

</html>
