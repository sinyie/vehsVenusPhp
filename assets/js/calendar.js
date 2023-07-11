(function (factory) {
  typeof define === 'function' && define.amd ? define(factory) :
  factory();
})((function () { 'use strict';

  /* -------------------------------------------------------------------------- */

  const camelize = str => {
    const text = str.replace(/[-_\s.]+(.)?/g, (_, c) =>
      c ? c.toUpperCase() : ''
    );
    return `${text.substr(0, 1).toLowerCase()}${text.substr(1)}`;
  };

  const getData = (el, data) => {
    try {
      return JSON.parse(el.dataset[camelize(data)]);
    } catch (e) {
      return el.dataset[camelize(data)];
    }
  };

  /* -------------------------------------------------------------------------- */
  /*                                   Calendar                                 */

  /* -------------------------------------------------------------------------- */
  const renderCalendar = (el, option) => {
    const { merge } = window._;

    const options = merge(
      {
        initialView: 'dayGridMonth',
        editable: true,
        direction: document.querySelector('html').getAttribute('dir'),
        //引用本地語言包
        locale: 'zh-tw',
        //禁止事件被拖曳修改
        editable: false ,
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        buttonText: {
          month: '本月',
          week: '本周',
          day: '本日'
        }
      },
      option
    );
    const calendar = new window.FullCalendar.Calendar(el, options);
    calendar.render();
    document
      .querySelector('.navbar-vertical-toggle')
      ?.addEventListener('navbar.vertical.toggle', () => calendar.updateSize());
    return calendar;
  };

  const fullCalendarInit = () => {
    const { getData } = window.phoenix.utils;

    const calendars = document.querySelectorAll('[data-calendar]');
    calendars.forEach(item => {
      console.log(item);
      const options = getData(item, 'calendar');
      renderCalendar(item, options);
    });
  };

  const fullCalendar = {
    renderCalendar,
    fullCalendarInit
  };

  const { dayjs } = window;
  const currentDay = dayjs && dayjs().format('DD');
  const currentMonth = dayjs && dayjs().format('MM');
  dayjs && dayjs().subtract(1, 'month').format('MM');
  dayjs && dayjs().add(1, 'month').format('MM');
  const currentYear = dayjs && dayjs().format('YYYY');
  const events = [
    // {
    //   title: 'Boot Camp',
    //   start: `${currentYear}-${currentMonth}-01 10:00:00`,
    //   end: `${currentYear}-${currentMonth}-03 16:00:00`,
    //   description:
    //     "Boston Harbor Now in partnership with the Friends of Christopher Columbus Park, the Wharf District Council and the City of Boston is proud to announce the New Year's Eve Midnight Harbor Fireworks! This beloved nearly 40-year old tradition is made possible by the generous support of local waterfront organizations and businesses and the support of the City of Boston and the Office of Mayor Marty Walsh.",
    //   className: 'text-success',
    //   location:
    //     'Boston Harborwalk, Christopher Columbus Park, <br /> Boston, MA 02109, United States',
    //   organizer: 'Boston Harbor Now'
    // },
    // {
    //   title: 'Conference',
    //   start: `${currentYear}-${currentMonth}-${currentDay}`,
    //   description:
    //     'The Milken Institute Global Conference gathered the best minds in the world to tackle some of its most stubborn challenges. It was a unique experience in which individuals with the power to enact change connected with experts who are reinventing health, technology, philanthropy, industry, and media.',
    //   className: 'text-success',
    //   // allDay: true,
    //   schedules: [
    //     {
    //       title: 'Reporting',
    //       start: `${currentYear}-${currentMonth}-${currentDay} 11:00:00`,
    //       description:
    //         'Time to start the conference and will briefly describe all information about the event.  ',
    //       className: 'text-success '
    //     },
    //     {
    //       title: 'Lunch',
    //       start: `${currentYear}-${currentMonth}-${currentDay} 14:00:00`,
    //       description: 'Lunch facility for all the attendance in the conference.',
    //       className: 'text-info'
    //     },
    //     {
    //       title: 'Contest',
    //       start: `${currentYear}-${currentMonth}-${currentDay} 16:00:00`,
    //       description: 'The starting of the programming contest',
    //       className: 'text-success'
    //     },
    //     {
    //       title: 'Dinner',
    //       start: `${currentYear}-${currentMonth}-${currentDay} 22:00:00`,
    //       description: 'Dinner facility for all the attendance in the conference',
    //       className: 'text-success'
    //     }
    //   ]
    // },
    // {
    //   title: `ICT Expo ${currentYear} - Product Release`,
    //   start: `${currentYear}-${currentMonth}-16 10:00:00`,
    //   description: `ICT Expo ${currentYear} is the largest private-sector exposition aimed at showcasing IT and ITES products and services in Switzerland.`,
    //   end: `${currentYear}-${currentMonth}-18 16:00:00`,
    //   className: 'text-warning',
    //   allDay: true
    // },
    // {
    //   title: 'Meeting',
    //   start: `${currentYear}-${currentMonth}-07 10:00:00`,
    //   description:
    //     'Discuss about the upcoming projects in current year and assign all tasks to the individuals',
    //   className: 'text-info'
    // },
    // {
    //   title: 'Contest',
    //   start: `${currentYear}-${currentMonth}-14 10:00:00`,
    //   className: 'text-info',
    //   description:
    //     'PeaceX is an international peace and amity organisation that aims at casting a pall at the striking issues surmounting the development of peoples and is committed to impacting the lives of young people all over the world.'
    // },
    // {
    //   title: 'Event With Url',
    //   start: `${currentYear}-${currentMonth}-23`,
    //   description:
    //     'Sample example of a event with url. Click the event, will redirect to the given link.',
    //   className: 'text-success',
    //   url: 'http://google.com'
    // },
    // {
    //   title: 'Competition',
    //   start: `${currentYear}-${currentMonth}-26`,
    //   description:
    //     'The Future of Zambia – Top 30 Under 30 is an annual award, ranking scheme, and recognition platform for young Zambian achievers under the age of 30, who are building brands, creating jobs, changing the game, and transforming the country.',
    //   className: 'text-danger'
    // },
    // {
    //   title: 'Birthday Party',
    //   start: `${currentYear}-${nextMonth}-05`,
    //   description: 'Will celebrate birthday party with my friends and family',
    //   className: 'text-primary'
    // },
    // {
    //   title: 'Click for Google',
    //   url: 'http://google.com/',
    //   start: `${currentYear}-${prevMonth}-10`,
    //   description:
    //     'Applications are open for the New Media Writing Prize 2020. The New Media Writing Prize (NMWP) showcases exciting and inventive stories and poetry that integrate a variety of formats, platforms, and digital media.',
    //   className: 'text-primary'
    // },
    //整天的行程標題字會隨著className的設定變色
    {
      title: '室外區域：操場',
      organizer: '庶務組－王小明',
      tel: '0912345678',
      start: `${currentYear}-${currentMonth}-06`,
      end: `${currentYear}-${currentMonth}-06`,
      purpose: '會議',
      activity: '測試活動',
      description:
        "通過備註",
      className: 'text-success'
    },
    //有時段的行程標題字為灰色
    {
      title: '室外區域：籃球場',
      organizer: '庶務組－王小明',
      tel: '0912345678',
      start: `${currentYear}-${currentMonth}-${currentDay} 10:00:00`,
      end: `${currentYear}-${currentMonth}-${currentDay} 16:00:00`,
      purpose: '會議',
      activity: '測試活動',
      description:
        '通過備註',
      className: 'text-success',
    },
  ];

  const getTemplate = event => `
<div class="modal-header ps-card border-bottom pb-4">
  <div>
    <h4 class="modal-title text-1000 mb-3 mt-3">${event.title}</h4>
    ${
      event.extendedProps.organizer
        ? `<p class="mb-0 fs--1 mt-2 text-gray--500">
        申請人： <span class="text-info">${event.extendedProps.organizer}</span>
      </p>`
        : ''
    }
    ${
      event.extendedProps.tel
        ? `<p class="mb-0 fs--1 mt-1 text-gray--500">
        聯絡電話： <span class="text-info">${event.extendedProps.tel}</span>
      </p>`
        : ''
    }
  </div>
  <button type="button" class="btn p-1 fw-bolder" data-bs-dismiss="modal" aria-label="Close">
    <span class='fas fa-times fs-0'></span>
  </button>

</div>

<div class="modal-body px-card pb-card pt-1 fs--1">
  <div class="mt-4 border-bottom pb-3">
    <h5 class='mb-0 text-800'>借用時間</h5>
    <p class="mb-1 mt-2">
    ${
      window.dayjs &&
      window.dayjs(event.start).format('dddd, MMMM D, YYYY, h:mm A')
    } 
    ${
      event.end
        ? `– ${
            window.dayjs &&
            window
              .dayjs(event.end)
              .subtract(1, 'day')
              .format('dddd, MMMM D, YYYY, h:mm A')
          }`
        : ''
    }
  </p>
  </div>
  ${
    event.extendedProps.purpose
      ? `
        <div class="mt-4 border-bottom pb-3">
          <h5 class='mb-0 text-800'>借用目的</h5>
          <p class="mb-0 mt-2">${event.extendedProps.purpose}</p>
        </div>
      `
      : ''
  }
  ${
    event.extendedProps.activity
      ? `
        <div class="mt-4 border-bottom pb-3">
          <h5 class='mb-0 text-800'>活動內容</h5>
          <p class="mb-0 mt-2">${event.extendedProps.activity}</p>
        </div>
      `
      : ''
  }
  ${
    event.extendedProps.description
      ? `
        <div class="mt-4 ">
          <h5 class='mb-0 text-800'>備註</h5>
          <p class="mb-0 mt-2">${event.extendedProps.description}</p>
        </div>
      `
      : ''
  }
  ${
    event.schedules
      ? `
      <div class="mt-3">
        <h5 class='mb-0 text-800'>Schedule</h5>
        <ul class="list-unstyled timeline mt-2 mb-0">
          ${event.schedules
            .map(schedule => `<li>${schedule.title}</li>`)
            .join('')}
        </ul>
      </div>
      `
      : ''
  }
  </div>
</div>

<div class="modal-footer d-flex justify-content-end px-card pt-0 border-top-0">
  <button type="button" data-bs-dismiss="modal" class="btn btn-primary btn-sm" aria-label="Close">
    關閉　
    <span class="fas fa-angle-right fs--2 ml-1"></span>
  </button>
</div>
`;

  /*-----------------------------------------------
  |   Calendar
  -----------------------------------------------*/
  const appCalendarInit = () => {
    const Selectors = {
      ACTIVE: '.active',
      ADD_EVENT_FORM: '#addEventForm',
      ADD_EVENT_MODAL: '#addEventModal',
      CALENDAR: '#appCalendar',
      CALENDAR_TITLE: '.calendar-title',
      CALENDAR_DAY: '.calendar-day',
      CALENDAR_DATE: '.calendar-date',
      DATA_CALENDAR_VIEW: '[data-fc-view]',
      DATA_EVENT: '[data-event]',
      DATA_VIEW_TITLE: '[data-view-title]',
      EVENT_DETAILS_MODAL: '#eventDetailsModal',
      EVENT_DETAILS_MODAL_CONTENT: '#eventDetailsModal .modal-content',
      EVENT_START_DATE: '#addEventModal [name="startDate"]',
      INPUT_TITLE: '[name="title"]'
    };

    const Events = {
      CLICK: 'click',
      SHOWN_BS_MODAL: 'shown.bs.modal',
      SUBMIT: 'submit'
    };

    const DataKeys = {
      EVENT: 'event',
      FC_VIEW: 'fc-view'
    };

    const eventList = events.reduce(
      (acc, val) =>
        val.schedules ? acc.concat(val.schedules.concat(val)) : acc.concat(val),
      []
    );
    // console.log(eventList);

    const updateDay = day => {
      const days = [
        '星期日',
        '星期一',
        '星期二',
        '星期三',
        '星期四',
        '星期五',
        '星期六'
      ];
      return days[day];
    };

    const setCurrentDate = () => {
      const dateObj = new Date();
      const month = dateObj.toLocaleString('zh-tw', { month: 'short' });
      const date = dateObj.getDate(); // return date number
      const day = dateObj.getDay(); // return week day number
      const year = dateObj.getFullYear();
      // const newdate = `${date}  ${month},  ${year}`;
      const newdate = `${year}` + `年`+ `${month}${date}` + `日`;
      if (document.querySelector(Selectors.CALENDAR_DAY)) {
        document.querySelector(Selectors.CALENDAR_DAY).textContent =
          updateDay(day);
      }
      if (document.querySelector(Selectors.CALENDAR_DATE)) {
        document.querySelector(Selectors.CALENDAR_DATE).textContent = newdate ;
      }
    };
    setCurrentDate();

    const updateTitle = currentData => {
      const { currentViewType } = currentData;
      // week view
      if (currentViewType === 'timeGridWeek') {
        const weekStartsDate = currentData.dateProfile.currentRange.start;
        const startingMonth = weekStartsDate.toLocaleString('zh-tw', {
          month: 'short'
        });
        const startingDate = weekStartsDate.getDate();
        const weekEndDate = currentData.dateProfile.currentRange.end;

        const endingMonth = weekEndDate.toLocaleString('zh-tw', {
          month: 'short'
        });
        const endingDate = weekEndDate.getDate();

        document.querySelector(
          Selectors.CALENDAR_TITLE
        ).textContent = `${startingMonth} ${startingDate}日 - ${endingMonth} ${endingDate}日`;
      } else
        document.querySelector(Selectors.CALENDAR_TITLE).textContent =
          currentData.viewTitle;
    };

    const appCalendar = document.querySelector(Selectors.CALENDAR);
    const addEventForm = document.querySelector(Selectors.ADD_EVENT_FORM);
    const addEventModal = document.querySelector(Selectors.ADD_EVENT_MODAL);
    const eventDetailsModal = document.querySelector(
      Selectors.EVENT_DETAILS_MODAL
    );

    if (appCalendar) {
      const calendar = fullCalendar.renderCalendar(appCalendar, {
        headerToolbar: false,
        dayMaxEvents: 5,
        height: 800,
        stickyHeaderDates: false,
        views: {
          week: {
            eventLimit: 5
          }
        },
        eventTimeFormat: {
          hour: 'numeric',
          minute: '2-digit',
          omitZeroMinute: true,
          meridiem: true
        },
        events: eventList,
        eventClick: info => {
          if (info.event.url) {
            window.open(info.event.url, '_blank');
            info.jsEvent.preventDefault();
          } else {
            const template = getTemplate(info.event);
            document.querySelector(
              Selectors.EVENT_DETAILS_MODAL_CONTENT
            ).innerHTML = template;
            const modal = new window.bootstrap.Modal(eventDetailsModal);
            modal.show();
          }
        },
        dateClick(info) {
          const modal = new window.bootstrap.Modal(addEventModal);
          modal.show();
          /* eslint-disable-next-line */
          const flatpickr = document.querySelector(Selectors.EVENT_START_DATE)._flatpickr;
          flatpickr.setDate([info.dateStr]);
        }
      });

      updateTitle(calendar.currentData);

      document.querySelectorAll(Selectors.DATA_EVENT).forEach(button => {
        button.addEventListener(Events.CLICK, e => {
          const el = e.currentTarget;
          const type = getData(el, DataKeys.EVENT);
          switch (type) {
            case 'prev':
              calendar.prev();
              updateTitle(calendar.currentData);
              console.log(calendar);
              break;
            case 'next':
              calendar.next();
              updateTitle(calendar.currentData);
              break;
            case 'today':
              calendar.today();
              updateTitle(calendar.currentData);
              break;
            default:
              calendar.today();
              updateTitle(calendar.currentData);
              break;
          }
        });
      });

      document.querySelectorAll(Selectors.DATA_CALENDAR_VIEW).forEach(link => {
        link.addEventListener(Events.CLICK, e => {
          e.preventDefault();
          const el = e.currentTarget;
          calendar.changeView(getData(el, DataKeys.FC_VIEW));
          updateTitle(calendar.currentData);
        });
      });

      if (addEventForm) {
        addEventForm.addEventListener(Events.SUBMIT, e => {
          e.preventDefault();
          const { title, startDate, endDate, label, description, allDay } =
            e.target;
          calendar.addEvent({
            title: title.value,
            start: startDate.value,
            end: endDate.value ? endDate.value : null,
            allDay: allDay.checked,
            className: `text-${label.value}`,
            description: description.value
          });
          e.target.reset();
          window.bootstrap.Modal.getInstance(addEventModal).hide();
        });
      }

      if (addEventModal) {
        addEventModal.addEventListener(
          Events.SHOWN_BS_MODAL,
          ({ currentTarget }) => {
            currentTarget.querySelector(Selectors.INPUT_TITLE)?.focus();
          }
        );
      }
    }
  };

  const { docReady } = window.phoenix.utils;

  docReady(appCalendarInit);

}));
//# sourceMappingURL=calendar.js.map
