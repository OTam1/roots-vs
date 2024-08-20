<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('./assets/dashboard-assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('./assets/dashboard-assets/img/favicon.png') }}">

    <title>
        Material Dashboard 2 by Creative Tim
    </title>

    <!--     Fonts and icons     -->
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

    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    {{-- <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script> --}}

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
                <div class="card">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        image</th>

                                    <th
                                        class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Title</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Title (Arabic)</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Date</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blog as $item)
                                    <tr>
                                        <td>
                                            <div class="align-middle text-center text-sm">
                                                <div>
                                                    <img src="{{ asset('images/' .  $item->image) }}"
                                                        class="avatar me-3">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-s font-weight-bold mb-0">{{ $item->title }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-s font-weight-bold mb-0">{{ $item->title_ar }}</p>

                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-s font-weight-normal">{{ $item->date }}</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <a href="{{ route('dashboard.blog.edit', $item->id) }}"
                                                class="text-secondary font-weight-normal text-s p-3">
                                                Edit
                                            </a>
                                            
                                            <form action="{{ route('dashboard.blog.toggleVisibility', $item->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                <a href="#" onclick="event.preventDefault(); this.closest('form').submit();"
                                                   class="text-secondary font-weight-normal text-s p-3">
                                                    {{ $item->visibility ? 'Hide' : 'Show' }}
                                                </a>
                                            </form>

                                            <form action="{{ route('dashboard.blog.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this item?')) { this.closest('form').submit(); }"
                                                   class="font-weight-normal text-s p-3" style="color: red;">
                                                    Delete
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>





        @include('dashboard.sections.footer')


        </div>


    </main>

    <!--   Core JS Files   -->
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
