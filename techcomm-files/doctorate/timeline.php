<?php require '../php/Page.php'; ?>

<!DOCTYPE html>
<html lang="en">

    <!-- HEAD -->
    <?php $page1->addHead(); ?>

    <body>

        <!-- HEADER -->
        <?php $page1->addHeader(doctorate,timeline); ?>

        <main>

            <div class="container">

                <div class="row">

                    <article class="col-xs-12 col-sm-9">

                    <div class="col-xs-12">

                        <div class="page-header">
                            <h1><small><?= $doctorate["title"] ?></small><br><?= $doctorate["timeline"]["title"] ?></h1>
                        </div>

                    </div>

                        <section class="col-xs-12">

                            <p class="lead">As a student here, you will typically be able to complete your doctorate in four years if you follow the schedule below.</p>
                            
                            <h2>First Year</h2>

                            <section>

                                <h3>First fall semester</h3>

                                <p>You should immediately meet with the Department's Director of Graduate Studies and your assigned <a href="<?= $doctorate["requirements"]["url"] . "#supervisorycommittee" ?>">Supervisory Committee</a> to plan coursework for the first academic year.</p>

                                <p>NOTE: Plan to take 18 credits your first year by either taking 9-credit hours each in the fall and spring, or by taking a lesser combination in fall and spring plus additional credits over the summer to make up the difference.</p>

                            </section>

                            <section>

                                <h3>First Spring Semester</h3>

                                <p>In April of your first year, complete the <a href="<?= $doctorate["requirements"]["url"] . "#annualreviewprogressreportform" ?>">first-year annual review/progress report</a>, your CV, your biographical statement, and your <a href="<?= $doctorate["requirements"]["url"] . "#programofstudyworksheet" ?>">Program of Study worksheet</a>.  Submit these materials to your preliminary supervisory committee chair for the TCR committee to review. This review constitutes your <a href="<?= $doctorate["requirements"]["url"] . "#qualifyingexamination" ?>">Qualifying Examination</a>.</p>

                            </section>

                         
                            
                        </section>
                        
                        <section class="col-xs-12">
                            
                            <h2>Second Year</h2>

                            <section>

                                <h3>Second Fall Semester</h3>

                                <p>During the semester, complete an updated copy of your <a href="<?= $doctorate["requirements"]["url"] . "#programofstudyworksheet" ?>">Program of Study worksheet</a> and submit it to your <a href="<?= $doctorate["requirements"]["url"] . "#supervisorycommittee" ?>">Supervisory Committee</a> Chair for approval. This is preliminary to the next step, which is completing your <a href="<?= $doctorate["requirements"]["url"] . "#programofstudyform" ?>">Program of Study Form</a> with the School of Graduate Studies listing all the courses that will count towards your degree. Your Supervisory Committee should sign the form. Once you have taken ENGL 7000, you should be thinking about your internship, which you should begin your second summer semester.</p>

                            </section>

                            <section>

                                <h3>Second spring semester</h3>

                                <p>You must submit a second-year <a href="<?= $doctorate["requirements"]["url"] . "#annualreviewprogressreportform" ?>">annual review/progress report</a> by April 1 to your <a href="<?= $doctorate["requirements"]["url"] . "#supervisorycommittee" ?>">Supervisory Committee</a> or to the entire Technical Communication and Rhetoric (TCR) committee if required.</p>

                                <p>Submit a proposed reading list to your <a href="<?= $doctorate["requirements"]["url"] . "#supervisorycommittee" ?>">Supervisory Committee</a> Chair. Work with your Supervisory Committee to secure written approval of the list before the end of the semester the coursework is completed.</p>

                                <p>At the end of this semester, you should be prepared to begin your research internship.</p>

                                <p>NOTE: Following this schedule, students should have completed 36 ENGL 7000-level credits. At this point, their assigned <a href="<?= $doctorate["requirements"]["url"] . "#supervisorycommittee" ?>">Supervisory Committee</a>s will be dissolved and they must form a Dissertation Supervisory Committee made up of three faculty members from the TCR faculty (one serving as the “Major Professor”), a member of the English Department outside the TCR faculty, and a member outside of the English Department.</p>

                            </section>

                            <section>

                                <h3>Second summer semester</h3>

                                <p><a href="<?= $doctorate["requirements"]["url"] . "#researchinternship" ?>">Research internship</a> (6 credits).</p>

                            </section>
                            
                        </section>
                        
                        <section class="col-xs-12">
                            
                            <h2>Third Year</h2>

                            <section>

                                <h3>Third fall semester</h3>

                                <p>Use this semester to prepare for your <a href="<?= $doctorate["requirements"]["url"] . "#comprehensiveexam" ?>">Comprehensive Examination</a>. Your coursework and reading list will be your foundation for taking the exam, but your research idea for your dissertation should be your guiding principle.</p>

                                <p>NOTE: Students must complete their <a href="<?= $doctorate["requirements"]["url"] . "#comprehensiveexam" ?>">Comprehensive Examination</a> by the end of the semester (not including summer) immediately following the semester in which coursework is completed and reading list is approved. Failure to complete the Comprehensive Examination within this timeframe could be grounds for probation.</p>

                            </section>
                            
                        </section>
                        
                        <section class="col-xs-12">
                            
                            <h2>Fourth Year</h2>

                            <section>

                                <h3>Fourth Fall and Spring semesters</h3>

                                <p>Submit a <a href="<?= $doctorate["requirements"]["url"] . "#annualreviewprogressreportform" ?>">fourth-year annual review/progress report</a> by April 1 to your <a href="<?= $doctorate["requirements"]["url"] . "#supervisorycommittee" ?>">Supervisory Committee</a> or to the TCR committee if required. Use this time to research and write your <a href="<?= $doctorate["requirements"]["url"] . "#dissertation" ?>">dissertation</a>. You should be able to defend it in the spring. If you defend it early enough, or if it is clear it will be approved by your committee, you may walk (go through the graduation ceremony) in May of your fourth year.</p>

                                <p>NOTE: The date and time for the oral defense of the dissertation must be scheduled with the School of Graduate Studies at least 10 working days before the defense.</p>

                            </section>

                        </section>

                    </article>

                    <!-- SIDE MENU -->
                    <?php $page1->addSideMenu(doctorate,timeline) ?>

                </div>

            </div>

        </main>

        <!-- FOOTER -->
        <?php $page1->addFooter() ?>

        <!-- JAVASCRIPT -->
        <?php $page1->addJavascript() ?>

    </body>
</html>