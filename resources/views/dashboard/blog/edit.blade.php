<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('./assets/dashboard-assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('./assets/dashboard-assets/img/favicon.png') }}">

    <title>
        Edit Blog - Dashboard
    </title>

    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    <link href="{{ asset('./assets/dashboard-assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('./assets/dashboard-assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('./assets/dashboard-assets/css/material-dashboard.css?v=3.1.0') }}"
        rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
        <style>
    .ql-toolbar {
    z-index: 5; /* Ensure toolbar is on top */
}

.ql-editor {
    min-height: 200px;
    background-color: white;
}

.ql-container.ql-snow {
    border: 1px solid #ccc; /* Ensure editor boundary is visible */
}
.quill-editor{
    width: 100%;
}

</style>
</head>

<body class="g-sidenav-show  bg-gray-100">

    @include('dashboard.sections.slider')

    <main class="main-content border-radius-lg ">

        <!-- Navbar -->
        @include('dashboard.sections.navbar')
        <!-- End Navbar -->

        <div class="container-fluid py-4">

            <div class="ct-example"
                style="position: relative;border: 2px solid #f5f7ff !important;border-bottom: none !important;padding: 1rem 1rem 2rem 1rem;margin-bottom: -1.25rem;">
                <form action="{{ route('dashboard.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ old('title', $blog->title) }}" dir="ltr">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Title (Arabic)</label>
                                <input type="text" class="form-control" name="title_ar" value="{{ old('title_ar', $blog->title_ar) }}" dir="ltr">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Excerpt</label>
                                <input type="text" class="form-control" name="excerpt" value="{{ old('excerpt', $blog->excerpt) }}" dir="ltr">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Excerpt (Arabic)</label>
                                <input type="text" class="form-control" name="excerpt_ar" value="{{ old('excerpt_ar', $blog->excerpt_ar) }}" dir="ltr">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Description</label>
                                <div id="descriptionEditor" class="quill-editor"></div>
                                <input type="hidden" name="description" id="description" value="{{ old('description', $blog->description) }}">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Description (Arabic)</label>
                                <div id="descriptionArEditor" class="quill-editor"></div>
                                <input type="hidden" name="description_ar" id="description_ar" value="{{ old('description_ar', $blog->description_ar) }}">
                            </div>
                        </div>                                                <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control" name="date" value="{{ old('date', $blog->date) }}" dir="ltr">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Writer</label>
                                <input type="text" class="form-control" name="writer" value="{{ old('writer', $blog->writer) }}" dir="ltr">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Writer (Arabic)</label>
                                <input type="text" class="form-control" name="writer_ar" value="{{ old('writer_ar', $blog->writer_ar) }}" dir="ltr">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image-upload">Upload New Image</label>
                                <input type="file" class="form-control-file" id="image-upload" name="image" accept="image/jpeg, image/png, image/jpg, image/gif">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="current-image">Current Image</label>
                                <img src="{{ asset('images/' . $blog->image) }}" alt="Current Image" id="current-image" class="img-fluid" style="max-width: 100%; height: auto;">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image-upload">Upload New Image (Arabic)</label>
                                <input type="file" class="form-control-file" id="image-upload" name="image_ar" accept="image/jpeg, image/png, image/jpg, image/gif">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="current-image">Current Image</label>
                                <img src="{{ asset('image_ar/' . $blog->image_ar) }}" alt="Current Image" id="current-image" class="img-fluid" style="max-width: 100%; height: auto;">
                            </div>
                        </div>


                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Update Blog</button>
                </form>
            </div>

        </div>

        @include('dashboard.sections.footer')

    </main>

    <!-- Core JS Files -->
    <script src="{{ asset('./assets/dashboard-assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('./assets/dashboard-assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('./assets/dashboard-assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('./assets/dashboard-assets/js/plugins/smooth-scrollbar.min.js') }}"></script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('./assets/dashboard-assets/js/material-dashboard.min.js?v=3.1.0') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

    <script>
                // Register color and background formats
                Quill.register({
            'formats/color': Quill.import('formats/color'),
            'formats/background': Quill.import('formats/background'),
        });

// Function to handle image uploads
function imageHandler(editor) {
    const input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');
    input.click();

    input.onchange = async () => {
        const file = input.files[0];
        if (!file) {
            console.error('No file selected');
            return;
        }

        const formData = new FormData();
        formData.append('image', file);

        try {
            const response = await fetch('{{ route("dashboard.blog.uploadImage") }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Make sure this is properly echoed
                }
            });

            if (!response.ok) {
                const errorText = await response.text(); // Log response text if error
                console.error('Upload error:', errorText);
                throw new Error('Image upload failed');
            }

            const data = await response.json();
            const imageUrl = data.url;

            const range = editor.getSelection();
            const index = range ? range.index : editor.getLength(); // Use the end of the editor if no selection
            editor.insertEmbed(index, 'image', imageUrl);
        } catch (error) {
            console.error('Image upload error:', error);
            alert('Failed to upload image: ' + error.message);
        }
    };
}

// Initialize Quill editors
var descriptionEditor = new Quill('#descriptionEditor', {
    theme: 'snow',
    modules: {
        toolbar: {
            container: [
                // Header Levels
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

                // Font Sizes
                [{ 'size': ['small', false, 'large', 'huge'] }],

                // Bold, Italic, Underline, Strike
                ['bold', 'italic', 'underline', 'strike'], 

                // Subscript / Superscript
                [{ 'script': 'sub' }, { 'script': 'super' }],

                // Color & Background Formatting
                [{ 'color': [] }, { 'background': [] }],

                // Lists (Ordered, Unordered)
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],

                // Indentation
                [{ 'indent': '-1' }, { 'indent': '+1' }],

                // Text Alignment
                [{ 'align': [] }], 

                // Directionality (RTL/LTR)
                [{ 'direction': 'ltr' }], 

                // Block Elements: Blockquote, Code Block, Header
                ['blockquote', 'code-block'],

                // Inline Elements: Link, Image, Video
                ['link', 'image'], 

                // Clear Formatting
                ['clean'] 
            ],
            handlers: {
                image: function() {
                    imageHandler(descriptionEditor); // Customize image handling
                }
            }
        },
        // Enable Clipboard module (optional)
        clipboard: {
            matchVisual: false // Controls pasting style (keep or strip formatting)
        }
    },
    placeholder: 'Enter Description...',
    readOnly: false, // Set to true if the editor should be read-only
    bounds: document.body, // Limits the editor to the body
    formats: [
        'header', 'font', 'size', 'bold', 'italic', 'underline', 
        'strike', 'script', 'blockquote', 'code-block', 'list', 
        'bullet', 'indent', 'link', 'image', 'align', 
        'color', 'background', 'direction'
    ]
});

// Set the content from the hidden input
descriptionEditor.root.innerHTML = document.querySelector('#description').value;

var descriptionArEditor = new Quill('#descriptionArEditor', {
    theme: 'snow',
    modules: {
        toolbar: {
            container: [
                // Header Levels
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

                // Font Sizes
                [{ 'size': ['small', false, 'large', 'huge'] }],

                // Bold, Italic, Underline, Strike
                ['bold', 'italic', 'underline', 'strike'], 

                // Subscript / Superscript
                [{ 'script': 'sub' }, { 'script': 'super' }],

                // Color & Background Formatting
                [{ 'color': [] }, { 'background': [] }],

                // Lists (Ordered, Unordered)
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],

                // Indentation
                [{ 'indent': '-1' }, { 'indent': '+1' }],

                // Text Alignment
                [{ 'align': [] }], 

                // Directionality (RTL/LTR)
                [{ 'direction': 'rtl' }], 

                // Block Elements: Blockquote, Code Block, Header
                ['blockquote', 'code-block'],

                // Inline Elements: Link, Image, Video
                ['link', 'image'], 

                // Clear Formatting
                ['clean'] 
            ],
            handlers: {
                image: function() {
                    imageHandler(descriptionArEditor); // Customize image handling
                }
            }
        },
        // Enable Clipboard module (optional)
        clipboard: {
            matchVisual: false // Controls pasting style (keep or strip formatting)
        }
    },
    placeholder: 'Enter Arabic Description...',
    readOnly: false, // Set to true if the editor should be read-only
    bounds: document.body, // Limits the editor to the body
    formats: [
        'header', 'font', 'size', 'bold', 'italic', 'underline', 
        'strike', 'script', 'blockquote', 'code-block', 'list', 
        'bullet', 'indent', 'link', 'image', 'align', 
        'color', 'background', 'direction'
    ]
});

// Set the content from the hidden input
descriptionArEditor.root.innerHTML = document.querySelector('#description_ar').value;

// Form submission logic to set hidden fields
document.querySelector('form').onsubmit = function () {
    document.querySelector('input[name=description]').value = descriptionEditor.root.innerHTML;
    document.querySelector('input[name=description_ar]').value = descriptionArEditor.root.innerHTML;
};

    </script>
</body>

</html>
