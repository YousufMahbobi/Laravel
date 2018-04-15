@include('Layouts.header')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('Layouts.sidebar')
        </div>
        <div class="col-md-6">
            @yield('content')
        </div>
        <div class="col-md-3">
            @include('Layouts.leftsidebar')
        </div>
</div>
@include('Layouts.footer')