<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends CI_Controller {
    public function index() {
        // Charger les vues nécessaires
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('maintenance');
        $this->load->view('templates/footer');
    }
}
