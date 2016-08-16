<?php

/**
 * PHPでアクセスカウンターを作る方法 | それからデザイン スタッフブログ
 * http://sole-color-blog.com/blog/php/49/
 */

execRouter();

function execRouter()
{
    $fp = loadCounterFile();

    if (htmlspecialchars($_GET['increment'])) {
        increment($fp);
    } elseif (htmlspecialchars($_GET['echo'])) {
        getCount($fp);
    }
}

function loadCounterFile()
{
    // counter.dat カウント数を書き込むテキストファイル
    $filename = 'hotel_guest_counter.dat';
    // counter.datファイルを fopenで開く
    $fp = fopen($filename, "r+");

    return $fp;
}

function increment($fp)
{
    try {
        // fgets関数でcounter.datに書かれたカウント数を読み込む
        $count = fgets($fp, 32);

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
