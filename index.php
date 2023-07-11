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
          <div class="row g-0 mb-4 align-items-center">
            <div class="col-5 col-md-6">
              <h4 class="mb-0 text-1100 fw-bold fs-md-2">
                <span class="calendar-day d-block d-md-inline mb-1"></span>
                <span class="px-3 fw-thin text-400 d-none d-md-inline">|</span>
                <span class="calendar-date"> </span>
              </h4>
            </div>
            <div class="col-7 col-md-6 d-flex justify-content-end">
              <button class="btn btn-link text-900 px-0 me-2 me-md-4">
                <span class="fa-solid fa-sync fs--2 me-2"></span>
                <span class="d-none d-md-inline">重新整理</span>
              </button>
            </div>
          </div>
          <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 border-y border-200">
            <div class="row py-3 gy-3 gx-0">
              <div class="col-6 col-md-4 order-1 d-flex align-items-center">
                <button class="btn btn-sm btn-phoenix-primary px-4" data-event="today">今日</button>
              </div>
              <div class="col-12 col-md-4 order-md-1 d-flex align-items-center justify-content-center">
                <button class="btn icon-item icon-item-sm shadow-none text-1100 p-0" type="button" data-event="prev" title="Previous">
                  <span class="fas fa-chevron-left"></span>
                </button>
                <h3 class="px-3 text-1100 fw-semi-bold calendar-title mb-0"> </h3>
                <button class="btn icon-item icon-item-sm shadow-none text-1100 p-0" type="button" data-event="next" title="Next">
                  <span class="fas fa-chevron-right"></span>
                </button>
              </div>
              <div class="col-6 col-md-4 ms-auto order-1 d-flex justify-content-end">
                <div>
                  <div class="btn-group btn-group-sm" role="group">
                    <button class="btn btn-phoenix-secondary" data-fc-view="dayGridMonth">本月</button>
                    <button class="btn btn-phoenix-secondary" data-fc-view="timeGridWeek">本周</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- 行事曆載入 -->
          <!-- 行程json寫在js-calendar.js -->
          <div class="calendar-outline mt-6 mb-9" id="appCalendar"></div>

          <?php require('footer.php') ?>

        </div>

        <!-- 行事曆事件放置地方 -->
        <div class="modal fade" id="eventDetailsModal" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border"></div>
          </div>
        </div>

      </div>
      
    </main>
    
    <?php require('script.php') ?>
    
  </body>

</html>