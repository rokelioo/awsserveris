<nav class="navbar navbar-dark navbar-expand-sm" style="background: #631da3">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">ElderCare</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/elder-list">Elder list</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/edit-profiles">Edit profiles</a>
                </li>
                @if(Auth::user()->isAdministrator())
                    <li class="nav-item">
                        <a class="nav-link" href="/user-list">User list</a>
                    </li>
                @endif

            </ul>
            <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="material-icons" style="font-size: 16px">account_circle</i> User
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="/logout"><i class="material-icons" style="font-size: 16px">logout</i>
                        Logout</a></li>
            </ul>
        </div>
    </div>
</nav>


