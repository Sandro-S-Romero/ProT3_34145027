<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FiltersInterface;

class Auth implements FiltersInterface
{
	public funcion before(RequestInterface $request, $arguments = null)
	{
		if(!session()->get('logged_in'))
		{
			return redirect()->to('/login');
		}
	}

public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)

}
