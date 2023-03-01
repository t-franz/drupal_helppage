<?php

namespace Drupal\custom_helppage\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Custom Help-Page routes.
 */
class CustomHelppageController extends ControllerBase {

  /**
   * Builds the response for admins help page.
   */
  public function showAdminHelp() {

    return [
      '#message' => "",
      '#theme' => 'custom-helppage-admin',
      '#attached' => [
        'library' => [],
      ],
    ];

  }


    /**
   * Builds the response for user help page.
   */
  public function showUserHelp() {

    return [
      '#message' => "",
      '#theme' => 'custom-helppage-user',
      '#attached' => [
        'library' => [],
      ],
    ];
  }

}
