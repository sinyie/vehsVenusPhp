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
              <li class="breadcrumb-item"><a href="#!">場地預約功能</a></li>
              <li class="breadcrumb-item active">預約場地一覽</li>
            </ol>
          </nav>
          <div class="mb-9">
            <div id="projectSummary">
              <div class="row mb-6 gx-6 gy-3 align-items-center">
                <div class="col-auto">
                  <h2 class="mb-0">預約場地一覽</h2>
                </div>
                <div class="col-auto"><a class="btn btn-primary px-5" href="bookadd.php"><i class="fa-solid fa-plus me-2"></i>申請預約場地</a></div>
              </div>
              <div class="table-responsive scrollbar">
                <table class="table fs--1 mb-0 border-top border-200">
                  <thead>
                    <tr>
                      <th class="sort white-space-nowrap align-middle ps-0" scope="col" data-sort="rentaltime" style="width:30%;">借用場地時間</th>
                      <th class="sort align-middle ps-3" scope="col" data-sort="purpose" style="width:20%;">借用目的</th>
                      <th class="sort align-middle ps-3" scope="col" data-sort="venusname" style="width:18%;">場地分類名稱</th>
                      <th class="sort align-middle ps-3" scope="col" data-sort="booktime" style="width:15%;">申請日期</th>
                      <th class="sort white-space-nowrap align-middle text-end" scope="col" data-sort="status" style="width:10%;">審核狀態</th>
                      <th class="sort align-middle text-end" scope="col" style="width:7%;"></th>
                    </tr>
                  </thead>
                  <tbody class="list" id="project-list-table-body">
                    <!-- 一個預約 -->
                    <tr class="position-static">
                      <td class="align-middle white-space-nowrap py-4">
                        <a class="text-decoration-none fw-bold fs-0" href="#projectsBoardViewModal" data-bs-toggle="modal">
                          2023-05-09 13:00:00－2023-05-09 14:00:00</a>
                        </td>
                      <td class="align-middle white-space-nowrap ps-3 py-4">
                        <p class="text-900 fs--1 mb-0">會議</p>
                      </td>
                      <td class="align-middle white-space-nowrap ps-3 py-4">
                        <p class="fw-bo text-900 fs--1 mb-0">室外區域－籃球場</p>
                      </td>
                      <td class="align-middle white-space-nowrap ps-3 py-4">
                        <p class="fw-bo text-900 fs--1 mb-0">2023-05-09 13:08:16</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end statuses">
                        <span class="badge badge-phoenix fs--1 badge-phoenix-secondary">未審核</span>
                      </td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action">
                        <div class="font-sans-serif btn-reveal-trigger position-static">
                          <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-1">
                            <a class="dropdown-item" href="bookadd.php">編輯</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-warning" href="#!">刪除</a>
                          </div>
                        </div>
                      </td>
                    </tr>

                    <!-- 預約內容 -->
                    <div class="modal fade" id="projectsBoardViewModal" tabindex="-1" aria-labelledby="projectsBoardViewModal" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content overflow-hidden">
                          <div class="modal-header position-relative p-0"><img class="w-100" src="assets/img/generic/place01.png" alt="" style="width:100%;" /></div>
                          <div class="modal-body p-0">
                            <div class="row g-0">
                              <div class="col-12 border-end">
                                <div class="px-5 py-5 border-bottom">
                                  <h5 class="lh-sm mt-2 fw-bold text-gray-500">2023-05-09 13:00:00 － 2023-05-09 14:00:00</h5>
                                  <h3 class="lh-sm mt-3">室外區域：籃球場</h3>
                                  <h6 class="mb-0 fs--1 mt-5">申請人：<span class="text-info"> 庶務組－王小明</span></h6>
                                  <h6 class="mb-0 fs--1 mt-3">聯絡電話：<span class="text-info"> 0912345678</span></h6>
                                </div>
                              </div>
                              <div class="px-5">
                                <div class="pb-4 mt-5 border-bottom">
                                  <h6 class="text-800 mb-3 text-gray-500">審核狀態</h6><span class="badge badge-phoenix fs--1 me-2 badge-phoenix-secondary">未審核</span><span class="badge badge-phoenix fs--1 me-2 badge-phoenix-primary">已審核</span><span class="badge badge-phoenix fs--1 me-2 badge-phoenix-danger">已退回</span><span class="badge badge-phoenix fs--1 me-2 badge-phoenix-success">已借用</span>
                                </div>
                                <div class="mb-4 mt-4 border-bottom">
                                  <h6 class="text-800 mb-2 text-gray-500">申請日期 </h6>
                                  <p class="text-1000">2023-05-09 13:08:16</p>
                                </div>
                                <div class="mb-4 border-bottom">
                                  <h6 class="text-800 mb-2 text-gray-500">借用目的 </h6>
                                  <p class="text-1000">台中西屯區國小棒球隊比賽 </p>
                                </div>
                                <div class="mb-4 border-bottom">
                                  <h6 class="text-800 mb-2 text-gray-500">活動內容 </h6>
                                  <p class="text-1000">測試活動 </p>
                                </div>
                                <div class="mb-4">
                                  <h6 class="text-800 mb-2 text-gray-500">備註</h6>
                                  <p class="text-1000">通過備註 </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </tbody>
                </table>
              </div>

              <!-- 分頁 -->
              <div class="d-flex flex-wrap align-items-center justify-content-end py-3 pe-0 fs--1 border-bottom border-200">
                <div class="d-flex">
                  <button class="page-link" data-list-pagination="prev">
                    <span class="fas fa-chevron-left"></span>
                  </button>
                  <ul class="mb-0 pagination">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                  </ul>
                  <button class="page-link pe-0" data-list-pagination="next">
                    <span class="fas fa-chevron-right"></span>
                  </button>
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