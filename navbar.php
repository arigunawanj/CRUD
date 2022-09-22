        <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4" >
            <div class="container">
                <a class="navbar-brand" href="admin_home.php">SIAKAD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="admin_home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_home.php">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="admin_home.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                            </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="admin_home.php">Action</a></li>
                        <li><a class="dropdown-item" href="admin_home.php">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="admin_home.php">Something else here</a></li>
                    </ul>
                    </li>
                  <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li>
                </ul> -->
                <div class="d-flex ms-auto">
                <div class="d-flex ms-auto align-items-center me-4 mt-2">
                  <h6 style="color:white;">Hai, "<?= $_SESSION['username']?>"</h6>
                </div>

                <div class="dropdown ms-auto">
                  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="logout.php">
                        <span><i class="fa-solid fa-right-from-bracket"></i></span>
                          Logout
                        </a>
                    </li>
                  </ul>
                </div>
                </div>
              </div>
            </div>
        </nav>