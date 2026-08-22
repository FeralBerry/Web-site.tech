<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.front.head')
    @vite(['resources/js/frontJS/front_app.js'])
</head>
<body  data-spy="scroll" data-target=".menu-area" data-offset="200">
<div id="contextMenu" class="context-menu" style="display:none">
    <ul>
        <li><a href="#" onclick="event.preventDefault();document.execCommand('copy')">Копировать</a></li>
    </ul>
</div>
<div class="wrapper" id="app">

</div>
<div id="mycaptcha-wrap" class="hidden mycaptcha1">
    <div id="mycaptcha" class="mycaptcha1"></div>
</div>
@include('layouts.front.script')
</body>
</html>
