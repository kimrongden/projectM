@extends('layout.app')

@section('header')
    <div class="header-block">
        <div class="container">
                <div class="row">
                    <nav class="navbar-default utility-backgroud-none">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header header-block__items-collapse">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand header-block--brand" href="#">
                                    <div>
                                        <img src="{{url('assets/img/logo.png')}}" class="img-responsive" alt="Project M Logo">
                                    </div>
                                    <span>Motor Cambodia</span>
                                </a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown header-block__nav-items">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Solutions </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('#')}}">QuickBooks For Mac</a></li>
                                            <li><a href="{{url('#')}}">QuickBooks Pro</a></li>
                                            <li><a href="{{url('#')}}">QuickBooks Premier</a></li>
                                            <li><a href="{{url('#')}}">QuickBooks Enterprise</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="{{url('#')}}">QuickBooks Online</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="{{url('#')}}">QuickBooks Point of Sale</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="{{url('#')}}">CASBook Integration</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown header-block__nav-items">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Industries </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('#')}}">Retail</a></li>
                                            <li><a href="{{url('#')}}">Hospitality</a></li>
                                            <li><a href="{{url('#')}}">Construction</a></li>
                                            <li><a href="{{url('#')}}">Professional Services</a></li>
                                            <li><a href="{{url('#')}}">Manufacturing & Wholesale</a></li>
                                            <li><a href="{{url('#')}}">NGO (Non-Government Organization)</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown header-block__nav-items">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Consulting</a></li>
                                            <li><a href="#">Implementation</a></li>
                                            <li><a href="#">Hosting</a></li>
                                            <li><a href="#">Training</a></li>
                                            <li><a href="#">Support</a></li>
                                            <li><a href="#">Data Conversion</a></li>
                                        </ul>
                                    </li>
                                    <li class="header-block__nav-items" ><a href="{{url('contact')}}">Contact Us</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
        </div>
    </div>
    <div>
        <img class="img-responsive"  src="{{url('assets/img/Horex-VR6-Classic-2014-1920x1080-007.png')}}">
    </div>
@endsection