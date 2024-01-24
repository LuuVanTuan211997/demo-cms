<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class DashboardController
{
    public function index(Request $request, Response $response)
    {
        return view($response, $template = 'welcome');
    }

    public function test(Request $request, Response $response)
    {
        $name = 'abc';

        return view($response, $template = 'dashboard.home', compact(var_name: 'name'));
    }

    public function show(Response $response, $name, $id)
    {
        $response->getBody()->write("Welcomew {$name} you have {$id}");
        return $response;
    }
}
