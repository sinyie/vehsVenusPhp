<!DOCTYPE html>
<html lang="zh-tw" dir="ltr">

  <head>
    <?php require('head.php') ?>
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid px-0">
        <div class="container">
          <div class="row flex-center min-vh-100 py-5">
            <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3"><a class="d-flex flex-center text-decoration-none mb-4" href="../undefined">
                <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block">
                  <img src="assets/img/icons/logo.png" alt="國立中科實中" width="58" />
                </div>
              </a>
              <div class="text-center mb-7">
                <h2 class="text-1000 mb-3">國立中科實中</h2>
                <h3 class="text-1000">場地預約及申請物品管理系統</h3>
              </div>
              <div class="position-relative">
                <hr class="bg-200 mt-5 mb-4" />
                <div class="divider-content-center">系統登入</div>
              </div>
              <div class="mb-3 text-start">
                <label class="form-label mb-2" for="email">帳號 </label>
                <div class="form-icon-container">
                  <input class="form-control form-icon-input" id="email" type="text" placeholder="abc0123456" /><span class="fas fa-user text-900 fs--1 form-icon"></span>
                </div>
              </div>
              <div class="mb-3 text-start">
                <label class="form-label mb-2" for="password">密碼</label>
                <div class="form-icon-container">
                  <input class="form-control form-icon-input" id="password" type="password" placeholder="Password" />
                  <span class="fas fa-key text-900 fs--1 form-icon"></span>
                </div>
              </div>
              <div class="row flex-between-center mb-7">
                <div class="col-auto">
                  <div class="form-check mb-0">
                    <input class="form-check-input" id="basic-checkbox" type="checkbox" checked="checked" />
                    <label class="form-check-label mb-0" for="basic-checkbox">記住帳號</label>
                  </div>
                </div>
              </div>
              <a href="index.php" class="btn btn-primary w-100 mb-3">登入系統</a>
            </div>
          </div>
        </div>
      </div>
      
    </main>

    <?php require('script.php') ?>

  </body>

</html>