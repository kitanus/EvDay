<main>
    <div id="eventWall">
        {section name=customer start=0 step=1 loop=$max}
            <div class="event">
                <header>
                    <p>{$event[customer]["name"]}</p>
                </header>
                <article>
                    <p>{$event[customer]["time"]}</p>
                    {$event[customer]["content"]}
                    <p>{$isFree[customer]}</p>
                    <a href="{$event[customer]["link"]}">Подробнее. .</a>
                </article>
            </div>
        {/section}
    </div>
</main>