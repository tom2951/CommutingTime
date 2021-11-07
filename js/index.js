
// 画像読み込み後に走る
// $(function){}
// $(document).ready(function){}

// HTMLや画像、全て読み込み後に走る
// $(window).load(function(){});

// 画像読み込みの前
$(document).ready(function(){
    var time = new Date();
    var year = time.getFullYear();
    for (var i = year; i >= 1930; i--) {  
        $('select[name="year"]').append('<option value="' + i + '">' + i + '</option>');
    }
    //1～12の数字を生成
    for (var i = 1; i <= 12; i++) { 
        $('select[name="month"]').append('<option value="' + i + '">' + i + '</option>');
    }
    //1～31の数字を生成
    for (var i = 1; i <= 31; i++) {         
        $('select[name="day"]').append('<option value="' + i + '">' + i + '</option>');
    }
  });

// プラマイボタン
function BtnCalc(val, target){
    var selector = "input[name='" + target + "']";
    var tukinHour = Number($(selector).val());
    var test = tukinHour + val;    
    switch (target) {
        case "tukin":
            if (test < 0) {
                test = tukinHour;
            }
            break;
    
        case "holiday":
            if (test < 105) {
                test = tukinHour;
            }
            break;

        case "retire":
            if (test < 30) {
                test = tukinHour;
            }
            break;
    }
    $(selector).val(test);
}

// 日付を01と表示するなら使用する
function zeroPadding(num,length){
  return ('0000000000' + num).slice(-length);
}

// 年と月からその月の最終までの日付を返す
function monthday(year,month){
  var lastday = new Array('', 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
  if ((year % 4 == 0 && year % 100 != 0) || year % 400 == 0){
      lastday[2] = 29;
  }
  return lastday[month];
}

// monthdayで作成した日付を日付セレクトへ
function setDay(){
  var year    = $('select[name="year"]').val();
  var month   = $('select[name="month"]').val();
  var day     = $('select[name="day"]').val();
  var lastday = monthday(year, month);
  var option = '';
  for (var i = 1; i <= lastday; i++) {
      if (i == day){
          option += '<option value="' + i + '" selected="selected">' + i + '</option>\n';
      }else{
          option += '<option value="' + i + '">' + i + '</option>\n';
      }
  }
  $('select[name="day"]').html(option);
}
