<div class="top-bar">
    <nav class="navbar navbar-expand-md  navbar-light ">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Post
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('post.create')}}">create</a>
                </div>
            </li>
            <li>
                <a class="nav-link text-white" href="{{route('post')}}">List</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('category')}}">index</a>
                    <a class="dropdown-item" href="{{route('category.create')}}">create</a>
                </div>
            </li>
        </ul>
    </nav>
</div>