<nav>
    <ul class="metismenu" id="menu">
        <li class="{{ 'admin' == request()->path()? 'active' : ''}}">
            <a href="admin" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
        </li>
        <li  class="{{ 'admin/film' == request()->path() ? 'active' : ''}}">
            <a href="" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>
                Quản lý phim
            </span></a>
            <ul class="collapse">
                <li><a href="{{route('film.index')}}">Phim</a></li>
            </ul>
        </li>
    
        <li  class="{{ 'admin/genres' == request()->path() ? 'active' : ''}}">
            <a href="{{ route('genres.index') }}" aria-expanded="true"><i class="ti-palette"></i><span>Quản lí thể loại</span></a>
        </li>

        <li  class="{{ 'admin/director' == request()->path() ? 'active' : ''}}">
            <a href="{{ route('director.index') }}" aria-expanded="true"><i class="ti-receipt"></i><span>Quản lí đạo diễn</span></a>
        </li>

        <li  class="{{ 'admin/actor' == request()->path() ? 'active' : ''}}">
            <a href="{{ route('actor.index') }}" aria-expanded="true"><i class="ti-pie-chart"></i><span>Quản lí diễn viên</span></a>
        </li>
        
        {{-- <li>
            <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                <span>Tables</span></a>
            <ul class="collapse">
                <li><a href="table-basic.html">basic table</a></li>
                <li><a href="table-layout.html">table layout</a></li>
                <li><a href="datatable.html">datatable</a></li>
            </ul>
        </li> --}}
       
    </ul>
</nav>