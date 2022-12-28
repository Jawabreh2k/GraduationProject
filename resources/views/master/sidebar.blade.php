<!--**********************************
            Sidebar start
        ***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li><a class="has-arrow" href="{{route('admin.dashboard.index')}}" aria-expanded="false">
                    <i class="la la-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-user"></i>
                    <span class="nav-text">Students</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.student.table')}}">Manage Students List</a></li>
                    <li><a href="{{route('admin.student.create')}}">Add New Student</a></li>

                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-building"></i>
                    <span class="nav-text">Companies</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.executive.index')}}">Manage Companies List</a></li>

                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-question"></i>
                    <span class="nav-text">Tasks</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.task.index')}}">Manage Tasks List</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-compass"></i>
                    <span class="nav-text">Setting</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.collage.index')}}">Collages</a></li>
                    <li><a href="{{route('admin.specialty.index')}}">Specialties</a></li>
                    <li><a href="{{route('admin.room.index')}}">Classes</a></li>
                    <li><a href="{{route('admin.issue.index')}}">Issue Type</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
