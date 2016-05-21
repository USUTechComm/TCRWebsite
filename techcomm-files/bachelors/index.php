<?php require '../php/Page.php'; ?>

<!DOCTYPE html>
<html lang="en">

    <!-- HEAD -->
    <?php $page1->addHead(); ?>

    <body>

        <!-- HEADER -->
        <?php $page1->addHeader(bachelors,about); ?>

        <main class="bg-gray-lighter">

            <div class="container">

                <div class="row">

                    <article class="col-xs-12 col-sm-9 bg-white">

                        <section class="col-xs-12">

                            <div class="page-header">
                                <h1><small><?= $bachelors["title"] ?></small><br><?= $bachelors["about"]["title"] ?></h1>
                            </div>

                            <h2>Emphasis in Professional and Technical Writing</h2>

                            <p>Earning an English degree with the Professional and Technical Writing emphasis will prepare you to enter the broad and exciting field of technical communication. In the emphasis, you will quickly learn new technologies in terms of both conceptual knowledge and hands-on skills. By the time you earn your degree, you will be able to demonstrate a range of skills and abilities, such as:</p>
                            

                            <ul>
                                
                                <li>Web design</li>
                                <li>Screencasting</li>
                                <li>Game design and analysis</li>
                                <li>Effective and ethical communication</li>
                                <li>Rhetorical theory for professional communication</li>
                                <li>Social media management for professional organizations</li>
                                <li>Usability testing for products and documents</li>
                                <li>Grant and proposal writing</li>
                                <li>Document design for digital and print documents</li>
                                <li>Editing for technical and professional documentation</li>
                                
                            </ul>
                            
                            <h2>Practical Application</h2>

                            <p>These skills are applicable to a wide range of contexts, such as humanitarian and nonprofit organizations, research labs, technology companies, publishing houses, and others. Perhaps this widespread need is why jobs in technical writing are growing faster than average (15% growth), and the median annual salary for technical writers in 2012 was $65,500  (source: <a href="http://www.bls.gov/ooh/media-and-communication/technical-writers.htm">U.S. Bureau of Labor Statistics</a>).</p>

                            <p>To improve your competitiveness for the best jobs, you should earn a minor in a relevant subject area such as computer science, biology, business, or instructional technology, among others.</p>

                        </section>

                        <section class="col-xs-12">

                            <h2>Academic Advising</h2>
                            
                            <h3>Susie Parkinson <small>Academic Advisor</small></h3>
                            <p>For help with planning your course of study and meeting the program requirements</p>
                            <p>
                                Phone: (435) 797-3883 <br>
                                Email: susie.parkinson@usu.edu <br>
                                Office: Taggart Student Center 302 </p>
                            
                            <h3>Shanan Ballam <small>Internship Advisor</small></h3>
                            <p>For help with finding an internship and receiving internship credit</p>
                            <p>
                                Phone: (435) 797-3697<br>
                                Email: shanan.ballam@usu.edu <br>
                                Office: Ray B West 410</p>
                            
                            <h3>Krystn Clark <small>Career Coach</small></h3>
                            <p>For career coaching or help with preparing for graduate school</p>
                            <p>
                                Phone: (435) 797-1748 <br>
                                Email: krystn.clark@usu.edu<br>
                                Office: University Inn 102<br>
                            </p>

                        </section>

                    </article>

                    <!-- SIDE MENU -->
                    <?php $page1->addSideMenu(bachelors,about) ?>

                </div>

            </div>

        </main>

        <!-- FOOTER -->
        <?php $page1->addFooter() ?>

        <!-- JAVASCRIPT -->
        <?php $page1->addJavascript() ?>

    </body>
</html>