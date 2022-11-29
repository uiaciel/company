@extends('layouts.adminapp')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }} {{$data}}</div> --}}
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div id="tradingview_0da21"></div>
    <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/symbols/IDX-SGER/" rel="noopener" target="_blank"><span class="blue-text">SGER Chart</span></a> oleh TradingView</div>
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
    new TradingView.widget(
    {
    "width": 980,
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
  }
    );
    </script>
  </div>
  <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
