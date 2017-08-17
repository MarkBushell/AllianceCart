<!DOCTYPE html>
<html lang="en">
<head>

  <!--Temp Basic Layout Finalise With Custom Template-->

  <meta charset="utf-8"/>
  <title>@yield('Ai Title')</title>
  <meta name="keywords" content="@yield('Ai Keywords')"/>
	<meta name="description" content="@yield('Ai Description')"/>
  <meta name="Author" content="The Alliance [www.??.com]"/>

  <!-- CSS Global Core -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!--CSS Files For Specific Views-->
  @yield('Ai Styles')

</head>

<body>
  @include('partials.aiheader')

  <div class="container">
  @yield('Ai Content')
  </div>

  <!-- Jquery Global Core -->
  <script   src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  <!-- JS Global Core -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!--JS Files For Specific Views-->
  @yield('Ai Scripts')

</body>
</html>
