<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materiel extends CI_Controller {
    public function index() {
        // Charger les vues nécessaires
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('materiel');
        $this->load->view('templates/footer');
    }

    public function ajouter() {
        // Logique pour ajouter un matériel
        if ($this->input->post()) {
            $nom = $this->input->post('nom');
            $type = $this->input->post('type');
            $date_achat = $this->input->post('date_achat');
            $cout = $this->input->post('cout');

            // Ajouter une logique ici pour sauvegarder dans la base de données

            // Rediriger après ajout
            redirect('materiel');
        }
    }
}
