
	<?php echo $this->Form->create('Article', array('role' => 'form', 'class' => 'form-inline', 'action' => 'search')) ?>
	<div class="form-group">
		<?php 
			$options = array('color' => 'color',
							 'type'  => 'type');
		 ?>
		<?php echo $this->Form->select('critere', $options, array('div' => false, 'class' => 'form-control', 'empty'=>false)) ?>
	</div>
	<div class="form-group">
		<?php echo $this->Form->input('search', array('class' => 'form-control', 'label' => false, 'div' => false)) ?>
	</div>

	<?php echo $this->Form->end('Rechercher'); ?>
	<?php debug($articles) ?>