<div class="hidden-xs col-sm-3 side-menu">

    <h2><?= $masters["short"] ?></h2>

    <ul class="list-unstyled">

        <li <?= $activeAbout ?>><a href="<?= $masters["about"]["url"] ?>"><?= $masters["about"]["title"] ?></a></li>
        <li <?= $activeApplication ?>><a href="<?= $masters["application"]["url"] ?>"><?= $masters["application"]["title"] ?></a></li>
        <li <?= $activeRequirements ?>><a href="<?= $masters["requirements"]["url"] ?>"><?= $masters["requirements"]["title"] ?></a></li>
        <li <?= $activeCourses ?>><a href="<?= $masters["courses"]["url"] ?>"><?= $masters["courses"]["title"] ?></a></li>
        <li <?= $activeFinancial ?>><a href="<?= $masters["financial"]["url"] ?>"><?= $masters["financial"]["title"] ?></a></li>
        <li <?= $activeFaq ?>><a href="<?= $masters["faq"]["url"] ?>"><?= $masters["faq"]["title"] ?></a></li>

    </ul>

</div>