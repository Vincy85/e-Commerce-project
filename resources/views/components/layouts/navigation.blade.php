<section class="header-logo">
    <a href="{{ Route('home') }}"><img src="{{ asset('/storage/logo.png') }}" alt="logo"></a>
</section>

<nav class="header-nav">
    <ul class="header-menu">
        <li class="menu-item">
            <a class="menu-link" href="{{ Route('home') }}"><i class="fas fa-2x fa-home"></i><p>Home</p></a>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="{{ Route('shop') }}"><i class="fas fa-2x fa-shopping-bag"></i></p>Shop</p></a>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="#"><i class="fas fa-2x fa-shopping-cart"></i><p>Cart</p></a>
        </li>
    </ul>
</nav>
    
<!-- Search input --> 
<form class="header-search" method="GET" action="{{ Route('search') }}">
    <button class="btn btn-outline-success header-button" type="submit"><i class="fas fa-search search-icon"></i></button>
    <input class="form-control search-input" name="q"  type="search" placeholder="{{ __('Trouvez le meilleures offres ici') }}">
</form>
<!--
<section class="header-logo">
    <a href="{{ Route('home') }}"><img src="{{ asset('/storage/logo.png') }}" alt="logo"></a>
</section>

<nav class="header-nav">
    <ul class="header-menu">
        <li class="menu-item">
            <a class="menu-link" href="{{ Route('home') }}">Home</a>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="{{ Route('shop') }}">Shop</a>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="#">Cart</a>
        </li>
    </ul>

</nav>

-->
 <!-- Search input --> 
    <!--
 <form class="header-search" method="GET" action="{{ Route('search') }}">
    <button class="btn btn-outline-success header-button" type="submit"><i class="fas fa-search search-icon"></i></button>
    <input class="form-control search-input" name="q"  type="search" placeholder="{{ __('Trouvez le meilleures offres ici') }}">
</form>
    
</div>-->
 <!--   
    <ul class="nav">
                
        <li class="nav-item">
            <a class="nav-link" href="{{ Route('home') }}"><i class="fas fa-2x fa-home"></i><p>Home</p></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ Route('shop') }}"><i class="fas fa-2x fa-shopping-bag"></i></p>Shop</p></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/login"> <i class="fas fa-2x fa-user"></i><p>Login</p></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/cart"><i class="fas fa-2x fa-shopping-cart"></i><p>Cart</p></a>
        </li>
    </ul>  
</nav>-->