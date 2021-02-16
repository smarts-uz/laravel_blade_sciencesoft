<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>{{ _trans("Dashboard")  }}</span>
    </a>
</li>

<li class="side-menus {{ Request::is('categories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categories.index') }}"><i class="fas fa-building"></i><span>{{ _trans("Categories")  }}</span></a>
</li>

<li class="side-menus {{ Request::is('blogs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('blogs.index') }}"><i class="fas fa-building"></i><span>{{ _trans("Blogs")  }}</span></a>
</li>

<li class="side-menus {{ Request::is('consultations*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('consultations.index') }}"><i class="fas fa-building"></i><span>{{ _trans("Consultations")  }}</span></a>
</li>



<li class="side-menus {{ Request::is('cardLists*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('cardLists.index') }}"><i class="fas fa-building"></i><span>{{ _trans("Card Lists")  }}</span></a>
</li>



<li class="side-menus {{ Request::is('companyTeams*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('companyTeams.index') }}"><i class="fas fa-building"></i><span>{{ _trans("Company Teams")  }}</span></a>
</li>

<li class="side-menus {{ Request::is('products*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('products.index') }}"><i class="fas fa-building"></i><span>{{ _trans("Products")  }}</span></a>
</li>

<li class="side-menus {{ Request::is('languages*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('languages.index') }}"><i class="fas fa-building"></i><span>{{ _trans("Languages")  }}</span></a>
<li class="side-menus {{ Request::is('portfolios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('portfolios.index') }}"><i class="fas fa-building"></i><span>{{ _trans("Portfolios")  }}</span></a>
</li>

<li class="side-menus {{ Request::is('news*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('news.index') }}"><i class="fas fa-building"></i><span>{{ _trans("News")  }}</span></a>
</li>

