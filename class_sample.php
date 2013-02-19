<?php
class MyClass
{
	public $prop1= "Свойство класса";

	public static $count = 0;

	public function __construct()
	{
		echo "Создан объект класса<br>";
	}

	public function __destruct()
	{
		echo "Объект класса удален<br>";
	}

	public function __toString()
	{
		echo "Используем метод toString: ";
		return $this->getProperty();
	}

	public function setProperty($newval)
	{
		$this->prop1 = $newval;
	}

	protected function getProperty()
	{
		return $this->prop1."<br>";
	}

	public static function pluseOne()
	{
		return "count = ".++self::$count."<br>";
	}
}

class MyOtherClass extends MyClass
{
	public function __construct()
	{
		parent::__construct();
		echo "Новый конструктор в классе ".__CLASS__."<br>";
	}

	public function newMethod()
	{
		echo "Из нового метода класса ".__CLASS__.".<br>";
	}

	public function callProtected()
	{
		return $this->getProperty();
	}
}

do
{
	echo MyClass::pluseOne();
}
while (MyClass::$count<10);
?>