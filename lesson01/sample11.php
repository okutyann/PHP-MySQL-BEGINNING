<?php
$fruits = [
    'apple' => 'りんご',
    'grape' => 'ぶどう',
    'orange' => 'みかん',
    'lemon' => 'れもん',
    'tomato' => 'トマト'];
echo $fruits['tomato'];
?>
<dl>
    <?php foreach($fruits as $english => $japanese): ?>
    <dt><?php echo $english; ?></dt>
    <dd><?php echo $japanese; ?></dd>
    <?php endforeach; ?>
</dl>