<?php

/**
 * PHPでアクセスカウンターを作る方法 | それからデザイン スタッフブログ
 * http://sole-color-blog.com/blog/php/49/
 */

const COUNTER_HOTEL_GUEST = 0;
const COUNTER_BUSTOUR_GUEST = 1;

execRouter();

function execRouter()
{
    if (htmlspecialchars($_GET['method']) == 'increment') {
        if (htmlspecialchars($_GET['type']) == 'stay') {
            $fp = loadCounterFile(COUNTER_HOTEL_GUEST);
        } elseif (htmlspecialchars($_GET['type']) == 'bustour') {
            $fp = loadCounterFile(COUNTER_BUSTOUR_GUEST);
        }
        increment($fp);
    } elseif (htmlspecialchars($_GET['echo'])) {
        $fp = loadCounterFile();
        getCount($fp);
    }
}

function loadCounterFile($fileType)
{
    // counter.dat カウント数を書き込むテキストファイル
    if ($fileType == COUNTER_HOTEL_GUEST) {
        $filename = 'counter_hotel_guest.dat';
    } elseif ($fileType == COUNTER_BUSTOUR_GUEST) {
        $filename = 'counter_bustour_guest.dat';
    }

    // counter.datファイルを fopenで開く
    return fopen($filename, "r+");
}

function increment($fp)
{
    try {
        // fgets関数でcounter.datに書かれたカウント数を読み込む
        $count = (int)fgets($fp, 32);

        // counter.datに書かれたカウント数を加算
        $count++;

        // fseek関数でcounter.datの読み書きを行う場所を先頭に戻す
        fseek($fp, 0);

        // fputs関数でカウントされた数をファイルに書き込む
        fputs($fp, $count);

        // flock関数でファイルを上書きされないようにロックする
        flock($fp, LOCK_UN);

        // fclose関数でファイルを閉じる
        fclose($fp);

        return 'success!';
    } catch (Exception $e) {
        return 'error... ' . $e->getMessage();
    }
}

function getCount($fp)
{
    // カウントされた数字を表示
    return $count;
}
