let TagsArray = [];
document.addEventListener("DOMContentLoaded", function(e) {

    let postTitle = document.getElementById("post-title");
    let postContent = document.querySelector(".mce-content-body ");
    let postStatus = document.querySelector('.status-toggle label input');
    let postCategory = document.querySelector('#post-category');
    let postFeaturedImage = document.querySelector('#featured-image');
    let postTags; // Store Tags ID's in an array
    let FinalImage = null;
    let FinalImagePath = null;
    let FinalImageType = null;

    let categoryExists = false;

    // Seo Meta Data
    let metaTitle = document.querySelector('#seo-title');
    let metaSlug = document.querySelector('#seo-slug');
    let metaDescription = document.querySelector('#seo-description');

    // Converting the post title to a slug
    postTitle.addEventListener("input", function() {
        let slug = postTitle.value
            .toLowerCase()
            .replace(/[^a-z0-9]+/g, "-")
            .replace(/^-|-$/g, "");
        document.getElementById("seo-slug").value = slug;
    });

    document.querySelector('.featured-image').addEventListener('click', function () {
        const input = document.createElement('input');
        input.type = 'file';
        input.accept = 'image/*';

        input.onchange = async e => {
            const file = e.target.files[0];
            if (!file) return;

            // 🔍 Preview Logic
            const reader = new FileReader();
            reader.onload = function (event) {
                const img = document.getElementById('featured-image-preview');
                img.src = event.target.result;
                img.style.display = 'block';
                document.querySelector('.featured-image .upload-text').style.display = 'none';
                document.getElementById('remove-featured-image').style.display = 'inline-block';
            };
            reader.readAsDataURL(file);

            // 📤 Upload Image
            const formData = new FormData();
            formData.append("image", file);

            const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            try {
                const res = await fetch("/api/upload-featured-image", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": csrf
                    },
                    body: formData
                });

                const result = await res.json();
                if (result.status) {
                    // ✅ Store data in variables
                    FinalImage = result.url;
                    FinalImagePath = result.path;
                    FinalImageType = result.type;

                    console.log("FinalImage:", FinalImage);
                    console.log("FinalImagePath:", FinalImagePath);
                    console.log("FinalImageType:", FinalImageType);

                    document.getElementById('featured_image_url').value = FinalImage;
                } else {
                    alert("Upload failed: " + result.message);
                }
            } catch (err) {
                console.error("Upload error:", err);
                alert("Upload failed. See console.");
            }
        };

        input.click();
    });

    // ❌ Remove Image
    document.getElementById('remove-featured-image').addEventListener('click', function () {
        const img = document.getElementById('featured-image-preview');
        img.src = '';
        img.style.display = 'none';

        document.querySelector('.featured-image .upload-text').style.display = 'block';
        this.style.display = 'none';

        // Reset hidden input and vars
        document.getElementById('featured_image_url').value = '';
        FinalImage = null;
        FinalImagePath = null;
        FinalImageType = null;
    });

    let addCategoryBtn = document.querySelector('.add-category-btn');
    // Showing the Field to Store New Post Category
    addCategoryBtn.addEventListener('click', function() {

        // alert('Add Category Clicked!');

        let addCategoryForm = document.querySelector('#add-category-form');
        if( addCategoryForm.style.display === 'none' || addCategoryForm.style.display === '') {
            addCategoryForm.style.display = 'block';
            addCategoryBtn.textContent = 'Cancel';
        } else {
            addCategoryForm.style.display = 'none';
            addCategoryBtn.textContent = '+ Add New Category';
        }
    });


    // This Code is used to Check The User who's trying to create a New Category.
    // On input, this will show whether the category already exists or not.
    let categoryInput = document.querySelector('#inputCategory');

    if (categoryInput) {
        categoryInput.addEventListener('input', function () {
            let categoryName = categoryInput.value.trim();
            console.log('Checking category:', categoryName);

            if (!categoryName) {
                document.querySelector('.category-message').style.display = 'none';
                return;
            }

            let apiUrl = '/api/check-category-exist?name=' + encodeURIComponent(categoryName);

            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    let categoryMessage = document.querySelector('.category-message');
                    categoryMessage.style.display = 'block';

                    if (data.status) {
                        categoryMessage.textContent = 'Category is available.';
                        categoryMessage.style.color = 'green';
                        categoryExists = true;
                        document.querySelector('.submit-category-btn').style.display = "block";
                    } else {
                        categoryMessage.textContent = 'Category already exists.';
                        categoryMessage.style.color = 'red';
                        categoryExists = false;
                        document.querySelector('.submit-category-btn').style.display = "none";
                    }
                })
                .catch(error => {
                    console.error('Error checking category:', error);
                });
        });
    } else {
        console.error("#inputCategory element not found.");
    }
// });
// document.addEventListener("DOMContentLoaded", function () {
    const inputCategory = document.getElementById("inputCategory");
    const submitBtn = document.querySelector(".submit-category-btn");
    const errorMsg = document.querySelector(".category-message");

    // Optional success message
    let successMsg = document.querySelector('.category-message');
    submitBtn.addEventListener("click", function () {


        const categoryName = inputCategory.value.trim();
        console.log('Category Name:', categoryName);

        if (!categoryName) {
            errorMsg.textContent = "Please enter a category name.";
            errorMsg.style.display = "block";
            successMsg.style.display = "none";
            return;
        }

        errorMsg.style.display = "none";
        successMsg.style.display = "none";

        fetch("/api/store-category", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ name: categoryName })
        })
        .then(res => res.json())
        .then(data => {
            if (data.status) {
                console.log(data);
                successMsg.textContent = data.message;
                successMsg.style.display = "block";
                inputCategory.value = "";

                document.getElementById('add-category-form').style.display = 'none';
                document.querySelector('.add-category-btn').textContent = '+ Add New Category';
                successMsg.innerHTML = "";
                getCategories();
            } else {
                console.log(data);
                errorMsg.textContent = data.message;
                errorMsg.style.display = "block";
            }
        })
        .catch(err => {
            errorMsg.textContent = "Something went wrong. Try again.";
            errorMsg.style.display = "block";
            console.error(err);
        });
    });

    getCategories();

    // let TagsArray = [];


    const tagInputWrapper = document.querySelector(".tag-input");
    const input = tagInputWrapper.querySelector("input");

    // Add Tag on Enter
    input.addEventListener("keydown", function (e) {
        if (e.key === "Enter") {
            e.preventDefault();
            const tag = input.value.trim();

            if (tag !== "" && !TagsArray.includes(tag)) {
                TagsArray.push(tag);
                renderTags();
                input.value = "";
            }
        }
    });

    // Function to render tags
    function renderTags() {
        // Clear all tags except the input field
        tagInputWrapper.querySelectorAll(".tag").forEach(tagEl => tagEl.remove());

        TagsArray.forEach(tag => {
            const tagEl = document.createElement("div");
            tagEl.classList.add("tag");
            tagEl.innerHTML = `
                ${tag}
                <button class="tag-remove" data-tag="${tag}">×</button>
            `;
            tagInputWrapper.insertBefore(tagEl, input);
        });

        console.log("TagsArray:", TagsArray);
    }

    // Remove Tag
    tagInputWrapper.addEventListener("click", function (e) {
        if (e.target.classList.contains("tag-remove")) {
            const tagToRemove = e.target.getAttribute("data-tag");
            TagsArray = TagsArray.filter(tag => tag !== tagToRemove);
            renderTags();
        }
    });
});

function getCategories(){
    const categorySelect = document.getElementById('post-category');
    fetch("/api/get-categories")
    .then(res => res.json())
    .then(data => {
        if (data.status && Array.isArray(data.categories)) {
            categorySelect.innerHTML = '<option value="">Select Category</option>';
            data.categories.forEach(category => {
                const option = document.createElement("option");
                option.value = category.id;
                option.textContent = category.name;
                categorySelect.appendChild(option);
            });
        } else {
            categorySelect.innerHTML = '<option value="">No categories found</option>';
        }
    })
    .catch(err => {
        console.error("Failed to load categories", err);
        categorySelect.innerHTML = '<option value="">Error loading categories</option>';
    });
}

function CreatePost(action){
    let postTitleValue = document.getElementById("post-title").value.trim();
    let postContentValue = tinymce.get('editor').getContent();  
    let postStatusValue = document.querySelector('.status-toggle label input').checked ? 'published' : 'draft';
    let postCategoryValue = document.querySelector('#post-category').value;
    let featuredImageUrl = document.getElementById('featured_image_url').value;
    let tags = TagsArray.join(',');

    // Seo Meta Data
    let metaTitleValue = document.querySelector('#seo-title');
    let metaSlugValue = document.querySelector('#seo-slug');
    let metaDescriptionValue = document.querySelector('#seo-description');

    if (!postTitleValue || !postContentValue || !postCategoryValue) {
        alert("Please fill in all required fields.");
        return;
    }

    let postData = {
        action: action,
        title: postTitleValue,
        content: postContentValue,
        status: postStatusValue,
        category_id: postCategoryValue,
        featured_image: featuredImageUrl,
        tags: tags,
        meta_title: metaTitleValue,
        meta_slug: metaSlugValue,
        meta_description: metaDescriptionValue
    };

    console.log("Post Data:", postData);
    // return;
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch("/api/store-post", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken
        },
        body: JSON.stringify({
            title: postTitleValue,
            content: postContentValue,
            status: postStatusValue,
            category_id: postCategoryValue,
            featured_image: featuredImageUrl,
            tags: tags,
            meta_title: metaTitleValue,
            meta_slug: metaSlugValue,
            meta_description: metaDescriptionValue
        })
    })
    .then(res => res.json())
    .then(data => {
        if (data.status) {
            console.log(data);
            alert(data.message);
            return;
            if (action === 'save') {
                window.location.href = '/backoffice/posts';
            } else if (action === 'publish') {
                window.location.href = '/backoffice/posts';
            }
        } else {
            alert(data.message);
        }
    })
    .catch(err => {
        console.error("Error creating post:", err);
        alert("An error occurred while creating the post. Please try again.");
    });
}