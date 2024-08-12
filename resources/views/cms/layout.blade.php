<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mobil 1 Promo CMS</title>

        <link rel="shortcut icon" href="https://dev.megabots.app/cmspromo/assets/img/fav.png">

        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

        <!-- datatables -->
        <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <link rel="stylesheet" href="{{ URL::asset('assets/cms/template.css') }}">

        <script type="text/javascript" src="{{ URL::asset('assets/cms/template.js') }}"></script>
    </head>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
            <div class="header_img">
                {{ Auth::user()->name }}
            </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="/cms" class="nav_logo">
                        <i class='bx bx-layer nav_logo-icon'></i>
                        <span class="nav_logo-name">Mob1l Promo CMS</span>
                    </a>
                    <div class="nav_list">
                        <a href="dashboard" class="nav_link {{ ($page == "Dashboard") ? 'active' : '' }}">
                            <i class='bx bx-grid-alt nav_icon'></i>
                            <span class="nav_name">Dashboard</span>
                        </a>
                        <a href="entries" class="nav_link {{ ($page == "Entries") ? 'active' : '' }}">
                            <i class='bx bx-user nav_icon'></i>
                            <span class="nav_name">Entries</span>
                        </a>
                        <a href="draw" class="nav_link {{ ($page == "Draw Tool") ? 'active' : '' }}">
                            <i class='bx bx-message-square-detail nav_icon'></i>
                            <span class="nav_name">Draw Tool</span>
                        </a>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" 
                            
                            class="nav_link">

                            <i class='bx bx-log-out nav_icon'></i>
                            <span class="nav_name">Logout</span>
                    </x-responsive-nav-link>
                </form>
            </nav>
        </div>
        <div class="height-100 bg-light">
            <h4>{{ $page }}</h4>
            @yield('content')
        </div>
    </body>

    <script>
        new DataTable('.table');
    </script>
</html>
