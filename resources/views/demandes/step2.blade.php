@extends('layouts.master')

@section('body')
<div class="container pt-5 push-bottom">
    @component('components.card')
        <nav class="nav nav-pills nav-fill">
            <a class="nav-item nav-link" href="#">Active</a>
            <a class="nav-item nav-link active" href="#">Link</a>
            <a class="nav-item nav-link disabled" href="#">Link</a>
            <a class="nav-item nav-link disabled" href="#">Disabled</a>
        </nav>
    @endcomponent
    
    @component('components.card')
        <h5 class="font-weight-bold mb-4">Demande de Voyage</h5>
        
        <div class="form-row">
            <div class="form-group col-md-5">
                <label class="col-form-label-md">De</label>
                <select id="flight-from" class="form-control">
                    @foreach ($sites as $site)
                    <option value="{{ $site->id }}" data-city="{{ strtolower($site->city) }}" >{{ $site->name }}({{ $site->city }})</option>
                    @endforeach
                </select>
                {{--  <input id="flight-from" value="{{ $user->site->city }}" type="text" class="typeahead form-control form-control-md">  --}}
            </div>
            <div class="form-group col-md-5">
                <label class="col-form-label-md">Vers</label>
                <select id="flight-to" class="form-control">
                    @foreach ($sites as $site)
                    <option value="{{ $site->id }}" data-city="{{ strtolower($site->city) }}" >{{ $site->name }}({{ $site->city }})</option>
                    @endforeach
                </select>
                {{--  <input id="flight-to" type="text" class="typeahead form-control form-control-md">  --}}
            </div>
            <div class="form-group col-md-2">
                <label for="">&nbsp;</label>
                <button id="fight-search-btn" class="form-control btn btn-primary">Chercher</button>
            </div>
        </div>
    @endcomponent
    <div>
        @component('components.card')
            <h5 class="d-inline-block pt-2 m-0">Resultat: <span id="results-count" class="font-weight-bold">0</span> Vol(s) Disponible</h5>
            <div class="d-inline-block float-right">
                <button id="next-btn" class="btn">Suivant</button>
            </div>
        @endcomponent
        
        <div id="tickets" class="row">

        </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/data.js') }}"></script>
    <script src="{{ asset('js/typeahead.js') }}"></script>
    <script type="text/x-tmpl" id="tmpl-ticket">
<div class="flight-card mb-2" data-index="{%=o.index%}">
    <div class="price">
        <h2 class="flight-price font-weight-bold">{%=o.price%} {%=o.currency%}</h2>
        <small class="text-danger">prix de ticker</small>
    </div>

    <div class="card-content">
        <div class="departure">
            <div class="card-icon bg-success">
                <i class="material-icons">flight_takeoff</i>
            </div>
            <div class="d-inline-block mr-3" style="width:214px;">
                <h3 class="m-0 pt-1">{%=o.departure.startTime%}  - {%=o.departure.endTime%} <span class="badge badge-primary">{%=o.departure.duration%}</span></h3>
                <p class="m-0 text-muted">{%=o.departure.startDate%} &nbsp;&nbsp;&nbsp; - &nbsp;&nbsp; {%=o.departure.endDate%}</p>
            </div>

            <div class="stops pl-3">
                {% for (var i=0; i<o.departure.stops.length; i++) { %}
                <div class="stop mr-3">
                    <h5 class="m-0 pt-1">{%=o.departure.stops[i].time%}</h5>
                    <p class="m-0 text-muted">{%=o.departure.stops[i].from%} - {%=o.departure.stops[i].to%}</p>
                </div>
                {% } %}
            </div>
        </div>
        <div class="arrival">
            <div class="card-icon bg-warning">
                <i class="material-icons">flight_land</i>
            </div>

            <div class="d-inline-block mr-3" style="width:214px;">
                <h3 class="m-0 pt-1">{%=o.arrival.startTime%}  - {%=o.arrival.endTime%} <span class="badge badge-primary">{%=o.arrival.duration%}</span></h3>
                <p class="m-0 text-muted">{%=o.arrival.startDate%} &nbsp;&nbsp;&nbsp; - &nbsp;&nbsp; {%=o.arrival.endDate%}</p>
            </div>

            <div class="stops pl-3">
                {% for (var i=0; i<o.arrival.stops.length; i++) { %}
                <div class="stop mr-3">
                    <h5 class="m-0 pt-1">{%=o.arrival.stops[i].time%}</h5>
                    <p class="m-0 text-muted">{%=o.arrival.stops[i].from%} - {%=o.arrival.stops[i].to%}</p>
                </div>
                {% } %}
            </div>
        </div>    
    </div>
</div>
    </script>
    
    <script src="{{ asset('js/skypicker.js') }}"></script>

    <script>
        var substringMatcher = function(strs) {
        return function findMatches(q, cb) {
            var matches, substringRegex;

            // an array that will be populated with substring matches
            matches = [];

            // regex used to determine if a string contains the substring `q`
            substrRegex = new RegExp(q, 'i');

            // iterate through the pool of strings and for any string that
            // contains the substring `q`, add it to the `matches` array
            $.each(strs, function(i, str) {
            if (substrRegex.test(str)) {
                matches.push(str);
            }
            });

            cb(matches);
        };
        };

        var sites = ['casablanca', 'rome'];

        $('.typeahead').typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            },
            {
                name: 'sites',
                source: substringMatcher(sites)
        });
    </script>
    <script>
        var days = ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'];
        var months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin',
            'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'
        ];

        function twoDigit(number) {
            var twodigit = number >= 10 ? number : "0"+number.toString();
            return twodigit;
        }

        // for  mysql
        function formatDate(date1) {
            return date1.getFullYear() + '-' +
                (date1.getMonth() < 9 ? '0' : "") + (date1.getMonth()+1) + '-' +
                (date1.getDate() < 10 ? '0' : "") + date1.getDate();
        }

        // First, checks if it isn't implemented yet.
        if (!String.prototype.format) {
            String.prototype.format = function() {
                var args = arguments;
                return this.replace(/{(\d+)}/g, function(match, number) { 
                return typeof args[number] != 'undefined'
                    ? args[number]
                    : match
                ;
                });
            };
        }

        $("#fight-search-btn").on('click', function(){
            $("#tickets").html("");
            $nextBtn.removeClass("btn-info");
            $flightsNbr.html('0');

            if($flightFrom.find('option:selected').length != 1)
            {
                alert("from empty")
                return false;
            }

            if($flightTo.find('option:selected').length != 1)
            {
                alert("to empty")
                return false;
            }

            let flight = {
                from: $flightFrom.find('option:selected').data('city'),
                to: $flightTo.find('option:selected').data('city'),
                dateFrom: '{{Carbon\Carbon::parse($demande->departure_date)->format("d/m/Y")}}',
                returnFrom: '{{Carbon\Carbon::parse($demande->return_date)->format("d/m/Y")}}', 
            }


            if(flight.from == flight.to)
            {
                alert("from=to")
                return false;
            }

            searchForFlights(flight, populateTickets);
        })

        $flightFrom = $('#flight-from');
        $flightTo   = $('#flight-to');
        $nextBtn    = $("#next-btn");
        $flightsNbr = $("#results-count");
        $tickets    = $("#tickets");

        function searchForFlights(flight, cb) {
            $.ajax({
                    url: 'https://api.skypicker.com/flights',
                    type: 'GET',
                    data: {
                        flyFrom:        flight.from,
                        to:             flight.to,
                        dateFrom:       flight.dateFrom,
                        dateTo:         flight.dateFrom,
                        returnFrom:     flight.returnFrom,
                        returnTo:       flight.returnFrom,
                        maxstopovers:   2,
                        partner:        'picky',
                        partner_market: 'us',
                        limit:          10
                    },
                success: function(response) {
                    cb(response);
                },
                error: function(xhr) {
                    //Do Something to handle error
                }
            });
        }

        function formatSkypickerData(data) {
            let tickets = [];

            for(i=0; i<data._results; i++) {
                tickets.push({
                    index: i,
                    price: data.data[i].price,
                    currency: data.currency,
                    departure: {
                        duration: data.data[i].fly_duration,
                        stops: []
                    },
                    arrival: {
                        duration: data.data[i].return_duration,
                        stops: []
                    }
                });

                let _departureStartDate = new Date(data.data[i].dTime*1000);
                let _departureEndDate   = new Date((data.data[i].dTime+data.data[i].duration.departure)*1000);
                tickets[i].departure.startTime = twoDigit(_departureStartDate.getHours()) + ':' + twoDigit(_departureStartDate.getMinutes());
                tickets[i].departure.startDateRaw = formatDate(_departureStartDate);
                tickets[i].departure.startDate = days[_departureStartDate.getDay()] + ' ' + months[_departureStartDate.getMonth()];
                
                tickets[i].departure.endTime = twoDigit(_departureEndDate.getHours()) + ':' + twoDigit(_departureEndDate.getMinutes());
                tickets[i].departure.endDateRaw = formatDate(_departureEndDate);
                tickets[i].departure.endDate = days[_departureEndDate.getDay()] + ' ' + months[_departureEndDate.getMonth()];

                
                let _arrivalStartDate = new Date(data.data[i].aTime*1000);
                let _arrivalEndDate   = new Date((data.data[i].aTime+data.data[i].duration.return)*1000);
                tickets[i].arrival.startTime = twoDigit(_arrivalStartDate.getHours()) + ':' + twoDigit(_arrivalStartDate.getMinutes());
                tickets[i].arrival.startDateRaw = formatDate(_arrivalStartDate);
                tickets[i].arrival.startDate = days[_arrivalStartDate.getDay()] + ' ' + months[_arrivalStartDate.getMonth()];
                
                tickets[i].arrival.endTime = twoDigit(_arrivalEndDate.getHours()) + ':' + twoDigit(_arrivalEndDate.getMinutes());
                tickets[i].arrival.endDateRaw = formatDate(_arrivalEndDate);
                tickets[i].arrival.endDate = days[_arrivalEndDate.getDay()] + ' ' + months[_arrivalEndDate.getMonth()];


                let line = 'departure';
                for(j=0; j<data.data[i].route.length; j++) {
                    let r = data.data[i].route[j];

                    let _routeStartDate = new Date(r.dTime*1000),
                        _routeEndtDate  = new Date(r.aTime*1000);

                    tickets[i][line].stops.push({
                        time: twoDigit(_routeStartDate.getHours()) + ':' + twoDigit(_routeStartDate.getMinutes()) + '-' +  twoDigit(_routeEndtDate.getHours()) + ':' + twoDigit(_routeEndtDate.getMinutes()),
                        from: r.cityFrom,
                        to: r.cityTo
                    });
                    
                    if(data.data[i].flyTo == r.flyTo)
                        line = "arrival"
                }
            }

            return tickets;
        }

        function populateTickets(data) {
            window.tickets = formatSkypickerData(data); // global var
            $flightsNbr.html(''+tickets.length);
            for(i=0; i<tickets.length; i++)
                $("#tickets").append(tmpl("tmpl-ticket", tickets[i]));
        }

        $tickets.on('click', '.flight-card', function() {
            $this = $(this);

            $this.siblings().removeClass('ticket-selected');
            $this.addClass('ticket-selected');

            $nextBtn.addClass("btn-info");
        });

        $nextBtn.on('click', function() {
            
            $ticket = $('#tickets .ticket-selected');

            if($ticket.length !== 1)
                return false;

        
            ticket = window.tickets[$ticket.data('index')];
            ticket.site_from = $flightFrom.find('option:selected').val();
            ticket.site_to = $flightTo.find('option:selected').val();

            ticket.departure.startAirport = ticket.departure.stops[0].from;
            ticket.departure.endAirport = ticket.departure.stops[ticket.departure.stops.length-1].to;

            ticket.arrival.startAirport = ticket.arrival.stops[0].from;
            ticket.arrival.endAirport = ticket.arrival.stops[ticket.arrival.stops.length-1].to;

            $.ajax({
                type: 'POST',
                url: '{{ url("/demande/new/" . $demande->id . "/saveTicket") }}',
                data: ticket,
                {{--  dataType: 'json',  --}}
                success: function (data) {
                    {{--  if(data == "yes")  --}}
                        {{--  location.href = "";  --}}
                }
            });

        })

    </script>
@endsection
