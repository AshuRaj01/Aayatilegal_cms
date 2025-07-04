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

        .media-container {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 20px;
        }

        .media-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .media-views {
            display: flex;
            gap: 10px;
        }

        .view-btn {
            padding: 8px 15px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
        }

        .view-btn.active, .view-btn:hover {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
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

        .upload-area {
            border: 2px dashed #ddd;
            border-radius: var(--border-radius);
            padding: 40px;
            text-align: center;
            margin-bottom: 30px;
            transition: var(--transition);
            cursor: pointer;
        }

        .upload-area:hover {
            border-color: var(--primary);
            background-color: var(--primary-light);
        }

        .upload-icon {
            width: 48px;
            height: 48px;
            margin: 0 auto 15px;
            color: var(--gray);
        }

        .upload-text {
            margin-bottom: 15px;
        }

        .upload-hint {
            color: var(--gray);
            font-size: 14px;
        }

        .media-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        .media-item {
            border: 1px solid #eee;
            border-radius: var(--border-radius);
            overflow: hidden;
            transition: var(--transition);
            position: relative;
        }

        .media-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }

        .media-thumbnail {
            width: 100%;
            height: 150px;
            object-fit: cover;
            display: block;
        }

        .video-thumbnail {
            position: relative;
        }

        .video-thumbnail::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .video-thumbnail::before {
            content: "▶";
            position: absolute;
            z-index: 1;
            font-size: 24px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .media-info {
            padding: 12px;
        }

        .media-name {
            font-weight: 500;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-bottom: 5px;
        }

        .media-meta {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            color: var(--gray);
        }

        .media-actions {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            gap: 5px;
            opacity: 0;
            transition: var(--transition);
        }

        .media-item:hover .media-actions {
            opacity: 1;
        }

        .action-btn {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background-color: white;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .action-btn:hover {
            background-color: var(--primary);
            color: white;
        }

        .action-icon {
            width: 14px;
            height: 14px;
        }

        .media-filter {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .filter-btn {
            padding: 8px 15px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
        }

        .filter-btn.active, .filter-btn:hover {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
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
            
            .media-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .search-bar {
                width: 100%;
            }
            
            .media-grid {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            }
        }

        @media (max-width: 576px) {
            .media-grid {
                grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            }
            
            .media-thumbnail {
                height: 120px;
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
                    <div class="media-header">
                        <div class="media-views">
                            <!--<button class="view-btn active">Grid</button>-->
                            <!--<button class="view-btn">List</button>-->
                        </div>
                        <div class="search-bar">
                            <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                            <input type="text" placeholder="Search media...">
                        </div>
                    </div>
                    
                    <div class="media-filter">
                        <button class="filter-btn">Images</button>
                        <!--<button class="filter-btn active">All</button>-->
                        <!--<button class="filter-btn">Videos</button>-->
                        <!--<button class="filter-btn">Documents</button>-->
                        <!--<button class="filter-btn">Audio</button>-->
                    </div>
                    
                    <div class="upload-area" id="dropzone">
                        <svg class="upload-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="17 8 12 3 7 8"></polyline>
                            <line x1="12" y1="3" x2="12" y2="15"></line>
                        </svg>
                        <div class="upload-text">
                            <h3>Drag and drop files here</h3>
                            <p class="upload-hint">or click to browse files (JPG, PNG, GIF, MP4 up to 10MB)</p>
                        </div>
                        <button class="btn btn-secondary">Select Files</button>
                    </div>
                    
                    <div class="media-grid">
                        <!-- Image Item -->
                        <div class="media-item">
                            <img src="https://source.unsplash.com/random/300x200?nature" alt="Nature" class="media-thumbnail">
                            <div class="media-actions">
                                <button class="action-btn" title="Edit">
                                    <svg class="action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                                <button class="action-btn" title="Delete">
                                    <svg class="action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="media-info">
                                <div class="media-name">nature-scene.jpg</div>
                                <div class="media-meta">
                                    <span>1.2 MB</span>
                                    <span>May 15, 2023</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Video Item -->
                        <div class="media-item">
                            <div class="video-thumbnail">
                                <img src="https://source.unsplash.com/random/300x200?city" alt="City" class="media-thumbnail">
                            </div>
                            <div class="media-actions">
                                <button class="action-btn" title="Edit">
                                    <svg class="action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                                <button class="action-btn" title="Delete">
                                    <svg class="action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="media-info">
                                <div class="media-name">city-tour.mp4</div>
                                <div class="media-meta">
                                    <span>8.5 MB</span>
                                    <span>May 10, 2023</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- More media items -->
                        <div class="media-item">
                            <img src="https://source.unsplash.com/random/300x200?food" alt="Food" class="media-thumbnail">
                            <div class="media-actions">
                                <button class="action-btn" title="Edit">
                                    <svg class="action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                                <button class="action-btn" title="Delete">
                                    <svg class="action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="media-info">
                                <div class="media-name">delicious-food.jpg</div>
                                <div class="media-meta">
                                    <span>2.1 MB</span>
                                    <span>May 5, 2023</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="media-item">
                            <img src="https://source.unsplash.com/random/300x200?animal" alt="Animal" class="media-thumbnail">
                            <div class="media-actions">
                                <button class="action-btn" title="Edit">
                                    <svg class="action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                                <button class="action-btn" title="Delete">
                                    <svg class="action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="media-info">
                                <div class="media-name">wild-animal.jpg</div>
                                <div class="media-meta">
                                    <span>1.8 MB</span>
                                    <span>April 28, 2023</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="media-item">
                            <div class="video-thumbnail">
                                <img src="https://source.unsplash.com/random/300x200?travel" alt="Travel" class="media-thumbnail">
                            </div>
                            <div class="media-actions">
                                <button class="action-btn" title="Edit">
                                    <svg class="action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                                <button class="action-btn" title="Delete">
                                    <svg class="action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="media-info">
                                <div class="media-name">travel-vlog.mp4</div>
                                <div class="media-meta">
                                    <span>12.4 MB</span>
                                    <span>April 20, 2023</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="media-item">
                            <img src="https://source.unsplash.com/random/300x200?architecture" alt="Architecture" class="media-thumbnail">
                            <div class="media-actions">
                                <button class="action-btn" title="Edit">
                                    <svg class="action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                                <button class="action-btn" title="Delete">
                                    <svg class="action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="media-info">
                                <div class="media-name">modern-building.jpg</div>
                                <div class="media-meta">
                                    <span>2.5 MB</span>
                                    <span>April 15, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pagination">
                        <div class="page-info">Showing 1 to 6 of 24 media files</div>
                        <div class="page-controls">
                            <button class="page-btn" disabled>Previous</button>
                            <button class="page-btn active">1</button>
                            <button class="page-btn">2</button>
                            <button class="page-btn">3</button>
                            <button class="page-btn">4</button>
                            <button class="page-btn">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Simple drag and drop functionality
        const dropzone = document.getElementById('dropzone');
        
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropzone.addEventListener(eventName, preventDefaults, false);
        });
        
        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        ['dragenter', 'dragover'].forEach(eventName => {
            dropzone.addEventListener(eventName, highlight, false);
        });
        
        ['dragleave', 'drop'].forEach(eventName => {
            dropzone.addEventListener(eventName, unhighlight, false);
        });
        
        function highlight() {
            dropzone.style.borderColor = 'var(--primary)';
            dropzone.style.backgroundColor = 'var(--primary-light)';
        }
        
        function unhighlight() {
            dropzone.style.borderColor = '#ddd';
            dropzone.style.backgroundColor = 'white';
        }
        
        dropzone.addEventListener('drop', handleDrop, false);
        
        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            handleFiles(files);
        }
        
        function handleFiles(files) {
            ([...files]).forEach(uploadFile);
        }
        
        function uploadFile(file) {
            console.log('Uploading file:', file.name);
            // Here you would implement the actual file upload logic
            // For demo purposes, we'll just log it to the console
        }
    </script>
</body>
</html>