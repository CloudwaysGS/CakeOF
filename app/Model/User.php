<?php

class User extends AppModel
{
    public $validate = array(
        'prenom' => array(
            'rule' => 'notBlank',
            'required' => 'true',
            'message' => 'Entrez votre prenom svp!!'
        ),
        'nom' => array(
            'rule' => 'notBlank',
            'required' => 'true',
            'message' => 'Entrez votre nom svp!!'
        ),
        'password' => 'password',
        'email' => 'email'
        
    );
}
