@extends('layouts.app')

@section('content')
    <style>
        .doctors-sidebar .doctors-img {
            text-align: center;
            margin-bottom: 30px;
        }

        .doctors-sidebar .doctors-img img {
            border-top: 3px solid #05e8c2;
            border-left: 3px solid #05e8c2;
            border-right: 3px solid #05e8c2;
        }

        .doctors-sidebar .doctors-img ul {
            line-height: 1;
            -webkit-box-shadow: 0 0 20px 3px rgba(0, 0, 0, 0.05);
            box-shadow: 0 0 20px 3px rgba(0, 0, 0, 0.05);
            padding: 30px;
        }

        .doctors-sidebar .doctors-img ul li {
            display: inline-block;
            margin: 0 5px;
        }

        .doctors-sidebar .doctors-img ul li a {
            width: 30px;
            height: 30px;
            line-height: 38px;
            background-color: #05e8c2;
            color: #ffffff;
            border-radius: 4px;
            text-align: center;
        }

        .doctors-sidebar .doctors-img ul li a i {
            font-size: 20px;
        }

        .doctors-sidebar .doctors-img ul li a:hover {
            -webkit-transform: translateY(-3px);
            transform: translateY(-3px);
        }

        .doctors-sidebar .availability {
            -webkit-box-shadow: 0 0 20px 3px rgba(0, 0, 0, 0.05);
            box-shadow: 0 0 20px 3px rgba(0, 0, 0, 0.05);
            background-color: #ffffff;
            padding: 30px;
            margin-bottom: 30px;
        }

        .doctors-sidebar .availability h3 {
            margin-bottom: 20px;
        }

        .doctors-sidebar .availability h3 i {
            margin-right: 5px;
            position: relative;
            top: 1px;
        }

        .doctors-sidebar .availability ul li {
            border-bottom: 1px solid #eeeeee;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .doctors-sidebar .availability ul li span {
            float: right;
        }

        .doctors-sidebar .availability ul li:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0;
        }

        .doctors-sidebar .doctors-feedback {
            -webkit-box-shadow: 0 0 20px 3px rgba(0, 0, 0, 0.05);
            box-shadow: 0 0 20px 3px rgba(0, 0, 0, 0.05);
        }

        .doctors-sidebar .doctors-feedback .single-client {
            margin: 0;
        }

        .doctors-sidebar .doctors-feedback .single-client img {
            position: unset;
        }

        .doctors-detailss .borders {
            border-bottom: 1px solid #eeeeee;
            padding-bottom: 20px;
            margin-bottom: 20px;
            margin-left: 1px;
            margin-right: 1px;
        }

        .doctors-detailss .doctors-history {
            padding: 30px;
            -webkit-box-shadow: 0 0 20px 3px rgba(0, 0, 0, 0.05);
            box-shadow: 0 0 20px 3px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .doctors-detailss .doctors-history h2 {
            font-size: 40px;
        }

        .doctors-detailss .doctors-history span {
            font-weight: 600;
            color: #05e8c2;
            font-size: 20px;
            display: block;
            margin-bottom: 15px;
        }

        .doctors-detailss .doctors-history p {
            margin-bottom: 30px;
        }

        .doctors-detailss .left-title h3 {
            font-size: 17px;
        }

        .doctors-detailss .right-title ul li {
            font-weight: 600;
            position: relative;
            padding-left: 20px;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eeeeee;
        }

        .doctors-detailss .right-title ul li:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .doctors-detailss .right-title ul li i {
            position: absolute;
            top: 6px;
            left: 0;
        }

    </style>

    <div class="top-heading">
        <h2 style="text-align: center;margin-bottom: 2rem;color: white;font-weight: bold;font-size: 3rem;">Your Matches</h2>
    </div>

    @foreach ($data as $doc)
        <section class="doctors-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="doctors-sidebar">
                            <div class="doctors-img">
                                <img src="{{ $doc['image'] }}" alt="Image">
                            </div>
                            <div class="availability">
                                <h3>
                                    <i class="bx bx-time"></i>
                                    Availability
                                </h3>

                                <ul style="list-style: none; padding: 0;">
                                    @foreach ($doc['availablity'] as $days => $avail)
                                        <li>
                                            {{ $days }}
                                            <span>{{ $avail }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                                <a href="#" class="default-btn mt-4">
                                    Request An Appointment
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="doctors-detailss" style="background-color: white;">
                            <div class="doctors-history">
                                <h2>{{ $doc['name'] }}</h2>
                                <span> {{ implode(', ', $doc['degrees']) }} </span>

                                <p>{{ $doc['description'] }}</p>

                                <div class="row borders">
                                    <div class="col-lg-3 pl-0">
                                        <div class="left-title">
                                            <h3>Specialty</h3>
                                        </div>
                                    </div>

                                    <div class="col-lg-9">
                                        <div class="right-title">
                                            <ul style="list-style: none">
                                                <li>
                                                    <i class="bx bxs-hand-right"></i>
                                                    Endocrinology
                                                </li>
                                                <li>
                                                    <i class="bx bxs-hand-right"></i>
                                                    Paediatric Medicine
                                                </li>
                                                <li>
                                                    <i class="bx bxs-hand-right"></i>
                                                    Urology
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row borders">
                                    <div class="col-lg-3 pl-0">
                                        <div class="left-title">
                                            <h3>Education</h3>
                                        </div>
                                    </div>

                                    <div class="col-lg-9">
                                        <div class="right-title">
                                            <ul style="list-style: none">
                                                <li>
                                                    <i class="bx bxs-hand-right"></i>
                                                    Endocrinology
                                                </li>
                                                <li>
                                                    <i class="bx bxs-hand-right"></i>
                                                    Doctor of Medicine, University of Texas, USA (1990)
                                                </li>
                                                <li>
                                                    <i class="bx bxs-hand-right"></i>
                                                    Medical Orientation Program, St. Louis University (St. Louis, Missouri
                                                    1996)
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row borders">
                                    <div class="col-lg-3 pl-0">
                                        <div class="left-title">
                                            <h3>Experience</h3>
                                        </div>
                                    </div>

                                    <div class="col-lg-9">
                                        <div class="right-title">
                                            <ul style="list-style: none">
                                                <li>
                                                    <i class="bx bxs-hand-right"></i>
                                                    25 years of Experience in Medicine
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row borders">
                                    <div class="col-lg-3 pl-0">
                                        <div class="left-title">
                                            <h3>Address</h3>
                                        </div>
                                    </div>

                                    <div class="col-lg-9">
                                        <div class="right-title">
                                            <ul style="list-style: none">
                                                <li>
                                                    <i class="bx bxs-hand-right"></i>
                                                    123, Western Road, Melbourne Australia
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row borders">
                                    <div class="col-lg-3 pl-0">
                                        <div class="left-title">
                                            <h3>Phone</h3>
                                        </div>
                                    </div>

                                    <div class="col-lg-9">
                                        <div class="right-title">
                                            <ul style="list-style: none">
                                                <li>
                                                    <i class="bx bxs-hand-right"></i>
                                                    {{ $doc["phone"] }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row borders">
                                    <div class="col-lg-3 pl-0">
                                        <div class="left-title">
                                            <h3>Email</h3>
                                        </div>
                                    </div>

                                    <div class="col-lg-9">
                                        <div class="right-title">
                                            <ul style="list-style: none">
                                                <li>
                                                    <i class="bx bxs-hand-right"></i>
                                                    <a href="">{{ $doc['email'] }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row borders">
                                    <div class="col-lg-3 pl-0">
                                        <div class="left-title">
                                            <h3>Website</h3>
                                        </div>
                                    </div>

                                    <div class="col-lg-9">
                                        <div class="right-title">
                                            <ul style="list-style: none">
                                                <li>
                                                    <i class="bx bxs-hand-right"></i>
                                                    <a href="#">www.dumy.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
