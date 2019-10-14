@extends('layouts.app')

@section('content')

    <section id="intro">

        <div class="container">
            <div class="span12 text-center">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Welcome to the nominations of the FIRST QUARTER AWARDS.</strong>
                </div>
            </div>
            <div class="row">
                <div class="span6" >
                    <h3><strong> Introduction</strong></h3>
                    <p class="lead text-justify" style="color:#000000;font-size:20px;">
                        The Kenya School of Government, whose mandate is providing quality Training, Research, Consultancy and Advisory
                        Services to Government has recognized the need to reward
                        <span id="dots">...</span>
                        <span id="more" style="display: none;">
							exemplary service in line with the Public Service Commission guidelines, the guidelines will provide a
                            framework for the implementation of a Performance Recognition guidelines.

						</span>
                        <button class="btn btn-success" onclick="myFunction()" id="myBtn">Read more</button>
                    </p>
                </div>

                <div class="span6">

                    <div id="myCarousel" class="carousel slide">
                        <div class="item active">
                            <img src="{{ asset('img/pic1.jpg') }}" alt=" ">
                            <div class="carousel-caption">
                                <p>Professor Ludeki Chweya,Director General </br>Kenya School of Government</p>
                            </div>
                        </div>
                       <!-- <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item">
                                <img src="{{ asset('img/pic6.png') }}" alt="">

                            </div>
                            <div class="item">
                                <img src="{{ asset('img/pic5.png') }}" alt="">

                            </div>
                            <div class="item active">
                                <img src="{{ asset('img/pic1.jpg') }}" alt="">

                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> -->
                    </div>

{{--                    <div class="group section-wrap upper" id="upper">--}}
{{--                        <div class="section-2 group">--}}
{{--                            <ul id="images">--}}
{{--                                <img src="{{ asset('assets/img/picha.jpg') }}" alt=""--}}
{{--                                     style="width:500px;height:350px;"/>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <!-- /.section-2 -->--}}
{{--                    </div>--}}

                </div>
            </div>
            <div class="row">


                <div class="span6">

                    <div id="myCarousels" class="carousel slide">
                        <div class="item">
                            <img src="{{ asset('img/rationale.JPG') }}" alt="">

                        </div>
                       <!-- <ol class="carousel-indicators">
                            <li data-target="#myCarousels" data-slide-to="0" class=""></li>
                            <li data-target="#myCarousels" data-slide-to="1" class=""></li>
                            <li data-target="#myCarousels" data-slide-to="2" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item">
                                <img src="{{ asset('img/rationale.JPG') }}" alt="">

                            </div>
                            <div class="item">
                                <img src="{{ asset('img/pic1.png') }}" alt="">

                            </div>
                            <div class="item active">
                                <img src="{{ asset('img/pic6.png') }}" alt="">

                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> -->
                    </div>

                    {{--                    <div class="group section-wrap upper" id="upper">--}}
                        {{--                        <div class="section-2 group">--}}
                            {{--                            <ul id="images">--}}
                                {{--                                <img src="{{ asset('assets/img/picha.jpg') }}" alt=""--}}
                                                                         {{--                                     style="width:500px;height:350px;"/>--}}
                                {{--                            </ul>--}}
                            {{--                        </div>--}}
                        {{--                        <!-- /.section-2 -->--}}
                        {{--                    </div>--}}

                </div>
                <div class="span6" >
                    <h3><strong> Rationale for the Award</strong></h3>
                    <p class="lead text-justify" style="color:#000000;font-size:20px;">
                        This award seeks to entrench recognition for outstanding performance, a culture that will assist employees
                        appreciate the concept to go beyond the call of duty to achieve extraordinary results.
                        The School has introduced six criteria for consideration for award.
                        <span id="dotsx">...</span>
                        <span id="morex" style="display: none;">
							The award will recognize high performance and improve employee morale and principles of celebration and
                            gratitude through the various awards and recognition programme.

						</span>
                        <button class="btn btn-success" onclick="myFunctionx()" id="myBton">Read more</button>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="span6" >
                    <h3><strong> Scope</strong></h3>
                    <p class="lead text-justify" style="color:#000000;font-size:20px;">
                        The awards will include all members of staff at the school both permanent with pension and staff on
                        contract however limited to staff in KSG 4-14.


                    </p>
                </div>

                <div class="span6">

                    <div id="myCarousel" class="carousel slide">
                        <div class="item">
                            <img src="{{ asset('img/Scope.JPG') }}" alt="">
                            <div class="carousel-caption">
                                <p>The Kenya School of Government Staff with his H.E Uhuru Kenyatta.</p>
                            </div>
                        </div>
                       <!-- <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item">
                                <img src="{{ asset('img/pic1.jpg') }}" alt="">

                            </div>
                            <div class="item">
                                <img src="{{ asset('img/pic5.png') }}" alt="">

                            </div>
                            <div class="item active">
                                <img src="{{ asset('img/pic6.png') }}" alt="">

                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> -->
                    </div>

                    {{--                    <div class="group section-wrap upper" id="upper">--}}
                        {{--                        <div class="section-2 group">--}}
                            {{--                            <ul id="images">--}}
                                {{--                                <img src="{{ asset('assets/img/picha.jpg') }}" alt=""--}}
                                                                         {{--                                     style="width:500px;height:350px;"/>--}}
                                {{--                            </ul>--}}
                            {{--                        </div>--}}
                        {{--                        <!-- /.section-2 -->--}}
                        {{--                    </div>--}}

                </div>
            </div>
        </div>

    </section>
    <h4 class="text-center"><strong>AWARD CRITERIA</strong></h4>
    <section id="maincontent">
        <p class="text-center" style="color:#000000">
            <strong><h4 class="text-center">The Criteria is comprised of the following six Thematic Areas</h4></strong>
        </p>
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="well">
                        <div class="centered e_bounce">
                            <i class="icon-bg-light icon-circled icon-user icon-3x active"></i>
                            <h6 style="color:#473b00"><strong>Outstanding Customer Service</strong></h6>
                            <p style="color:#000000">
                                <strong>Demonstrated and sustained outstanding performance that consistently exceeds
                                    goals and job
                                    expectations in quantity and quality, resulting in significant achievement or
                                    significant
                                    impact at KSG. Job performance is also looked at.</strong>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="well">
                        <div class="centered e_bounce">
                            <i class="icon-bg-light icon-circled icon-rocket icon-3x active"></i>
                            <h6 style="color:#473b00"><strong>Creativity and Innovation</strong></h6>
                            <p style="color:#000000">
                                <strong>One-time innovation or creation resulting in a significant impact on process,
                                    work flow, or department and/or unit function. This may be either reflected in
                                    efficiency
                                    gains, increased work product or morale improvements in the Campus.</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="well">
                        <div class="centered e_bounce">
                            <i class="icon-bg-light icon-circled icon-group icon-3x active"></i>
                            <h6 style="color:#473b00"><strong>Teamwork</strong></h6>
                            <p style="color:#000000">
                                <strong>Acting as an exceptionally effective and cooperative member of a team dedicated
                                    to making positive change.
                                    Demonstrating superior interactions and a positive influence on managers, peers,
                                    supervisors, subordinates and the KSG community.</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="well">
                        <div class="centered e_bounce">
                            <i class="icon-bg-light icon-circled icon-comment icon-3x active"></i>
                            <h6 style="color:#473b00"><strong>Leadership Abilities </strong></h6>
                            <p style="color:#000000">
                                <strong>Demonstrated extraordinary leadership resulting in the accomplishment of
                                    significant
                                    goals or objectives that serve the good of Kenya School of Government.</strong
                            </p>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="well">
                        <div class="centered e_bounce">
                            <i class="icon-bg-light icon-circled icon-heart icon-3x active"></i>
                            <h6 style="color:#473b00"><strong>Empathy and Support for others</strong></h6>
                            <p style="color:#000000">
                                <strong>Creates time to support colleagues to deliver results through hand holding,
                                    mentoring,
                                    coaching.
                                    Possesses the quality of supporting colleagues during difficult times.</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="well">
                        <div class="centered e_bounce">
                            <i class="icon-bg-light icon-circled icon-bullseye icon-3x active"></i>
                            <h6 style="color:#473b00"><strong>Community Involvement</strong></h6>
                            <p style="color:#000000">
                                <strong>Honor a KSG staff member who exemplifies community service in a capacity outside
                                    of their
                                    usual work assignment.
                                    Personal investment and contributions made in local communities, as well as
                                    providing
                                    inspiration as a role model to encourage others to also engage in community
                                    service.</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="span12">
                    <div class="solid_line">
                    </div>
                </div>
            </div>

            <!-- blank divider -->
            <div class="row">
                <div class="span12">
                    <div class="blank10"></div>
                </div>
            </div>

            <div class="row">
                <div class="span12">
                    <div class="cta-box">
                        <div class="cta-text">
                            <h3 class="text-center">You will follow the following steps to do your nominations:</h3>
                        </div>
                    </div>
                    <class
                    ="fa class="sidebar-social">

                    <li>
                        <a href="{{ route('register') }}" <i class="fa fa-user-plus"></i>
                        <span>1. Register to participate in the nominations</span></a></li>

                    <li>
                        <a><i class="fa fa-user"></i><span>2. Nominate an individual</span></a>
                    </li>

                    <li>
                        <a><i class="fa fa-users"></i><span>3. Nominate a team</span></a>
                    </li>

                    <li>
                        <a><i class="fa fa-send"></i><span>4. Submit your nominations</span></a>
                    </li>

                    <!-- <li>
                      <a><i class="fa fa-check"></i><span>5. Vote for chosen nominees after portal is open</span></a>
                    </li> -->
                </div>
                <!-- end tagline -->
            </div>
        </div>
        <!--Footer
       ================================================== -->
        <div class="container">
            <footer class="footer text-center">
                <div class="row">
                    <div class="span12">
                        <div class="widget">
                            <div class="footerlogo">
                                <address style="color:white">
                                    <strong>Kenya School of Government</strong><br>
                                    P.O BOX 23030-00604,<br>
                                    Lower Kabete, Nairobi-Kenya<br>
                                    <abbr title="Phone">P:</abbr> +254-20-4015000,
                                    0727496698
                                </address>
                                <p style="color:white">
                                    Email:directorgeneral@ksg.ac.ke <br>
                                    info@ksg.ac.ke <br> <br>

                                    Twitter: @KSGKenya <br>
                                    Facebook: Kenya School of Government<br>
                                    Website: www.ksg.ac.ke </p>
                            </div>

                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="footer-copyright text-center py-8">© 2019, Kenya School of Government</div>
    </section>
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
        </script>

        <script>
        function myFunctionx() {
            var dots = document.getElementById("dotsx");
            var moreText = document.getElementById("morex");
            var btnTexts = document.getElementById("myBton");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnTexts.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnTexts.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>

@endsection