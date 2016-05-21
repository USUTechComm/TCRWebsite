<?php require '../php/Page.php'; ?>

<!DOCTYPE html>
<html lang="en">

    <!-- HEAD -->
    <?php $page1->addHead(masters); ?>

    <body>

        <!-- HEADER -->
        <?php $page1->addHeader(masters,about); ?>

        <main>

            <div class="container">

                <div class="row">

                </div>

                <div class="row">
                    
                    <article class="col-xs-12 col-sm-9">

                    <div class="col-xs-12">

                        <div class="page-header">
                            <h1><small><?= $masters["title"] ?></small><br><?= $masters["about"]["title"] ?></h1>
                        </div>

                    </div>

                        <section class="col-xs-12" id="overview">

                            <p>The Master of Technical Communication program is designed for working professional communicators. Students who complete the degree receive a Master of Technical Communication. Neither the student’s transcript nor the diploma indicate that the degree was completed online.</p>

                        </section>

                    </article>

                    <!-- SIDE MENU -->
                    <?php $page1->addSideMenu(masters,about); ?>

                </div>

            </div>

        </main>
        
        <!-- FOOTER -->
        <?php $page1->addFooter() ?>
        
        <!-- JAVASCRIPT -->
        <?php $page1->addJavascript() ?>
        
    </body>
</html>