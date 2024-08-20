
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl position-sticky blur shadow-blur mt-4 left-auto top-1 z-index-sticky" id="navbarBlur" data-scroll="true" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">

            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>

                @if (request()->routeIs('dashboard.news.index'))
                <li class="breadcrumb-item text-sm active text-dark" aria-current="page">News</li>
            @elseif (request()->routeIs('dashboard.news.create'))
                <li class="breadcrumb-item text-sm active text-dark" aria-current="page">Create News</li>
            @elseif (request()->routeIs('dashboard.news.edit'))
                <li class="breadcrumb-item text-sm active text-dark" aria-current="page">Edit News</li>
            @elseif (request()->routeIs('dashboard.blog.index'))
                <li class="breadcrumb-item text-sm active text-dark" aria-current="page">Blog</li>
            @elseif (request()->routeIs('dashboard.blog.create'))
                <li class="breadcrumb-item text-sm active text-dark" aria-current="page">Create Blog</li>
            @elseif (request()->routeIs('dashboard.blog.edit'))
                <li class="breadcrumb-item text-sm active text-dark" aria-current="page">Edit Blog</li>
            @else
                <li class="breadcrumb-item text-sm active text-dark" aria-current="page">Home</li>
            @endif
        
            </ol>
            <h6 class="font-weight-bolder mb-0">
                @if (request()->routeIs('dashboard.news.index'))
                News
            @elseif (request()->routeIs('dashboard.news.create'))
                Create News
            @elseif (request()->routeIs('dashboard.news.edit'))
                Edit News
            @elseif (request()->routeIs('dashboard.blog.index'))
                Blog
            @elseif (request()->routeIs('dashboard.blog.create'))
                Create Blog
            @elseif (request()->routeIs('dashboard.blog.edit'))
                Edit Blog
            @else
                Home
            @endif
        
            </h6>

        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar" style="justify-content: end;">
            <ul class="navbar-nav  justify-content-end">

                @if (request()->routeIs('dashboard.news.index'))
                <li class="nav-item d-flex align-items-center">
                    <a class="btn bg-gradient-primary text-xs w-100 p-3" href="{{route('dashboard.news.create')}}" type="button" style="margin: 0;">Create a News</a>
                </li>
                @elseif (request()->routeIs('dashboard.blog.index'))
                <li class="nav-item d-flex align-items-center">
                    <a class="btn bg-gradient-primary text-xs w-100 p-3" href="{{route('dashboard.blog.create')}}" type="button" style="margin: 0;">Create a Blog</a>
                </li>
                @endif

                <li class="nav-item d-flex align-items-center">
                    <a href="{{ route('logout') }}" class="nav-link text-body font-weight-bold p-3">
                        <i class="fa fa-user me-sm-1"></i>

                        <span class="d-sm-inline d-none">Log out</span>

                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
