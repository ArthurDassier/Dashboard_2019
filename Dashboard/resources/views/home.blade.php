@extends('layouts.app')

@section('content')
<iframe id="widget-iframe" width="300px" height="235px"
 src="https://services.metservice.com/weather-widget/widget?params=blue|large|portrait|days-3|classic&loc=auckland&type=urban" allowtransparency="true" style="border:none" >
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
