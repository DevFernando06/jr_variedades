<?php

namespace App\Controllers;


class Login extends BaseController
{
    public function index(): string
    {
        return view("login/login-view");
    }

    public function auth()
    {
        $data = $this->request->getPost();

        echo json_encode([
            "status" => "success",
            "dados" => $data
        ]);
    }
}