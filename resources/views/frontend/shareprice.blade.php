@extends('layouts.app')
@section('content')
    <section class="bg-page-header  wow fadeIn" data-wow-delay="0.1s">
        <div class="page-header-overlay">
            <div class="container">
                <div class="row">
                    <div class="page-header">
                        <div class="page-title">
                            <h1 class="display-4 text-white  slideInDown mb-4">{{ __('home.shareprice') }}</h1>
                        </div>
                        <nav aria-label="breadcrumb animated slideInDown">
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item">
                                    <a class="text-white" href="#">{{ __('home.home') }}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a class="text-white" href="#">{{ __('home.investorrelation') }}</a>
                                </li>
                                <li class="breadcrumb-item text-white active" aria-current="page">
                                    {{ __('home.shareprice') }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        SHARE PRICE
                    </div>
                    <div class="card-body">
                        <h4>Rp.{{ $data }} @if ($tanda === '-')
                                <i class="fa fa-caret-down text-danger" aria-hidden="true"></i>
                            @else
                                <i class="fa fa-caret-up text-primary" aria-hidden="true"></i>
                            @endif {{ $cal }} </h4>
                        <small>{{ $up }}</small>
                        <img src="https://ik.imagekit.io/tk6ir0e7mng/uploads/2021/05/1619944448337.png"
                            class="img-fluid mt-3" style="
                     height: 40px;
                   " />
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div id="tradingview_0da21"></div>
                            <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/symbols/IDX-SGER/"
                                    rel="noopener" target="_blank"><span class="blue-text">SGER Chart</span></a> oleh
                                TradingView</div>
                            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                            <script type="text/javascript">
                                new TradingView.widget({
                                    "width": 700,
                                    "height": 610,
                                    "symbol": "IDX:SGER",
                                    "interval": "D",
                                    "timezone": "Etc/UTC",
                                    "theme": "light",
                                    "style": "1",
                                    "locale": "id",
                                    "toolbar_bg": "#f1f3f6",
                                    "enable_publishing": false,
                                    "allow_symbol_change": true,
                                    "container_id": "tradingview_0da21"
                                });
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
