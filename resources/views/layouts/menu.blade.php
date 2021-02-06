<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>

<li class="side-menus {{ Request::is('categories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categories.index') }}"><i class="fas fa-building"></i><span>Categories</span></a>
</li>

<li class="side-menus {{ Request::is('blogs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('blogs.index') }}"><i class="fas fa-building"></i><span>Blogs</span></a>
</li>

<li class="side-menus {{ Request::is('consultations*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('consultations.index') }}"><i class="fas fa-building"></i><span>Consultations</span></a>
</li>



<li class="side-menus {{ Request::is('cardLists*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('cardLists.index') }}"><i class="fas fa-building"></i><span>Card Lists</span></a>
</li>



<li class="side-menus {{ Request::is('companyTeams*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('companyTeams.index') }}"><i class="fas fa-building"></i><span>Company Teams</span></a>
</li>

<li class="side-menus {{ Request::is('products*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('products.index') }}"><i class="fas fa-building"></i><span>Products</span></a>
</li>

<li class="side-menus {{ Request::is('portfolios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('portfolios.index') }}"><i class="fas fa-building"></i><span>Portfolios</span></a>
</li>

