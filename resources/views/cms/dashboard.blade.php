@extends('cms.layout')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

@section('content')

    <div id="entries" style="width:100%; height:400px;"></div>

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
    </script>
@endsection
