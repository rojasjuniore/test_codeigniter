<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CursosControllers extends CI_Controller
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
        // index.php/CursosControllers/3
        $data['segmento'] = $this->uri->segment(3);
        $this->load->view('codigofacilito/headers');
        if (!$data['segmento']) {
            $data['cursos'] = $this->Codigofacilito_model->obtenerCursos();
        } else {
            $data['cursos'] = $this->Codigofacilito_model->obtenerCurso($data['segmento']);
        }

        $this->load->view('cursos/cursosView', $data);

    }

    public function nuevo()
    {
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/formulario');
    }

    public function recibirdatos()
    {
        $data = array(
            'nombres' => $this->input->post('nombres'),
            'videos' => $this->input->post('videos'),

        );
        $this->Codigofacilito_model->crearCurso($data);
        $this->load->view('codigofacilito/headers');

        $this->load->view('codigofacilito/bienvenido');
    }

    public function editar()
    {
        $data['id'] = $this->uri->segment(3);
        $data['cursos'] = $this->Codigofacilito_model->obtenerCurso($data['id']);
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/viewEditar', $data);
    }

    public function borrar()
    {

        $id = $this->uri->segment(3);
        $this->Codigofacilito_model->eliminarCurso($id);

        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido');

    }

    public function actualizar()
    {
        $data = array(
            'nombres' => $this->input->post('nombres'),
            'videos' => $this->input->post('videos'),
        );
        $this->Codigofacilito_model->actualizarCurso($this->uri->segment(3), $data);

        // $this->load->view('codigofacilito/headers');
        // $this->load->view('codigofacilito/bienvenido');
        // redirect(base_url());
        redirect(base_url());

    }
}
