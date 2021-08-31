<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" href="/css/general.css">
      <title>@yield('title-block')</title>
   </head>
   <body>
      <!-- header -->
      @include('inc.header')

      <div class="page_content">
         <div class="page_banner">
            <div class="center">
               <h1 class="page_banner__title">@yield('chapter')</h1>
            </div>
         </div>
         <div class="center">
            <div class="page_content__padding">
               <div class="columns">
                  <!-- content -->
                  @yield('content-block')
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript" src="/js/index.js"></script>
      <!-- footer -->
      @include('inc.footer')
   </body>
</html>
