<!DOCTYPE html>
<html lang="en">
  @include('includes.header')

  <body>

    <section id="container" class="">
        
        @include('includes.topMenu')
        @include('includes.sideBar')
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper site-min-height">
                <!-- page start-->
                @yield('content')
                <!-- page end-->
            </section>
        </section>
        <!--main content end-->

        @include('includes.rightSlideBar')
        @include('includes.footer')
        
    
  </body>
</html>
