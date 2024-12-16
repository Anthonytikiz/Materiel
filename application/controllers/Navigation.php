<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Navigation extends CI_Controller {
    public function index() {
        // Redirige vers le tableau de bord
        redirect('dashboard');
    }
}
