<?php

namespace App\Controllers;

use Plasticode\Controllers\Controller;

class BaseController extends Controller {
	protected function buildPart($settings, $result, $part) {
		switch ($part) {
			case 'dummy':
				$result[$part] = $this->builder->buildDummy();
				break;

			default:
				$result = null;
				break;
		}
		
		return $result;
	}
}
