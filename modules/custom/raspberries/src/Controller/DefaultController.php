<?php

/**
 * @file
 * Contains Drupal\raspberries\Controller\DefaultController.
 */

namespace Drupal\raspberries\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\raspberries\Controller
 */
class DefaultController extends ControllerBase {
  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
    return [
        '#type' => 'markup',
        '#markup' => $this->t('Hello @name!', ['@name' => $name])
    ];
  }

}
