<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modules extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        /**
         * Aun no hay nada para agregar
         */
    }

    /**
     * Services page
     */
    public function services() {
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/services_view.php');
        $this->load->view('templates/footer_view.php');
    }

    /**
     * Library page
     */
    public function library() {
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/library_view.php');
        $this->load->view('templates/footer_view.php');
    }
    public function librarynational() {
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/library_national_view.php');
        $this->load->view('templates/footer_view.php');
    }
    public function librarystate() {
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/library_state_view.php');
        $this->load->view('templates/footer_view.php');
    }

    /**
     * Library page
     */
    public function news() {
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/news_view.php');
        $this->load->view('templates/footer_view.php');
    }

    /**
     * Contact page
     */
    public function contact() {
        $this->load->view('templates/header_view.php');
        $this->load->view('templates/contact_view.php');
        $this->load->view('templates/footer_view.php');
    }
}
?>