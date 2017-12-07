<?php
/**
 * Created by PhpStorm.
 * User: m-aleksieienko
 * Date: 07.12.2017
 * Time: 21:22
 */

class testClass {
	public $public = 'Public';
	protected $protected = 'Protected';
	private $private = 'Private';

	function printHello() {
		echo $this->public;
		echo $this->protected;
		echo $this->private;
	}
}

$obj = new testClass();
echo $obj->public; // only this works

$obj->printHello(); // Выводит Public, Protected и Private

?>
	<hr>
<?php

/**
 * Определение MyClass2
 */
class MyClass2 extends testClass {
	// Мы можем переопределить public и protected свойства, но не private
	public $public = 'Public2';
	protected $protected = 'Protected2';
	function printHello1() {
		echo $this->public;
		echo $this->protected;
	}

}

$obj2 = new MyClass2();
//echo $obj2->public; // Работает
//echo $obj2->private; // Неопределен
//echo $obj2->protected; // Неисправимая ошибка
$obj2->printHello(); // Выводит Public2, Protected2, Undefined
