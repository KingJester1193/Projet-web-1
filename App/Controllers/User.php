<?php

namespace App\Controllers;

use \Core\View;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class User extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        $liste = \App\Models\User::getAll();
        View::renderTemplate('User/index.html',["users"=> $liste]); 
    }




    public function ajouterAction(){
        View::renderTemplate('User/ajouter.html');
    }

    
    public function modifierAction(){
        print_r($this->route_params);
        $id = $this->route_params['id'];
        
        View::renderTemplate('User/modifier.html', ["id"=>$id]);

    }
}
