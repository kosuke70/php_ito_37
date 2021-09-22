<!-- <?php
// ファイルを開く
$openFile = fopen('data/response.csv','r');

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($openFile)){
    echo nl2br($str);
}

// ファイルを閉じる
fclose($openFile);

?> -->


<?
$fileName = "data/response.csv";
$file = fopen($fileName,"r");
?>
<table border="1">
<tr>
<td>項番</td>
<td>回答</td>
<td>コメント</td>
</tr>
<?
while(!feof($file)){
$csv = fgets($file);
$str = explode(",", $csv);
?>
<tr>
<td><? echo $str[0]; ?></td>
<td><? echo $str[1]; ?></td>
<td><? echo $str[2]; ?></td>
</tr>
<?
}
fclose($file);
?>
</table>