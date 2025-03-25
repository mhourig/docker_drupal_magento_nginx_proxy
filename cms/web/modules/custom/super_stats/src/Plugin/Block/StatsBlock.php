<?php

namespace Drupal\super_stats\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\node\Entity\Node;

/**
 * Provides a 'Super Stats' Block.
 *
 * @Block(
 *   id = "super_stats_block",
 *   admin_label = @Translation("Super Stats Block")
 * )
 */
class StatsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $query = \Drupal::entityQuery('node')
        ->accessCheck(TRUE)
        ->condition('status', 1)
        ->condition('type', 'article');
    $count = $query->count()->execute();

    return [
      '#markup' => $this->t('There are currently <strong>@count</strong> published articles.', ['@count' => $count]),
      '#cache' => [
        'tags' => ['node_list'],
        ],

    ];
  }

}
