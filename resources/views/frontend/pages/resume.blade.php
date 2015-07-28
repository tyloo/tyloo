@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => 'My Resume', 'pageNameBreadcrumb' => 'Resume'])

    <section>
        <div class="container">
            <div class="heading no-margin-bottom pt15">
                <h2>Work Experience</h2>
            </div>
            <ul class="timeline no-margin">
                <li>
                    <div class="timeline-panel">
                        <div class="heading">
                            <h4>Google Deployment Specialist @ <strong>NRX</strong></h4>
                            <small class="heading-caption hidden-xs"><i class="fa fa-calendar"></i> October 2012 - Today</small>
                        </div>
                        <div class="timeline-body">
                            <ul class="list-arrow-color no-margin">
                                <li>Developed Web Applications on Laravel, Symfony 2 and Zend Framework 3.</li>
                                <li>Developed Core Java Applications.</li>
                                <li>Passed the following Google certifications :
                                    <ul class="list-arrow-color no-margin">
                                        <li>Google Deployment Specialist (Google Search Appliance)</li>
                                        <li>Google Apps 100</li>
                                        <li>Google Cloud Platform 300</li>
                                    </ul>
                                </li>
                                <li>Deployed Google Search Appliance projects for some customers.</li>
                                <li>Search & Development based on solutions related to Google for Work.</li>
                                <li>Created a dynamic library on PHP to administrate and monitor a GSA.</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-panel">
                        <div class="heading">
                            <h4>Developer Web & Mobile @ <strong>Lemonway</strong></h4>
                            <small class="heading-caption hidden-xs"><i class="fa fa-calendar"></i> September 2011 - September 2012</small>
                        </div>
                        <div class="timeline-body">
                            <ul class="list-arrow-color no-margin">
                                <li>Developed the company's Website.</li>
                                <li>Developed the company's Mobile App.</li>
                                <li>Developed iPhone and Android applications for some customers.</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-panel">
                        <div class="heading">
                            <h4>Sys Admin @ <strong>Autoscout24</strong></h4>
                            <small class="heading-caption hidden-xs"><i class="fa fa-calendar"></i> January 2010 - August 2011</small>
                        </div>
                        <div class="timeline-body">
                            <ul class="list-arrow-color no-margin">
                                <li>Management of Software Interface for some customers.</li>
                                <li>Handling of the Computers Listing.</li>
                                <li>Helpdesk customers.</li>
                                <li>Developed softwares in PHP to automatize some tasks.</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-panel">
                        <div class="heading">
                            <h4>Web Developer @ <strong>Call Assurances</strong></h4>
                            <small class="heading-caption hidden-xs"><i class="fa fa-calendar"></i> September 2008 - December 2009</small>
                        </div>
                        <div class="timeline-body">
                            <p>Developed and remade the entire Websites of the Company.</p>
                            <p>Created some tools and technicals for SEO and SEM</p>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="heading no-margin-bottom pt15">
                <h2>Education</h2>
            </div>
            <ul class="timeline no-margin">
                <li>
                    <div class="timeline-panel">
                        <div class="heading no-margin">
                            <h4>Master Web & e-Business @ <strong>ESGI</strong></h4>
                            <small class="heading-caption hidden-xs"><i class="fa fa-calendar"></i> 2012 - 2014</small>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-panel">
                        <div class="heading no-margin">
                            <h4>Bachelor Web & Mobile @ <strong>ECTEI</strong></h4>
                            <small class="heading-caption hidden-xs"><i class="fa fa-calendar"></i> 2011 - 2012</small>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-panel">
                        <div class="heading no-margin">
                            <h4>BTS Sys Admin @ <strong>ISEFAC Paris</strong></h4>
                            <small class="heading-caption hidden-xs"><i class="fa fa-calendar"></i> 2008 - August 2010</small>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="heading pt15">
                <h2>Technical Skills</h2>
            </div>
            <div>
                <p class="progress-head">PHP</p>
                <div class="progress" data-sr="enter right move 100px over 1s">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        <span class="progress-bar-tooltip" style="opacity: 1;">Expert</span>
                    </div>
                </div>
                <p class="progress-head">Laravel</p>
                <div class="progress" data-sr="enter left move 100px over 1s">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        <span class="progress-bar-tooltip" style="opacity: 1;">Expert</span>
                    </div>
                </div>
                <p class="progress-head">Symfony 2</p>
                <div class="progress" data-sr="enter left move 100px over 1s">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                        <span class="progress-bar-tooltip" style="opacity: 1;">Working on it</span>
                    </div>
                </div>
                <p class="progress-head">GSA</p>
                <div class="progress" data-sr="enter left move 100px over 1s">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        <span class="progress-bar-tooltip" style="opacity: 1;">Expert</span>
                    </div>
                </div>
                <p class="progress-head">Mobile (iOS &amp; Android)</p>
                <div class="progress" data-sr="enter right move 100px over 1s">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <span class="progress-bar-tooltip" style="opacity: 1;">Made some cool things!</span>
                    </div>
                </div>
                <p class="progress-head">HTML &amp; CSS (Bootstrap and other tools)</p>
                <div class="progress" data-sr="enter left move 100px over 1s">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        <span class="progress-bar-tooltip" style="opacity: 1;">Expert</span>
                    </div>
                </div>
                <p class="progress-head">Versioning (Git) and Agile</p>
                <div class="progress" data-sr="enter left move 100px over 1s">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="progress-bar-tooltip" style="opacity: 1;">We're getting good here...</span>
                    </div>
                </div>
                <p class="progress-head">Design</p>
                <div class="progress" data-sr="enter left move 100px over 1s">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                        <span class="progress-bar-tooltip" style="opacity: 1;">Rainbows and Unicorns!</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
