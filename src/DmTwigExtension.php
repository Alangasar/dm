<?php

namespace Drupal\dm;

/**
 * Twig extension for dm.
 */
class DmTwigExtension extends \Twig_Extension {

  /**
   * {@inheritdoc}
   */
  public function getFunctions() {
    return [
      new \Twig_SimpleFunction('dm', 'dm'),
    ];
  }

}
