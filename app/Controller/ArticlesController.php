<?php

class ArticlesController extends AppController{
    
    public $helpers = array ('Html');
    public $scaffold;


    public function afficher(){
      $articles = $this->Article->find('all', array('order' => 'Article.id'));
      $this->set(array('articles' => $articles));
                                  
    }

    public function search() {
    	$this->loadModel('Color');
    	    	debug($this->data);
    	if(isset($this->data['Article'])) {
    		if($this->data['Article']['critere'] == 'color') {
    			$color = $this->Color->find('first', array('conditions' => array('color' => $this->data['Article']['search'])));
    			debug($color);	
    			if(isset($color['Color'])) {
    				//$articles = $this->Article->find('all', array('conditions' => array('color_id' => $color['Color']['id'])));
    				$articles = $this->Article->find('all', array('order' => 'Article.id'));
    				debug($articles);	
    			}
    		}
    	}
    }
    
    public function detail($id){
        $articles = $this->Article->find('all', array('order' => 'Article.id',
                                         'conditions' => array('Article.id' => $id)));
        $this->set(array(
                        'id' => $id, 
                   'articles' => $articles)
                   );
        
    }
  
}


?>

