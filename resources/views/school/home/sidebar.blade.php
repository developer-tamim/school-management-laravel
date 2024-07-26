<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{ route('school.dashboard') }}"><!-- <img src="assets/images/logo.png" alt="" /> --><span>School Name</span></a></div>
                <li class="label">Dashboard</li>
                <li class="active"><a href="{{ route('school.dashboard') }}" class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard</a>

                </li>


                <li class="label">Teachers</li>
                <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> Teachers <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('teacher.index') }}">List</a></li>
                        <li><a href="ui-alerts.html">Add</a></li>
                    </ul>
                </li>

                <li class="label">Students</li>
                <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> Students <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="ui-typography.html">List</a></li>
                        <li><a href="ui-alerts.html">Add</a></li>
                    </ul>
                </li>
                <li><a><i class="ti-close"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>
