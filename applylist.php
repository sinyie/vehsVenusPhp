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
              <li class="breadcrumb-item active">申請物品一覽</li>
            </ol>
          </nav>
          <div class="mb-9">
            <div id="projectSummary">
              <div class="row mb-6 gx-6 gy-3 align-items-center">
                <div class="col-auto">
                  <h2 class="mb-0">申請物品一覽</h2>
                </div>
                <div class="col-auto">
                  <a class="btn btn-primary px-5" href="applyadd.php">
                    <i class="fa-solid fa-plus me-2"></i>
                    申請物品
                  </a>
                </div>
              </div>
              <div class="table-responsive scrollbar">
                <table class="table fs--1 mb-0 border-top border-200">
                  <thead>
                    <tr>
                      <th class="sort align-middle ps-3" scope="col" data-sort="purpose" style="width:50%;">申請事由</th>
                      <th class="sort white-space-nowrap align-middle" scope="col" data-sort="rentaltime" style="width:20%;">申請日期</th>
                      <th class="sort white-space-nowrap align-middle text-end" scope="col" data-sort="status" style="width:15%;">審核狀態</th>
                      <th class="sort align-middle text-end" scope="col" style="width:15%;"></th>
                    </tr>
                  </thead>
                  <tbody class="list" id="project-list-table-body">
                    <tr class="position-static">
                      <td class="align-middle white-space-nowrap py-4"><a class="text-decoration-none fw-medium fs-0 ps-3" href="applyin.php">申請學期初使用色筆</a></td>
                      <td class="align-middle white-space-nowrap py-4">
                        <p class="text-900 fs--1 mb-0">2023-05-10</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end statuses">
                        <span class="badge badge-phoenix fs--1 badge-phoenix-secondary">未審核</span>
                        <!-- <span class="badge badge-phoenix fs--1 badge-phoenix-primary">已審核</span> -->
                        <!-- <span class="badge badge-phoenix fs--1 badge-phoenix-danger">已退回</span> -->
                        <!-- <span class="badge badge-phoenix fs--1 badge-phoenix-success">已領用</span> -->
                      </td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action">
                        <div class="font-sans-serif btn-reveal-trigger position-static fs--2">
                          <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                            <span class="fas fa-ellipsis-h"></span>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end py-1">
                            <a class="dropdown-item" href="applyin.php">查看</a>
                            <a class="dropdown-item" href="applyadd.php">編輯</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!"> 刪除</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>

              </div>

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