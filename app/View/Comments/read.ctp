  <table border="1">
        <tr>
            <td>Nom du commentaire</td>
            <td>commentaire</td>
            <td>date de creation</td>
            <td>note</td>
        </tr>
        <?php              
  
        foreach ($comments as $comment) : ?>
            <tr>
                
                <td height="100" width="200"> 
                    <ul>                 
                <?php echo $comment['Comment']['name']; ?>
                    </ul>
                </td> 
                
                <td>
               <?php echo $comment['Comment']['text']; ?>
               </td>
               
               <td>
                   <?php echo $comment['Comment']['created']; ?>
               </td>
               
               <td>
                   <?php echo $comment['Comment']['note']; ?>
               </td>
               

                    </td>
                </tr>
                <?php 
        endforeach;
        
        ?>
                
    </table>