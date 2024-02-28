<?php
  global $wpdb;
  $currentDate = date('Y-m-d');
  $today = new DateTime($currentDate);
  $sql = "SELECT * FROM wp_booking_availability WHERE service_id = 1 and date = '" . $currentDate . "' or date > '" . $currentDate . "'";
  $avabilities = $wpdb->get_results($wpdb->prepare($sql));
  $avail_days = [];
  foreach ($avabilities as $avability) {
    $interval = $today->diff(new DateTime($avability->date));
    $avail_days[] = $interval->format('%a');
  }
  ?>

<script>
$(document).ready(function() {

    const avail_days = <?= json_encode($avail_days); ?>

    console.log(avail_days);
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    var events = [];
    console.log(d)

    for (var i = 0; i < avail_days.length; i++) {
        events.push({
            title: '空きあり',
            start: new Date(y, m, d + Number(avail_days[i]))
        })
    }

    $("#service_txt").html("<p>¥" + localStorage.getItem("service_txt") + "  </p>");

    $('#external-events div.external-event').each(function() {
        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
        };
        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);
        // make the event draggable using jQuery UI
        $(this).draggable({
            zIndex: 999,
            revert: true, // will cause the event to go back to its
            revertDuration: 0 //  original position after the drag
        });
    });
    /* initialize the calendar
    -----------------------------------------------------------------*/
    var calendar = $('#calendar').fullCalendar({
        header: {
            left: 'prev',
            center: 'title',
            right: 'next'
        },
        editable: true,
        firstDay: 0, //  1(Monday) this can be changed to 0(Sunday) for the USA system
        selectable: true,
        defaultView: 'month',
        axisFormat: 'h:mm',
        columnFormat: {
            month: 'ddd', // Mon
            week: 'ddd d', // Mon 7
            day: 'dddd M/d', // Monday 9/7
            agendaDay: 'dddd d'
        },
        titleFormat: {
            month: 'MMMM yyyy', // September 2009
            week: "MMMM yyyy", // September 2009
            day: 'MMMM yyyy' // Tuesday, Sep 8, 2009
        },
        allDaySlot: false,
        selectHelper: true,
        select: function(start, end, allDay) {
            var dt = new Date(start);
            var date = dt.getFullYear() + "-" + (dt.getMonth() + 1) + "-" + dt.getDate();
            console.log("start_date", date)
            localStorage.setItem("start_date", date);
            location.href = '<?php echo site_url(); ?>/?page_slug=book3-use-time';
            // $(".base-outline-button").removeAttr('disabled');

            // var title = prompt('Event Title:');
            // if (title) {
            //   calendar.fullCalendar('renderEvent', {
            //       title: title,
            //       start: start,
            //       end: end,
            //       allDay: allDay
            //     },
            //     true // make the event "stick"
            //   );
            // }
            // calendar.fullCalendar('unselect');
        },
        dayRender: function(date, cell) {
            // if (date > maxDate) {
            $(cell).addClass('disabled');
            // }
        },

        droppable: true, // this allows things to be dropped onto the calendar !!!
        drop: function(date, allDay) { // this function is called when something is dropped
            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');
            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);
            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;
            // render the event on the calendar
            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                $(this).remove();
            }
        },
        events: events
    });
    // calendar.events()
});
</script>

<section id="page-title">
    <div class="container">
        <div class="page-title">
            <h1>ご利用時間</h1>
            <!-- <span>Inspiration comes of working every day.</span> -->
        </div>
    </div>
</section>
<section id="page-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="content col-md-11">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14">
                                <path id="Icon_material-home" data-name="Icon material-home"
                                    d="M9.4,18.5V13.559h3.2V18.5h4V11.912H19L11,4.5,3,11.912H5.4V18.5Z"
                                    transform="translate(-3 -4.5)" fill="#1a0a01" />
                            </svg>
                            <a href="<?php echo site_url(); ?>" style="padding-top:5px; font-family:'Noto Serif JP'">
                                Home
                            </a>
                        </li>
                        <li class="active"><a href="#">ご利用人数</a></li>
                        <li class="active"><a href="#">ご利用日</a></li>                        
                    </ul>
                </div>
                <div class="row w-100 justify-content-center" id="login-form">
                    <div class="col-md-12" style="padding: 50px; max-width:1000px">
                        <div class="row">
                            <div class="form-group">
                                <div class="text-center" id="service_txt">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div id='calendar'></div>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="col-md-8 col-sm-12 m-0 p-0">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <div class="col-md-6  col-sm-12  mt-2">
                                    </div>
                                    <div class="col-md-6 col-sm-12 mt-2">

                                        <button type="button" class="base-light-button w-100"
                                            onclick="location='<?php echo site_url(); ?>/?page_slug=book1-selectplan'">
                                            戻る
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>