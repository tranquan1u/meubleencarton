<h1><center>Hackaton!</center></h1>
<head>
    <meta charset="utf-8" />
</head>

<body>
<?php //debug($items) ?>
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="item.active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <center>
        <?php echo $this->Html->image('sofa_gonflable.jpg', array('altenrate' => 'l\'image ne s\'affiche pas ', 'class'=>'item')) ?>
        </center>
      <div class="carousel-caption">
      </div>
    </div>


    <div class="item">
        <center>
        <?php echo $this->Html->image('cake.icon.png', array('alternate' => 'l\'image ne s\'affiche pas ', 'class'=>'item active')) ?>
        </center>
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div>
	<?php foreach ($items as $key => $value): ?>
		<div class="name"><?php echo $value['Article']['name'] ?></div>
		<div class="desc"><?php echo $value['Article']['description'] ?></div>
		<div class="high-descr"><?php echo $value['Highlight']['name'] ?></div>
		<div class="high-descr"><?php echo $value['Highlight']['description'] ?></div>
	<?php endforeach ?>
</div>

