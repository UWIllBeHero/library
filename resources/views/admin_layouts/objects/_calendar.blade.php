{{--<script>
    $(document).ready(function() {
        var initialLocaleCode = 'uk';

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listMonth'
            },
            defaultDate: moment(),
            locale: initialLocaleCode,
            buttonIcons: false, // show the prev/next text
            weekNumbers: true,
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            selectable: true,
            eventLimit: true, // allow "more" link when too many events
            selectHelper: true,
             events: {
                    url: 'admin/calendar',
                    error: function() {
                        $('#script-warning').show();
                    }
                },
                loading: function(bool) {
                    $('#loading').toggle(bool);
                }
        });

        // build the locale selector's options
        $.each($.fullCalendar.locales, function(localeCode) {
            $('#locale-selector').append(
                $('<option/>')
                    .attr('value', localeCode)
                    .prop('selected', localeCode == initialLocaleCode)
                    .text(localeCode)
            );
        });



        // when the selected option changes, dynamically change the calendar option
        $('#locale-selector').on('change', function() {
            if (this.value) {
                $('#calendar').fullCalendar('option', 'locale', this.value);
            }
        });
        // load the list of available timezones, build the <select> options
        $.getJSON('php/get-timezones.php', function(timezones) {
            $.each(timezones, function(i, timezone) {
                if (timezone != 'Europe/Kiev') { // Europe is already in the list
                    $('#timezone-selector').append(
                        $("<option/>").text(timezone).attr('value', timezone)
                    );
                }
            });
        });

        // when the timezone selector changes, dynamically change the calendar option
        $('#timezone-selector').on('change', function() {
            $('#calendar').fullCalendar('option', 'timezone', this.value || false);
        });

    });
</script>--}}
{{--@include('calendar_events.index')--}}
<div id='calendar'>
    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}
</div>
<script>
    $.getJSON('php/get-timezones.php', function(timezones) {
        $.each(timezones, function(i, timezone) {
            if (timezone != 'Europe/Kiev') { // UTC is already in the list
                $('#timezone-selector').append(
                    $("<option/>").text(timezone).attr('value', timezone)
                );
            }
        });
    });
</script>