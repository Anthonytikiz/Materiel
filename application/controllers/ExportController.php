<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Dompdf\Dompdf;

class ExportController extends CI_Controller {

    public function index() {
        // Charger les vues nécessaires
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('export');
        $this->load->view('templates/footer');
    }
    // Exporter vers Excel
    public function export_excel() {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Exemple de données
        $data = [
            ['Nom', 'Type', 'Date Achat', 'Coût'],
            ['Ordinateur', 'Électronique', '2022-06-15', 500],
            ['Chaise', 'Mobilier', '2023-01-20', 120]
        ];

        $sheet->fromArray($data, NULL, 'A1');

        $writer = new Xlsx($spreadsheet);
        $filename = 'materiels_export.xlsx';

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
    }
    // Exporter vers PDF
    public function export_pdf() {
        $dompdf = new Dompdf();

        // Exemple de contenu HTML avec CSS intégré
        $html = '
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }

            h1 {
                color: #e74c3c;
                text-align: center;
                margin-bottom: 20px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin: 20px auto;
                font-size: 14px;
            }

            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #3498db;
                color: white;
                text-transform: uppercase;
            }

            tr:nth-child(even) {
                background-color: #f3f6f9;
            }

            tr:hover {
                background-color: #d6eaf8;
            }
        </style>

        <h1>Liste des Matériels</h1>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ordinateur</td>
                    <td>Électronique</td>
                </tr>
                <tr>
                    <td>Imprimante</td>
                    <td>Bureau</td>
                </tr>
            </tbody>
        </table>
        ';

        // Charger le contenu HTML avec CSS
        $dompdf->loadHtml($html);

        // Définir les dimensions du PDF
        $dompdf->setPaper('A4', 'portrait');

        // Rendu du PDF
        $dompdf->render();

        // Téléchargement du fichier PDF
        $dompdf->stream("materiels_export.pdf", array("Attachment" => 1));
    }

}
