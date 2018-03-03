<?php

namespace Drupal\githubapi\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class SearchForm.
 */
class SearchForm extends FormBase
{


    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'search_form';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['#action'] = '/githubapi/getdata';
        $form['#method'] = 'post';
        $form['#title']='';

        $form['search_for_repositories'] = [
            '#type' => 'textfield',
            '#weight' => '1',
        ];
        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Search'),
            '#weight' => '2'
    ];

    return $form;
  }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        parent::validateForm($form, $form_state);
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        // Display result.
        foreach ($form_state->getValues() as $key => $value) {
//            drupal_set_message($key . ': ' . $value);
        }

    }

}
