<h1>Hackaton!</h1>


<div>
	<?php foreach ($items as $key => $value): ?>
		<div class="name"><?php echo $value['Article']['name'] ?></div>
		<div class="desc"><?php echo $value['Article']['description'] ?></div>
		<div class="high-descr"><?php echo $value['Highlight']['name'] ?></div>
		<div class="high-descr"><?php echo $value['Highlight']['description'] ?></div>
	<?php endforeach ?>
</div>