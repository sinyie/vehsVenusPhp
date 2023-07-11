<!DOCTYPE html>
<html lang="zh-tw" dir="ltr">

  <head>
    <link href="vendors/choices/choices.min.css" rel="stylesheet">
    <link href="vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
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
              <li class="breadcrumb-item"><a href="bookli.html">預約場地一覽</a></li>
              <li class="breadcrumb-item active">申請預約場地</li>
            </ol>
          </nav>
          <div class="border-bottom mb-7 mx-lg-n6 px-lg-6">
            <div class="row">
              <div class="col-xl-9">
                <div class="d-sm-flex justify-content-between">
                  <h2 class="mt-2 mb-4">申請預約場地</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-9">
              <form class="row g-3 mb-6">
                <div class="col-sm-6 col-md-6">
                  <div class="form-floating">
                    <select class="form-select" id="floatingSelectTask">
                      <option selected="selected">借用場地分類</option>
                      <option value="1">室外區域</option>
                      <option value="2">活動中心</option>
                      <option value="3">禮堂</option>
                    </select>
                    <label for="floatingSelectTask">借用場地分類<span class="text-warning">　＊ 請選擇借用場地分類</span></label>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-floating">
                    <select class="form-select" id="floatingSelectPrivacy">
                      <option selected="selected">借用場地</option>
                      <option value="1">操場</option>
                      <option value="2">籃球場</option>
                    </select>
                    <label for="floatingSelectPrivacy">借用場地<span class="text-warning">　＊ 請選擇借用場地</span></label>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="flatpickr-input-container">
                    <div class="form-floating">
                      <input class="form-control datetimepicker" id="floatingInputStartDate" type="text" placeholder="dd/mm/yyyy hour : minute" data-options="{&quot;enableTime&quot;:true,&quot;dateFormat&quot;:&quot;d/m/y H:i&quot;,&quot;disableMobile&quot;:true}" />
                      <label class="ps-6" for="floatingInputStartDate">開始時間<span class="text-warning">　＊ 請輸入開始時間</span></label><span class="uil uil-calendar-alt flatpickr-icon text-700"></span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="flatpickr-input-container">
                    <div class="form-floating">
                      <input class="form-control datetimepicker" id="floatingInputStartDate" type="text" placeholder="dd/mm/yyyy hour : minute" data-options="{&quot;enableTime&quot;:true,&quot;dateFormat&quot;:&quot;d/m/y H:i&quot;,&quot;disableMobile&quot;:true}" />
                      <label class="ps-6" for="floatingInputStartDate">結束時間<span class="text-warning">　＊ 請輸入結束時間</span></label><span class="uil uil-calendar-alt flatpickr-icon text-700"></span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-floating">
                    <input class="form-control" id="floatingInputGrid" type="text" placeholder="借用目的" />
                    <label for="floatingInputGrid">借用目的<span class="text-warning">　＊ 請輸入借用目的</span></label>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-floating">
                    <input class="form-control" id="floatingInputGrid" type="text" placeholder="活動內容" />
                    <label for="floatingInputGrid">活動內容</label>
                  </div>
                </div>
                <div class="col-12 gy-6">
                  <div class="form-floating">
                    <textarea class="form-control" id="floatingProjectOverview" placeholder="備註" style="height: 100px"></textarea>
                    <label for="floatingProjectOverview">備註 </label>
                  </div>
                </div>
                <div class="col-12 gy-6">
                  <div class="row g-3 justify-content-end">
                    <div class="col-auto">
                      <button class="btn btn-phoenix-primary px-5">清除內容</button>
                    </div>
                    <div class="col-auto">
                      <button class="btn btn-primary px-5 px-sm-15">送出申請</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          
          <?php require('footer.php') ?>

        </div>
      </div>
      
    </main>

    <?php require('script.php') ?>


  </body>

</html>