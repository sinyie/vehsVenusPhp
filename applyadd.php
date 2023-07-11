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

        <?php require('header.php') ?>
        
        <div class="content">

          <nav class="mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#!">申請物品功能</a></li>
              <li class="breadcrumb-item"><a href="bookli.html">申請物品一覽</a></li>
              <li class="breadcrumb-item active">申請物品</li>
            </ol>
          </nav>
          <div class="border-bottom mb-6 mx-lg-n6 px-lg-6">
            <div class="row">
              <div class="col-xl-9">
                <div class="d-sm-flex justify-content-between">
                  <h2 class="mt-2 mb-4">申請物品</h2>
                </div>
              </div>
            </div>
          </div>
          <h4 class="mb-4">填寫申請基本資料</h4>
          <div class="row">
            <div class="col-xl-9">
              <!-- 表格 -->
              <form class="row g-3 mb-6">
                <div class="col-12 col-md-6 col-xl-4">
                  <div class="form-floating">
                    <input class="form-control" id="floatingInputGrid" type="text" placeholder="申請事由" />
                    <label for="floatingInputGrid">申請事由<span class="text-warning">　＊ 請輸入申請事由</span></label>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-9">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="mb-0">申請物品 </h4>
                <button class="btn btn-primary btn-sm" href="#applyAddmodel" data-bs-toggle="modal">
                  <span class="fa-solid fa-plus me-2"></span>
                  新增物品
                </button>
              </div>

              <div class="border-top" id="productWishlistTable">

                <div class="table-responsive scrollbar">
                  <table class="table fs--1 mb-0">
                    <thead>
                      <tr>
                        <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:10%;"></th>
                        <th class="sort white-space-nowrap align-middle" scope="col" style="width:27%;">申請物品</th>
                        <th class="sort align-middle" scope="col" style="width:9%;">單位</th>
                        <th class="sort align-middle" scope="col" style="width:10%;">庫存數量</th>
                        <th class="sort align-middle" scope="col" style="width:10%;">安全庫存</th>
                        <th class="sort align-middle" scope="col" style="width:16%;">申請備註 </th>
                        <th class="sort align-middle text-end" scope="col" style="width:10%;">申請數量</th>
                        <th class="sort align-middle text-end pe-0" scope="col" style="width:8%;"> </th>
                      </tr>
                    </thead>
                    <!-- 物品列表 -->
                    <tbody class="list" id="profile-wishlist-table-body" style="border-style:none;">
                      <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="align-middle white-space-nowrap ps-0 py-0">
                          <div class="border rounded-2 d-inline-block my-2">
                            <img src="assets/img/products/17.png" alt="" width="60" />
                          </div>
                        </td>
                        <td class="products align-middle pe-11">
                          <a class="fw-medium mb-0 line-clamp-1" href="#applyBoardViewModal" data-bs-toggle="modal">
                            刀－美工刀
                          </a>
                        </td>
                        <td class="color align-middle white-space-nowrap fs--1 text-900">支</td>
                        <td class="size align-middle white-space-nowrap text-900 fs--1">13</td>
                        <td class="price align-middle text-900 fs--1">10</td>
                        <td class="price align-middle text-900 fs--1">拜託給透明款的</td>
                        <td class="price align-middle text-900 fs--1 text-info fw-bold text-end">2</td>
                        <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0">
                          <button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <!-- 物品內容資訊 -->
                <div class="modal fade" id="applyBoardViewModal" tabindex="-1" aria-labelledby="projectsBoardViewModal" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content overflow-hidden">
                      <div class="modal-header position-relative p-0">
                        <div class="carousel slide carousel-fade" id="carouselExampleControls" data-bs-ride="carousel">
                          <div class="carousel-inner">
                            <!-- 物品圖片輪播 -->
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="assets/img/generic/6.jpg" alt="First slide" />
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="assets/img/generic/7.jpg" alt="Second slide" />
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="assets/img/generic/8.jpg" alt="Third slide" />
                            </div>
                          </div>

                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">往前</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">向後</span>
                          </button>
                        </div>
                      </div>
                      <div class="modal-body p-0">
                        <div class="row g-0">
                          <div class="col-12 border-end">
                            <div class="px-5 py-3">
                              <h3 class="lh-sm mt-3 text-primary">刀－美工刀</h3>
                            </div>
                          </div>
                          <div class="px-5">
                            <div class="mb-4 mt-1 border-bottom">
                              <h6 class="text-800 mb-2 text-gray-500">單位 </h6>
                              <p class="text-1000">支</p>
                            </div>
                            <div class="mb-4 border-bottom">
                              <h6 class="text-800 mb-2 text-gray-500">安全庫存量 </h6>
                              <p class="text-1000">10 </p>
                            </div>
                            <div class="mb-4 border-bottom">
                              <h6 class="text-800 mb-2 text-gray-500">目前庫存量 </h6>
                              <p class="text-1000">5 </p>
                            </div>
                            <div class="mb-4 border-bottom">
                              <h6 class="text-800 mb-2 text-gray-500">放置地點 </h6>
                              <p class="text-1000">倉庫 </p>
                            </div>
                            <div class="mb-4">
                              <h6 class="text-800 mb-2 text-gray-500">規格明細 </h6>
                              <p class="text-1000">COX 40CM </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 gy-6 mt-6">
                <div class="row g-3 justify-content-end">
                  <div class="col-auto">
                    <button class="btn btn-phoenix-primary px-5">清除內容</button>
                  </div>
                  <div class="col-auto">
                    <button class="btn btn-primary px-5 px-sm-15">送出申請</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- 新增物品model -->
          <div class="modal fade" id="applyAddmodel" tabindex="-1" data-bs-backdrop="static" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  <h5 class="modal-title text-white" id="staticBackdropLabel">新增物品</h5>
                  <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1 text-white"></span></button>
                </div>
                <div class="modal-body">
                  <form class="row g-3 mb-6">
                    <h4 class="mt-5 mb-2">填寫申請資料</h4>
                    <div class="col-sm-12">
                      <div class="form-floating">
                        <select class="form-select" id="floatingSelectTask">
                          <option selected="selected">選擇物品分類</option>
                          <option value="1">尺</option>
                          <option value="2">刀</option>
                          <option value="3">美工刀</option>
                        </select>
                        <label for="floatingSelectTask">選擇物品分類<span class="text-warning">　＊ 請選擇物品分類</span></label>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-floating">
                        <select class="form-select" id="floatingSelectTask">
                          <option selected="selected">選擇申請物品</option>
                          <option value="1">透明尺20cm</option>
                          <option value="2">透明尺40cm</option>
                          <option value="3">鐵尺20cm</option>
                        </select>
                        <label for="floatingSelectTask">選擇申請物品<span class="text-warning">　＊ 請選擇申請物品</span></label>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-floating">
                        <input class="form-control" id="floatingInputGrid" type="text" placeholder="申請數量" />
                        <label for="floatingInputGrid">申請數量<span class="text-warning">　＊ 請輸入申請數量</span></label>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-floating">
                        <textarea class="form-control" id="floatingProjectOverview" placeholder="申請備註" style="height: 100px"></textarea>
                        <label for="floatingProjectOverview">申請備註 </label>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" type="button">申請物品</button>
                  <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">取消</button>
                </div>
              </div>
            </div>
          </div>

          
          <?php require('footer.php') ?>
          
        </div>
      </div>
    </main>
    
    <?php require('script.php') ?>
    
  </body>

</html>