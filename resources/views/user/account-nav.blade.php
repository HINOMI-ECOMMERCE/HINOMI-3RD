<ul class="account-nav">
    <li><a href="{{route('user.index')}}" class="menu-link menu-link_us-s">Dashboard</a></li>
    <li><a href="{{route('user.orders')}}" class="menu-link menu-link_us-s">Orders</a></li>

    <li>
        <form method="POST"action="{{('logout')}}" id="logout-form">
            @csrf
            <a href="{{('logout')}}" class="menu-link menu-link_us-s" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
        </form>
    </li>
            
</ul>