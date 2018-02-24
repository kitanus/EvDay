<main>
    <form method="post" action="http://<?php print $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>">
        <div id="visible">
            <table>
                <tr>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Цена</th>
                    <th>Дата</th>
                    <th>Ссылка</th>
                    <th>Пропуск</th>
                </tr>
                <? for($i = 0; $i<count($event); $i++): ?>
                    <tr>
                        <td><?= $event[$i]["name"]; ?></td>
                        <td>
                            <p>
                                <?= $event[$i]["content"]; ?>
                            </p>
                        </td>
                        <td><?= $event[$i]["price"]; ?></td>
                        <td><?= $event[$i]["time"]; ?></td>
                        <td><?= $event[$i]["link"]; ?></td>
                        <td><input type="checkbox" name="visible[<?= $event[$i]["id"]; ?>]" value="1" <?= $eventFunctions->changeCheck($i); ?>></td>
                    </tr>
                <? endfor; ?>
            </table>
        </div>
        <button name="action" value="save">Сохранить</button>
    </form>
</main>