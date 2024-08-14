@extends('cms.layout')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

@section('content')
    <center>
        <form action="{{ route('cms/dashboard') }}" method="post" style="width: 60%">
            @csrf

            <div class="row">
                <div class="col">
                    <label for="">Start Date:</label>
                    <input type="date" name="start" value="{{ (isset($_POST['start'])) ? $_POST['start'] : ''}}" class="form-control" required>
                </div>
                <div class="col">
                <label for="">End Date:</label>
                    <input type="date" name="end" value="{{ (isset($_POST['end'])) ? $_POST['end'] : ''}}" class="form-control" required>
                </div>
                <div class="col">
                    <label for="">Location:</label>
                    <select name="region" class="form-control" required>

                        @if(isset($_POST['region']))
                            <option value="{{ $_POST['region']}}" selected hidden>{{ strtoupper($_POST['region'])}}</option>
                            <option value="all">ALL</option>
                        @else
                            <option value="all" selected>ALL</option>
                        @endif

                        <option value="ncr">NCR</option>
                        <option value="luzon">LUZON</option>
                        <option value="visayas">VISAYAS</option>
                        <option value="mindanao">MINDANAO</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="submit" class="btn btn-success" value="Filter" style="width:30%">
                </div>
            </div>
        </form>
    </center>
    <br>
    <div id="entries" style="width:100%; height:400px;"></div>

    <div id="location" style="width:100%; height:400px;"></div>

    <script>
        // line chart
        Highcharts.chart('entries', {
            title: {
                text: 'Entries by Date',
                align: 'left'
            },
            
            xAxis: {
                title: {
                    text: 'Date'
                },
                categories:[
                    @foreach($entries as $entry)
                        "{{  date('M d, Y', strtotime($entry->date))}}",
                    @endforeach
                ]
            },

            yAxis: {
                title: {
                    text: 'Number of Entries'
                }
            },

            series:[{
                showInLegend: false, 
                name: 'Registrants',  
                data:[
                    @foreach($entries as $entry)
                        {{ $entry->total }},
                    @endforeach
                ]}
            ]
        });

        // bar graph
        Highcharts.chart('location', {
            chart: {
                type: 'column'
            },
            title: {
                align: 'left',
                text: 'Entries By Region'
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Number of Entries'
                }

            },
            legend: {
                enabled: false
            },

            series: [
                {
                    name: 'Registrants',
                    colorByPoint: true,
                    data: [
                        @foreach($areas as $area)
                        {
                            name: "{{ strtoupper($area->location) }}",
                            y: {{ $area->entries}},
                            drilldown: "{{ strtoupper($area->location) }}"
                        },
                        @endforeach
                    ]
                }
            ],
        });
    </script>
@endsection
