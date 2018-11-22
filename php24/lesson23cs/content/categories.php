<?php
$items = Category::getCategories();
if (empty($items)) {
    $items = array();
}
?>
<h1>
	Categories<a class="button"
		href="index.php?content=categorymaint&cat_id=0">Add</a></h1><ul
			class="ulfancy">
	<?php foreach ($items as $i=>$item) : ?>
	<li class="row<?php echo $i % 2; ?>">
				<div class="list-photo">
		<?php

    // Set up the images
    $image = 'images/' . $item->getCat_image();
    if (! is_file($image)) :
        $image = 'images/nophoto.jpg';
    endif;

    $image_t = 'images/thumbnails/' . $item->getCat_image();
    if (! is_file($image_t)) :
        $image_t = 'images/thumbnails/nophoto.jpg';
        endif;

    ?>
		
			<a href="<?php echo $image; ?>"><img src="<?php echo $image_t;?>"
						alt="" /></a>
				</div>
				<div class="list-description">
					<h2>
						<a
							href="index.php?content=<?php echo htmlspecialchars(strtolower($item->getCat_name()));?>&sidebar=catnav"><?php echo htmlspecialchars($item->getCat_name());?></a>
					</h2>
					<p><?php echo htmlspecialchars($item->getCat_description()); ?></p>
					<a class="button display"
						href="index.php?content=<?php echo htmlspecialchars(strtolower($item->getCat_name()));?>&sidebar=catnav">Display
						Lots</a>
				</div>
				<div class="clearfloat"></div>
			</li>
		<?php endforeach; ?>
	
		</ul>