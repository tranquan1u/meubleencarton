 

<table border="1">
        <tr>
            <td>Photo</td>
            <td>Nom de l'item</td>
            <td>Prix</td>
            <td></td>
        </tr>
        <?php
            
        debug($articles);
        
        
        
        
        foreach ($articles as $article) : ?>
            <tr><td height="100" width="200">
               <?php echo $this->Html->image($article['Media']['path']) ?>
                </td><td height="100" width="200"> <ul> 

                <?php echo $article['Article']['name']; ?>


                </ul></td height="100" width="200"> <td>
               <?php echo $article['Article']['price'].'</td>';
                echo '</td><td>'; 
                $id = $article['Article']['id'];
                ?>
                <?php echo '<a href="http://localhost/hackaton/meubleencarton/articles/acheter/'.$id.'>acheter</a> '?>  
                <?php echo $this->Form->create('Article'); ?>
                <?php echo $this->Form->hidden('item_id',array('value'=>$id)); ?>
                <?php echo $this->Form->end('Acheter').'</td></tr>';
        endforeach;
        
        ?>

    </table>