<?php require '../php/Page.php'; ?>

<!DOCTYPE html>
<html lang="en">

    <!-- HEAD -->
    <?php $page1->addHead(); ?>

    <body>

        <!-- HEADER -->
        <?php $page1->addHeader(masters,courses); ?>

        <main>

            <div class="container">

                <div class="row">

                    <article class="col-xs-12 col-sm-9">

                        <div class="col-xs-12">

                            <div class="page-header">
                                <h1><?= $masters["title"] ?><br><?= $masters["courses"]["title"] ?></h1>
                            </div>

                        </div>

                        <section class="col-xs-12">

                            <h2>Course Descriptions</h2>

                            <h3>ENGL 6400: Advanced Editing (3)</h3>
                            <p>Examines complex roles editors assume in creating technical and non-technical documents.  Principal components include working with the substance of documents, mediating the writer-reader relationship, and exemplifying the application of rhetorical theory in editing.</p>

                            <h3>ENGL 6410: Theory &amp; Research in Professional Communication (3)</h3> 
                            <p>Introduces contemporary theories of written discourse; emphasizes the implications of these theories for research in professional communication.</p>

                            <h3>ENGL 6420: Usability Studies &amp; Human Factors in Professional Communication (Usability Studies) (3)</h3>
                            <p>Examines the concepts and practices of usability studies and human factors in the design and production of print and online documents.  Emphasis is placed on developing objectives, criteria, and measures for conducting tests in the lab and field.</p>

                            <h3>ENGL 6430: Publications Management (3)</h3>
                            <p>Covers processes for developing and producing publications, including information development cycles, supervision, and budgets.</p>

                            <h3>ENGL 6450: Reading Theory &amp; Document Design (3)</h3> 
                            <p>Examines how reading theory interacts with the rhetoric of graphics, layout, and type to influence the way documents are designed for maximum information and readability.</p>

                            <h3>ENGL 6460: Studies in Digital Media (3)</h3> 
                            <p>Focuses on the production of advanced digital media documents.  During this class, students examine theories underlying such publications, plus related hardware and software.  Topics vary. (With permission from the Director of Graduate Studies, this class may be repeated for up to 12 credits.)</p>

                            <h3>ENGL 6470: Studies in Specialized Documents (3)</h3> 
                            <p>Focuses on the writing and design of specific genres in professional communication.  Genres include environmental impact statements, software documentation, proposals, manuals, annual reports, newsletters, and fact sheets.  Topics vary. (With permission from the Director of Graduate Studies, this class may be repeated for up to 12 credits.)</p>

                            <h3>ENGL 6800: Theory and Practice of Online Education in Writing (3)</h3>
                            <p>Examines principles and their implementation in online writing instruction. Emphasizes writing instruction within English Departments. (With permission from the Director of Graduate Studies, this class may be repeated for up to 6 credits.)</p>

                            <h3>ENGL 6830: Rhetorical Theory (3)</h3>
                            <p>Covers intellectual traditions of rhetoric from classical times to the present. As students study major theories, theoreticians, and controversies in the field, they come to understand rhetoric as the study of relations between discourse, knowledge, and power.</p>

                            <h3>ENGL 6890: Studies in Writing &amp; Rhetoric (3)</h3> 
                            <p>Provides students and faculty with the opportunity for in-depth study of timely topics. (With permission from the Director of Graduate Studies, this class may be repeated for up to 6 credits.)</p>

                        </section>
<!-- TRC faculty wants to delete 1/23
                        <section class="col-xs-12">

                            <h2>Past Course Listings</h2>

                            <p class="lead">Instructors’ names appear in parentheses after each class title. "F2F" indicates 1-week, face-to-face workshops.</p>

                            <section>

                                <h3>Fall 2012</h3>

                                <ul class="list-unstyled">

                                    <li>ENGL 6410: Theory and Research in Professional Communication (Ryan Moeller)</li>
                                    <li>ENGL 6460: The Well-Formed Website (David Hailey)</li>
                                    <li>ENGL 6830: Rhetorical Theory (Keith Grant-Davie)</li>

                                </ul>

                            </section>

                            <section>

                                <h3>Summer 2012</h3>

                                <ul class="list-unstyled">

                                    <li>ENGL 6460: Photography for Writers (Ronald Shook—F2F)</li>
                                    <li>ENGL 6470: Preparing Resumes and Electronic Portfolios (Rebecca Walton—F2F)</li>
                                    <li>ENGL 6470: Proposal and Grant Writing for Science, Business, and Fundraising (John McLaughlin—F2F)</li>
                                    <li>ENGL 6470: Preparing Posters, Brochures, and Newsletters (Ronald Shook—F2F)</li>
                                    <li>ENGL 6470: Proposal Writing (Ryan Moeller)</li>
                                    <li>ENGL 6800: Theory and Practice of Online Education in Writing (Keith Gibson)</li>
                                    <li>ENGL 6890: Theory and Practice of Informative Photography (Ronald Shook)</li>

                                </ul>

                            </section>

                            <section>

                                <h3>Spring 2012</h3>

                                <ul class="list-unstyled">

                                    <li>ENGL 6400: Advanced Editing (Keith Grant-Davie)</li>
                                    <li>ENGL 6450: Reading Theory and Document Design (Ryan Moeller)</li>
                                    <li>ENGL 6460: EBook Publication (David Hailey)</li>

                                </ul>

                            </section>

                            <section>

                                <h3>Fall 2011</h3>

                                <ul class="list-unstyled">

                                    <li>ENGL 6410: Theory and Research in Professional Communication (Keith Grant-Davie)</li>
                                    <li>ENGL 6420: Usability Studies &amp; Human Factors in Professional Communication (David Hailey)</li>
                                    <li>ENGL 6470: Theory and Practice of Writing Reports (Ronald Shook)</li>

                                </ul>

                            </section>

                            <section>

                                <h3>Summer 2011</h3>

                                <ul class="list-unstyled">

                                    <li>ENGL 6460: Writing Manuals and Instructions (Ronald Shook)</li>
                                    <li>ENGL 6800: Theory and Practice of Online Education in Writing (Keith Gibson)</li>
                                    <li>ENGL 6890: Writing for Virtual Teams (Ryan Moeller)</li>
                                    <li>ENGL 6470: Proposal and Grant Writing (John McLaughlin—F2F)</li>
                                    <li>ENGL 6890: Preparing Newsletters and Brochures (Ronald Shook—F2F)</li>
                                    <li>ENGL 6890: Visual Writing (Ronald Shook—F2F)</li>

                                </ul>

                            </section>

                            <section>

                                <h3>Spring 2011</h3>

                                <ul class="list-unstyled">

                                    <li>ENGL 6400: Advanced Editing (Keith Grant-Davie)</li>
                                    <li>ENGL 6460: Complicated and Complex Information Systems (David Hailey)</li>

                                </ul>

                            </section>

                            <section>

                                <h3>Fall 2010</h3>

                                <ul class="list-unstyled">

                                    <li>ENGL 6410: Theory and Research in Professional Communication (Ronald Shook)</li>
                                    <li>ENGL 6460: Complex Information Systems (David Hailey)</li>

                                </ul>

                            </section>

                            <section>

                                <h3>Summer 2010</h3>

                                <ul class="list-unstyled">

                                    <li>ENGL 6470: Using Photographs in Specialized Documents (Ronald Shook)</li>
                                    <li>ENGL 6470: Proposal &amp; Grant Writing (John McLaughlin)</li>
                                    <li>ENGL 6470: Designing Short Informative Documents (Ronald Shook—F2F)</li>
                                    <li>ENGL 6800: Theory &amp; Practice of Online Education in Writing (Keith Gibson)</li>

                                </ul>

                            </section>

                            <section>

                                <h3>Spring 2010</h3>

                                <ul class="list-unstyled">

                                    <li>ENGL 6400: Advanced Editing (Keith Grant-Davie)</li>
                                    <li>ENGL 6450: Reading Theory &amp; Document Design (Ryan Moeller)</li>
                                    <li>ENGL 6460: Training vs. Education (David Hailey)</li>

                                </ul>

                            </section>

                            <section class="list-unstyled">

                                <h3>Fall 2009</h3>

                                <ul class="list-unstyled">

                                    <li>ENGL 6410: Communication Theory &amp; Research (Keith Gibson)</li>
                                    <li>ENGL 6420: Usability Studies (David Hailey)</li>
                                    <li>ENGL 6470: Analyzing Grant Proposals (Ryan Moeller)</li>

                                </ul>

                            </section>

                            <section>

                                <h3>Summer 2009</h3>

                                <ul class="list-unstyled">

                                    <li>ENGL 6470: Environmental Impact Statements (Keith Gibson)</li>
                                    <li>ENGL 6470: Newsletters &amp; Brochures (Ronald Shook—F2F)</li>
                                    <li>ENGL 6470: Proposal Writing (John McLaughlin—F2F)</li>
                                    <li>ENGL 6800: Theory &amp; Practice of Online Teaching (Kelli Cargile Cook)</li>
                                    <li>ENGL 6890: Genre Theory in the 21st Century (David Hailey)</li>

                                </ul>

                            </section>

                            <section>

                                <h3>Spring 2009</h3>

                                <ul class="list-unstyled">

                                    <li>ENGL 6410: Theory &amp; Research in TC (Kelli Cargile Cook)</li>
                                    <li>ENGL 6460: Studies in Digital Media (David Hailey)</li>

                                </ul>

                            </section>

                        </section>
-->

                    </article>

                    <!-- SIDE MENU -->
                    <?php $page1->addSideMenu(masters,courses); ?>

                </div>

            </div>

        </main>

        <!-- FOOTER -->
        <?php $page1->addFooter() ?>

        <!-- JAVASCRIPT -->
        <?php $page1->addJavascript() ?>

    </body>

</html>