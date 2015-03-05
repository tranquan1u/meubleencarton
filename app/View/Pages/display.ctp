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



	
  <div class="carousel-inner" role="listbox">
	  <!-- Wrapper for slides -->
	  	<?php $i=0 ?>
		<?php foreach ($items as $key => $value): ?>
		    <div class="item <?php echo ($i==0)? 'active' :  '' ?>">
		        <center>
		        <?php echo $this->Html->image($value['Article']['Media']['path'], array('altenrate' => 'l\'image ne s\'affiche pas ', 'class'=>'item')) ?>
	        		<div class="name"><?php echo $value['Article']['name'] ?></div>
					<div class="desc"><?php echo $value['Article']['description'] ?></div>
					<div class="high-descr"><?php echo $value['Highlight']['name'] ?></div>
					<div class="high-descr"><?php echo $value['Highlight']['description'] ?></div>
		        </center>
		      <div class="carousel-caption">

		      </div>
		    </div>
    <?php $i++ ?>
<?php endforeach ?>
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

