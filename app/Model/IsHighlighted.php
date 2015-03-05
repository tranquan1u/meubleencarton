<?php 
	class IsHighlighted extends AppModel {
		public $belongsTo = array('Article', 'Highlight');
	}