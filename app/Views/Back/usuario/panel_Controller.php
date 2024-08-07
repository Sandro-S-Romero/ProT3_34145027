<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class panel_Controller extends Controller 
{
    public function index()
    {
        $session = session();
        $nombre = $session->get('nombre');
        $apellido = $session->get('apellido');
        $perfil = $session->get('perfil_id');
        $logged_in = $session->get('logged_in');

        $data = [
            'perfil_id' => $perfil,
            'titulo' => 'Panel del Usuario',
            'nombre' => $nombre,
            'apellido' => $apellido,
            'logged_in' => $logged_in
        ];

        echo view('front/head_view', $data);
        echo view('front/navbar_view', $data);
        echo view('Back/usuario/usuario_logueado', $data);
        echo view('front/footer_view');
    }
}
?>
