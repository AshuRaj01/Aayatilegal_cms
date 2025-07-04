<!-- Sidebar -->
<aside class="sidebar">
    <div class="sidebar-header">
        <h3>BlogAdmin</h3>
        <span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x-icon lucide-x close-sidebar-menu"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </span>
    </div>
    
    <div class="sidebar-menu">
        <!-- Dashboard Section -->
        <ul>
            <li>
                <a href="{{ url('backoffice/dashboard') }}" class="active">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
        </ul>
        
        <!-- Posts Section -->
        <p class="menu-title">Posts</p>
        <ul>
            <li class="menu-item has-dropdown">
                <a href="#" class="dropdown-toggle">
                    <i class="fas fa-pen"></i>
                    <span>Posts</span>
                    <i class="fas fa-chevron-right menu-arrow"></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{ url('backoffice/All-Post') }}"><i class="fas fa-list"></i> All Posts</a></li>
                    <li><a href="{{ url('backoffice/Add-Post') }}"><i class="fas fa-plus"></i> Add New</a></li>
                    <li><a href="{{ url('backoffice/Trash') }}"><i class="fas fa-trash"></i> Trash</a></li>
                </ul>
            </li>
            <li class="menu-item has-dropdown">
                <a href="#" class="dropdown-toggle">
                    <i class="fas fa-tags"></i>
                    <span>Categories</span>
                    <i class="fas fa-chevron-right menu-arrow"></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{ url('backoffice/All-Category') }}"><i class="fas fa-list"></i> All Categories</a></li>
                    <!-- <li><a href="#"><i class="fas fa-plus"></i> Add New</a></li> -->
                </ul>
            </li>
            {{-- <li>
                <a href="{{ url('backoffice/Tags') }}">
                    <i class="fas fa-tag"></i>
                    <span>Tags</span>
                </a>
            </li> --}}
        </ul>
        
        <!-- Media Section -->
        <p class="menu-title">Media</p>
        <ul>
            <li>
                <a href="{{ url('backoffice/Library') }}">
                    <i class="fas fa-image"></i>
                    <span>Library</span>
                </a>
            </li>
            <!-- <li>
                <a href="#">
                    <i class="fas fa-upload"></i>
                    <span>Upload</span>
                </a>
            </li> -->
        </ul>
        
        <!-- Comments Section -->
        <p class="menu-title">Comments</p>
        <ul>
            <li class="menu-item has-dropdown">
                <a class="dropdown-toggle">
                    <i class="fas fa-comments"></i>
                    <span>Comments</span>
                    <i class="fas fa-chevron-right menu-arrow"></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{ url('backoffice/All-Comments') }}"><i class="fas fa-comments"></i> All Comments</a></li>
                    <!-- <li><a href="#"><i class="fas fa-user-plus"></i> Add New</a></li> -->
                    <li><a href="{{ url('backoffice/Pending-Comments') }}"><i class="fas fa-comment-dots"></i> Pending Comments</a></li>
                </ul>
            </li>
        </ul>

        <!-- User Management Section -->
        <p class="menu-title">Users</p>
        <ul>
            <li class="menu-item has-dropdown">
                <a href="#" class="dropdown-toggle">
                    <i class="fas fa-users"></i>
                    <span>Users</span>
                    <i class="fas fa-chevron-right menu-arrow"></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{ url('backoffice/All-Users') }}"><i class="fas fa-list"></i> All Users</a></li>
                    <!-- <li><a href="#"><i class="fas fa-user-plus"></i> Add New</a></li> -->
                    {{-- <li><a href="{{ url('backoffice/All-Roles') }}"><i class="fas fa-user-shield"></i> Roles</a></li> --}}
                </ul>
            </li>
            <li>
                <form method="POST" action="{{ url('backoffice/logout') }}" style="display:inline;">
                    @csrf
                    <button type="submit" style="background: none;border: none;cursor: pointer;color: #d1d4d8;margin-left: 17px;">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </li>
            <!-- <li>
                <a href="#">
                    <i class="fas fa-user-cog"></i>
                    <span>Your Profile</span>
                </a>
            </li> -->
        </ul>
        
        <!-- Settings Section -->
        <!-- <p class="menu-title">Settings</p>
        <ul>
            <li class="menu-item has-dropdown">
                <a href="#" class="dropdown-toggle">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                    <i class="fas fa-chevron-right menu-arrow"></i>
                </a>
                <ul class="submenu">
                    <li><a href="#"><i class="fas fa-cog"></i> General</a></li>
                    <li><a href="#"><i class="fas fa-paint-brush"></i> Appearance</a></li>
                    <li><a href="#"><i class="fas fa-plug"></i> Plugins</a></li>
                </ul>
            </li>
        </ul> -->
    </div>
</aside>
<script>    
    // Hide Side Bar on click (Means Remove active class)
    document.querySelector('.close-sidebar-menu').addEventListener('click', function() {
        document.querySelector('.sidebar').classList.toggle('active');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach(dropdown => {
            if (!dropdown.contains(event.target)) {
                const dropdownContent = dropdown.querySelector('.dropdown-content');
                if (dropdownContent) {
                    dropdownContent.style.display = 'none';
                }
            }
        });
    });

    // Sidebar dropdown functionality
    document.querySelectorAll('.menu-item.has-dropdown .dropdown-toggle').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const parent = this.parentElement;
            parent.classList.toggle('active');
            
            // Close other open dropdowns
            document.querySelectorAll('.menu-item.has-dropdown').forEach(otherItem => {
                if (otherItem !== parent) {
                    otherItem.classList.remove('active');
                }
            });
        });
    });
</script>