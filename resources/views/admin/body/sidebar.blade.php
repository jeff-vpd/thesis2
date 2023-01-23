 <div class="vertical-menu">

     <div data-simplebar class="h-100">

         <!-- User details -->


         <!--- Sidemenu -->
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title">Menu</li>

                 <li>
                     <a href="#" class="waves-effect">
                         <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                         <span>Dashboard</span>
                     </a>
                 </li>

                 <li>
                     <a href="calendar.html" class=" waves-effect">
                         <i class="ri-calendar-2-line"></i>
                         <span>Calendar</span>
                     </a>
                 </li>
                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class=" ri-admin-fill"></i>
                         <span>Teachers</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('student.all') }}">All Teachers</a></li>
                         <li><a href="email-read.html">Assign Subject</a></li>
                     </ul>
                 </li>
                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class=" ri-group-fill"></i>
                         <span>Students</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('student.all') }}">All Student</a></li>
                         <li><a href="email-read.html">Add Subject to Students</a></li>
                     </ul>
                 </li>
                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class=" ri-book-mark-line"></i>
                         <span>Subjects</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('subject.all') }}">Subject List</a></li>
                         <li><a href="email-inbox.html">Add Subject</a></li>

                     </ul>
                 </li>
                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-booklet-fill"></i>
                         <span>Homework</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="">Homework List</a></li>
                         <li><a href="email-inbox.html">Add Homework</a></li>

                     </ul>
                 </li>
                 <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-booklet-fill"></i>
                        <span>Classroom</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="">Classroom List</a></li>
                        <li><a href="email-inbox.html">Add Classroom</a></li>

                    </ul>
                </li>


                 <li class="menu-title">Pages</li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-account-circle-line"></i>
                         <span>Authentication</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="auth-login.html">Login</a></li>
                         <li><a href="auth-register.html">Register</a></li>
                         <li><a href="auth-recoverpw.html">Recover Password</a></li>
                         <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-profile-line"></i>
                         <span>Utility</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="pages-starter.html">Starter Page</a></li>
                         <li><a href="pages-timeline.html">Timeline</a></li>
                         <li><a href="pages-directory.html">Directory</a></li>
                         <li><a href="pages-invoice.html">Invoice</a></li>
                         <li><a href="pages-404.html">Error 404</a></li>
                         <li><a href="pages-500.html">Error 500</a></li>
                     </ul>
                 </li>






             </ul>
         </div>
         <!-- Sidebar -->
     </div>
 </div>
