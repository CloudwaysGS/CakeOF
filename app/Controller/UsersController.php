<?php

class UsersController extends AppController
{
      public function beforeFilter()
      {
            parent::beforeFilter();
            $this->Auth->allow('register', 'home');
      }
      public function login()
      {
            // debug($this->request);
            if (!empty($this->request->data)) {
                  if ($this->request->is('post')) {
                        if ($this->Auth->login()) {
                              return $this->redirect('/homes/home');
                        }
                  }
            }
      }

      public function register()
      {
      }
}
