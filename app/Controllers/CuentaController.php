<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class CuentaController extends Controller 
{
    public function index()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('login');
        }

        $data = [
            'nombre' => $session->get('nombre'),
            'apellido' => $session->get('apellido'),
            'email' => $session->get('email')
        ];

        echo view('front/head_view', $data);
        echo view('front/navbar_view', $data);
        echo view('Back/usuario/cuenta_view', $data);
        echo view('front/footer_view');
    }
}
?>
