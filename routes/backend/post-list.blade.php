<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Blog Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ url('public/backoffice/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('backoffice/assets/css/style.css') }}">
    <style>
        body {
            background-color: #f5f7fb;
            color: #1a1a2e;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .page-title {
            font-size: 24px;
            font-weight: 600;
            color: #1a1a2e;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background-color: #4361ee;
            color: white;
        }

        .btn-primary:hover {
            background-color: #3f37c9;
            transform: translateY(-2px);
        }

        .posts-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .posts-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #eee;
        }

        .search-bar {
            position: relative;
            width: 300px;
        }

        .search-bar input {
            width: 100%;
            padding: 10px 15px 10px 40px;
            border-radius: 8px;
            border: 1px solid #ddd;
            transition: all 0.3s ease;;
        }

        .search-bar input:focus {
            outline: none;
            border-color: #4361ee;
            box-shadow: 0 0 0 3px #e6f0fd;
        }

        .search-bar::before {
            content: "🔍";
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.6;
        }

        .filter-options {
            display: flex;
            gap: 10px;
        }

        .filter-btn {
            padding: 8px 15px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;;
        }

        .filter-btn:hover, .filter-btn.active {
            background-color: #4361ee;
            color: white;
            border-color: #4361ee;
        }

        .posts-table {
            width: 100%;
            border-collapse: collapse;
        }

        .posts-table th {
            text-align: left;
            padding: 15px 20px;
            background-color: #f8f9fa;
            color: #6c757d;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 0.5px;
        }

        .posts-table td {
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
            vertical-align: middle;
        }

        .posts-table tr:last-child td {
            border-bottom: none;
        }

        .posts-table tr:hover {
            background-color: #e6f0fd;
        }

        .post-title {
            font-weight: 500;
            color: #1a1a2e;
            margin-bottom: 5px;
        }

        .post-meta {
            display: flex;
            gap: 15px;
            font-size: 13px;
            color: #6c757d;
        }

        .status {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .status-published {
            background-color: #e6f7ee;
            color: #00a854;
        }

        .status-draft {
            background-color: #fff7e6;
            color: #fa8c16;
        }

        .status-scheduled {
            background-color: #e6f7ff;
            color: #1890ff;
        }

        .action-btn {
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
            border-radius: 4px;
            transition: all 0.3s ease;;
            color: #6c757d;
        }

        .action-btn:hover {
            background-color: #f0f0f0;
            color: #4361ee;
        }

        .pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-top: 1px solid #eee;
        }

        .page-info {
            color: #6c757d;
            font-size: 14px;
        }

        .page-controls {
            display: flex;
            gap: 10px;
        }

        .page-btn {
            padding: 8px 12px;
            border-radius: 4px;
            border: 1px solid #ddd;
            background-color: white;
            cursor: pointer;
            transition: all 0.3s ease;;
        }

        .page-btn:hover {
            background-color: #4361ee;
            color: white;
            border-color: #4361ee;
        }

        .page-btn.active {
            background-color: #4361ee;
            color: white;
            border-color: #4361ee;
        }

        .page-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .filter-options {
                flex-wrap: wrap;
            }
        }

        @media (max-width: 768px) {
            .posts-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .search-bar {
                width: 100%;
            }
            
            .posts-table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>
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
                    <h1 class="page-title">All Posts</h1>
                    <button class="btn btn-primary">
                        <span>+ New Post</span>
                    </button>
                </div>
                    
                <div class="posts-container">
                    <div class="posts-header">
                        <div class="search-bar">
                            <input type="text" placeholder="Search posts...">
                        </div>
                        <div class="filter-options">
                            <button class="filter-btn all active">All</button>
                            <button class="filter-btn published">Published</button>
                            <button class="filter-btn drafts">Drafts</button>
                            <button class="filter-btn scheduled">Scheduled</button>
                            <button class="filter-btn trash">Trash</button>
                        </div>
                    </div>
                    
                    <table class="posts-table">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Categories</th>
                                <th>Tags</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="post-title">Getting Started with Modern Web Development</div>
                                    <div class="post-meta">
                                        <span>ID: #12345</span>
                                        <span>Views: 1,234</span>
                                    </div>
                                </td>
                                <td>John Doe</td>
                                <td>Development</td>
                                <td>web, javascript</td>
                                <td>May 15, 2023</td>
                                <td><span class="status status-published">Published</span></td>
                                <td>
                                    <button class="action-btn" title="Edit">✏️</button>
                                    <button class="action-btn" title="View">👁️</button>
                                    <button class="action-btn" title="Delete">🗑️</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <div class="post-title">The Future of Artificial Intelligence</div>
                                    <div class="post-meta">
                                        <span>ID: #12346</span>
                                        <span>Views: 3,456</span>
                                    </div>
                                </td>
                                <td>Jane Smith</td>
                                <td>Technology</td>
                                <td>AI, future</td>
                                <td>May 18, 2023</td>
                                <td><span class="status status-published">Published</span></td>
                                <td>
                                    <button class="action-btn" title="Edit">✏️</button>
                                    <button class="action-btn" title="View">👁️</button>
                                    <button class="action-btn" title="Delete">🗑️</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <div class="post-title">10 Tips for Better Productivity</div>
                                    <div class="post-meta">
                                        <span>ID: #12347</span>
                                        <span>Views: 0</span>
                                    </div>
                                </td>
                                <td>John Doe</td>
                                <td>Productivity</td>
                                <td>tips, work</td>
                                <td>May 20, 2023</td>
                                <td><span class="status status-draft">Draft</span></td>
                                <td>
                                    <button class="action-btn" title="Edit">✏️</button>
                                    <button class="action-btn" title="View">👁️</button>
                                    <button class="action-btn" title="Delete">🗑️</button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <div class="post-title">Summer Travel Destinations for 2023</div>
                                    <div class="post-meta">
                                        <span>ID: #12348</span>
                                        <span>Views: 0</span>
                                    </div>
                                </td>
                                <td>Mike Johnson</td>
                                <td>Travel</td>
                                <td>summer, vacation</td>
                                <td>Jun 1, 2023</td>
                                <td><span class="status status-scheduled">Scheduled</span></td>
                                <td>
                                    <button class="action-btn" title="Edit">✏️</button>
                                    <button class="action-btn" title="View">👁️</button>
                                    <button class="action-btn" title="Delete">🗑️</button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    <div class="post-title">Healthy Eating Habits You Should Adopt</div>
                                    <div class="post-meta">
                                        <span>ID: #12349</span>
                                        <span>Views: 2,789</span>
                                    </div>
                                </td>
                                <td>Sarah Williams</td>
                                <td>Health</td>
                                <td>food, nutrition</td>
                                <td>May 10, 2023</td>
                                <td><span class="status status-published">Published</span></td>
                                <td>
                                    <button class="action-btn" title="Edit">✏️</button>
                                    <button class="action-btn" title="View">👁️</button>
                                    <button class="action-btn" title="Delete">🗑️</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="pagination">
                        <div class="page-info">Showing 1 to 5 of 23 posts</div>
                        <div class="page-controls">
                            <button class="page-btn" disabled>Previous</button>
                            <button class="page-btn active">1</button>
                            <button class="page-btn">2</button>
                            <button class="page-btn">3</button>
                            <button class="page-btn">4</button>
                            <button class="page-btn">5</button>
                            <button class="page-btn">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>