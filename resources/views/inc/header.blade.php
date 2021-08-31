<header class="site_header">
   <div class="center">
      <a class="site_logo" href="/">
         <span class="site_logo__short_name">Beginprog.ru</span>
      </a>
      <nav class="site_menu">
         <ul class="site_menu__list">
            <li class="site_menu__item">
                @if($route == 'home')
                    <a class="site_menu__link" style="color: #65be97;" href="/">Домой</a>
                @else
                    <a class="site_menu__link"  href="/">Домой</a>
                @endif
            </li>
            <li class="site_menu__item">
                @if($route == 'laravel')
                    <a class="site_menu__link" style="color: #65be97;" href="/categories/laravel">Laravel</a>
                @else
                    <a class="site_menu__link" href="/categories/laravel">Laravel</a>
                @endif
            </li>
            <li class="site_menu__item">
                @if($route == 'php')
                    <a class="site_menu__link" style="color: #65be97;" href="/categories/php">PHP</a>
                @else
                    <a class="site_menu__link" href="/categories/php">PHP</a>
                @endif
            </li>
            <li class="site_menu__item">
                @if($route == 'about')
                    <a class="site_menu__link" style="color: #65be97;" href="/about">Обо мне</a>
                @else
                    <a class="site_menu__link" href="/about">Обо мне</a>
                @endif
            </li>
         </ul>
      </nav>
   </div>
    <div id="openNav" class="sidenav">
        <span onclick="openNav();">&#9776</span>
    </div>
    <div class="sidenav_block">
        <div class="sidenav_block__span">
            <span onclick="closeNav();">&times;</span>
        </div>
        <nav class="site_menu__sidenav">
            <ul class="site_menu__list__sidenav">
                <li class="site_menu__item__sidenav">
                    @if($route == 'home')
                        <a class="site_menu__link" style="color: #65be97;" href="/">Домой</a>
                    @else
                        <a class="site_menu__link"  href="/">Домой</a>
                    @endif
                </li>
                <li class="site_menu__item__sidenav">
                    @if($route == 'laravel')
                        <a class="site_menu__link" style="color: #65be97;" href="/categories/laravel">Laravel</a>
                    @else
                        <a class="site_menu__link" href="/categories/laravel">Laravel</a>
                    @endif
                </li>
                <li class="site_menu__item__sidenav">
                    @if($route == 'php')
                        <a class="site_menu__link" style="color: #65be97;" href="/categories/php">PHP</a>
                    @else
                        <a class="site_menu__link" href="/categories/php">PHP</a>
                    @endif
                </li>
                <li class="site_menu__item__sidenav">
                    @if($route == 'about')
                        <a class="site_menu__link" style="color: #65be97;" href="/about">Обо мне</a>
                    @else
                        <a class="site_menu__link" href="/about">Обо мне</a>
                    @endif
                </li>
            </ul>
        </nav>
    </div>
</header>
