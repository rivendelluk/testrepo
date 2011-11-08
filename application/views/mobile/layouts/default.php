<?=doctype()?>
<html>
<head>
    <title><?=$template['title']?></title>
     <?=$template['metadata']?>
</head>
<body>
<div class="container_12">
    <div class="grid_7 prefix_1">
        <div class="grid_2 alpha">
            <?=$template['partials']['main_login']; ?>
        </div>
        <div class="grid_3">
            <?php echo $template['body'];?>
        </div>
        <div class="grid_2 omega">
            <?= $template['partials']['category']; ?>
        </div>
    </div>
    <div class="grid_3 suffix_1">
        <?= $template['partials']['slideshow']; ?>
    </div>
</div>
</body>
</html>

