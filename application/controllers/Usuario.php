<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller {
	public function __construct() {
        parent::__construct();
        
        $this->load->model('Usuario_model');
    }

	public function index() {
        $js = ['assets/js/usuario.js'];

		$this->load->view('templates/header');
		$this->load->view('usuario/cadastro');
		$this->load->view('templates/footer', ['js' => $js]);
	}

    public function store() {
        // Aqui você pode adicionar a lógica para processar os dados do formulário
        $name = $this->input->post('name');

        $dados = [
            'nome' => $name,
            // Dados adicionais podem ser adicionados aqui, se necessário
        ];

        $insert_id = $this->Usuario_model->store($dados);

        if ($insert_id) {
            $response = ['status' => 200];
        } else {
            $response = ['status' => 400];
        }

        echo json_encode($response);
    }
}
