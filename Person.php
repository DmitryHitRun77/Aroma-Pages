<?php
//Здоровье человека не может быть больше 100
header('Content-Type: text/html; charset=utf-8');
class Person {
  private $name;
  private $lastname;
  private $age;
  // private $hp;
  private $mother;
  private $father;
  private $dead;
  function __construct($name,$lastname,$age,$mother=null,$father=null,$dead=null){
    $this->name = $name;
    $this->lastname=$lastname;
    $this->age=$age;
    $this->mother=$mother;
    $this->father=$father;
    $this->dead=$dead;
    // $this->hp=100;
  }
  function sayHi($name) {
    return "Hi $name, i'm ".$this->name;
  }
  function setHp($hp){
  	if($this->hp+$hp>=100)$this->hp=100;
  	else $this->hp=$this->hp+$hp;
  }
  function getHp(){
  	return $this->hp;
  }
  function getName(){
  	return $this->name;
  }
  function getLastname(){
    return $this->lastname;
  }
  function getAge(){
    return $this->age;
  }
  function getMother(){
  	return $this->mother;
  }
  function getFather(){
  	return $this->father;
  }
  function getDead(){
    return $this->dead;
  }
  // function getInfo(){
  // 	return "<h3>A few words about myself</h3><br>"."My name is:".$this->getName()."<br>my lastname is:".$this->getLastname()."<br>my father is:".$this->getFather()->getName()."<br>my mother is:".$this->getMother()->getName()."<br>My grandmother is:".$this->getgrandMother()->getName()."<br>My grandfather is:".$this->getgrandFather()->getName();
  // }
  // function getInfo(){
  // 	return "<h3>A few words about myself</h3><br>"."My name is: ".$this->getName()."<br>my lastname is: ".$this->getLastname()."<br>my age is: ".$this->getAge()."<br>my father is: ".$this->getFather()->getName()."<br>my mother is: ".$this->getMother()->getName()."<br>My grandmother is: ".$this->getgrandMother()->getName()."<br>My grandfather is: ".$this->getgrandFather()->getName()."<br>From my father ".$this->getFather()->getName()." was mother ".$this->getMother()->getName()." and father ".$this->getMother()->getFather()->getName().", they are ".$this->getDead();
  // }
  function getInfo(){
  	return "
  	<h3>Несколько слов обо мне</h3><br>"."
  	Мое имя: ".$this->getName()."
  	<br>Моя Фамилия: ".$this->getLastname()."
  	<br>Мой возраст: ".$this->getAge()."
  	<br>Мой Отец: ".$this->getFather()->getName()."
  	<br>Моя Мать: ".$this->getMother()->getName()."
  	<br>Моя бабушка: ".$this->getMother()->getMother()->getName()."
  	<br>Мой дедушка: ".$this->getMother()->getFather()->getName()."
  	<br>У моего Отца ".$this->getFather()->getName()." была мать ".$this->getFather()->getMother()->getName()." и Отец ".$this->getFather()->getFather()->getName()."
  	, их уже ".$this->getFather()->getMother()->getDead()."<br>У матери есть мама ".$this->getMother()->getMother()->getName()." и Отец ".$this->getMother()->getFather()->getName().",
  	 они оба ".$this->getMother()->getMother()->getDead();
  }
}

$vacheslav = new Person("Вячеслав","Тихонов",73,null,null,"нету");//мертвые от отца Alex
$miroslava = new Person("Мирослава","Снежная",69,null,null,"нету");//мертвые от отца Alex
$michail = new Person("Михаил","Волжан",85,null,null,"живы");//Дедушка
$alina = new Person("Алина","Морза",80,null,null,"живы");//Бабушка
$alex = new Person("Алексей","Иванов",42,$miroslava,$vacheslav);//Отец
$olga = new Person("Ольга","Иванова",42,$alina,$michail);//Мать
$petr = new Person("Петр","Иванов",25,$olga,$alex);
echo $petr->getInfo();
?>