

<h1>Ajout d'un commentaire : </h1><br>    
<?php echo $this->Form->create('Comment',array('class' => 'form-horizontal')); ?>
<fieldset>
<?php echo $this->Form->input('name', array('label' => 'nom pour le commentaire', 'placeholder' => 'nom')); ?>
<?php echo $this->Form->input('text', array('TEXTAREA' => 'nombre de place','placeholder' => 'ici votre commentaire')); ?>
</fieldset>
<?php echo $this->Form->end('commenter'); ?>