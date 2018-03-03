<?php

namespace Drupal\githubapi\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'GithubApiBlock' block.
 *
 * @Block(
 *  id = "github_api_block",
 *  admin_label = @Translation("Github api block"),
 * )
 */
class GithubApiBlock extends BlockBase
{

    /**
     * {@inheritdoc}
     */
    public function build()
    {
        return \Drupal::formBuilder()->getForm('\Drupal\githubapi\Form\SearchForm');
    }

}