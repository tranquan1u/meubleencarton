<?php

class ArticlesController extends AppController{
    
    public $helpers = array ('Html');
    public $scaffold;


    public function afficher(){
      $articles = $this->Article->find('all', array('order' => 'Article.id'));
      $this->set(array('articles' => $articles));
                                  
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

