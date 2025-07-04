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

        .btn-secondary {
            background-color: white;
            color: #6c757d;
            border: 1px solid #ddd;
        }

        .btn-secondary:hover {
            background-color: #f8f9fa;
        }

        .users-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .users-header {
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

        .users-table {
            width: 100%;
            border-collapse: collapse;
        }

        .users-table th {
            text-align: left;
            padding: 15px 20px;
            background-color: #f8f9fa;
            color: #6c757d;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 0.5px;
        }

        .users-table td {
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
            vertical-align: middle;
        }

        .users-table tr:last-child td {
            border-bottom: none;
        }

        .users-table tr:hover {
            background-color: #e6f0fd;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            font-weight: bold;
        }

        .user-name {
            font-weight: 500;
            color: #1a1a2e;
            margin-bottom: 3px;
        }

        .user-email {
            font-size: 13px;
            color: #6c757d;
        }

        .user-role {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
            display: inline-block;
        }

        .role-admin {
            background-color: #e6f7ff;
            color: #1890ff;
        }

        .role-editor {
            background-color: #fff7e6;
            color: #fa8c16;
        }

        .role-author {
            background-color: #e6fffb;
            color: #13c2c2;
        }

        .role-subscriber {
            background-color: #f6ffed;
            color: #52c41a;
        }

        .action-btn {
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
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

        .icon {
            width: 16px;
            height: 16px;
            display: inline-block;
            vertical-align: middle;
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
            
            .users-header {
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
            
            .users-table {
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
                    <h1 class="page-title">All Users</h1>
                    <button class="btn btn-primary">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="20" y1="8" x2="20" y2="14"></line>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                        <span>Add New</span>
                    </button>
                </div>
                
                <div class="users-container">
                    <div class="users-header">
                        <div class="bulk-actions">
                            <input type="checkbox" id="bulk-select" class="bulk-checkbox">
                            <label for="bulk-select">Select All</label>
                            <select class="form-select" style="padding: 8px 12px; border-radius: 8px; border: 1px solid #ddd;">
                                <option>Bulk Actions</option>
                                <option>Delete</option>
                                <option>Change Role</option>
                            </select>
                            <button class="btn btn-secondary">Apply</button>
                        </div>
                        <div class="search-bar">
                            <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                            <input type="text" placeholder="Search users...">
                        </div>
                    </div>
                    
                    <table class="users-table">
                        <thead>
                            <tr>
                                <th width="40px"><input type="checkbox"></th>
                                <th>User</th>
                                <th>Role</th>
                                <th>Posts</th>
                                <th>Joined</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>
                                    <div class="user-info">
                                        <div class="user-avatar">JD</div>
                                        <div>
                                            <div class="user-name">John Doe</div>
                                            <div class="user-email">john.doe@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="user-role role-admin">Administrator</span></td>
                                <td>24</td>
                                <td>Jan 15, 2022</td>
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
                                    <div class="user-info">
                                        <div class="user-avatar">JS</div>
                                        <div>
                                            <div class="user-name">Jane Smith</div>
                                            <div class="user-email">jane.smith@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="user-role role-editor">Editor</span></td>
                                <td>18</td>
                                <td>Mar 5, 2022</td>
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
                                    <div class="user-info">
                                        <div class="user-avatar">MJ</div>
                                        <div>
                                            <div class="user-name">Mike Johnson</div>
                                            <div class="user-email">mike.johnson@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="user-role role-author">Author</span></td>
                                <td>12</td>
                                <td>Apr 12, 2022</td>
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
                                    <div class="user-info">
                                        <div class="user-avatar">SW</div>
                                        <div>
                                            <div class="user-name">Sarah Williams</div>
                                            <div class="user-email">sarah.w@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="user-role role-author">Author</span></td>
                                <td>8</td>
                                <td>May 20, 2022</td>
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
                                    <div class="user-info">
                                        <div class="user-avatar">RB</div>
                                        <div>
                                            <div class="user-name">Robert Brown</div>
                                            <div class="user-email">robert.b@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="user-role role-subscriber">Subscriber</span></td>
                                <td>0</td>
                                <td>Jun 8, 2022</td>
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
                        <div class="page-info">Showing 1 to 5 of 15 users</div>
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
        </main>
    </div>

</body>
</html>