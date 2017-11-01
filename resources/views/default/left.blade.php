<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="nav-close"><i class="fa fa-times-circle"></i></div>
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span><img alt="image" class="img-circle" src="{{asset_site($resource, 'css', 'patterns/profile_small.jpg')}}" /></span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                       <span class="block m-t-xs"><strong class="font-bold">{{$user->name}}</strong></span>
                        <span class="text-muted text-xs block">{{$user->email}}<b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="J_menuItem" href="form_avatar.html">修改头像</a>
                        </li>
                        <li><a class="J_menuItem" href="profile.html">个人资料</a>
                        </li>
                        <li><a class="J_menuItem" href="contacts.html">联系我们</a>
                        </li>
                        <li><a class="J_menuItem" href="mailbox.html">信箱</a>
                        </li>
                        <li class="divider"></li>
                        <li><a class="J_logout" href="javascript:void(0);">安全退出</a>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">manage</div>
            </li>
            @foreach ($menus as $menu)
                @if (null !== $menu['menu'])
                    <li>
                        <a href="#"><i class="fa {{$menu['icon']}}"></i><span class="nav-label">{{$menu['label']}}</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                @foreach ($menu['menu'] as $item)
                                    @if($item['display'])
                                        <a class="J_menuItem" href="{{route($item['alias'])}}">{{$item['label']}}</a>
                                    @endif
                                @endforeach
                            </li>
                        </ul>
                    </li>
                @else
                    <li><a class="J_menuItem" href="{{route($menu['alias'])}}"><i class="fa {{$menu['icon']}}"></i> <span class="nav-label">{{$menu['label']}}</span></a></li>
                @endif
            @endforeach
        </ul>
    </div>
</nav>