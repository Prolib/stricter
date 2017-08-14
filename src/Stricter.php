<?php

declare(strict_types=1);

namespace ProLib;

use Nette\Utils\ObjectHelpers;

trait Stricter {

	public function __get(string $name) {
		ObjectHelpers::strictGet(get_class($this), $name);
	}

	public function __set(string $name, $value): void {
		ObjectHelpers::strictSet(get_class($this), $name);
	}

	public function __call(string $name, array $arguments) {
		ObjectHelpers::strictCall(get_class($this), $name);
	}

	public static function __callStatic(string $name, array $arguments) {
		ObjectHelpers::strictStaticCall(get_called_class(), $name);
	}

}
