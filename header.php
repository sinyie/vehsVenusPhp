<nav class="navbar navbar-vertical navbar-expand-lg">
  <script>
    var navbarStyle = window.config.config.phoenixNavbarStyle;
    if (navbarStyle && navbarStyle !== 'transparent') {
      document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
    }
  </script>
  <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
    <!-- scrollbar removed-->
    <div class="navbar-vertical-content">
      <ul class="navbar-nav flex-column" id="navbarVerticalNav">
        <li class="nav-item">
          <!-- label-->
          <p class="navbar-vertical-label">場地預約功能
          </p>
          <hr class="navbar-vertical-line" />
          <!-- parent pages-->
          <div class="nav-item-wrapper"><a class="nav-link active label-1" href="index.php" role="button" data-bs-toggle="" aria-expanded="false">
              <div class="d-flex align-items-end"><span class="nav-link-icon"><span data-feather="calendar"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">場地預約行事曆</span></span>
              </div>
            </a>
          </div>
          <!-- parent pages-->
          <div class="nav-item-wrapper"><a class="nav-link label-1" href="bookli.php" role="button" data-bs-toggle="" aria-expanded="false">
              <div class="d-flex align-items-end"><span class="nav-link-icon"><span data-feather="list"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">預約場地一覽</span></span>
              </div>
            </a>
          </div>
        </li>
        <li class="nav-item">
          <!-- label-->
          <p class="navbar-vertical-label">申請物品功能
          </p>
          <hr class="navbar-vertical-line" />
          <!-- parent pages-->
          <div class="nav-item-wrapper"><a class="nav-link label-1" href="applylist.php" role="button" data-bs-toggle="" aria-expanded="false">
              <div class="d-flex align-items-end"><span class="nav-link-icon"><span data-feather="list"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">申請物品一覽</span></span>
              </div>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="navbar-vertical-footer">
    <button class="btn navbar-vertical-toggle border-0 fw-semi-medium w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span class="navbar-vertical-footer-text ms-2">收合功能列</span></button>
  </div>
</nav>
<nav class="navbar navbar-top navbar-expand" id="navbarDefault">
  <div class="collapse navbar-collapse justify-content-between">
    <div class="navbar-logo">

      <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
      <a class="navbar-brand me-1 me-sm-3" href="index.php">
        <div class="d-flex align-items-center">
          <div class="d-flex align-items-center"><img src="assets/img/icons/logo.png" alt="國立中科實中" width="40" />
            <h3 class="ms-3 mb-0 mt-1 d-none d-sm-block"> 國立中科實中<span class="fs--2 fw-medium logoCh text-black text-opacity-50">　場地預約及申請物品管理系統</span></h3>
          </div>
        </div>
      </a>
    </div>
    <ul class="navbar-nav navbar-nav-icons flex-row">
      <li class="nav-item"></li>
      <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-l ">
            <div class="avatar-name rounded-circle"><span>s</span></div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
          <div class="card position-relative border-0">
            <div class="card-body p-0">
              <div class="text-center pt-4 pb-2">
                <div class="avatar avatar-xl ">
                  <div class="avatar-name rounded-circle"><span>s</span></div>
                </div>
                <h6 class="mt-3 mb-3 fs-2 text-primary">abcdefg123</h6>
                <p class="fs-0 text-secondary text-opacity-75 mb-0">庶務組｜王小明</p>
                <p class="fs-0 text-secondary text-opacity-75">0912345678</p>
              </div>
              <div class="mx-3"></div>
            </div>
            <div class="overflow-auto scrollbar" style="height: auto;"></div>
            <div class="p-0">
              <div class="px-3 pb-3">
                <a class="btn btn-soft-primary d-flex flex-center w-100" href="sign-in.php"> 
                  <span class="me-2" data-feather="log-out"> </span>
                  登出系統
                </a>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</nav>