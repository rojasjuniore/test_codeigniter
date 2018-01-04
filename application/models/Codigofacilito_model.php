<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Codigofacilito_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function crearCurso($data)
    {
        $this->db->insert('cursos',
            array(
                'nombreCurso' => $data['nombres'],
                'videoCurso' => $data['videos'],
            )
        );
    }

    public function obtenerCursos()
    {
        $query = $this->db->get('cursos');
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }

    }

    public function obtenerCurso($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('cursos');
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }

    }

    public function actualizarCurso($id, $data)
    {
        $datos = array(
            'nombreCurso' => $data['nombres'],
            'videoCurso' => $data['videos'],
        );
        $this->db->where('id', $id);
        $query = $this->db->update('cursos', $datos);
    }

    public function eliminarCurso($id)
    {
        $query = "DELETE FROM cursos WHERE id=$id";
        $this->db->query($query);
        // $this->db->delete('cursos', array('id' => $id));
    }
}
