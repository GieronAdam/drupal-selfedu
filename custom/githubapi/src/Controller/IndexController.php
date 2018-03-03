<?php

namespace Drupal\githubapi\Controller;

use Drupal\githubapi\Model\GithubApi;
use Drupal\Core\Controller\ControllerBase;


/**
 * Class IndexController.
 */
class IndexController extends ControllerBase
{

    /**
     * Index.
     *
     * @return mixed
     */
    public function index()
    {
        return \Drupal::formBuilder()->getForm('\Drupal\githubapi\Form\SearchForm');
    }

    public function getData()
    {
        $response = \Drupal::request()->request->get('search_for_repositories');
        $gh = new GithubApi();
        $items = $gh->getRepositories($response);
        return [
            '#theme' => 'githubapi',
            '#repositories' =>  $items,

        ];
    }

}
