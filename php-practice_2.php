<?php
// Q1 tic-tac問題
for($x=1; $x<=100;$x++){
  if($x % 4 === 0 && $x % 5 === 0){
      echo 'tic-tac'."\n";
  } elseif ($x % 4 === 0){
       echo 'tic'."\n";
  } elseif ($x % 5 === 0){
       echo 'tac'."\n";
  } else {
      echo $x."\n";
  }
}

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

//問題１
echo 'Bさんの電話番号は'.$personalInfos[1]['tel'].'です。';

//問題2

foreach ($personalInfos as $index => $val){
  echo ($index+1).'番目の'.$val['name'].'のメールアドレスは'.$val['mail'].'で、電話番号は'.$val['tel'].'です。'."\n";
}
//問題3


$ageList = [25, 30, 18];
foreach ($ageList as $ind => $age){
    $personalInfos[$ind]['age'] = $age;
}
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student(120,'山田');
echo '学籍番号'.$yamada->studentId.'番の生徒は'.$yamada->studentName.'です。'

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }
    
    public function attend($lesson)
    {
        echo $this->studentName.'は'.$lesson.'の授業に参加しました。学籍番号：'.$this->studentId;
    }
}

$yamada = new Student(120,'山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
//問題1
$now = new DateTime('now');
$now2 = $now->modify('-1 month');
echo $now2->format('Y-m-d');

//問題2
$today = new DateTime('now');
$day = new DateTime('1992-04-25');
echo $day->diff($today)->format('あの日から%a日経過しました。');

?>