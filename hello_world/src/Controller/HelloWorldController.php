<?php
namespace Drupal\hello_world\Controller;
use Drupal\Core\Controller\ControllerBase;

class HelloWorldController extends ControllerBase {

    public function hello() {
       return \Drupal::formBuilder()->getForm('Drupal\hello_world\Form\ContactForm');
    }

    public function getdata()
    {
        $name = \Drupal::request()->request->get('name');
        $email = \Drupal::request()->request->get('email');
        $message = \Drupal::request()->request->get('message');
        $date = \Drupal::request()->request->get('date');
        return array('#markup'=>\GuzzleHttp\json_encode($email.'<br>'.$name. ' ' .$date.'<br>'.$message.'<br>'));
    }
}