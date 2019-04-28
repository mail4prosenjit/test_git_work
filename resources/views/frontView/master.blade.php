<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>@yield('page_title')</title>
      
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Sway Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      
      @yield('css_script')   

      
   </head>

<!-- *****************************************************  Head -->
   <body>
      
      @include('frontView.include.navigation_head')
      
      <!-- ********************** //Navigation -->
      
      <!-- *********************** Slideshow 4 -->
      @yield('page_banner')
      
      @yield('mid_conent')

      @include('frontView.include.testimonial')

      @include('frontView.include.footer')

   </body>
</html>
