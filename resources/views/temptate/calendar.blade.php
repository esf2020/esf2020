	<!-- link template -->
	<link rel="stylesheet" href="{{url('plugins/all.min.css')}}">
	<link rel="stylesheet" href="{{url('plugins/adminlte.min.css')}}">
	<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
	<script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{ url('assets/js/jquery.min.js')}}"></script>
	<link rel="stylesheet" href="{{ url('fontawesome/css/all.min.css')}}">
	<script src="{{ url('fontawesome/js/all.min.js')}}"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ url('home/index')}}" class="nav-link">Home</a>
            </li>
        </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4 mt-lg-5">         <!-- Sidebar -->
    <p class="brand-link">
        <img src="{{ url('dist/img/admin.PNG') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>USER : {{ Auth::user()->name }}</b></span>
      </p>
    <div class="sidebar">
        <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item" disabled>
                    <div class="card-header bg-warning">
                    <b><i class="nav-icon fas fa-user-circle"></i>
                      Gestion MAT</b>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{url('home/index')}}" class="nav-link">
                      <i class="nav-icon fas fa-chart-pie"></i>
                      <p>Page d'accueil </p>
                    </a>
                </li>
                <!--========= Data of tables ==================================== -->
                    <li class="nav-item">
                        <a href="" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables DATA
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('home/listesmat')}}" class="nav-link">
                            <i class="far far fa-check-circle"></i>
                            <p>Materiels</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('home/listesmvt')}}" class="nav-link">
                                <i class="far far fa-check-circle"></i>
                            <p>Mouvement</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('home/listescateg')}}" class="nav-link">
                                <i class="far far fa-check-circle"></i>
                            <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('home/glob')}}" class="nav-link">
                                <i class="far far fa-check-circle"></i>
                            <p>Det MVT</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                <!--========= end Data of tables ==================================== -->
                <!--========= Insertion  Data on DB ==================================== -->
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>
                            Insertion DATA
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('home/insertion_mat')}}" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                            <p>Insert Mat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('home/insertmvt')}}" class="nav-link">
                                <i class="nav-icon fas fa-plus-square"></i>
                            <p>Insert Mvt</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('home/insertion_categ')}}" class="nav-link">
                                <i class="nav-icon fas fa-plus-circle"></i>
                            <p>ADD Categ</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--========= end Data of tables ==================================== -->
                <!--========= Aures paramètres ==================================== -->
                  <li class="nav-header"><i class="fas fa-bell"></i><b> Autres paramètres </b></li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                          <i class="nav-icon far fa-calendar-alt"></i>
                          <p>Calendar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                          <i class="nav-icon far fa-image"></i>
                          <p>
                          Gallery
                          </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <b><i class="fas fa-user-lock"></i>  {{ __('Logout') }}</b>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Calendar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Calendar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="sticky-top mb-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Draggable Events</h4>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
                    <div class="external-event bg-success">Lunch</div>
                    <div class="external-event bg-warning">Go home</div>
                    <div class="external-event bg-info">Do homework</div>
                    <div class="external-event bg-primary">Work on UI design</div>
                    <div class="external-event bg-danger">Sleep tight</div>
                    <div class="checkbox">
                      <label for="drop-remove">
                        <input type="checkbox" id="drop-remove">
                        remove after drop
                      </label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Create Event</h3>
                </div>
                <div class="card-body">
                  <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                    <ul class="fc-color-picker" id="color-chooser">
                      <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                    </ul>
                  </div>
                  <!-- /btn-group -->
                  <div class="input-group">
                    <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                    <div class="input-group-append">
                      <button id="add-new-event" type="button" class="btn btn-primary">Add</button>
                    </div>
                    <!-- /btn-group -->
                  </div>
                  <!-- /input-group -->
                </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
 </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="{{url('plugins/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('plugins/js/bootstrap.bundle.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{url('plugins/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('plugins/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('plugins/demo.js')}}"></script>

<!-- jQuery -->
<!-- Bootstrap -->
<!-- jQuery UI -->
<script src="{{url('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- AdminLTE App -->
<!-- fullCalendar 2.2.5 -->
<script src="{{url('plugins/moment/moment.min.js')}}"></script>
<script src="{{url('plugins/fullcalendar/main.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<!-- Page specific script -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {


        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      headerToolbar: {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      themeSystem: 'bootstrap',
      //Random default events
      events: [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954', //red
          allDay         : true
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'https://www.google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    // Color chooser button
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      // Save color
      currColor = $(this).css('color')
      // Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      // Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      // Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.text(val)
      $('#external-events').prepend(event)

      // Add draggable funtionality
      ini_events(event)

      // Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
</body>
</html>
