<?php
/**
 * @file
 * Contains \Drupal\mydashboard\Controller\MydbController.
 */

namespace Drupal\mydashboard\Controller;

use Drupal\Core\Controller\ControllerBase;

class MydbController extends ControllerBase {
    public function content() {
        return array(
            '#type' => 'markup',
            '#markup' => t('Hello, World!'),
        );
    }
}
