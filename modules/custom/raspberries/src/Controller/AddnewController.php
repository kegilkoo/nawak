<?php

namespace Drupal\raspberries\Controller;

use Drupal\Core\Controller\ControllerBase;

class AddnewController extends ControllerBase{
    public function main(){
        return array(
            '#type' => 'markup',
            '#markup'   =>  t("test page : ".__CLASS__)
        );
    }
}
