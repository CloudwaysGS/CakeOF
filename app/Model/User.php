<?php

class User extends AppModel{

      public $validate = array(
            // 'prenom' => array(
            //       'rule'       => 'nomRegle', // ou bien : array('nomRegle', 'parametre1', 'parametre2' ...)
            //     //   'required'   => true,
            //       'allowEmpty' => false,
            //       'on'         => 'create', // ou bien: 'update'
            //       'message'    => 'Votre message d\'erreur'
            // ),
            // 'login' => array(
            //     'alphaNumeric' => array(
            //         'rule' => 'alphaNumeric',
            //         'required' => true,
            //         'message' => 'Chiffres et lettres uniquement !'
            //     ),
            //     'between' => array(
            //         'rule' => array('lengthBetween', 5, 15),
            //         'message' => 'Entre 5 et 15 caractères'
            //     )
            // ),
            // 'password' => array(
            //     'rule' => array('minLength', '8'),
            //     'message' => '8 caractères minimum'
            // ),
            // 'email' => 'email',
            // 'date_de_naissance' => array(
            //     'rule' => 'date',
            //     'message' => 'Entrez une date valide',
            //     'allowEmpty' => true
            // )
        );
}