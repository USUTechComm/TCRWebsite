<div class="hidden-xs col-sm-3 side-menu">

    <h2><?= $doctorate["short"] ?></h2>

    <ul class="list-unstyled">

        <li <?= $activeAbout ?>><a href="<?= $doctorate["about"]["url"] ?>"><?= $doctorate["about"]["title"] ?></a></li>
        <li <?= $activeApplication ?>><a href="<?= $doctorate["application"]["url"] ?>"><?= $doctorate["application"]["title"] ?></a></li>
        <li <?= $activeRequirements ?>><a href="<?= $doctorate["requirements"]["url"] ?>"><?= $doctorate["requirements"]["title"] ?></a></li>
        <li <?= $activeCourses ?>><a href="<?= $doctorate["courses"]["url"] ?>"><?= $doctorate["courses"]["title"] ?></a></li>
        <li <?= $activeTimeline ?>><a href="<?= $doctorate["timeline"]["url"] ?>"><?= $doctorate["timeline"]["title"] ?></a></li>
        <li <?= $activeFinancial ?>><a href="<?= $doctorate["financial"]["url"] ?>"><?= $doctorate["financial"]["title"] ?></a></li>

    </ul>

</div>