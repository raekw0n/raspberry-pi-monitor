import * as Highcharts from 'highcharts';
import * as HighchartsMore from 'highcharts/highcharts-more';
import * as HighchartsSolidGauge from 'highcharts/modules/solid-gauge';

HighchartsMore(Highcharts);
HighchartsSolidGauge(Highcharts);

const App = {
    gauge: ({id, data, format, yStop}) => {
        Highcharts.chart(id, {
            chart: {
                type: 'solidgauge'
            },
            title: null,
            credits: {
                enabled: false
            },
            tooltip: {
                enabled: false
            },
            pane: {
                center: ['50%', '50%'],
                size: '100%',
                startAngle: 0,
                endAngle: 360,
                background: {
                    borderWidth: 0,
                    backgroundColor: {
                        radialGradient: {cx: 0.5, cy: 0.5, r: 0.46},
                        stops: [
                            [0, '#000'],
                            [1, '#D6DADC']
                        ]
                    },
                    innerRadius: '90%',
                    outerRadius: '100%',
                    shape: 'circle'
                }
            },
            yAxis: {
                min: 0,
                max: 100,
                stops: [
                    [0, yStop]
                ],
                lineWidth: 0,
                minorTickInterval: null,
                tickPixelInterval: 400,
                tickWidth: 0,
                labels: {
                    enabled: false
                }
            },
            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        enabled: true,
                        y: -31,
                        borderWidth: 0,
                        useHTML: true,
                        format: format,
                        style: {
                            fontSize: '42px',
                            fontFamily: 'Lato',
                            fontWeight: '300',
                            color: '#4A4A4A'
                        }
                    }
                }
            },
            series: [{
                innerRadius: '90%',
                data: [Math.round(data)]
            }]
        });
    }
};

export default App;