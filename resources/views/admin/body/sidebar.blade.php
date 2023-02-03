 <div class="vertical-menu">

     <div data-simplebar class="h-100">

         <!-- User details -->
         <!--- Sidemenu -->
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title">Menu</li>

                 @if (Auth::user()->role == 1)

                 <li>
                     <a href="#" class="waves-effect">
                         <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                         <span>Dashboard</span>
                     </a>
                 </li>
                 @endif
                 @if (Auth::user()->role == 0)
                 <li>
                    <a href="{{route('student.dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>My Dashboard</span>
                    </a>
                </li>
                @endif
                @if (Auth::user()->role == null)

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class=" ri-group-fill"></i>
                        <span>Homeworks</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('student.myhomeworks') }}">My Homeworks</a></li>
                    </ul>
                </li>
                @endif

                 @if (Auth::user()->role == 1)
                 <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class=" ri-admin-fill"></i>
                        <span>Teachers</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('teacher.all') }}">All Teachers</a></li>
                    </ul>
                </li>
                 @endif
                 {{-- @if (Auth::user()->role == 1)

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class=" ri-group-fill"></i>
                         <span>Students</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('student.all') }}">All Student</a></li>
                     </ul>
                 </li>
                 @endif --}}

                 @if (Auth::user()->role == 1)

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class=" ri-book-mark-line"></i>
                         <span>Subjects</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('subject.all') }}">Subject List</a></li>
                         <li><a href="{{ route('subject.all') }}">Add Subject</a></li>

                     </ul>
                 </li>
                 @endif

                 @if (Auth::user()->role == 1)

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-booklet-fill"></i>
                         <span>Homework</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('homework.all') }}">Homework List</a></li>
                         <li><a href="{{ route('homework.add') }}">Add Homework</a></li>

                     </ul>
                 </li>
                 @endif





             </ul>
         </div>
         <!-- Sidebar -->
     </div>
 </div>
