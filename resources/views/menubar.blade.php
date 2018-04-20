@section('menubar')
<ul class="navbar">
    <li><a class="nav"  href="{{ url('/') }}">Home</a></li>
    <li><a class="nav"  href="#">Advice</a></li>
    <li><a class="nav"  href="{{ url('/contact') }}">Contact us</a></li>
    <li><a class="nav"  href="{{ url('/about') }}">About</a></li>
    <li class="right"><a class="nav"  href="http://facebook.com"><img class="face" src="{{ url('public/images/facebook.png') }}" height="16" width="16"></a></li>
    <li class="right"><a class="nav"  href="http://twitter.com"><img class="twitt" src="{{ url('public/images/twitter.png') }}" height="16" width="16"></a></li>
    <li class="right"><a class="nav"  href="http://instagram.com"><img class="insta" src="{{ url('public/images/ig.png') }}" ></a></li>
</ul>
@endsection