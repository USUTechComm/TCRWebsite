<div class="hidden-xs col-sm-3 side-menu">

    <h2><?= $bachelors["short"] ?></h2>

    <ul class="list-unstyled">

        <li <?= $activeAbout ?>><a href="<?= $bachelors["about"]["url"] ?>"><?= $bachelors["about"]["title"] ?></a></li>
        <li <?= $activeRequirements ?>><a href="<?= $bachelors["requirements"]["url"] ?>"><?= $bachelors["requirements"]["title"] ?></a></li>
        <li <?= $activeCourses ?>><a href="<?= $bachelors["courses"]["url"] ?>"><?= $bachelors["courses"]["title"] ?></a></li>

    </ul>

</div>