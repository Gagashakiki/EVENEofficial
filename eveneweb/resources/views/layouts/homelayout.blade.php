<!DOCTYPE html>
 
<html lang="en-US">
 
<head>
 
@include('layouts.partials.head')
 
</head>
 
<body id="body" class="body-wrapper version1">
{{-- Preload --}}
@include('layouts.partials.preload')

<!-- MAIN WRAPPER -->
<div class="main-wrapper">

<!-- HEADER -->
@include('layouts.partials.header')
    
    {{-- Content --}}
    @yield('content')
 
  <!-- FOOTER -->
@include('layouts.partials.footer')

</div>

@include('layouts.partials.footer-script')
 
</body>
 
</html>