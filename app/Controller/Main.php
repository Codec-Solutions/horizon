<?php

namespace App\Controller;

use Horizon\Http\Request;
use Horizon\Http\Response;

class Main
{
    public function __construct()
    {
        # code...
    }

    public function index(Request $request, Response $response, array $attributes)
    {
        $data['name'] = "Horizon Framework";

        return $response->view('index', $data);
    }

    public function hello(Request $request, Response $response, array $attributes)
    {
        $data['name'] = $request->getAttribute("name");

        return $response->view('hello', $data);
    }

    public function api(Request $request, Response $response, array $attributes)
    {
        $data = [
            'status' => true,
            'message' => "Request successfuly",
            'payload' => 6757869
        ];

        return $response->json($data);
    }
}
