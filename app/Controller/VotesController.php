<?php

class VotesController extends AppController{
    
    public $helpers = array ('Html');
    //public $scaffold;

    public function beforeFilter() {
        $this->Auth->allow();
    }

    public function nblike($id){
      return $this->Vote->find('count', array('order' => 'Vote.article_id',
                                                    'conditions' => array('Vote.article_id' => $id)));
     // $this->set(array('nblike' => $nblike));
                                  
    }
    
    public function like($id_article, $id_user){
                            
//on fait un like
        $userLike = $this->Vote->find('all', array('order' => 'Vote.user_id',
                                                    'conditions' => array('Vote.article_id' => $id_article,
                                                                            'Vote.user_id'  => $id_user))
                                       );
        
        if(empty($userLike)){
                $this->Vote->create(TRUE);
                $this->Vote->save(array(
                            'user_id' => $id_user,
                            'article_id' => $id_article,
                            'vote'   => 1,
                            ));
                
               // $username = $this->Auth->user('username');
        }
        return $this->redirect('/articles/detail/'.$id_article);
    }
  
}


?>