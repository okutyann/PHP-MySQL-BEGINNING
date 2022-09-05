<p>2022.9.5→2022.09.05</p>
<!-- *sprintf = string + print + format という意味 -->
<?php
$date = sprintf('%04d.%02d.%02d',2022,9,5);
// $date = 2022.09.05 
echo $date;
?>
<br>
<!-- %d のdはデシマル（整数）
→必ず数字で表示
%s のsはストリング（文字列）
→必ず文字で表示する

%04d の[04]は桁数
→４桁より少ない場合は０を補う
（例:
sprintf(%04d,29） = 0029
sprintf(%03d,345） = 345
sprintf(%02d,5） = 05
) -->
<?php
$date = sprintf('%04d-%02d-%02d',2022,9,5);
// $date = 2022-09-05 
echo $date;
?>
<br>
<?php
$date = sprintf('%04d年%02d月%02d日',2022,10,29);
// $date = 2022年10月29日 
echo $date;
?>
