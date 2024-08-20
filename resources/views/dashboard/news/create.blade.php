<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('./assets/dashboard-assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('./assets/dashboard-assets/img/favicon.png') }}">

    <title>
        Edit News - Dashboard
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
                <form action="{{ route('dashboard.news.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" value="" dir="ltr" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Title (Arabic)</label>
                                <input type="text" class="form-control" name="title_ar" value="" dir="ltr" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Excerpt</label>
                                <input type="text" class="form-control" name="excerpt" value="" dir="ltr" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Excerpt (Arabic)</label>
                                <input type="text" class="form-control" name="excerpt_ar" value="" dir="ltr" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description" dir="ltr" required></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Description (Arabic)</label>
                                <textarea class="form-control" name="description_ar" dir="ltr" required></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Writer</label>
                                <input type="text" class="form-control" name="writer" value="" dir="ltr" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Writer (Arabic)</label>
                                <input type="text" class="form-control" name="writer_ar" value="" dir="ltr" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control" name="date" value="" dir="ltr" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3 is-filled">
                                <label class="form-label">Link</label>
                                <input type="text" class="form-control" name="link" value="" dir="ltr" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image-upload">Upload New Image</label>
                                <input type="file" class="form-control-file" id="image-upload" name="image" accept="image/jpeg, image/png, image/jpg, image/gif" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="visibility">Publish News? (show)</label>
                                <input type="checkbox" name="visibility" id="visibility" value="1">
                            </div>
                        </div>


                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Create News</button>
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
</body>

</html>
