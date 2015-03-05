<h1>Hackaton!</h1>
<?php debug($items) ?>


<table class="table">
	<tbody>
		$i = 0;
		<?php foreach ($items as $key => $value): ?>

			<tr>
				<?php $article = $value['Article'] ?>
				<?php foreach ($article as $key => $value): ?>
					
				<?php endforeach ?>

			</tr>	

			<?php if ($i == 3) break; ?>
		<?php endforeach ?>
	</tbody>
</table>