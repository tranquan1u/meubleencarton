	<?php 		echo $this->Form->create('User', 	array(	'class' => 'form-horizontal')); ?>
	
	<br/>
	<div class="container">
		<div class="form-group">
			<?php 	echo $this->Form->input('username', array(	'label' => array('text' => 'Identifiant', 'class' => 'col-sm-6 control-label'),
				'input' => array('class' => 'form-control'),
				'role' => 'form'
				));
				?>
			</div>

			<div class="form-group">	
				<?php 	echo $this->Form->input('password', array(	'label' => array('text' => 'Mot de passe', 'class' => 'col-sm-6 control-label'),
					'input' => array('class' => 'form-control'),
					'role' => 'form'
					));
					?>
				</div>

				<div class="form-group">
					<span class="col-sm-6"></span>
					<?php 	echo $this->Form->button('Se connnecter', array('class'=> 'controls btn btn-primary',
						));

						//echo $this->Html->link(" pas encore inscrit?", array('action'=>'inscription','controller'=>'Users'));?>

					</div>
					<?php echo $this->Form->end(); 

					?>
				</div>