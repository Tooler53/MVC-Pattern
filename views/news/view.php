<?php
/**
 * Created by PhpStorm.
 * User: Toole
 * Date: 13.04.2019
 * Time: 17:49
 */
?>
<div style="width: 100%; margin-top: 16px; background: #3dfff8; margin-left: 10px">
    <div style="width: 70%;margin: auto; margin-top: 20px; background: #fff; padding: 10px">
        <div style="display: flex;justify-content: space-between; border-bottom: 1px solid grey">
            <h1><?= $newsItem['title']; ?></h1>
            <p style="margin-right: 5px"><?= $newsItem['date']; ?></p>
        </div>
        <h3><?= $newsItem['content']; ?></h3>
        <a href="/news" class="btn">Назад</a>
    </div>
</div>