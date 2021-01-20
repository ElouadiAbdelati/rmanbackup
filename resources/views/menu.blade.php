

  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="irisi.png" class="navbar-brand-img" style="width: 200px;height: 300px;" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{url('index')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
              <hr class="my-3">

              <li class="nav-item">
                <a class="nav-link" href="{{url('listbackupsTag')}}">
                    <i class="ni ni-bullet-list-67 text-default"></i>
                  <span class="nav-link-text">List backups by Tag</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('listbackupsForm')}}" onclick="return sweetAlert();">
                    <i class="ni ni-bullet-list-67 text-default"></i>
                  <span class="nav-link-text">List backups</span>
                </a>
              </li>
              <hr class="my-3">
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('fullbackupForm')}}" onclick="return sweetAlert();">
                <i class="ni ni-archive-2 text-orange"></i>
                <span class="nav-link-text">Full backup</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('incrementalbackup')}}">
                <i class="ni ni-archive-2 text-orange"></i>
                <span class="nav-link-text">Incremental backup</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('differentialbackup')}}">
                  <i class="ni ni-archive-2 text-orange"></i>
                  <span class="nav-link-text">Differential backup</span>
                </a>
              </li>
            <hr class="my-3">
            <li class="nav-item">
                <a class="nav-link" href="{{url('checkCurrentScnForm')}}"  onclick="return sweetAlert();">
                  <i class="ni ni-bullet-list-67 text-default"></i>
                  <span class="nav-link-text">Check Current Scn</span>
                </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('logmodeForm')}}" onclick="return sweetAlert();">
                <i class="ni ni-check-bold text-default"></i>
                <span class="nav-link-text">Log mode</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('modifylogmode')}}">
                <i class=" ni ni-atom text-info " ></i>
                <span class="nav-link-text">Change log mode</span>
              </a>
            </li>
            <hr class="my-3">
            <li class="nav-item">
                <a class="nav-link" href="{{url('deleteForm')}}" onclick="return sweetAlert();">
                  <i class="ni ni-fat-remove text-orange"></i>
                  <span class="nav-link-text"> delete backups</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('deletebackupbynumber')}}">
                  <i class="ni ni-fat-remove text-orange"></i>
                  <span class="nav-link-text"> Delete backup by number</span>
                </a>
              </li>
          </ul>
          <!-- Divider -->


          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->



