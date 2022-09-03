<?php
class User extends AppModel {
      public $name = 'User';
      public $validate = array(
          'email' => array(
              'required' => array(
                  'rule' => 'notBlank',
                  'message' => 'email est requis'
              )
          ),
          'prenom' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Le prenom est requis'
            )
        ),
        'nom' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'nom est requis'
            )
        ),
          'password' => array(
              'required' => array(
                  'rule' => 'notBlank',
                  'message' => 'Un mot de passe est requis'
              )
          ),
          'password2' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Un mot de passe est requis'
            )
        ),
          'role' => array(
              'valid' => array(
                  'rule' => array('inList', array('admin', 'auteur')),
                  'message' => 'Merci de rentrer un rôle valide',
                  'allowEmpty' => false
              )
          )
      );
  }