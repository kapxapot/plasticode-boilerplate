<?php

namespace App\Controllers;

class IndexController extends Controller {
    public function index($request, $response, $args) {
        $params = $this->buildParams([
            'params' => [
                'text' => 'Добро пожаловать в Plasticode!',
                'text_en' => 'Welcome to Plasticode!',
                'no_disqus' => 1,
                'no_social' => 1,
            ],
        ]);

        return $this->view->render($response, 'main/index.twig', $params);
    }
}
