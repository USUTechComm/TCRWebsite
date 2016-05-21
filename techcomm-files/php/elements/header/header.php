<header role="banner">

    <div class="bg-usu-blue">

        <div id="global-header" class="container-variable">
            
            <div class="row">

                <div class="col-xs-12 col-sm-6">
                    <a href="http://usu.edu" target="_blank"><img class="img-responsive" src="<?= $logo["usu"] ?>" alt="Utah State University wordmark"></a>
                </div>

                <div class="hidden-xs col-sm-6">

                    <div class="header-navigation" role="navigation">

                        <ul class="list-unstyled list-inline">
                            <li><a href="http://www.usu.edu" target="_blank"><span class="fa fa-home fa-lg"></span><span class="sr-only">USU Home</span></a></li>
                            <li><a href="http://usu.edu/azindex/" target="_blank">A-Z index</a></li>
                            <li><a href="http://usu.edu/myusu/" target="_blank">MyUSU</a></li>
                            <li><a href="http://directory.usu.edu/" target="_blank">Directory</a></li>
                        </ul>

                    </div>

                </div>

            </div>
            
        </div>

    </div>

    <nav class="navbar navbar-techCom w-100" style="margin-bottom:0;">
        <div class="container-variable">
            <div class="row">

                <div class="col-xs-12 navbar-techCom-bg">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tc-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?= $index["url"] ?>"><img src="<?= $logo["full"] ?>"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="tc-collapse">

                        <ul class="nav navbar-nav navbar-popover">

                            <li class="dropdown">
                                <a href="<?= $bachelors["url"] ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bachelor's <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-heading hidden-xs hidden-sm"><?= $bachelors["title"] ?></li>
                                    <li><a href="<?= $bachelors["about"]["url"] ?>"><?= $bachelors["about"]["title"] ?></a></li>
                                    <li><a href="<?= $bachelors["requirements"]["url"] ?>"><?= $bachelors["requirements"]["title"] ?></a></li>
                                    <li><a href="<?= $bachelors["courses"]["url"] ?>"><?= $bachelors["courses"]["title"] ?></a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="<?= $masters["url"] ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master's <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-heading hidden-xs hidden-sm"><?= $masters["title"] ?></li>
                                    <li><a href="<?= $masters["about"]["url"] ?>"><?= $masters["about"]["title"] ?></a></li>
                                    <li><a href="<?= $masters["application"]["url"] ?>"><?= $masters["application"]["title"] ?></a></li>
                                    <li><a href="<?= $masters["requirements"]["url"] ?>"><?= $masters["requirements"]["title"] ?></a></li>
                                    <li><a href="<?= $masters["courses"]["url"] ?>"><?= $masters["courses"]["title"] ?></a></li>
                                    <li><a href="<?= $masters["financial"]["url"] ?>"><?= $masters["financial"]["title"] ?></a></li>
                                    <li><a href="<?= $masters["faq"]["url"] ?>"><?= $masters["faq"]["title"] ?></a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="<?= $doctorate["url"] ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PhD <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-heading hidden-xs hidden-sm"><?= $doctorate["title"] ?></li>
                                    <li><a href="<?= $doctorate["about"]["url"] ?>"><?= $doctorate["about"]["title"] ?></a></li>
                                    <li><a href="<?= $doctorate["application"]["url"] ?>"><?= $doctorate["application"]["title"] ?></a></li>
                                    <li><a href="<?= $doctorate["requirements"]["url"] ?>"><?= $doctorate["requirements"]["title"] ?></a></li>
                                    <li><a href="<?= $doctorate["courses"]["url"] ?>"><?= $doctorate["courses"]["title"] ?></a></li>
                                    <li><a href="<?= $doctorate["timeline"]["url"] ?>"><?= $doctorate["timeline"]["title"] ?></a></li>
                                    <li><a href="<?= $doctorate["financial"]["url"] ?>"><?= $doctorate["financial"]["title"] ?></a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="<?= $people["url"] ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">People <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-heading hidden-xs hidden-sm"><?= $people["title"] ?></li>
                                    <li><a href="<?= $people["faculty"]["url"] ?>"><?= $people["faculty"]["title"] ?></a></li>
                                    <li><a href="<?= $people["students"]["url"] ?>"><?= $people["students"]["title"] ?></a></li>
                                </ul>
                            </li>

                        </ul>

                        <!-- <ul class="nav navbar-nav navbar-right aux-menu">

<li><a href="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>
<li><a href="social"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></a></li>

</ul> -->


                    </div><!-- /.navbar-collapse -->

                </div>

            </div>
        </div><!-- /.container-variable -->
    </nav>

    <?php

    if ($includeBreadcrumbs) {
        require $_SERVER['DOCUMENT_ROOT'].'/php/elements/header/breadcrumbs.php';
    }

    ?>

</header>