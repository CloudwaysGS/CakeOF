<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

      public $components = array(
            'Session',
            'Cookie', 
            'Auth' => array(
                  'authenticate' => array(
                        'Form' => array(
                              'fields' => array(
                                    'username' => 'email'
                              ),
                              // 'scope' => array('User.active' => 1),
                              // 'authError' => "Vous ne pouvez pas acceder a cette page"
                        )
                        ),
                        'authorize' => array('Controller')
                  ),
      );

      public function beforeFilter(){
            parent::beforeFilter();
      }

      public function isAuthorized($user = null){
            return true;
      }
      
}