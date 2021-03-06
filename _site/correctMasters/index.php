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

                            <p>Utah State University’s Master of Technical Communication (MTC) is designed to appeal to a broad range of students:</p>

<ul><li><strong>Working professional communicators.</strong> The program aims to help practicing professional writers—
people who do communication-intensive work in a variety of organizations, both for-profit and non-profit. Students advance their careers by learning practical skills and the theories that can support or challenge workplace practices.</li>

<li><strong>Students considering an academic career.</strong> The program introduces students to technical 
communication and rhetoric as an academic field, and graduates may go on to complete PhDs in the field or teach at two-year colleges.</li>

<li><strong>Secondary education teachers.</strong> High school English teachers who complete the degree will be able to add 
technical communication classes to their teaching repertoire, incorporate principles of technical communication into their existing classes, or make the switch to teaching at two-year colleges.</li></ul>

<p>In this online degree, you will enjoy the same high quality level of education, the same award-winning faculty, and the same small class sizes you would otherwise encounter in any USU classroom.</p>

<p>The English Department also offers a PhD in Technical Communication and Rhetoric (TCR), and online classes are designed to serve not only the populations listed above but also our doctoral students, who register for online classes together with master’s students. The PhD program has a mission to explore the ways in which TCR can be used to promote social justice, and students in the online MTC program will notice this theme in many of their classes.</p>

<p>We offer one or two online classes for MTC students each fall and spring semester. With permission from the Director of Graduate Studies and when appropriate classes are available, MTC students make take some of their classes outside the English department. Each semester, the MTC faculty identifies relevant classes outside English that will count towards the MTC degree. For instance, students who want to learn software skills may take some online classes through USU’s Instructional Technology and Learning Sciences department. Such classes include digital video capture and production, instructional graphic production, and interactive multimedia production. On the other hand, students with a particular interest in pedagogy may take some online classes through USU’s School of Teacher Education and Leadership (TEAL).
</p>

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