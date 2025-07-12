@if(Auth::user()->role === 0)
    <script>window.location = "/admin";</script>
@elseif(Auth::user()->role === 1)
    <script>window.location = "/user";</script>
@endif

