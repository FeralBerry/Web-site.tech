@if(Auth::user()->role === 1)
    <script>window.location = "/admin";</script>
@elseif(Auth::user()->role === 2)
    <script>window.location = "/user";</script>
@endif

