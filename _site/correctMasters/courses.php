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
                            
                            <h3>Section A: Core Requirements</h3>

                            <h4>ENGL 6400: Advanced Editing (3)</h4>
                            <p>Examines complex roles editors assume in creating technical and non-technical documents.  Principal components include working with the substance of documents, mediating the writer-reader relationship, and exemplifying the application of rhetorical theory in editing. Not repeatable for credit.</p>

                            <h4>ENGL 6410: Theory &amp; Research in Professional Communication (3)</h4> 
                            <p>Introduces contemporary theories of written discourse; emphasizes the implications of these theories for research in professional communication. Not repeatable for credit.</p>
                            
                             <h4>ENGL 6830: Rhetorical Theory (3)</h4>
                            <p>Covers intellectual traditions of rhetoric from classical times to the present. As students study major theories, theoreticians, and controversies in the field, they come to understand rhetoric as the study of relations between discourse, knowledge, and power. This class is repeatable for credit once, if taught by a different instructor.</p>
                            <br>
                            
                            <h3>Section B: Issues in Professional Communication</h3>

                            <p><strong>Courses offered regularly:</strong></p>
                            
                            <h4>ENGL 6440: Studies in Culture and Professional Communication (3)</h4>
                            <p>Covers topics in rhetorical, critical, and cultural theory, emphasizing their application to contemporary practices in professional communication. This class is repeatable for credit once, if taught by a different instructor.</p>
                            
                            <h4>ENGL 6460: Studies in Digital Media (3)</h4> 
                            <p>Focuses on the production of advanced digital media documents.  During this class, students examine theories underlying such publications, plus related hardware and software. Topics vary. This class is repeatable for up to 12 credits.</p>
                            
                            <h4>Studies in Technology and Writing (3)</h4>
                            <p>Study of theoretical aspects of technologies affecting writing in social contexts. Topics vary.</p>
                            
                            <h4>ENGL 6800: Theory and Practice of Online Education in Writing (3)</h4>
                            <p>Examines principles and their implementation in online writing instruction. Emphasizes writing instruction within English Departments. Not repeatable for credit.</p>
                            
                            <h4>ENGL 6860: Teaching Technical Writing (3)</h4>
                            <p>Prepares students to teach technical writing courses at the undergraduate level. Students learn about the history and scope of the field of technical communication and develop pedagogical materials for academia or industry. Not repeatable for credit.</p>
                            
                            <h4>ENGL 7000: Advanced Research Methods in Professional Communication (3)</h4>
                            <p>Survey of major research methods (qualitative and quantitative) for conducting professional communication research in academic and nonacademic settings. Coursework will culminate in a formal resarch proposal to conduct a discipline-appropriate study in the workplace. Not repeatable for credit.</p>
                            
                            <br>
                            
                            <p><strong>Courses offered occasionally:</strong></p>                       
                            
                            
                            
                            <h4>ENGL 6420: Usability Studies and Human Factors in Professional Communication (Usability Studies) (3)</h4>
                            <p>Examines the concepts and practices of usability studies and human factors in the design and production of print and online documents.  Emphasis is placed on developing objectives, criteria, and measures for conducting tests in the lab and field. Not repeatable for credit.</p>

                            <h4>ENGL 6430: Publications Management (3)</h4>
                            <p>Covers processes for developing and producing publications, including information development cycles, supervision, and budgets. Not repeatable for credit.</p>

                            <h4>ENGL 6450: Reading Theory and Document Design (3)</h4> 
                            <p>Examines how reading theory interacts with the rhetoric of graphics, layout, and type to influence the way documents are designed for maximum information and readability. Not repeatable for credit.</p>
                            

                            <h4>ENGL 6470: Studies in Specialized Documents (3)</h4> 
                            <p>Focuses on the writing and design of specific genres in professional communication.  Genres include environmental impact statements, software documentation, proposals, manuals, annual reports, newsletters, and fact sheets. Topics vary. This class is repeatable for up to 12 credits. </p>                           

                            <h4>ENGL 6890: Studies in Writing and Rhetoric (3)</h4> 
                            <p>Provides students and faculty with the opportunity for in-depth study of timely topics. This class is repeatable for credit once, if taught by a different instructor.</p>

                        </section>


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