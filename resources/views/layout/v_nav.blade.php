<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{request()->is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
</li>
<li class="{{request()->is('guru') ? 'active' : ''}}"><a href="/guru"><i class="fa fa-book"></i> <span>Guru</span></a></li>
<li class="{{request()->is('siswa') ? 'active' : ''}}"><a href="/siswa"><i class="fa fa-book"></i> <span>Siswa</span></a></li>
<li class="{{request()->is('user') ? 'active' : ''}}"><a href="/user"><i class="fa fa-book"></i> <span>User</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
      </ul>