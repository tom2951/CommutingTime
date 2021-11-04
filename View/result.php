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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/result.css">
  <!-- CSS▲ -->

  <title>生涯通勤時間チェッカー</title>
</head>

<body>
  <header>
    <div>
      <h3>通勤時間チェッカー</h3>
      <label>あなたの通勤時間を算出します</label>
    </div>
  </header>

    <main>
      <div>
        <h5>生涯通勤に使う時間</h5>        
        <table>
          <tbody>
            <tr>
              <th>1週間</th>
              <td><?php echo $year; ?>時間</td>
            </tr>
            <tr>
              <th>1ヶ月</th>
              <td>〇時間</td>
            </tr>
            <tr>
              <th>1年</th>
              <td>〇時間</td>
            </tr>
            <tr>
              <th>10年</th>
              <td>〇時間</td>
            </tr>
            <tr>
              <th>定年まで</th>
              <td>〇時間</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>
</body>

</html>