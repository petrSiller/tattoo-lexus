<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>UberGallery</title>
    <link rel="shortcut icon" href="<?php echo THEMEPATH; ?>/images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/gallery.css" />
    <?php echo $gallery->getColorboxStyles(5); ?>

    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.min.js"></script>
    <?php echo $gallery->getColorboxScripts(); ?>

</head>
<body>

<div class="galleryWrapper">
    <?php if($gallery->getSystemMessages()): ?>
        <ul id="systemMessages">
            <?php foreach($gallery->getSystemMessages() as $message): ?>
                <li class="<?php echo $message['type']; ?>">
                    <?php echo $message['text']; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <div id="galleryListWrapper">
        <?php if (!empty($galleryArray) && $galleryArray['stats']['total_images'] > 0): ?>
            <ul class="galleryList" class="clearfix">
                <?php foreach ($galleryArray['images'] as $image): ?>
                    <li><a href="<?php echo html_entity_decode($image['file_path']); ?>" title="<?php echo $image['file_title']; ?>" rel="colorbox"><img src="<?php echo $image['thumb_path']; ?>" alt="<?php echo $image['file_title']; ?>"/></a></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>
<!-- End UberGallery - Distributed under the MIT license: http://www.opensource.org/licenses/mit-license.php -->

</body>
</html>
