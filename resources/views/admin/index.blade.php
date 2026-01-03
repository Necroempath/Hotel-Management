<!DOCTYPE html>
<html>
  <head> 
 @include('admin.css')

  </head>
  <body>
    @include('admin.header')

    <div class="d-flex align-items-stretch">
        @include('admin.sidebar')
        
        @include('admin.main')

        @include('admin.footer')
    </div>
    
    @include('admin.script')
  </body>
</html>