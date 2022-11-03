<?php
$now = date('Y-m-d H:i:s');
echo "現在：" . $now . '</br>';

$dsn = 'mysql:dbname=test_db; host=mysql; charset=utf8';
$user = 'docker_user';
$pass = 'docker_user_pass';

try {
    $db = new PDO($dsn, $user, $pass);
  
    echo "アクセス履歴：</br>";
    $sql = "SELECT date FROM t_test ORDER BY date DESC";
    if ($stt = $db->query($sql)){
        While($row = $stt->fetch(PDO::FETCH_ASSOC)) {
            echo '　' . $row['date'] . '</br>';
        }
    }

    $sql = "INSERT INTO t_test(date) VALUES(now())";
    $stt = $db->query($sql);

} catch (PDOException $e) {
    echo "{$e->getMessage()}" . " aaaa";
} finally {
    $db = null;
}