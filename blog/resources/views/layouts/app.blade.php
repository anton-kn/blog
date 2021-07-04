<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
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
                  @include('inc.contenthome')
                  @if(!Request::is('/'))
                     @include('inc.questions')
                  @endif
               </div>
            </div>
         </div>
      </div>
      <!-- footer -->
      @include('inc.footer')
   </body>
</html>
