

<h1>Ajout d'un commentaire : </h1><br>    
<?php echo $this->Form->create('Comment',array('class' => 'form-horizontal')); ?>
<fieldset>
<?php echo $this->Form->input('name', array('label' => 'nom pour le commentaire', 'placeholder' => 'nom')); ?>
<?php echo $this->Form->input('text', array('TEXTAREA' => 'nombre de place','placeholder' => 'ici votre commentaire')); ?>
<?php 
    $options = array(
    1 => '1',
    2 => '2',
    3 => '3',
    4 => '4',
    5 => '5');
    echo $this->Form->label('','note');
    echo $this->Form->select('note', $options, array('empty' => false));
?>


</fieldset>
<?php echo $this->Form->end('commenter'); ?>