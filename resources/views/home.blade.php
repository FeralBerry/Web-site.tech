@if(Auth::user()->role === 1)
    @include('layouts.back.admin.layout')
@elseif(Auth::user()->role === 2)
    @include('layouts.back.user.layout')
@endif

