<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" title="comments">
          <i class="far fa-comments"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../assets/images/avatar.webp" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Subho
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Hello World</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../assets/images/avatar.webp" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Soham
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Hello World</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../assets/images/avatar.webp" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Anurag
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Hello World</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" title="notifications">
          <i class="far fa-bell"></i>       
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link" title="settings">
            <i class="fa-solid fa-gear"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link" title="support">
             <i class="fa-solid fa-headset"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="../logout.php" class="nav-link" title="Logout">
            Logout <i class="fa fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 bg-dark">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../assets/images/avatar.webp" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"> OSMS Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="<?=$site_url?>admin/dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard               
              </p>
            </a>            
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Accounts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=$site_url?>admin/user-accounts.php?user=teacher" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Teaching Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=$site_url?>admin/user-accounts.php?user=staff" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Non-teaching Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=$site_url?>admin/user-accounts.php?user=student" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=$site_url?>admin/user-accounts.php?user=parent" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Parents</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=$site_url?>admin/user-accounts.php?user=library" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Library</p>
                </a>
              </li>            
          </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Manage Classes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=$site_url?>admin/sections.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sections</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=$site_url?>admin/classes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Classes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=$site_url?>admin/courses.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Online Courses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=$site_url?>admin/subjects.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subjects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=$site_url?>admin/lessons.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lessons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Manage Examinations
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Classs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sections</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subjects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Extras</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Manage Attendence
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Teaching Staffs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Non-Teaching Staffs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Students</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                Manage Accounting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Make Approvals</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approve Approvals</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admininstravtive Works</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Financial Works</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daily Reports</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-comment-alt"></i>
              <p>
                General
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>School Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notices & Announcements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blogs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Feedbacks & Reports</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">