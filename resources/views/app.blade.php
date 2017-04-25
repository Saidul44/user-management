<!DOCTYPE html>
<html lang="en">

  <!-- html link -->
  @include('partials.htmlheader')


  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        <!-- sidebar link -->
        @include('partials.sidebar')

        <!-- top navigation -->
        @include('partials.mainheader')



        <!-- main content -->
        @yield('main-content')


        <!-- footer content -->
        @include('partials.footer')
      
      </div>
    </div>

    <!-- script link -->
    @include('partials.scripts')
	
  </body>
</html>
