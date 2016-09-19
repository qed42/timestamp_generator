<?php

/**
 * @file
 * Contains \Drupal\timestamp_generator\UserTimestampGenerator.
 */

namespace Drupal\timestamp_generator;

/**
 * Class UserTimestampGenerator.
 *
 * @package Drupal\timestamp_generator
 */
class UserTimestampGenerator {

  /**
   *
   */
  public function generateUserTimestamp() {
    return array(
      '#markup' => '<br><br><div class="wrapper"><div class="timestamp"><strong>Timestamp: ' . time() . '</strong></div><div class="User"><strong>User:' . \Drupal::currentUser()->getAccountName() . '</strong></div></div>'
    );
  }

}
