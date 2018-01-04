<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CodigoFacilito extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('mihelpers');
        $this->load->helper('form');
        $this->load->model('Codigofacilito_model');
    }

    public function index()
    {
        $this->load->library('menu', array('Inicio', 'Constacto', 'Cursos'));
        $data['mi_menu'] = $this->menu->construirMenu();
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido', $data);
    }

    public function holaMundo()
    {
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido');
    }

    public function sendMail()
    {
        $this->load->library('email');
        $configuraciones['mailtype'] = 'html';
        $this->email->initialize($configuraciones);
        $this->email->from('yunior0000@gmail.com', 'Uriel Hdz');
        $this->email->to('yunior0000@gmail.com');
        $this->email->cc('rojasjuniore@gmail.com');
        $this->email->subject('Probando CodeIgniter');
        $this->email->message('<p>Probandooo...</p> <strong>probandoo...</strong>');
        if ($this->email->send()) {
            //echo "Correo enviado";
            $this->load->view('codigofacilito/headers');
            $this->load->view('codigofacilito/bienvenido');
        } else {
            echo $this->email->print_debugger();
        }
    }

}
