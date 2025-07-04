<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Blog Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('public/backoffice/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('backoffice/assets/css/style.css') }}">
   <style>
        /* Category Style(New CSS Starts) */
        .btn-outline {
            background: transparent;
            border: 1px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background: rgba(67, 97, 238, 0.1);
        }

        .btn-danger {
            background: var(--danger);
            color: white;
        }

        .btn-danger:hover {
            background: #d1144a;
        }

        /* Category Management Styles */
        .category-management {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .category-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .category-header h3 {
            font-size: 1.3rem;
            font-weight: 600;
        }

        .category-count {
            background: rgba(67, 97, 238, 0.1);
            color: var(--primary);
            padding: 0.3rem 0.6rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Category Form Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            animation: modalFadeIn 0.3s;
        }

        @keyframes modalFadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .modal-header {
            padding: 1.5rem;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h3 {
            font-size: 1.3rem;
            font-weight: 600;
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #999;
            transition: var(--transition);
        }

        .close-modal:hover {
            color: var(--danger);
        }

        .modal-body {
            padding: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }

        .form-text {
            font-size: 0.8rem;
            color: #666;
            margin-top: 0.5rem;
        }

        .modal-footer {
            padding: 1.5rem;
            border-top: 1px solid #eee;
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
        }

        .pagination{
            justify-content: center;
        }

        @media (max-width: 768px) {
            .category-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            
            .search-box {
                width: 100%;
            }
        }
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        {{-- <?php include_once 'layout/sidebar.php'; ?> --}}
        @include('backend.layout.sidebar');
        
        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            {{-- <?php include_once 'layout/header.php'; ?> --}}
            @include('backend.layout.header');
            
            <!-- Content Area -->
            <div class="content">
                <div class="page-header">
                    <h1>Categories</h1>
                    <button class="btn btn-primary" id="addCategoryBtn">
                        <i class="fas fa-plus"></i>
                        Add New
                    </button>
                </div>
                
                <!-- Category Management -->
                <div class="category-management">
                    <div class="category-header">
                        <h3>All Categories</h3>
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Search categories...">
                        </div>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Slug</th>
                                {{-- <th>Description</th> --}}
                                <th>Count</th>
                                <th style="text-align: center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($categories->isEmpty())
                            <tr>
                                <td colspan="4" class="text-center" style="text-align: center">No categories found.</td>
                            </tr>
                            @endif
                            
                            {{-- Loop through categories --}}
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                {{-- <td>Posts about technology and gadgets</td> --}}
                                <td><span class="category-count">24</span></td>
                                <td>
                                    <div class="action-btns" style="justify-content: center;">
                                        {{-- <a href="{{ url('/edit/'.$category->id) }}"><i class="fas fa-edit"></i></a> --}}
                                        <a href="{{ url('/delete/'.$category->id) }}" style="color: #f72585;"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                             @endforeach
                        </tbody>
                    </table>
                    {{-- 👇 Pagination Links Go Here --}}
                    <div class="mt-4">
                        {{ $categories->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Add/Edit Category Modal -->
    <div class="modal" id="categoryModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modalTitle">Add New Category</h3>
                <button class="close-modal" id="closeModal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="categoryForm" action="{{ url('backoffice/save-category') }}" method="POST">
                    @csrf
                    <input type="hidden" id="categoryId">
                    <div class="form-group">
                        <label for="categoryName">Category Name</label>
                        <input type="text" id="categoryName" name="name" class="form-control" required>
                        <p class="form-text">The name is how it appears on your site.</p>
                    </div>
                    <div class="form-group">
                        <label for="categorySlug">Slug</label>
                        <input type="text" id="categorySlug" name="slug" class="form-control" readonly>
                        <p class="form-text">The "slug" is the URL-friendly version of the name.</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline" id="cancelBtn">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="saveCategoryBtn">Save Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal" id="deleteModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Delete Category</h3>
                <button class="close-modal" id="closeDeleteModal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this category? This action cannot be undone.</p>
                <p><strong>Note:</strong> Posts in this category will not be deleted, but they will be moved to the default category.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline" id="cancelDeleteBtn">Cancel</button>
                <button class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
            </div>
        </div>
    </div>

    <script>
        // Category Management Functionality
        const categoryModal = document.getElementById('categoryModal');
        const deleteModal = document.getElementById('deleteModal');
        const addCategoryBtn = document.getElementById('addCategoryBtn');
        const closeModal = document.getElementById('closeModal');
        const closeDeleteModal = document.getElementById('closeDeleteModal');
        const cancelBtn = document.getElementById('cancelBtn');
        const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');
        const saveCategoryBtn = document.getElementById('saveCategoryBtn');
        const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
        const modalTitle = document.getElementById('modalTitle');
        const categoryForm = document.getElementById('categoryForm');
        let currentCategoryId = null;

        // Open Add Category Modal
        addCategoryBtn.addEventListener('click', function() {
            modalTitle.textContent = 'Add New Category';
            categoryForm.reset();
            currentCategoryId = null;
            categoryModal.classList.add('active');
        });

        // Open Edit Category Modal
        document.querySelectorAll('.edit-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const categoryId = this.getAttribute('data-id');
                // In a real app, you would fetch the category data here
                modalTitle.textContent = 'Edit Category';
                currentCategoryId = categoryId;
                
                // For demo purposes, we'll just fill with sample data
                document.getElementById('categoryName').value = 'Sample Category';
                document.getElementById('categorySlug').value = 'sample-category';
                document.getElementById('categoryDescription').value = 'This is a sample category description';
                
                categoryModal.classList.add('active');
            });
        });

        // Open Delete Confirmation Modal
        document.querySelectorAll('.delete-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                currentCategoryId = this.getAttribute('data-id');
                deleteModal.classList.add('active');
            });
        });

        // Close Modals
        function closeAllModals() {
            categoryModal.classList.remove('active');
            deleteModal.classList.remove('active');
        }

        closeModal.addEventListener('click', closeAllModals);
        closeDeleteModal.addEventListener('click', closeAllModals);
        cancelBtn.addEventListener('click', closeAllModals);
        cancelDeleteBtn.addEventListener('click', closeAllModals);



        // Close modal when clicking outside
        window.addEventListener('click', function(event) {
            if (event.target === categoryModal) {
                closeAllModals();
            }
            if (event.target === deleteModal) {
                closeAllModals();
            }
        });

        // Auto-generate slug from category name
        document.getElementById('categoryName').addEventListener('input', function() {
            const name = this.value;
            const slug = name.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');
            document.getElementById('categorySlug').value = slug;
        });
    </script>
</body>
</html>