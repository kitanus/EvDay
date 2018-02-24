<main>
    <div id="eventWall">
        <? for ($i = 0; $i < count($event); $i++): ?>
            <div class="event">
                <header>
                    <p><?= $event[$i]["name"]; ?></p>
                </header>
                <article>
                    <p><?= $event[$i]["time"]; ?></p>
                    <?= $event[$i]["content"]; ?>
                    <p><?= $eventFunctions->changeFree($i); ?></p>
                    <a href="<?= $event[$i]["link"]; ?>">Подробнее..</a>
                </article>
            </div>
        <? endfor; ?>
    </div>
</main>