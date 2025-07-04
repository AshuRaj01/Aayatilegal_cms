<header class="header">
    <div class="header-left">
        <button class="toggle-sidebar">
            <i class="fas fa-bars"></i>
        </button>
        <h2>Dashboard</h2>
    </div>
    
    <div class="header-right">
        <div class="dropdown">
            <button class="dropdown-btn">
                <i class="fas fa-plus"></i>
                <span>Quick Add</span>
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="{{ url('backoffice/Add-Post') }}"><i class="fas fa-pen"></i> New Post</a>
                <a href="{{ url('backoffice/Library') }}"><i class="fas fa-image"></i> Media</a>
                <a href="{{ url('backoffice/All-Users') }}"><i class="fas fa-user"></i> User</a>
                <a href="{{ url('backoffice/All-Category') }}"><i class="fas fa-tag"></i> Category</a>
            </div>
        </div>
        
        <div class="notification">
            <i class="fas fa-bell"></i>
            <span class="notification-count">3</span>
        </div>
        
        <div class="user-profile">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User">
            <div class="user-info">
                <h4>Sarah Johnson</h4>
                <p>Admin</p>
            </div>
        </div>
    </div>
</header>
<script>
    // Show Side Bar on click (Means Add active class)
    document.querySelector('.toggle-sidebar').addEventListener('click', function() {
        document.querySelector('.sidebar').classList.toggle('active');
    });
</script>