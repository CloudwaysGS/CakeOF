<?php

class UsersController extends AppController
{
      function beforeFilter()
      {
            parent::beforeFilter();
            $this->Auth->allow();
      }
      public function login()
      {
            if (!empty($this->request->data)) {
                  if ($this->Auth->login()) {
                        if ($this->Session->read('Auth.User.roles') == 'ROLE_ADMIN') {
                              return $this->redirect(array('action' => 'accueilAdmin'));
                        }
                        return $this->redirect('accueilUser');
                  }
                  
            }
      }

      public function logout()
      {
            $this->Auth->logout();
            return $this->redirect('/');
      }

      public function register()
      {
            if (!empty($this->request->data)) {
                  $data = $this->request->data['User'];
                  $roles = '';
                  $nom = $data['nom'];
                  $prenom = $data['prenom'];
                  $email = $data['email'];
                  $password = $data['password'];
                  $this->Session->read('Auth.User') ? $roles = 'ROLE_USER' : 'ROLE_ADMIN';
                  $this->User->save(null,true,array(
                        'nom' => $nom,
                        'prenom' => $prenom,
                        'email' => $email,
                        'password' => $this->Auth->password($password),
                        'roles' => $roles
                  ));
                  $this->redirect('login');
            }
      }

      ///////////////////////// edit  /////////////////////
      public function edit($id = null)
      {
            if (!$id) {
                  throw new NotFoundException(__('Invalid user'));
            }

            $user = $this->User->findById($id);
            if (!$user) {
                  throw new NotFoundException(__('Invalid user'));
            }

            if ($this->request->is(array('post', 'put'))) {
                  $this->User->id = $id;
                  if ($this->User->save($this->request->data)) {
                        $this->Session->setFlash(
                              'Modification reussie avec succes.',
                              'alert',
                              array('class' => 'alert-success')
                        );

                        return $this->redirect('accueilAdmin');
                  }
                  //     $this->Flash->error(__('Echec !!!!!!!!!!!!'));
            }

            if (!$this->request->data) {
                  $this->request->data = $user;
            }
      }
      //////////////////////////////// delete /////////////////////////////////
      public function delete($id)
      {
            if ($this->request->is('delete')) {
                  throw new MethodNotAllowedException();
            }

            if ($this->User->delete($id)) {
                  $this->Flash->success(
                        __('Le post avec id : %s a été supprimé.', h($id))
                  );
            } else {
                  $this->Flash->error(
                        __('Le post avec l\'id: %s n\'a pas pu être supprimé.', h($id))
                  );
            }

            return $this->redirect(array('action' => 'accueilAdmin'));
      }

      public function accueilAdmin()
      {
            $users = $this->User->find('all');
            $this->set('users', $users);
      }

      public function accueilUser()
      {
            $this->Session->read('Auth.User.roles');
      }

}
