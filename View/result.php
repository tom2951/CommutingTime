<?php include_once '../Process/_result.php' ?>

<!doctype html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CDNを利用 -->
  <!-- jQuery▼ -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="../js/result.js"></script>
  <!-- jQuery▲ -->
  <!-- CSS▼ -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/result.css">
  <!-- CSS▲ -->

  <title>生涯通勤時間チェッカー</title>
</head>

<body>
  <header class="text-center pt-3 pb-3">
    <div class="">
      <!-- <a href="../View/index.html" class="text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-emoji-smile"
          viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
          <path
            d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z">
          </path>
        </svg>
      </a> -->
      <a href="../View/index.html" class="text-decoration-none">
        <h3>通勤時間チェッカー</h3>
      </a>
    </div>
    <label>あなたが生涯通勤に使う時間を算出します。</label>
  </header>

  <main>
    <div class="col-10 container text-center">

      <h5>現在<?php echo $age ?>歳のあなたが</h5>
      <h5>通勤に消費する時間です。</h5>
      <table class="table table-striped">
        <!-- <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead> -->
        <tbody>
          <tr>
            <th>1週間</th>
            <td><?php echo $strOneWeek; ?></td>
          </tr>
          <tr>
            <th>1ヶ月</th>
            <td><?php echo $strOneMonth; ?></td>
          </tr>
          <tr>
            <th>1年</th>
            <td><?php echo $strOneYear; ?></td>
          </tr>
          <tr>
            <th>10年</th>
            <td><?php echo $strTenYear; ?></td>
          </tr>
          <!-- <tr>
            <th>定年まで</th>
            <td><?php echo $strUntilRetire; ?></td>
          </tr> -->
        </tbody>
      </table>

      <div>
        <h5>平均比較</h5>
      </div>

      <table class="table table-striped">
        <!-- <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead> -->
        <tbody>
          <tr>
            <th>あなたの1日</th>
            <td><?php echo $strOneDay; ?></td>
          </tr>
          <tr>
            <th><a href="http://www.stat.go.jp/data/shakai/2016/rank/index.html" target="_blank" rel="noopener noreferrer">日本の平均</a></th>
            <td><?php echo JAPAN_AVERAGE; ?></td>
          </tr>
          <tr>
            <th><a href="https://news.mynavi.jp/article/20141029-a038/" target="_blank" rel="noopener noreferrer">世界の平均</a></th>
            <td><?php echo WORLD_AVERAGE; ?></td>
          </tr>
        </tbody>
      </table>
    </d>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>