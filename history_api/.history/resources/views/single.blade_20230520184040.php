@extends('master.master')
    <!-- Topbar Start -->
 @section('content')
<div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="far fa-clock"></i>
                                <h2>8:00 - 9:00</h2>
                                <p>Mon - Fri</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <h2>+123 456 7890</h2>
                                <p>For Appointment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index\" class="navbar-brand">Confer</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index\" class="nav-item nav-link">Home</a>
                        <a href="about\" class="nav-item nav-link">About</a>
                        <a href="service\" class="nav-item nav-link">Service</a>
                        <a href="feature\" class="nav-item nav-link">Feature</a>
                        <a href="advisor\" class="nav-item nav-link">Advisor</a>
                        <a href="review\" class="nav-item nav-link">Review</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="blog\" class="dropdown-item">Blog Page</a>
                                <a href="single\" class="dropdown-item">Single Page</a>
                            </div>
                        </div>
                        <a href="contact\" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Single Page Start -->
        <div class="single mt-125">
            <div class="container">
                <div class="section-header">
                    <p>Blog Detail Page</p>
                    <h2>This Is The Detail Page Title</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <img src="img/single.jpg" alt="Image">
                        <h1>This is heading 1</h1>
                        <h2>This is heading 2</h2>
                        <h3>This is heading 3</h3>
                        <h4>This is heading 4</h4>
                        <h5>This is heading 5</h5>
                        <h6>This is heading 6</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit. Nam congue molestie nibh in venenatis. Etiam non dui vel purus mollis consectetur. Sed at cursus lectus, sed iaculis lorem. Suspendisse venenatis est eu neque elementum, a accumsan tortor scelerisque. Nullam id erat arcu. Morbi suscipit commodo tortor non efficitur. Ut pretium sollicitudin lorem quis laoreet. Nulla vestibulum ante ut tellus hendrerit, ac condimentum sapien vehicula. Fusce dapibus, nulla non venenatis pretium, purus mauris vehicula elit, at posuere leo elit id augue. Donec ullamcorper tortor et tellus convallis maximus.
                        </p>
                        <ul class="ul-group">
                            <li>First list item</li>
                            <li>Second list item</li>
                            <li>Third list item</li>
                            <li>Fourth list item</li>
                            <li>Fifth list item</li>
                        </ul>
                        <p>
                            Mauris tempor et odio ut condimentum. Donec eleifend magna eu hendrerit lacinia. Praesent luctus diam ut rhoncus vulputate. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed ut metus efficitur, volutpat eros et, mollis enim. Sed quis tortor id erat iaculis sagittis. Aenean at pretium lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam sollicitudin vitae lacus id fermentum. Nullam sit amet tortor arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elementum nibh in dui congue, id faucibus lectus auctor. Nunc quis tincidunt odio, id finibus massa. Phasellus tincidunt libero est, in blandit turpis malesuada a. Quisque congue, mauris non consectetur tempus, arcu urna blandit arcu, ac finibus dolor ante ut nibh. Etiam congue dignissim sollicitudin. 
                        </p>
                        <ol class="ol-group">
                            <li>First list item</li>
                            <li>Second list item</li>
                            <li>Third list item</li>
                            <li>Fourth list item</li>
                            <li>Fifth list item</li>
                        </ol>
                        <p>
                            Donec vel euismod tortor. Aenean euismod risus ac enim hendrerit, ac sagittis erat porta. Donec ultrices et massa at ullamcorper. Nam faucibus mattis mattis. Etiam a metus condimentum, pretium elit a, accumsan dui. Donec ipsum erat, ultricies ut ante vel, consequat elementum nibh. Vestibulum egestas id nunc lobortis bibendum. Aliquam odio ex, efficitur vitae risus vitae, iaculis suscipit justo. Nam eleifend orci nulla, in pulvinar risus eleifend sit amet
                        </p>
                        <ul class="list-group">
                            <li class="list-group-item">First list item</li>
                            <li class="list-group-item">Second list item</li>
                            <li class="list-group-item">Third list item</li>
                            <li class="list-group-item">Fourth list item</li>
                            <li class="list-group-item">Fifth list item</li>
                        </ul>
                        <p>
                            Aenean dolor nisi, ultrices vitae urna vitae, tristique auctor tortor. Cras eu aliquet metus. Nunc volutpat est nec convallis vulputate. Maecenas quis tortor molestie, maximus arcu mattis, vehicula orci. Curabitur consequat eu orci vel vulputate. In mollis purus in tellus consectetur, at tristique lacus gravida. Integer tempor mattis elit, eu mollis tellus pretium in. Duis id iaculis ipsum, eu tempus purus. Fusce euismod lacus quis felis eleifend egestas. Nam at dolor vitae risus varius mattis sed ut tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque diam nisl, interdum sit amet congue efficitur, ultrices id dolor. 
                        </p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Table Head</th>
                                    <th>Table Head</th>
                                    <th>Table Head</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Table Cell</td>
                                    <td>Table Cell</td>
                                    <td>Table Cell</td>
                                </tr>
                                <tr>
                                    <td>Table Cell</td>
                                    <td>Table Cell</td>
                                    <td>Table Cell</td>
                                </tr>
                                <tr>
                                    <td>Table Cell</td>
                                    <td>Table Cell</td>
                                    <td>Table Cell</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Page End -->
@stop