<main>
    <form method="post" action="http://{$smarty.server.SERVER_NAME}{$smarty.server.REQUEST_URI}">
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
                {section name=customer start=0 step=1 loop=$max}
                    <tr>
                        <td>{$event[customer]["name"]}</td>
                        <td>
                            <p>
                                {$event[customer]["content"]}
                            </p>
                        </td>
                        <td>{$event[customer]["price"]}</td>
                        <td>{$event[customer]["time"]}</td>
                        <td>{$event[customer]["link"]}</td>
                        <td><input type="checkbox" name="visible[{$event[customer]["id"]}]" value="1" {$isCheck[customer]}></td>
                    </tr>
                {/section}
            </table>
        </div>
        <button name="action" value="save">Сохранить</button>
    </form>
</main>