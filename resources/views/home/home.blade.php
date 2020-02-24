@extends('layout.layout')

@section('layout')
    <section id="app_section">
        <div class="container">
            <div class="columns is-multiline is-clearfix">
                <div class="column is-two-thirds is-pulled-right">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image">
                                <img src="/images/benny_desk_ps.jpg" alt="Lego Benny Sitting at Desk in front of A-Wing">
                            </figure>
                        </div>
                        <div class="card-content">
                            <p>
                                Hello, thanks for stopping by.  I am Andrew Bielecki, a software
                                engineer living just north of Boston, MA.  I am still relatively
                                new to the field (about 4 years now) as I spent over a decade after
                                university working as a bench scientist in the biopharmaceutical industry.
                                I will be finishing up my Master's degree in Information Management
                                Systems from Harvard Extension School in the Spring of 2020.
                            </p>
                            <br>
                            <p>
                                My primary focus has been working with PHP on the backend side of things,
                                but I have experience in frontend systems as well.  I've worked with
                                Laravel, Yii, Symfony, and a number of homegrown systems in PHP for both web
                                backends and general ETL scripting. Most of my frontend work has been with traditional
                                HTML / CSS, incorporating CSS frameworks such as Bootstrap, but I've also had some opportunity to
                                get familiar with modern JS frameworks, having worked with both VueJS and Angular. And of
                                course I've had the need / opportunity to work in other languages such as Python and Java
                                when it fit our projects or was needed for the task at hand.
                            </p>
                            <br>
                            <p>
                                I began working in the software industry at <a href="https://www.business.com/" target="_blank">Business.com</a>, starting with
                                a homegrown PHP framework and later with Symfony and Yii.  From there I moved to
                                <a href="https://mobilefuse.com/" target="_blank">Mobilefuse</a>, an adtech company,
                                primarily working with an in house dashboard written in Laravel,
                                and a second project, also in Laravel, that focused more on ETL / cron scripts.  After
                                Mobilrfuse I joined the team at <a href="https://www.healthcaresource.com/" target="_blank">Healthcaresource</a>,
                                where I work on their assessments products which are written in both a homegrown PHP framework and Yii.
                            </p>
                            <br>
                            <p>
                                In my spare time I enjoy biking, scuba diving, and coaching baseball for
                                my son's Little League team.  Like everyone I have more half finished
                                hobby projects than I know what to do with, along with a github account filled
                                with sites which are no longer deployed and a bunch of embarrassing code from
                                when I first got started.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="column is-one-third is-pulled-left">
                    <div class="columns is-multiline">
                        <div class="column is-full">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="image is-96x96">
                                                <a href="https://divelog.andrewbielecki.com" target="_blank"><img src="/images/divelogrepeat_ps.jpg" alt="Dive Boat link to DiveLogRepeat"></a>
                                            </figure>
                                        </div>

                                        <div class="media-content">
                                            <p>
                                                You can find one of those half finished hobby projects here,
                                                <a href="https://divelog.andrewbielecki.com" target="_blank">DiveLogRepeat</a>.
                                                It is supposed to become a online divelog, but I've only finished off
                                                the dive calculator section, which lets you get some important stats off the
                                                PADI dive tables.
                                            </p>
                                            <br>
                                            <p>
                                                It is written in Laravel with some Vue sprinkled in, running on a typical
                                                LAMP stack on a small Digital Ocean droplet. You can find the github
                                                repo here: <a href="https://github.com/ambielecki/divelog_2019" target="_blank">Github Repo</a>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="column is-full">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="image is-48x48">
                                                <img class="is-rounded" src="/images/avatar.jpg" alt="Lego Benny Avatar">
                                            </figure>
                                        </div>

                                        <div class="media-content">
                                            <p><a href="https://github.com/ambielecki"><i class="fab fa-github"></i> Find me on Github</a></p>
                                            <p><a href="https://www.linkedin.com/in/andrew-bielecki-5835b5123/"><i class="fab fa-linkedin"></i> Connect on LinkedIn</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
