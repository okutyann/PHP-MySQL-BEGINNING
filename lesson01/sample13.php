3000円のものから、100円びきした場合、
<!-- 切り落とし（floorは床という意味） -->
<?php echo floor(100 / 3000 * 100); ?>%引きです。
<br>
<!-- 切り上げ（ceilは天井という意味） -->
<?php echo ceil(3.33); ?>
<br>
<!-- 四捨五入 -->
<!-- 4 -->
<?php echo round(3.56); ?>
<br>
<!-- 3.6 -->
<?php echo round(3.56,1); ?>
<br>
<!-- 3.56 -->
<?php echo round(3.56,2); ?>