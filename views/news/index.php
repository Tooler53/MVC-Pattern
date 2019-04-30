<?php
/**
 * Created by PhpStorm.
 * User: Toole
 * Date: 13.04.2019
 * Time: 17:49
 */

require_once(ROOT . '/views/parts/header.php');
require_once(ROOT . '/views/parts/content.php');

?>

    <div style="background: #ffd1cf; padding: 10px; margin-top: 16px; width: 100%">
        <div style="margin: auto; width: 90%">
            <h1 style="text-align: center">Новости</h1>
            <table class="news-table" border="1">
                <thead>
                <tr>
                    <th>Заголовок</th>
                    <th>Дата</th>
                    <th>Категория</th>
                    <th>Новость</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < count($newsList); $i++): ?>
                    <tr>
                        <td><?= $newsList[$i]['title']; ?></td>
                        <td><?php
                            $data = new DateTime($newsList[$i]['date']);
                            echo $data->format("d.m.Y"); ?>
                        </td>
                        <td style="text-align: center"><?= $newsList[$i]['category']; ?></td>
                        <td><?= $newsList[$i]['short_content']; ?></td>
                        <td>
                            <a href="/news/<?= $newsList[$i]['category']; ?>/<?= $newsList[$i]['id']; ?>">Просмотреть</a>
                        </td>
                    </tr>
                <? endfor; ?>
                </tbody>
            </table>
            <div><?= $pagination->get(); ?></div>
        </div>
    </div>
<?= require_once(ROOT . '/views/parts/footer.php'); ?>