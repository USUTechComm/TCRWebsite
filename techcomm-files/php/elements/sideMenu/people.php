<div class="hidden-xs col-sm-3 side-menu">

    <h2><?= $people["short"] ?></h2>

    <ul class="list-unstyled">

        <li <?= $activeFaculty ?>><a href="<?= $people["faculty"]["url"] ?>"><?= $people["faculty"]["title"] ?></a></li>
        <li <?= $activeStudents ?>><a href="<?= $people["students"]["url"] ?>"><?= $people["students"]["title"] ?></a></li>
        
    </ul>

</div>