<?php 

App::uses('AppHelper', 'View/Helper');

class ItemHelper extends AppHelper {

	public $helpers = array('Html');

	public function show($item) {
		foreach ($item as $article) : ?>
            <tr><td height="100" width="200">
               <?php echo $this->Html->image($article['Media']['path']) ?>
                </td><td height="100" width="200"> <ul> 

                <?php echo $article['Article']['name']; ?>


                </ul></td height="100" width="200"> <td>
               <?php echo $article['Article']['price'].'</td>';
                //echo '</td><td>'; 
                $id = $article['Article']['id'];
                ?>
                <td>
                    <?php echo $this->Html->link('detail', array('controller' => 'articles',
                                                  'action' => 'detail',$id
                                                  ))?>
                    </td>

                  </tr>
    
                <?php 
        endforeach;
	}
}