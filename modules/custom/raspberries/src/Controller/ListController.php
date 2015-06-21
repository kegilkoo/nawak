<?php

namespace Drupal\raspberries\Controller;

use Drupal\Core\Controller\ControllerBase;

class ListController extends ControllerBase{
    public function all(){
        return array(
            '#type' => 'markup',
            '#markup'   =>  t("test page : ".__CLASS__)
        );
    }
}
