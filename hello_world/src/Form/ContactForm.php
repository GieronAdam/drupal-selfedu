<?php

namespace Drupal\hello_world\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ContactForm.
 */
class ContactForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'contact_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {


    $form['#action'] = '/hello/world/getdata';
    $form['#method'] = 'post';

    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
      '#description' => $this->t('Name'),
      '#weight' => '1',
    ];
    $form['email'] = [
        '#type' => 'textfield',
        '#title' => $this->t('E-mail'),
        '#description' => $this->t('E-mail'),
        '#weight' => '2',
    ];
    $form['message'] = [
          '#type' => 'textarea',
          '#title' => $this->t('Message'),
          '#description' => $this->t('Message'),
          '#weight' => '3',
    ];
    $form['date'] = [
          '#type' => 'date',
          '#title' => $this->t('Date'),
          '#description' => $this->t('Date'),
          '#weight' => '4',
    ];
    $form['submit'] = [
        '#type' => 'submit',
        '#value' => $this->t('Submit'),
        '#weight' => '5',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
    }

  }
}
