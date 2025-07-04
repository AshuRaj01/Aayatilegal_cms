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
        :root {
            --primary: #4361ee;
            --primary-light: #e6f0fd;
            --secondary: #3f37c9;
            --dark: #1a1a2e;
            --light: #f8f9fa;
            --gray: #6c757d;
            --success: #4cc9f0;
            --warning: #f8961e;
            --danger: #f72585;
            --border-radius: 8px;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
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
            color: var(--dark);
        }

        .btn {
            padding: 10px 20px;
            border-radius: var(--border-radius);
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--secondary);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: white;
            color: var(--gray);
            border: 1px solid #ddd;
        }

        .btn-secondary:hover {
            background-color: #f8f9fa;
        }

        .tags-container {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 20px;
        }

        .tags-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .search-bar {
            position: relative;
            width: 300px;
        }

        .search-bar input {
            width: 100%;
            padding: 10px 15px 10px 40px;
            border-radius: var(--border-radius);
            border: 1px solid #ddd;
            transition: var(--transition);
        }

        .search-bar input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px var(--primary-light);
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

        .tags-table {
            width: 100%;
            border-collapse: collapse;
        }

        .tags-table th {
            text-align: left;
            padding: 15px 20px;
            background-color: #f8f9fa;
            color: var(--gray);
            font-weight: 500;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 0.5px;
        }

        .tags-table td {
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
            vertical-align: middle;
        }

        .tags-table tr:last-child td {
            border-bottom: none;
        }

        .tags-table tr:hover {
            background-color: var(--primary-light);
        }

        .tag-name {
            font-weight: 500;
            color: var(--dark);
        }

        .tag-slug {
            font-size: 13px;
            color: var(--gray);
            margin-top: 5px;
        }

        .tag-count {
            display: inline-block;
            padding: 3px 8px;
            background-color: #f0f0f0;
            border-radius: 20px;
            font-size: 12px;
            color: var(--gray);
        }

        .action-btn {
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
            border-radius: 4px;
            transition: var(--transition);
            color: var(--gray);
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 13px;
        }

        .action-btn:hover {
            background-color: #f0f0f0;
            color: var(--primary);
        }

        .danger-btn {
            color: var(--danger);
        }

        .danger-btn:hover {
            background-color: #fff5f7;
        }

        .icon {
            width: 16px;
            height: 16px;
            display: inline-block;
            vertical-align: middle;
        }

        .add-tag-form {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 20px;
            margin-bottom: 30px;
        }

        .form-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            color: var(--dark);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
        }

        .form-control {
            width: 100%;
            padding: 10px 15px;
            border-radius: var(--border-radius);
            border: 1px solid #ddd;
            transition: var(--transition);
            font-size: 15px;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px var(--primary-light);
        }

        .form-hint {
            font-size: 13px;
            color: var(--gray);
            margin-top: 5px;
        }

        .form-footer {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .page-info {
            color: var(--gray);
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
            transition: var(--transition);
        }

        .page-btn:hover {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .page-btn.active {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
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
            
            .tags-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .search-bar {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .tags-table {
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
        <?php include_once 'includes/sidebar.php'; ?>
        @include('backend.layout.sidebar');
        
        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <?php include_once 'includes/header.php'; ?>
            
            <!-- Content Area -->
            <div class="content">
                <div class="page-header">
                    <h1 class="page-title">Media Library</h1>
                    <button class="btn btn-primary">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="17 8 12 3 7 8"></polyline>
                            <line x1="12" y1="3" x2="12" y2="15"></line>
                        </svg>
                        <span>Upload Files</span>
                    </button>
                </div>
                
                <div class="media-container">
                    <div class="page-header">
                        <h1 class="page-title">Tags</h1>
                        <button class="btn btn-primary" id="toggle-form">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            <span>Add New Tag</span>
                        </button>
                    </div>
                    
                    <div class="add-tag-form" id="tag-form" style="display: none;">
                        <h3 class="form-title">Add New Tag</h3>
                        <div class="form-group">
                            <label for="tag-name" class="form-label">Tag Name</label>
                            <input type="text" id="tag-name" class="form-control" placeholder="Enter tag name">
                            <p class="form-hint">The name is how it appears on your site.</p>
                        </div>
                        <div class="form-group">
                            <label for="tag-slug" class="form-label">Slug</label>
                            <input type="text" id="tag-slug" class="form-control" placeholder="Enter tag slug">
                            <p class="form-hint">The "slug" is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</p>
                        </div>
                        <div class="form-group">
                            <label for="tag-description" class="form-label">Description (Optional)</label>
                            <textarea id="tag-description" class="form-control" rows="3" placeholder="Enter description"></textarea>
                            <p class="form-hint">The description is not prominent by default; however, some themes may show it.</p>
                        </div>
                        <div class="form-footer">
                            <button class="btn btn-secondary" id="cancel-form">Cancel</button>
                            <button class="btn btn-primary">Add New Tag</button>
                        </div>
                    </div>
                    
                    <div class="tags-container">
                        <div class="tags-header">
                            <div class="search-bar">
                                <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                                <input type="text" placeholder="Search tags...">
                            </div>
                            <button class="btn btn-secondary">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg>
                                <span>Bulk Actions</span>
                            </button>
                        </div>
                        
                        <table class="tags-table">
                            <thead>
                                <tr>
                                    <th width="40px"><input type="checkbox"></th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Slug</th>
                                    <th>Posts</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>
                                        <div class="tag-name">Technology</div>
                                        <div class="tag-slug">technology</div>
                                    </td>
                                    <td>Posts about technology and gadgets</td>
                                    <td>technology</td>
                                    <td><span class="tag-count">24</span></td>
                                    <td>
                                        <button class="action-btn" title="Edit">
                                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                            <span>Edit</span>
                                        </button>
                                        <button class="action-btn danger-btn" title="Delete">
                                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                            <span>Delete</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>
                                        <div class="tag-name">Travel</div>
                                        <div class="tag-slug">travel</div>
                                    </td>
                                    <td>Travel experiences and destinations</td>
                                    <td>travel</td>
                                    <td><span class="tag-count">18</span></td>
                                    <td>
                                        <button class="action-btn" title="Edit">
                                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                            <span>Edit</span>
                                        </button>
                                        <button class="action-btn danger-btn" title="Delete">
                                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                            <span>Delete</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>
                                        <div class="tag-name">Food</div>
                                        <div class="tag-slug">food</div>
                                    </td>
                                    <td>Recipes and restaurant reviews</td>
                                    <td>food</td>
                                    <td><span class="tag-count">15</span></td>
                                    <td>
                                        <button class="action-btn" title="Edit">
                                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                            <span>Edit</span>
                                        </button>
                                        <button class="action-btn danger-btn" title="Delete">
                                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                            <span>Delete</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>
                                        <div class="tag-name">Health</div>
                                        <div class="tag-slug">health</div>
                                    </td>
                                    <td>Health tips and wellness advice</td>
                                    <td>health</td>
                                    <td><span class="tag-count">12</span></td>
                                    <td>
                                        <button class="action-btn" title="Edit">
                                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                            <span>Edit</span>
                                        </button>
                                        <button class="action-btn danger-btn" title="Delete">
                                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                            <span>Delete</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>
                                        <div class="tag-name">Fitness</div>
                                        <div class="tag-slug">fitness</div>
                                    </td>
                                    <td>Workout routines and fitness tips</td>
                                    <td>fitness</td>
                                    <td><span class="tag-count">9</span></td>
                                    <td>
                                        <button class="action-btn" title="Edit">
                                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                            <span>Edit</span>
                                        </button>
                                        <button class="action-btn danger-btn" title="Delete">
                                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                            <span>Delete</span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div class="pagination">
                            <div class="page-info">Showing 1 to 5 of 15 tags</div>
                            <div class="page-controls">
                                <button class="page-btn" disabled>Previous</button>
                                <button class="page-btn active">1</button>
                                <button class="page-btn">2</button>
                                <button class="page-btn">3</button>
                                <button class="page-btn">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Toggle add tag form visibility
        document.getElementById('toggle-form').addEventListener('click', function() {
            const form = document.getElementById('tag-form');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        });
        
        document.getElementById('cancel-form').addEventListener('click', function() {
            document.getElementById('tag-form').style.display = 'none';
        });
        
        // Auto-generate slug from tag name
        document.getElementById('tag-name').addEventListener('input', function() {
            const slugInput = document.getElementById('tag-slug');
            if (!slugInput.value) {
                const slug = this.value.toLowerCase()
                    .replace(/[^\w\s-]/g, '') // Remove non-word chars
                    .replace(/\s+/g, '-')      // Replace spaces with -
                    .replace(/--+/g, '-');     // Replace multiple - with single -
                slugInput.value = slug;
            }
        });
    </script>
</body>
</html>