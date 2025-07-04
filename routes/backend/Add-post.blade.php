<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Blog Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ url('public/backoffice/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('backoffice/assets/css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
        .tox-tinymce {
            height: 93% !important;
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

        .editor-container {
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 20px;
        }

        @media (max-width: 1200px) {
            .editor-container {
                grid-template-columns: 1fr;
            }
        }

        .editor-main {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .editor-sidebar {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .editor-box {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .editor-box-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #1a1a2e;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #1a1a2e;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
            font-size: 15px;
        }

        .form-control:focus {
            outline: none;
            border-color: #4361ee;
            box-shadow: 0 0 0 3px #e6f0fd;
        }

        textarea.form-control {
            min-height: 200px;
            resize: vertical;
        }

        .editor-toolbar {
            display: flex;
            gap: 5px;
            flex-wrap: wrap;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
            margin-bottom: 15px;
        }

        .tool-btn {
            background: none;
            border: none;
            width: 36px;
            height: 36px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #6c757d;
            transition: all 0.3s ease;
        }

        .tool-btn:hover {
            background-color: #e6f0fd;
            color: #4361ee;
        }

        .form-select {
            width: 100%;
            padding: 10px 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            background-color: white;
            transition: all 0.3s ease;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 16px;
        }

        .form-select:focus {
            outline: none;
            border-color: #4361ee;
            box-shadow: 0 0 0 3px #e6f0fd;
        }

        .tag-input {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            min-height: 46px;
        }

        .tag {
            background-color: #e6f0fd;
            color: #4361ee;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .tag-remove {
            background: none;
            border: none;
            color: inherit;
            cursor: pointer;
            display: flex;
            padding: 2px;
        }

        .tag-input input {
            flex: 1;
            min-width: 100px;
            border: none;
            outline: none;
            padding: 5px;
        }

        .featured-image {
            width: 100%;
            height: 200px;
            background-color: #f8f9fa;
            border-radius: 8px;
            border: 1px dashed #ddd;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .featured-image:hover {
            border-color: #4361ee;
        }

        .featured-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }

        .featured-image .upload-text {
            text-align: center;
            color: #6c757d;
        }

        .featured-image .upload-icon {
            font-size: 24px;
            margin-bottom: 10px;
            color: #6c757d;
        }

        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .status-toggle {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 24px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #4361ee;
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
                padding-top: 70px; /* Adjust based on your top bar height */
            }
            
            .form-footer {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
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
                    <h1 class="page-title">Add New Post</h1>
                    <div>
                        <button class="btn btn-secondary">Save Draft</button>
                        <button class="btn btn-primary">Publish</button>
                    </div>
                </div>
                
                <div class="editor-container">
                    <div class="editor-main">
                        <div class="form-group">
                            <label for="post-title" class="form-label">Post Title</label>
                            <input type="text" id="post-title" class="form-control" placeholder="Enter post title">
                        </div>
                        
                        <div class="form-group" style="height: 100%;">
                            <textarea id="editor" placeholder="Start writing your awesome content here..."></textarea>
                            <!--<textarea id="post-content" class="form-control" placeholder="Write your post content here..."></textarea>-->
                        </div>
                    </div>
                    
                    <div class="editor-sidebar">
                        <div class="editor-box">
                            <h3 class="editor-box-title">Post Settings</h3>
                            
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <div class="status-toggle">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider"></span>
                                    </label>
                                    <span>Published</span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="post-date" class="form-label">Publish Date</label>
                                <input type="datetime-local" id="post-date" class="form-control">
                            </div>
                            
                            {{-- <div class="form-group">
                                <label for="post-author" class="form-label">Author</label>
                                <select id="post-author" class="form-select">
                                    <option>John Doe</option>
                                    <option>Jane Smith</option>
                                    <option>Mike Johnson</option>
                                </select>
                            </div> --}}
                        </div>
                        
                        <div class="editor-box">
                            <h3 class="editor-box-title">Categories</h3>
                            
                            <div class="form-group">
                                <select id="post-category" class="form-select">
                                    <option>Uncategorized</option>
                                    <option>Technology</option>
                                    <option>Travel</option>
                                    <option>Food</option>
                                    <option>Health</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <button class="btn btn-secondary add-category-btn" style="width: 100%;">+ Add New Category</button>
                                <form id="add-category-form" style="display: none;">
                                    <input type="text" id="inputCategory" class="inputCategory" name="inputCategory" placeholder="Enter category name" style="width: 100%;padding: 10px 16px;border-radius: 8px;border: 1px solid #ddd;transition: all 0.3s ease;font-size: 15px;margin-top: 19px;" />
                                    <span class="error-message category-message" style="color: red; display: none;"></span>
                                    <button type="button" class="btn btn-primary submit-category-btn" style="width: 100%;margin-top: 10px;">Add</button>
                                </form>
                            </div>
                        </div>
                        
                        <div class="editor-box">
                            <h3 class="editor-box-title">Tags</h3>
                            
                            <div class="form-group">
                                <div class="tag-input">
                                    <div class="tag">
                                        web
                                        <button class="tag-remove">×</button>
                                    </div>
                                    <div class="tag">
                                        development
                                        <button class="tag-remove">×</button>
                                    </div>
                                    <input type="text" placeholder="Add tags...">
                                </div>
                            </div>
                        </div>
                        
                        <div class="editor-box">
                            <h3 class="editor-box-title">Featured Image</h3>
                            
                            <div class="featured-image">
                                <img id="featured-image-preview" src="" alt="Featured Image">
                                <div class="upload-text">
                                    <div class="upload-icon">🖼️</div>
                                    <div>Click to upload featured image</div>
                                    <div style="font-size: 12px; margin-top: 5px;">Recommended size: 1200×630px</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="editor-box">
                            <h3 class="editor-box-title">SEO Settings</h3>
                            
                            <div class="form-group">
                                <label for="seo-title" class="form-label">Meta Title</label>
                                <input type="text" id="seo-title" name="seo-title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="seo-title" class="form-label">Slug</label>
                                <input type="text" id="seo-slug" name="seo-slug" class="form-control" readOnly/>
                            </div>
                            
                            <div class="form-group">
                                <label for="seo-description" class="form-label">Meta Description</label>
                                <textarea id="seo-description" name="seo-description" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-footer">
                    <div>
                        <button class="btn btn-secondary">Move to Trash</button>
                    </div>
                    <div style="display: flex; gap: 10px;">
                        <button class="btn btn-secondary">Preview</button>
                        <button class="btn btn-primary">Publish</button>
                    </div>
                </div>            
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ url('backoffice/assets/js/AddPost.js') }}" defer></script> {{-- This Line is for Localhost --}}
    <script src="{{ url('public/backoffice/assets/js/AddPost.js') }}" defer></script> {{-- This Line is for Live Server --}}
    
    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/qbkjqntdnnypgacmvp9p6chx90bot4s3ma2798g7sdz9zm58/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#editor',
            plugins: 'advlist autolink lists link image charmap preview anchor pagebreak code codesample table emoticons media insertdatetime save wordcount',
            toolbar: [
            'undo redo | styleselect | fontselect fontsizeselect | bold italic underline strikethrough forecolor backcolor | alignleft aligncenter alignright alignjustify',
            'bullist numlist outdent indent | link image media codesample blockquote table hr | charmap emoticons | save preview code',
            ],
            menubar: 'file edit insert view format table tools help',
            toolbar_mode: 'floating',
            image_caption: true,
            automatic_uploads: true,
            file_picker_types: 'image file',
            content_style: "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }",
            height: 500,
            save_enablewhendirty: true,
            save_onsavecallback: function () {
            alert('Content saved!');
            },
            setup: function (editor) {
                editor.on('init', () => {
                    console.log('Editor is ready');
                });
            },
        });
    </script>
</body>
</html>