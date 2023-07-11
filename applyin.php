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
              <li class="breadcrumb-item"><a href="#!">申請物品一覽</a></li>
              <li class="breadcrumb-item active">申請學期初使用色筆</li>
            </ol>
          </nav>
          <div class="pb-9">
            <div class="row mb-4">
              <div class="col-12">
                <div class="row align-items-center justify-content-between g-3 mb-3">
                  <div class="col-12 col-md-auto">
                    <h2 class="mb-0">申請學期初使用色筆</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="row g-0 g-md-4 g-xl-6">
              <div class="col-md-5 col-lg-5 col-xl-4">
                <div class="sticky-leads-sidebar">
                  <div class="bg-soft scrollbar mb-8" id="productFilterColumn">
                    <div class="card">
                      <div class="card-body">
                        <div class="pb-4 mt-2 border-bottom">
                          <h6 class="text-800 mb-3 text-gray-500">申請狀態</h6>
                            <span class="badge badge-phoenix fs--1 me-2 badge-phoenix-secondary">未審核</span>
                            <span class="badge badge-phoenix fs--1 me-2 badge-phoenix-primary">已審核</span>
                            <span class="badge badge-phoenix fs--1 me-2 badge-phoenix-danger">已退回</span>
                            <span class="badge badge-phoenix fs--1 me-2 badge-phoenix-success">已領用</span>
                        </div>
                        <div class="mb-4 mt-4 border-bottom">
                          <h6 class="text-800 mb-2 text-gray-500">申請日期 </h6>
                          <p class="text-1000">2023-05-10 </p>
                        </div>
                        <div class="border-bottom">
                          <h6 class="text-800 mb-2 text-gray-500">備註 </h6>
                          <p class="text-1000">尺－塑膠40cm 暫無庫存 </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 col-xl-8">
                <div class="lead-details-container">
                  <div class="mb-8">
                    <div class="d-flex justify-content-between align-items-center mb-4" id="scrollspyDeals">
                      <h2 class="mb-2">申請物品一覽</h2>
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
                              <th class="sort align-middle text-end pe-0" scope="col" style="width:8%;"></th>
                            </tr>
                          </thead>
                          <tbody class="list" id="profile-wishlist-table-body" style="border-style:none;">
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="align-middle white-space-nowrap ps-0 py-0">
                                <div class="border rounded-2 d-inline-block my-2"><img src="assets/img//products/17.png" alt="" width="60" /></div>
                              </td>
                              <td class="products align-middle pe-11"><a class="fw-medium mb-0 line-clamp-1" href="#applyBoardViewModal" data-bs-toggle="modal">刀－美工刀</a></td>
                              <td class="color align-middle white-space-nowrap fs--1 text-900">支</td>
                              <td class="size align-middle white-space-nowrap text-900 fs--1">13</td>
                              <td class="price align-middle text-900 fs--1">10</td>
                              <td class="price align-middle text-900 fs--1">拜託給透明款的</td>
                              <td class="price align-middle text-900 fs--1 text-info fw-bold text-end">2</td>
                              <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"></td>
                            </tr>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="align-middle white-space-nowrap ps-0 py-0">
                                <div class="border rounded-2 d-inline-block my-2"><img src="assets/img//products/12.png" alt="" width="60" /></div>
                              </td>
                              <td class="products align-middle pe-11"><a class="fw-medium mb-0 line-clamp-1" href="#applyBoardViewModal02" data-bs-toggle="modal">尺－塑膠40cm</a></td>
                              <td class="color align-middle white-space-nowrap fs--1 text-900">支</td>
                              <td class="size align-middle white-space-nowrap text-900 fs--1">5</td>
                              <td class="price align-middle text-900 fs--1">10</td>
                              <td class="price align-middle text-900 fs--1">拜託給透明款的</td>
                              <td class="price align-middle text-900 fs--1 text-info fw-bold text-end">2</td>
                              <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="modal fade" id="applyBoardViewModal" tabindex="-1" aria-labelledby="projectsBoardViewModal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content overflow-hidden">
                            <div class="modal-header position-relative p-0">
                              <div class="carousel slide carousel-fade" id="carouselExampleControls" data-bs-ride="carousel">
                                <div class="carousel-inner">
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
                                  <span class="sr-only">Previous</span>

                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>

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
                  </div>
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