<table border="1">
        <tr>
            <td>Photo</td>
            <td>Nom de l'item</td>
            <td>Prix</td>
            <td>Description</td>
            <td>couleur</td>
            <td>nbLike</td>
            <td> </td>
            <td> </td>
        </tr>
        <?php              
  
        foreach ($articles as $article) : ?>
            <tr><td height="100" width="200">
               <?php echo $this->Html->image($article['Media']['path']) ?>
                </td>
                
                <td height="100" width="200"> 
                    <ul>                 
                <?php echo $article['Article']['name']; ?>
                    </ul>
                </td> 
                
                <td>
               <?php echo $article['Article']['price']; ?>
               </td>
               
               <td>
                   <?php echo $article['Article']['description']; ?>
               </td>
               
               <td>
                   <?php echo $article['Color']['color']; ?>
               </td>
               
               <td>
                   <?php
                    $nblikes = $this->requestAction('/votes/nblike/'.$id);
                   
                    echo $nblikes;  ?>
               </td>
               
               <td>
                    <?php echo $this->Html->link('like', array('controller' => 'votes',
                                                  'action' => 'like',$id,1
                                                  ))?>                   
               </td>
               
               <td>
                    <?php echo $this->Html->link('ajouter', array('controller' => 'articles',
                                                  'action' => 'ajouter',$id
                                                  ))?>
                    </td>
                </tr>
                <?php 
        endforeach;
        
        ?>
                
    </table>

<?php $this->Html->script('vote.js', array('inline' => false)); ?>