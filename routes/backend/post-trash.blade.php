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
            transition: all 0.3s ease;
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

        .btn-danger {
            background-color: #f72585;
            color: white;
        }

        .btn-danger:hover {
            background-color: #d1145a;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: white;
            color: #6c757d;
            border: 1px solid #ddd;
        }

        .btn-secondary:hover {
            background-color: #f8f9fa;
        }

        .empty-state {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
        }

        .empty-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            color: #6c757d;
        }

        .empty-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #1a1a2e;
        }

        .empty-description {
            color: #6c757d;
            margin-bottom: 20px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
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

        .bulk-actions {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .bulk-checkbox {
            margin-right: 10px;
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
            transition: all 0.3s ease;
        }

        .search-bar input:focus {
            outline: none;
            border-color: #4361ee;
            box-shadow: 0 0 0 3px #e6f0fd;
        }

        .search-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            width: 16px;
            height: 16px;
            opacity: 0.6;
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
            background-color: #fff5f7;
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

        .deleted-date {
            font-size: 13px;
            color: #f72585;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .icon {
            width: 16px;
            height: 16px;
            display: inline-block;
            vertical-align: middle;
        }

        .action-btn {
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px 8px;
            border-radius: 4px;
            transition: all 0.3s ease;
            color: #6c757d;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 13px;
        }

        .action-btn:hover {
            background-color: #f0f0f0;
            color: #4361ee;
        }

        .danger-btn {
            color: #f72585;
        }

        .danger-btn:hover {
            background-color: #fff5f7;
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
            transition: all 0.3s ease;
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
            .main-content {
                margin-left: 0;
                padding-top: 70px; /* Adjust based on your top bar height */
            }
            
            .posts-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .search-bar {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .bulk-actions {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            
            .posts-table {
                display: block;
                overflow-x: auto;
            }
            
            .action-btn span {
                display: none;
            }
            
            .action-btn {
                padding: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <!-- <?php include_once 'includes/sidebar.php'; ?> -->
        @include('backend.layout.sidebar');
        
        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <!-- <?php include_once 'includes/header.php'; ?> -->
            @include('backend.layout.header');
            
            <!-- Content Area -->
            <div class="content">
                <div class="page-header">
                    <h1 class="page-title">Trash</h1>
                    <div>
                        <button class="btn btn-secondary">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>
                            <span>Empty Trash</span>
                        </button>
                    </div>
                </div>
        
                <!-- Empty State (comment out when there are items) -->
                <!--
                <div class="empty-state">
                    <svg class="empty-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 6h19l-2 14H5L3 6zm3-4h12l-1 2H7L6 2z"></path>
                        <line x1="10" y1="10" x2="10" y2="16"></line>
                        <line x1="14" y1="10" x2="14" y2="16"></line>
                    </svg>
                    <h3 class="empty-title">Trash is Empty</h3>
                    <p class="empty-description">Deleted posts will appear here. You can restore them or permanently delete them.</p>
                    <button class="btn btn-primary">View All Posts</button>
                </div>
                -->
                
                <!-- Posts Table (uncomment when there are items) -->
                <div class="posts-container">
                    <div class="posts-header">
                        <div class="bulk-actions">
                            <input type="checkbox" id="bulk-select" class="bulk-checkbox">
                            <label for="bulk-select">Select All</label>
                            <button class="btn btn-secondary">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 11l19-9-9 19-2-8-8-2z"></path>
                                </svg>
                                <span>Restore Selected</span>
                            </button>
                            <button class="btn btn-danger">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                                <span>Delete Permanently</span>
                            </button>
                        </div>
                        <div class="search-bar">
                            <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                            <input type="text" placeholder="Search in trash...">
                        </div>
                    </div>
                    
                    <table class="posts-table">
                        <thead>
                            <tr>
                                <th width="40px"></th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Categories</th>
                                <th>Deleted On</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>
                                    <div class="post-title">Getting Started with Modern Web Development</div>
                                    <div class="post-meta">
                                        <span>ID: #12345</span>
                                        <span>Originally published: May 15, 2023</span>
                                    </div>
                                </td>
                                <td>John Doe</td>
                                <td>Development</td>
                                <td>
                                    <div class="deleted-date">
                                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        </svg>
                                        <span>May 18, 2023</span>
                                    </div>
                                </td>
                                <td>
                                    <button class="action-btn" title="Restore">
                                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 11l19-9-9 19-2-8-8-2z"></path>
                                        </svg>
                                        <span>Restore</span>
                                    </button>
                                    <button class="action-btn danger-btn" title="Delete Permanently">
                                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                        <span>Delete</span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>
                                    <div class="post-title">The Future of Artificial Intelligence</div>
                                    <div class="post-meta">
                                        <span>ID: #12346</span>
                                        <span>Originally published: May 18, 2023</span>
                                    </div>
                                </td>
                                <td>Jane Smith</td>
                                <td>Technology</td>
                                <td>
                                    <div class="deleted-date">
                                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        </svg>
                                        <span>May 20, 2023</span>
                                    </div>
                                </td>
                                <td>
                                    <button class="action-btn" title="Restore">
                                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 11l19-9-9 19-2-8-8-2z"></path>
                                        </svg>
                                        <span>Restore</span>
                                    </button>
                                    <button class="action-btn danger-btn" title="Delete Permanently">
                                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                        <span>Delete</span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>
                                    <div class="post-title">10 Tips for Better Productivity</div>
                                    <div class="post-meta">
                                        <span>ID: #12347</span>
                                        <span>Originally published: May 20, 2023</span>
                                    </div>
                                </td>
                                <td>John Doe</td>
                                <td>Productivity</td>
                                <td>
                                    <div class="deleted-date">
                                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        </svg>
                                        <span>May 22, 2023</span>
                                    </div>
                                </td>
                                <td>
                                    <button class="action-btn" title="Restore">
                                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 11l19-9-9 19-2-8-8-2z"></path>
                                        </svg>
                                        <span>Restore</span>
                                    </button>
                                    <button class="action-btn danger-btn" title="Delete Permanently">
                                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                        <span>Delete</span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="pagination">
                        <div class="page-info">Showing 1 to 3 of 3 deleted posts</div>
                        <div class="page-controls">
                            <button class="page-btn" disabled>Previous</button>
                            <button class="page-btn active">1</button>
                            <button class="page-btn" disabled>Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Simple script for featured image upload preview
        document.querySelector('.featured-image').addEventListener('click', function() {
            const input = document.createElement('input');
            input.type = 'file';
            input.accept = 'image/*';
            
            input.onchange = e => { 
                const file = e.target.files[0];
                const reader = new FileReader();
                
                reader.onload = function(event) {
                    const img = document.getElementById('featured-image-preview');
                    img.src = event.target.result;
                    img.style.display = 'block';
                    document.querySelector('.featured-image .upload-text').style.display = 'none';
                };
                
                reader.readAsDataURL(file);
            };
            
            input.click();
        });
    </script>

</body>
</html>