<?php

/**
 * @file
 * Contains \Drupal\timestamp_generator\Plugin\Block\Timestamp.
 */

namespace Drupal\timestamp_generator\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Timestamp' block.
 *
 * @Block(
 *  id = "timestamp",
 *  admin_label = @Translation("Timestamp"),
 * )
 */
class Timestamp extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $user = \Drupal::currentUser()->getAccount();
    $build['timestamp'] = array(
      '#lazy_builder' => ['timestamp_generator.generator:generateUserTimestamp', array()],
      '#create_placeholder' => TRUE
    );
    $build['#markup'] = $this->t('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');
    $build['#cache']['contexts'][] = 'languages';
    return $build;
  }

}
