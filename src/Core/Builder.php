<?php

namespace App\Core;

use Plasticode\Core\Builder as BuilderBase;
use Plasticode\Util\Cases;
use Plasticode\Util\Numbers;

class Builder extends BuilderBase {
	public function buildDummy() {
		$usersCount = count($this->db->getUsers());
		
		return [
			'count' => $usersCount,
			'count_str' => $this->cases->caseForNumber('пользователь', $usersCount),
		];
	}
	
	public function buildActivity($word, $action, $gender, $digits) {
		$numbers = new Numbers;
		$num = $numbers->generate($digits);
		$numStr = $numbers->toString($num);
		$label = $this->cases->caseForNumber($word, $num);
		$verb = $this->cases->conjugation($action, Cases::PAST . Cases::THIRD . $this->cases->numberForNumber($num) . $gender);
		
		return [
			'verb' => $verb,
			'num' => $num,
			'num_str' => $numStr,
			'label' => $label,
		];
	}
	
	public function buildForever($who, $word, $form) {
		return [
			'name' => $who,
			'past' => $this->cases->conjugation($word, Cases::PAST . $form),
			'present' => $this->cases->conjugation($word, Cases::PRESENT . $form),
			'future' => $this->cases->conjugation($word, Cases::FUTURE . $form)
		];
	}
}
