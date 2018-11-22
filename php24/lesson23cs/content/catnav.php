<?php
$items = Category::getCategories();

?>
<h3 class="element-invisible">Lot Categories</h3>
<ul class="catnav">
<?php foreach ($items as $i=>$item) : ?>
	<li><a
		href="index.php?content=<?php
    echo htmlspecialchars(strtolower($item->getCat_name()));
    ?>&sidebar=catnav"><?php
    echo htmlspecialchars($item->getCat_name());
    ?></a></li>	
<?php endforeach; ?>
</ul>
