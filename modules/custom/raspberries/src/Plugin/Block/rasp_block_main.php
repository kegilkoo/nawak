<?php

/**
 * @file
 * Contains Drupal\raspberries\Plugin\Block\rasp_block_main.
 */

namespace Drupal\raspberries\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Menu\MenuTreeParameters;
use Drupal\menu_link_content\Entity\MenuLinkContent;

/**
 * Provides a 'rasp_block_main' block.
 *
 * @Block(
 *  id = "rasp_block_main",
 *  admin_label = @Translation("rasp_block_main"),
 * )
 */
    class rasp_block_main extends BlockBase {
        /**
         * Builds and returns the renderable array for this block plugin.
         *
         * @return array
         *   A renderable array representing the content of the block.
         *
         * @see \Drupal\block\BlockViewBuilder
         */
        public function build()
        {
            //$test = MenuLinkContent::
            //$test = \Drupal::service('plugin.manager.menu.link')->createInstance("raspberries.listown");
            //var_dump($test);
            $mp = \Drupal::menuTree()->getCurrentRouteMenuTreeParameters("raspberries.menu.listown");
            $test = \Drupal::menuTree()->load("raspberries.menu.listown", $mp);
            $render = \Drupal::menuTree()->build($test);



            return array('#markup' => \Drupal::service('renderer')->render($render));
        }

    }
