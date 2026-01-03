<!DOCTYPE html>
<html lang="en">
   <head>
     @include('home.css')
   </head>
   <body class="main-layout">

      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>

        @include('home.header')
    
        @include('home.slider')

        @include('home.about')

        @include('home.room')
      
        @include('home.gallery')

        @include('home.blog')

        @include('home.contact')

        @include('home.footer')

        @include('home.script')
   </body>
</html>