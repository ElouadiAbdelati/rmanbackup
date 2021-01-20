  <!-- Topnav -->
  <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Search form -->
              <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                  <div class="form-group mb-0">
                      <div class="input-group input-group-alternative input-group-merge">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-search"></i></span>
                          </div>
                          <input class="form-control" placeholder="Search" type="text">
                      </div>
                  </div>
                  <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
                      aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </form>
              <!-- Navbar links -->
              <ul class="navbar-nav align-items-center  ml-md-auto ">

                  <li class="nav-item d-sm-none">
                      <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                          <i class="ni ni-zoom-split-in"></i>
                      </a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false">
                          <i class="ni ni-bell-55"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                          <!-- Dropdown header -->
                          <div class="px-3 py-3">
                              <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">0</strong>
                                  notifications.</h6>
                          </div>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false">
                          <i class="ni ni-ungroup"></i>
                      </a>

                  </li>
              </ul>
              <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                  <li class="nav-item dropdown">
                      <a class="nav-link pr-0" href="{{ url('logout') }}" >
                        <span class="mb-0 text-sm  font-weight-bold">Log out</span>
                      </a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  <!-- Header -->
