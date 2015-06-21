<?php

/**
 * @file
 * Contains Drupal\raspberries\Tests\DefaultController.
 */

namespace Drupal\raspberries\tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the raspberries module.
 */
class DefaultControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "raspberries DefaultController's controller functionality",
      'description' => 'Test Unit for module raspberries and controller DefaultController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests raspberries functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module raspberries.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
