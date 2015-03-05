<?php

class ArticlesController extends AppController{
    
    public $helpers = array ('Html');
    public $scaffold;


    public function afficher(){
      $articles = $this->Article->find('all', array('order' => 'Article.id'));
      $this->set(array('articles' => $articles));
                                  
    }
    
} 
  


?>

