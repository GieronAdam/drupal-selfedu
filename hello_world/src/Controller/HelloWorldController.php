<?php
namespace Drupal\hello_world\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\hello_world\Services\Form\ContactForm as ContactForm;

class HelloWorldController extends ControllerBase {

    public function hello() {
        $form = new ContactForm();
        return $form->formRender();
    }

}