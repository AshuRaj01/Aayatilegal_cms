<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Blog Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ url('public/backoffice/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('backoffice/assets/css/style.css') }}">
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        {{-- <?php include_once 'includes/sidebar.php'; ?> --}}
        @include('backend.layout.sidebar');
        
        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            {{-- <?php include_once 'includes/header.php'; ?> --}}
            @include('backend.layout.header');
            
            <!-- Content Area -->
            <div class="content">
                <div class="page-header">
                    <h1>Welcome back, Sarah!</h1>
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        New Post
                    </button>
                </div>
                
                <!-- Stats Cards -->
                <div class="stats-cards">
                    <div class="stat-card">
                        <div class="stat-card-header">
                            <h3 class="stat-card-title">Total Posts</h3>
                            <div class="stat-card-icon icon-blue">
                                <i class="fas fa-pen"></i>
                            </div>
                        </div>
                        <h2 class="stat-card-value">1,248</h2>
                        <div class="stat-card-change change-up">
                            <i class="fas fa-arrow-up"></i>
                            <span>12% from last month</span>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-card-header">
                            <h3 class="stat-card-title">Published</h3>
                            <div class="stat-card-icon icon-green">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <h2 class="stat-card-value">984</h2>
                        <div class="stat-card-change change-up">
                            <i class="fas fa-arrow-up"></i>
                            <span>8% from last month</span>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-card-header">
                            <h3 class="stat-card-title">Comments</h3>
                            <div class="stat-card-icon icon-orange">
                                <i class="fas fa-comment"></i>
                            </div>
                        </div>
                        <h2 class="stat-card-value">3,452</h2>
                        <div class="stat-card-change change-down">
                            <i class="fas fa-arrow-down"></i>
                            <span>5% from last month</span>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-card-header">
                            <h3 class="stat-card-title">Users</h3>
                            <div class="stat-card-icon icon-red">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <h2 class="stat-card-value">1,056</h2>
                        <div class="stat-card-change change-up">
                            <i class="fas fa-arrow-up"></i>
                            <span>24% from last month</span>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Posts Table -->
                <div class="recent-posts">
                    <div class="table-header">
                        <h3>Recent Posts</h3>
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Search posts...">
                        </div>
                    </div>
                    
                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Categories</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10 Tips for Better Blog Writing</td>
                                <td>Sarah Johnson</td>
                                <td>Writing, Tips</td>
                                <td>May 15, 2023</td>
                                <td><span class="status status-published">Published</span></td>
                                <td>
                                    <div class="action-btns">
                                        <button class="action-btn view-btn">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="action-btn edit-btn">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="action-btn delete-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>How to Use CSS Grid in 2023</td>
                                <td>Mike Peterson</td>
                                <td>CSS, Web Design</td>
                                <td>May 12, 2023</td>
                                <td><span class="status status-published">Published</span></td>
                                <td>
                                    <div class="action-btns">
                                        <button class="action-btn view-btn">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="action-btn edit-btn">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="action-btn delete-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>React Hooks Explained</td>
                                <td>Sarah Johnson</td>
                                <td>React, JavaScript</td>
                                <td>May 10, 2023</td>
                                <td><span class="status status-pending">Pending</span></td>
                                <td>
                                    <div class="action-btns">
                                        <button class="action-btn view-btn">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="action-btn edit-btn">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="action-btn delete-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Building a REST API with Node.js</td>
                                <td>David Wilson</td>
                                <td>Node.js, Backend</td>
                                <td>May 8, 2023</td>
                                <td><span class="status status-draft">Draft</span></td>
                                <td>
                                    <div class="action-btns">
                                        <button class="action-btn view-btn">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="action-btn edit-btn">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="action-btn delete-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>SEO Best Practices for 2023</td>
                                <td>Emily Davis</td>
                                <td>SEO, Marketing</td>
                                <td>May 5, 2023</td>
                                <td><span class="status status-published">Published</span></td>
                                <td>
                                    <div class="action-btns">
                                        <button class="action-btn view-btn">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="action-btn edit-btn">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="action-btn delete-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>