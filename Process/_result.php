<?php

// // (1) 登録するデータを用意
// $parBirthday = CreateBirthday($_POST['year'], $_POST['month'], $_POST['day']);
// $parTime = $_POST['tukin'];
// $parHoliday = $_POST['holiday'];
// $parRetire = $_POST['retire'];
// $date = new DateTime('now');
// $parRegister = $date->format('Y-m-d H:i:s');

// $username = "postgres";
// $password = "db-postgre-2951";
// // (2) データベースに接続
// $pdo = new PDO('pgsql:dbname=commuting;host=localhost', $username, $password);

// // (3) SQL作成
// $stmt = $pdo->prepare("INSERT INTO t_user (
// 	birthday, time, holiday, retire, registerdate
// ) VALUES (
// 	:birthday, :time, :holiday, :retire, :registerdate
// )");

// // (4) 登録するデータをセット
// $stmt->bindParam( ':birthday', $parBirthday, PDO::PARAM_STR);
// $stmt->bindParam( ':time', $parTime, PDO::PARAM_STR);
// $stmt->bindParam( ':holiday', $parHoliday, PDO::PARAM_STR);
// $stmt->bindParam( ':retire', $parRetire, PDO::PARAM_STR);
// $stmt->bindParam( ':registerdate', $parRegister, PDO::PARAM_STR);

// // (5) SQL実行
// $res = $stmt->execute();

// // (6) データベースの接続解除
// $pdo = null;

// 生年月日から現在の年齢算出する
// （（生）19980505-（現）20211107）/10000で切り捨てると、230602で23歳となる
// $birthday = intval($parBirthday);
$birthday = intval("19980225");
$today = intval(date("Ymd", time()));
$age = floor(($today - $birthday) / 10000);

/*
  算出値
  1週間の通勤時間=1日*5
  1ヶ月の通勤時間=((365日-年間休日)/12)*1日
  年間通勤時間=(365日-年間休日)*1日
  10年間の通勤時間=((365日-年間休日)*1日)*10年
  定年までの通勤時間=(定年-現在=残り通勤年数)*365*1日
  */

// 基準値
$oneDayCommute = intval($_POST['tukin']) * 2;
$yearWorkDay = 365 - intval($_POST['holiday']);
// $workingYear = ((intval($_POST['retire'])-$age)*$yearWorkDay)*$oneDayCommute;
define('JAPAN_AVERAGE','1時間19分');
define('WORLD_AVERAGE','1時間5分');

// 1日
$strOneDay = MuniteToHourMinute($oneDayCommute);
// 1週間
$oneWeek = $oneDayCommute * 5;
$strOneWeek = MuniteToHourMinute($oneWeek);
// 1年
$oneYear = $yearWorkDay * $oneDayCommute;
$strOneYear = MuniteToHourMinute($oneYear);
// 1ヶ月
$oneMonth = round($oneYear / 12);
$strOneMonth = MuniteToHourMinute($oneMonth);
// 10年
$tenYear = $oneYear * 10;
$strTenYear = MuniteToHourMinute($tenYear);
// 定年まで
// $untilRetire = ($workingYear * $yearWorkDay) * $oneDayCommute;
// $strUntilRetire = MuniteToHourMinute($untilRetire);


/** 年月日を入れると、8桁の文字列作成 */
function CreateBirthday($year, $month, $day)
{
  if (mb_strlen($month) == 1) {
    $month = substr_replace($month, "0", 0, 0);
  }
  if (mb_strlen($day) == 1) {
    $day = substr_replace($day, "0", 0, 0);
  }
  $result = $year . $month . $day;
  return $result;
}

/** 分を入れると、分数に応じて〇日〇時間〇分か、〇時間〇分を返します */
function MuniteToHourMinute($baseMinute)
{
  if ($baseMinute > 1440) {
    $day = floor($baseMinute / 1440);
    $baseMinute = $baseMinute - $day*1440;
    
    // if30で割れたらstr月を作る
    $totalMonth = 0;
    if ($day >= 30) {
      $totalMonth = 0;
    }

    $strDay = $day . "日";
    $strHour = floor($baseMinute / 60) . "時間";
    $strMinute = ($baseMinute % 60) . "分";
    $result = $strDay . $strHour . $strMinute;
    return $result;
  } else {
    $hour = floor($baseMinute / 60) . "時間";
    $minute = ($baseMinute % 60) . "分";
    $result = $hour . $minute;
    return $result;
  }
}
