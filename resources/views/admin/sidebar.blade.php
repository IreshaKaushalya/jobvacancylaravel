<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">

          <div class="sidebar-brand active">
            <a href=""> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">ADMIN</span>
            </a>
          </div>

          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>

           

            <li class="dropdown ">
              <a href="{{ url('add_job_view') }}" class="nav-link"><i data-feather="monitor"></i><span>Add Jobs</span></a>
            </li>

             <li class="dropdown ">
              <a href="{{ url('showapplications') }}" class="nav-link"><i data-feather="monitor"></i><span>All Applications</span></a>
            </li>

            <li class="dropdown">
              <a href="{{ url('all_jobs') }}" class="nav-link"><i data-feather="monitor"></i><span>All Jobs</span></a>
            </li>

            <li class="dropdown">
              <a href="{{ url('add_clientphoto') }}" class="nav-link"><i data-feather="monitor"></i><span>Company Logo Photo</span></a>
            </li>

                       
          </ul>
        </aside>
      </div>