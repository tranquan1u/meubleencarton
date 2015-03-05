<?php

class CommentsController extends AppController{
    
    public $helpers = array ('Html');
    public $scaffold;

    
    public function add($id_article, $id_user){
                            
//on fait un commentaire
       // $user = $this->Comment->find('all', array('conditions' => array('Comment.article_id' => $id_article, 'Comment.user_id'  => $id_user)) );
        if($this->request->data){
         //   if(empty($user)){
              $comment = $this->request->data;
                    $this->Comment->create($this->request->data, TRUE);
                    $this->Comment->save(array(
                                'article_id' => $id_article,
                                'user_id'    => $id_user,
                                'name'       => $comment['Comment']['name'],
                                'text'       => $comment['Comment']['text']
                                ));

                   // $username = $this->Auth->user('username');
                    $this->redirect('/articles/detail/'.$id_article);
            }
      //  }
    }
}
  


?>