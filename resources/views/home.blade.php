@extends('layouts.dashboard') @section('content')
<div class="main-content">

    @include('partials.nav')

    <!-- HEADER -->
    <div class="header  pb-5">
        <div class="container-fluid">

            <!-- Body -->
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">

                        <!-- Pretitle -->
                        <h6 class="header-pretitle text-secondary">
          Overview
        </h6>

                        <!-- Title -->
                        <h1 class="header-title text-white">
          Performance
        </h1>

                    </div>
                    <div class="col-auto">

                        <!-- Nav -->
                        <ul class="nav nav-tabs header-tabs">
                            <li class="nav-item" data-toggle="chart" data-target="#headerChart" data-update='{"data":{"datasets":[{"data":[0,10,5,15,10,20,15,25,20,30,25,40]}]}}' data-prefix="$" data-suffix="k">
                                <a href="#" class="nav-link text-center active" data-toggle="tab">
                                    <h6 class="header-pretitle text-secondary">
                Earnings
              </h6>
                                    <h3 class="text-white mb-0">
                $19.2k
              </h3>
                                </a>
                            </li>
                            <li class="nav-item" data-toggle="chart" data-target="#headerChart" data-update='{"data":{"datasets":[{"data":[50,75, 35,25,55,87,67,53,25,80,87,45]}]}}' data-prefix="" data-suffix="k">
                                <a href="#" class="nav-link text-center" data-toggle="tab">
                                    <h6 class="header-pretitle text-secondary">
                Sessions
              </h6>
                                    <h3 class="text-white mb-0">
                92.1k
              </h3>
                                </a>
                            </li>
                            <li class="nav-item" data-toggle="chart" data-target="#headerChart" data-update='{"data":{"datasets":[{"data":[40,57,25,50,57,32,46,28,59,34,52,48]}]}}' data-prefix="" data-suffix="%">
                                <a href="#" class="nav-link text-center" data-toggle="tab">
                                    <h6 class="header-pretitle text-secondary">
                Bounce
              </h6>
                                    <h3 class="text-white mb-0">
                50.2%
              </h3>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- / .row -->
            </div>
            <!-- / .header-body -->

            <!-- Footer -->
            <div class="header-footer">

            </div>

        </div>
    </div>

    <!-- CARDS -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-12 col-xl-8">

                <!-- Orders -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    {{ $chart1->options['chart_title'] }}
            </h4>

           
            {!! $chart1->renderHtml() !!}

                            </div>
                            <div class="col-auto mr--3">

                                <!-- Caption -->
                                <span class="text-muted">
              Show affiliate:
            </span>

                            </div>
                            <div class="col-auto">

                                <!-- Toggle -->
                                <div class="custom-control custom-checkbox-toggle">
                                    <input type="checkbox" class="custom-control-input" id="cardToggle" data-toggle="chart" data-target="#ordersChart" data-add='{"data":{"datasets":[{"data":[15,10,20,12,7,0,8,16,18,16,10,22],"backgroundColor":"#d2ddec","label":"Affiliate"}]}}'>
                                    <label class="custom-control-label" for="cardToggle"></label>
                                </div>

                            </div>
                        </div>
                        <!-- / .row -->

                    </div>
                    <div class="card-body">

                    </div>
                </div>

            </div>
            <div class="col-12 col-xl-4">

                <!-- Devices -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
              Devices
            </h4>

                            </div>
                            <div class="col-auto">

                                <!-- Tabs -->
                                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                                    <li class="nav-item" data-toggle="chart" data-target="#devicesChart" data-update='{"data":{"datasets":[{"data":[60,25,15]}]}}'>
                                        <a href="#" class="nav-link active" data-toggle="tab">
                  All
                </a>
                                    </li>
                                    <li class="nav-item" data-toggle="chart" data-target="#devicesChart" data-update='{"data":{"datasets":[{"data":[15,45,20]}]}}'>
                                        <a href="#" class="nav-link" data-toggle="tab">
                  Direct
                </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <!-- / .row -->

                    </div>
                    <div class="card-body">

                        <!-- Chart -->
                        <div class="chart chart-appended">
                            <canvas id="devicesChart" class="chart-canvas" data-target="#devicesChartLegend"></canvas>
                        </div>

                        <!-- Legend -->
                        <div id="devicesChartLegend" class="chart-legend"></div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
{!! $chart1->renderChartJsLibrary() !!}
{!! $chart1->renderJs() !!}
@endsection


