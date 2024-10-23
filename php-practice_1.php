<?php
// Q1 変数と文字列
$name = '岡部';
echo '私の名前は「' .$name .'」です。';


// Q2 四則演算
$num = 4 * 5;
echo $num ."\n";

echo $num /= 2;


// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo '現在時刻は、' . date("Y年m月d日 H時i分s秒") .'です。';

// Q4 条件分岐-1 if文
$device = 'windows';
if ($device === 'windows' or 'mac' ){
    if($device === 'windows'){
      echo '使用OSは、windowsです。';
      } else {
      echo '使用OSは、macです。';
      }
} else {
  echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 31;
$age2 =($age < 18)? '未成年です。' : '成人です。';

echo $age2;

// Q6 配列
$pref = ['神奈川県','茨城県','群馬県','栃木県','千葉県','埼玉県','東京都'];
echo $prefecture[2] .'と' .$prefecture[3] .'は関東地方の都道府県です。';

// Q7 連想配列-1
$city = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
  ];

  foreach($city as $val){
    echo $val ."\n";
  }


// Q8 連想配列-2
  foreach($city as $key => $val){
    if($key === '埼玉県'){
      echo $key.'の県庁所在地は、'.$val .'です。';
    }
  }

// Q9 連想配列-3
$city['愛知県'] = '名古屋市';
$city['大阪府'] = '大阪市';

foreach($city as $kanto => $capital){
  if(in_array($kanto,$pref)){
    echo $kanto.'の県庁所在地は、'.$capital .'です。'."\n";
  } else {
    echo $kanto.'は関東地方ではありません。'."\n";
  }
}

// Q10 関数-1
function hi($name)
{
  echo $name.'さん、こんにちは。';
}

hi('太郎');
hi('花子');

// Q11 関数-2
function calcTaxInPrice($price){
  return $price * 1.1;
  }

$price =1000;
$taxInPrice=calcTaxInPrice($price);
echo $price.'円の商品の税込金額は'.$taxInPrice.'円です。';

// Q12 関数とif文
function distinguishNum($num){
  if($num % 2 === 0){
    echo $num.'は偶数です';
  } else {
    echo $num.'は奇数です';
  }
}

distinguishNum(10);

// Q13 関数とswitch文
function evaluateGrade($grade){
  switch($grade){
    case 'A':
      echo '合格です。';
      return;
  
    case 'B':
      echo '合格です。';
      return;

    case 'C':
      echo '合格ですが追加課題があります。';
      return;
    
    case 'D':
      echo '不合格です。';
      return;

    default:
      echo '判定不明です。講師に問い合わせてください。';
      return;
    }
}
evaluateGrade('A');
evaluateGrade('D');
?>