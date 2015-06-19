<?php

namespace Drupal\mydashboard\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block
 *
 * @Block(
 *   id = "mainblock",
 *   admin_label = @Translation("main block"),
 * )
 */
class MainBlock extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
        return array(
            '#markup' => $this->t('Hello, World!'),
        );
    }
}