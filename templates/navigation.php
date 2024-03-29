<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">My Blog</a>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a href="./views/myposts.php" class="nav-link">Posts</a>
            </li>
            <li class="nav-item">
                <a href="./views/error.php" class="nav-link">Admin</a>
            </li>
        </ul>
        <form action="/login" method="post">
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right mt-1">
                        <li class="p-3">
                            <form class="form" role="form">
                                <div class="form-group">
                                    <input type="email" name="email" id="inputEmail" class="form-control form-control-sm" placeholder="Email adress" required autofocus>
                             <!--       <input type="password" name="password" id="inputPassword" class="form-control form-control-sm" placeholder="Password" required autofocus> -->
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block btn-sm">Login</button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </form>
    </div>
</nav>

<section class="container-fluid flex-grow">