<div class="container">
    <div class="header-top-bar">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC" />
        <nav>
            <ul class="header-menu">
                @foreach ($menuItems as $menuItem)
                    <li>
                        <a href="#" class="item">
                            {{ $menuItem['item'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>
