<?php require '../php/Page.php'; ?>

<!DOCTYPE html>
<html lang="en">

    <!-- HEAD -->
    <?php $page1->addHead(); ?>

    <body>

        <!-- HEADER -->
        <?php $page1->addHeader(masters,faq); ?>

        <main>

            <div class="container">

                <div class="row">

                    <article class="col-xs-12 col-sm-9">

                        <div class="col-xs-12">

                            <div class="page-header">
                                <h1><small><?= $masters["title"] ?></small><br><?= $masters["faq"]["title"] ?></h1>
                            </div>

                        </div>

                        <section class="col-xs-12">

                            <h2>Who operates the program?</h2>

                            <p>The master’s program at Utah State University (USU) is taught and administered by the English Department, while enrollment and fees are handled by USU's office of Distance Education. USU is designated as a Carnegie Research University (High Research Activity). The university is fully accredited by the Northwest Association of Schools and Colleges. To learn more about USU, please visit the <a href="http://www.usu.edu">website</a>.</p>

                        </section>

                        <section class="col-xs-12">

                            <h2>How do online graduate seminars function?</h2>

                            <p>The program is offered entirely online, which means that students can complete all requirements for the Master of Technical Communication degree without traveling to the campus in Logan. As in a traditional, face-to-face seminar, students read assigned materials, create documents, and discuss what they are reading and writing with each other and with the instructor. However, in our online seminars they do all this without necessarily meeting each other in person. Members of the class interact through the Internet, using a simple interface program called Canvas.</p>

                            <p>Canvas allows both synchronous ("chat room") and asynchronous ("threaded") discussion. Synchronous discussion occurs in real time. Students who are logged on at the same time use this feature to read and respond to each other's messages without a time lag. Most class discussion, however, is conducted asynchronously to accommodate students who live in different time zones and have different work schedules. In an asynchronous discussion, students do not need to be logged on at the same time to exchange messages. They may post messages to the class at any time of the day or night, at any location in the world where there is access to the Internet. Students can read and respond to each other's postings whenever it suits them.</p>

                            <p>Although class members may not all be logged on at the same time, class is always accessible. And while students may not have the benefit of seeing other seminar members and hearing their voices, the online medium offers other benefits. For example, several discussion topics may be pursued concurrently, whereas in a face-to-face seminar only one topic at a time may be addressed and usually only one person at a time may speak. Furthermore, the Canvas interface records all postings, so students can review earlier discussions in the class and add to them at any time during the class. Instructors set guidelines for the nature and amount of discussion they expect in their classes.</p>

                            <p>Messages may be posted to the class website at any time of the day or night. Students can expect responses within a reasonable amount of time, but it may take several days if the instructor is attending to his or her other work commitments.</p>

                        </section>

                        <section class="col-xs-12">

                            <h2>Who teaches the online graduate classes?</h2>

                            <p>The English Department has a number of faculty members who are trained and experienced as professional communicators, and who actively research in their fields of expertise. Students may review their credentials on our <a href="<?= $urlPeopleFaculty ?>">faculty page</a>. Some classes may be taught by subject matter experts not on the permanent faculty at USU.</p>

                        </section>

                        <section class="col-xs-12">

                            <h2>What kinds of students enter the program?</h2>

                            <p>The program is designed to appeal to a broad range of students:</p>

<ul><li><strong>Working professional communicators.</strong> The program aims to help practicing professional writers—
people who do communication-intensive work in a variety of organizations, both for-profit and non-profit. Students advance their careers by learning practical skills and the theories that can support or challenge workplace practices.</li>

<li><strong>Students considering an academic career.</strong> The program introduces students to technical 
communication and rhetoric as an academic field, and graduates may go on to complete PhDs in the field or teach at two-year colleges.</li>

<li><strong>Secondary-level teachers.</strong> High school English teachers who complete the degree will be able to add 
technical communication classes to their teaching repertoire, incorporate principles of technical communication into their existing classes, or make the switch to teaching at two-year colleges.</li></ul> 

                        </section>

                        <section class="col-xs-12">

                            <h2>What are the prerequisites to success in the program?</h2>

                            <p>To thrive in our online master's program, you need sufficient motivation to participate in ongoing online discussion, and you need to be technologically self-reliant. Our program assumes you are already familiar with HTML, FTP, and other Internet-based technologies, or that you are willing and able to learn the software on your own, without help from the instructor. We recommend you subscribe to a service such as Lynda.com if you need software training.</p>

                        </section>

                        <section class="col-xs-12">

                            <h2>How long will it take me to graduate?</h2>

                            <p>The program requires 33 credits. To meet this requirement, students take 11 3-credit seminars. We currently offer two seminars per semester during the regular school year (fall and spring semesters).</p>

                            <p>We have designed the curriculum so that a student taking only online classes during the regular school year can graduate within three years. Those who take only one class per semester will take longer. The School of Graduate Studies requires students to complete their degrees in no more than six years. Extensions of this deadline are sometimes allowed, but classes expire after EIGHT years and will no longer count toward the degree.</p>

                            <p>From the date when you matriculate until you graduate, you must be registered for at least 3 credits every semester except summer. This is called the "continuous enrollment" requirement. If you need to take a break from the program, you may retain your matriculated status by paying a $100.00 continuous registration fee for each fall and spring semester in which you are not registered for at least 3 graduate credits. This option requires a memo from the DGS to the School of Graduate Studies testifying that you are not using any university facilities or faculty time during the semester. Contact the DGS at the start of the semester in question.</p>

                        </section>

                        <section class="col-xs-12">

                            <h2>What will the master’s degree cost?</h2>

                            <p>The current cost per credit for the 33-credit degree is shown <a href="https://online.usu.edu/degrees/techcom-MTC">here</a>. In addition, a $50-per-class technology fee is charged. Aside from that fee, student fees are not charged for online classes, nor is there a surcharge for non-resident (out-of-state) students. Each class may also require students to purchase textbooks. Some classes may require students to buy software. Some software, such as FTP programs, can be downloaded from the Internet without cost. </p>

                        </section>

                        <section class="col-xs-12">

                            <h2>Does the program offer any financial aid? </h2>
                            <p>At this time, we have no scholarships to offer online students. For more information on financial aid, visit the <a href="http://www.usu.edu/gradsch">School of Graduate Studies website</a>.</p>

                        </section>

                        <section class="col-xs-12">

                            <h2>What degree will I receive?</h2>

                            <p>When you complete the degree, you will receive a Master of Technical Communication.</p>

                        </section>

                    </article>

                    <!-- SIDE MENU -->
                    <?php $page1->addSideMenu(masters,faq); ?>

                </div>

            </div>

        </main>

        <!-- FOOTER -->
        <?php $page1->addFooter() ?>

        <!-- JAVASCRIPT -->
        <?php $page1->addJavascript() ?>

    </body>

</html>