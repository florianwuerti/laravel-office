<header>
    <div class="header__container container">
        <nav class="nav navbar__top">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#" class="nav__link">{{auth()->user()->firstname}} {{auth()->user()->lastname}}</a>
                </li>
                <li class="nav__item">
                    <a href="#" class="nav__link">Einstellungen</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="header__container container">
        <a href="/" class="site__header--brand">
            <h1 class="site__header--headline-h1">{{ config('app.name') }}</h1>
            <h2 class="site__header--headline-h2">Dein Office</h2>
        </a>
        <nav class="nav navbar__2">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#" class="nav__link">Kunden</a>
                </li>
                <li class="nav__item">
                    <a href="/logout" class="nav__link">Logout</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
