<?php //die(print_r($this->data['nav'])); ?>

<div id="nav-outter">
	<div id="nav-inner">
		<ul id="nav-items">
			<li class="nav-item" style="padding-right:55px;"></li>
    <?php 	
    foreach ($this->data['nav'] as $item) {?>
			<li class="nav-item">
				<a href="<?=$item['href'] ?>">
					<?= $item['img']?'<img class="hover" src="'.IMG.'nav/'.$item['img'].'" alt="'.$item['text'].'" />':$item['text'] ?>
     			</a>
			</li>
		<?php
		}?>
	
	</div>
</div>


