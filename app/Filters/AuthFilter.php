<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Ambil session instance
        $session = session();

        // Cek apakah user sudah login
        if (!$session->get('logged_in')) {
            // Jika belum login, redirect ke halaman login
            return redirect()->to('/error')->with('message', 'You must be logged in to access this page.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak ada logika after yang diperlukan dalam kasus ini
    }
}
