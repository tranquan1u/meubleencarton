<?php

class CommentsController extends AppController{
    
    public $helpers = array ('Html');
    public $scaffold;



    public function nblike($id){
      return $this->Vote->find('count', array('order' => 'Vote.article_id',
                                                    'conditions' => array('Vote.article_id' => $id)));
     // $this->set(array('nblike' => $nblike));
                                  
    }
    
    public function add($id_article, $id_user){
                            
//on fait un commentaire
        $user = $this->Comment->find('all', array('conditions' => array('Comment.article_id' => $id_article,
                                                                            'Comment.user_id'  => $id_user))
                                       );
        
        if(empty($user)){
                $this->Comment->create(TRUE);
                $this->Comment->save(array(
                            'article_id' => $id_article,
                            'user_id'    => $id_user,
                            'name'       => $name,
                            'text'       => $text
                            ));
                
               // $username = $this->Auth->user('username');
        }
       // return $this->redirect('/articles/detail/'.$id_article);
    }
  
}


?>