<?php  

namespace Drupal\portfolio_manager\Plugin\Block;  

use Drupal\Core\Block\BlockBase;  
use Drupal\node\Entity\Node;  

/**  
 * Provides a 'LatestProjectsBlock' block.  
 *  
 * @Block(  
 *   id = "latest_projects_block",  
 *   admin_label = @Translation("Latest Projects Block"),  
 *   category = @Translation("Custom"),  
 * )  
 */  
class LatestProjectsBlock extends BlockBase {  
  /**  
   * {@inheritdoc}  
   */  
  public function build() {  
    $latest_projects = $this->getLatestProjects();  

    if (empty($latest_projects)) {  
      return [  
        '#markup' => $this->t('No recent projects available.'),  
      ];  
    }  

    return [  
      '#theme' => 'item_list',  
      '#items' => $latest_projects,  
    ];  
  }  

  /**  
   * Fetch the latest 3 project nodes.  
   *  
   * @return array  
   *    
   */  
  protected function getLatestProjects() {  
    $output = [];  

    $query = \Drupal::entityQuery('node')  
      ->condition('type', 'project')  
      ->sort('created', 'DESC')  
      ->range(0, 3);

    $nids = $query->execute();  

    if ($nids) {  
      // Load the node entities.  
      $nodes = Node::loadMultiple($nids);  
      foreach ($nodes as $node) {  
        // Create a link for each project title.  
        $output[] = $node->toLink($node->getTitle())->toString();  
      }  
    }  

    return $output;  
  }  

  /**  
   * {@inheritdoc}  
   */  
  public function getCacheMaxAge() {  
    return 0; // Disable caching for the block.
  }  
}