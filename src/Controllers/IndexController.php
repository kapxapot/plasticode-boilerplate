<?php

namespace App\Controllers;

use Plasticode\Util\Cases;

class IndexController extends BaseController {
	public function index($request, $response, $args) {
		$params = $this->buildParams([
			'sidebar' => [ 'dummy' ],
			'params' => [
				'text' => 'Добро пожаловать в Plasticode!',
				'text_en' => 'Welcome to Plasticode!',
				'kittens' => $this->builder->buildActivity('котёнок', 'родиться', Cases::MAS, 3),
				'kids' => $this->builder->buildActivity('ребёнок', 'гоняться', Cases::MAS, 2),
				'forevers' => [
					$this->builder->buildForever('мы', 'писать', '1p'),
					$this->builder->buildForever('колобок', 'гулять', '3sm'),
					$this->builder->buildForever('девушка', 'играть', '3sf'),
					$this->builder->buildForever('ты', 'транслировать', '2sn'),
				],
				'no_disqus' => 1,
				'no_social' => 1,
			],
		]);

		return $this->view->render($response, 'main/index.twig', $params);
	}
}
