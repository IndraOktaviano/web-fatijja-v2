<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{Request::is('admin') ? 'active' : ''}}">
                    <a href="{{ url('admin') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>

                <li class="menu-title">News</li><!-- /.menu-title -->
                <li class="{{Request::is('admin/news') ? 'active' : ''}}">
                    <a href="{{route('admin.news.index')}}"> <i class="menu-icon fa fa-list"></i>List News</a>
                </li>
                <li class="{{Request::is('admin/news/create') ? 'active' : ''}}">
                    <a href="{{route('admin.news.create')}}"> <i class="menu-icon fa fa-plus"></i>Create News</a>
                </li>

                <li class="menu-title">Video</li><!-- /.menu-title -->
                <li class="{{Request::is('admin/video') ? 'active' : ''}}">
                    <a href="{{route('admin.video.index')}}"> <i class="menu-icon fa fa-list"></i>List Video</a>
                </li>

                <li class="menu-title">Gambar</li><!-- /.menu-title -->
                <li class="{{Request::is('admin/picture') ? 'active' : ''}}">
                    <a href="{{route('admin.picture.index')}}"> <i class="menu-icon fa fa-list"></i>List Gambar</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
