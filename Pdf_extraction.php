<?php


defined('BASEPATH') OR exit('No direct script access allowed');

use Smalot\PdfParser\Parser;
class Pdf_extraction extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function extract_text() {
        // Path to the PDF file you want to extract text from
        require FCPATH.'vendor/autoload.php';
        $pdfFilePath = 'pdf-sample.pdf';
        // Initialize the PDF Parser
        $parser = new Parser();        
        // Parse the PDF file
        $pdf = $parser->parseFile($pdfFilePath);
        // Extract text from the parsed PDF
        $text = $pdf->getText();
        // Output the extracted text
        echo $text;
    }




}

