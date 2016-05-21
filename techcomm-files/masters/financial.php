<?php require '../php/Page.php'; ?>

<!DOCTYPE html>
<html lang="en">

    <!-- HEAD -->
    <?php $page1->addHead(); ?>

    <body>

        <!-- HEADER -->
        <?php $page1->addHeader(masters,financial); ?>

        <main>

            <div class="container">

                <div class="row">

                    <article class="col-xs-12 col-sm-9">

                        <div class="col-xs-12">

                            <div class="page-header">
                                <h1><small><?= $masters["title"] ?></small><br><?= $masters["financial"]["title"] ?></h1>
                            </div>

                        </div>

                        <section class="col-xs-12">

                            <h2>Cost of the Program</h2>

                            <p>For current information on the cost of the program, <a href="https://online.usu.edu/degrees/techcom-MTC" target="_blank">click here</a>. You can also call (800) 233-2137 or send an email to <a href="mailto:distance.info@usu.edu">distance.info@usu.edu</a>.</p>

                            <p>Online tuition costs for out-of-state and international students are the same as they are for students who have Utah residency. In addition to tuition, all online students pay a $50-per-class technology fee.</p>

                            <p>Note that employees of Utah State University may be eligible to receive a tuition reduction for this program. Call Human Resources for further information at (435) 797-0216.</p>

                        </section>

                    </article>

                    <!-- SIDE MENU -->
                    <?php $page1->addSideMenu(masters,financial); ?>

                </div>

            </div>

        </main>

        <!-- FOOTER -->
        <?php $page1->addFooter() ?>

        <!-- JAVASCRIPT -->
        <?php $page1->addJavascript() ?>

    </body>
</html>