<?php

namespace App\Controller\Api;

use App\Model\User as UserModel;
use Horizon\Http\Request;
use Horizon\Http\Response;
use Illuminate\Support\Facades\DB;

class User
{
    public function read(Request $request, Response $response, array $attributes)
    {
        $users = DB::connection('local');

        $data = [
            'code' => null,
            'message' => "Request successfuly",
            'payload' => 6757869
        ];

        return $response->json($data);
    }
}
