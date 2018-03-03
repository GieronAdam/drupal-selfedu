<?php

namespace Drupal\hello_world\Plugin\Block;

use Drupal\hello_world\Controller\HelloWorldController as Hello;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'HelloBlock' block.
 *
 * @Block(
 *  id = "hello_block",
 *  admin_label = @Translation("Hello World"),
 * )
 */
class HelloBlock extends BlockBase
{

    /**
     * {@inheritdoc}
     */
    public function build()
    {

        $build = [];
        $build['hello_block']['#markup'] = 'Some String';

        return $build;
    }

}
