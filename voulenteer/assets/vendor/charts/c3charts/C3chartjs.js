(function(window, document, $, undefined) {
    "use strict";
    $(function() {

        if ($('#c3chart_area').length) {
            var chart = c3.generate({
                bindto: "#c3chart_area",
                data: {
                    columns: [
                        ['data1', 300, 350, 300, 0, 0, 0],
                        ['data2', 130, 100, 140, 200, 150, 50]
                    ],
                    types: {
                        data1: 'area',
                        data2: 'area-spline'
                    },
                    colors: {
                        data1: '#5969ff',
                        data2: '#ff407b',

                    }

                },
                axis: {

                    y: {
                        show: true




                    },
                    x: {
                        show: true
                    }
                }

            });
        }


        if ($('#c3chart_spline').length) {
            var chart = c3.generate({
                bindto: "#c3chart_spline",
                data: {
                    columns: [
                        ['data1', 30, 200, 100, 400, 150, 250],
                        ['data2', 130, 100, 140, 200, 150, 50]
                    ],
                    type: 'spline',
                    colors: {
                         data1: '#5969ff',
                        data2: '#ff407b',

                    }
                },
                axis: {
                    y: {
                        show: true,


                    },
                    x: {
                        show: true,
                    }
                }
            });
        }

        if ($('#c3chart_zoom').length) {
            var chart = c3.generate({
                bindto: "#c3chart_zoom",
                data: {
                    columns: [
                        ['sample', 30, 200, 100, 400, 150, 250, 150, 200, 170, 240, 350, 150, 100, 400, 150, 250, 150, 200, 170, 240, 100, 150, 250, 150, 200, 170, 240, 30, 200, 100, 400, 150, 250, 150, 200, 170, 240, 350, 150, 100, 400, 350, 220, 250, 300, 270, 140, 150, 90, 150, 50, 120, 70, 40]
                    ],
                    colors: {
                        sample: '#5969ff'


                    }
                },
                zoom: {
                    enabled: true
                },
                axis: {
                    y: {
                        show: true,


                    },
                    x: {
                        show: true,
                    }
                }

            });
        }


        if ($('#c3chart_scatter').length) {
            var chart = c3.generate({
                bindto: "#c3chart_scatter",
                data: {
                    xs: {
                        setosa: 'setosa_x',
                        versicolor: 'versicolor_x',
                    },
                    // iris data from R
                    columns: [
                        ["setosa",80],
                        ["versicolor", 10],
                    ],
                    type: 'scatter',
                    colors: {
                        setosa: '#5969ff',
                        versicolor: '#ff407b',

                    }
                },
                axis: {
                    y: {
                        show: true,


                    },
                    x: {
                        show: true,
                    }
                }
            });
            
        }


        if ($('#c3chart_stacked').length) {
            var chart = c3.generate({
                bindto: "#c3chart_stacked",

                data: {
                    columns: [
                        ['data1', 130, 200, 320, 400, 530, 750],
                        ['data2', -130, 10, 130, 200, 150, 250],
                        ['data3', -130, -50, -10, -200, -250, -150]
                    ],
                    type: 'bar',
                    groups: [
                        ['data1', 'data2', 'data3']
                    ],
                    order: 'desc', // stack order by sum of values descendantly. this is default.
                    //      order: 'asc'  // stack order by sum of values ascendantly.
                    //      order: null   // stack order by data definition.

                    colors: {
                        data1: '#5969ff',
                        data2: '#ff407b',
                        data3: '#64ced3'

                    }
                },
                axis: {
                    y: {
                        show: true,


                    },
                    x: {
                        show: true,
                    }
                },
                grid: {
                    y: {
                        lines: [{ value: 0 }]
                    }
                }
            });
            setTimeout(function() {
                chart.load({
                    columns: [
                        ['data4', 1200, 1300, 1450, 1600, 1520, 1820],
                    ]
                });
            }, 1000);
            setTimeout(function() {
                chart.load({
                    columns: [
                        ['data5', 200, 300, 450, 600, 520, 820],
                    ]
                });
            }, 2000);
            setTimeout(function() {
                chart.groups([
                    ['data1', 'data2', 'data3', 'data4', 'data5']
                ])
            }, 3000);
        }


        if ($('#c3chart_combine').length) {
            var chart = c3.generate({
                bindto: "#c3chart_combine",
                data: {
                    columns: [
                        ['data1', 30, 20, 50, 40, 60, 50],
                        ['data2', 200, 130, 90, 240, 130, 220],
                        ['data3', 300, 200, 160, 400, 250, 250],
                        ['data4', 200, 130, 90, 240, 130, 220],
                        ['data5', 130, 120, 150, 140, 160, 150],
                        ['data6', 90, 70, 20, 50, 60, 120],
                    ],
                    type: 'bar',
                    types: {
                        data3: 'spline',
                        data4: 'line',
                        data6: 'area',
                    },
                    groups: [
                        ['data1', 'data2']
                    ],

                    colors: {
                        data1: '#5969ff',
                        data2: '#ff407b',
                        data3: '#25d5f2',
                        data4: '#ffc750',
                        data5: '#2ec551',
                        data6: '#1ba3b9',


                    }

                },
                axis: {
                    y: {
                        show: true,


                    },
                    x: {
                        show: true,
                    }
                }
            });
        }

        if ($('#c3chart_pie').length) {
            var chart = c3.generate({
                bindto: "#c3chart_pie",
                data: {
                    columns: [
                        ['data1', 30],
                        ['data2', 50]
                    ],
                    type: 'pie',

                    colors: {
                         data1: '#5969ff',
                        data2: '#ff407b'


                    }
                },
                pie: {
                    label: {
                        format: function(value, ratio, id) {
                            return d3.format('$')(value);
                        }
                    }
                }
            });
        }

        if ($('#c3chart_donut').length) {
            var chart = c3.generate({
                bindto: "#c3chart_donut",
                data: {
                    columns: [
                        ['data1', 30],
                        ['data2', 120],
                    ],
                    type: 'donut',
                    onclick: function(d, i) { console.log("onclick", d, i); },
                    onmouseover: function(d, i) { console.log("onmouseover", d, i); },
                    onmouseout: function(d, i) { console.log("onmouseout", d, i); },

                    colors: {
                         data1: '#5969ff',
                        data2: '#ff407b'


                    }
                },
                donut: {
                    title: "Activity Details"


                }


            });
// mayur 
            setTimeout(function() {
                chart.load({
                    columns: [
                        ["extra-curricular", 40],
                        ["co-curricular", 60],
                        
                    ]
                });
            }, 1500);

            setTimeout(function() {
                chart.unload({
                    ids: 'data1'
                });
                chart.unload({
                    ids: 'data2'
                });
            }, 2500);
        }

        if ($('#c3chart_gauge').length) {
            var chart = c3.generate({
                bindto: "#c3chart_gauge",
                data: {
                    columns: [
                        ['data1', 91.4]

                    ],
                    type: 'gauge',
                    onclick: function(d, i) { console.log("onclick", d, i); },
                    onmouseover: function(d, i) { console.log("onmouseover", d, i); },
                    onmouseout: function(d, i) { console.log("onmouseout", d, i); },
                    colors: {
                      data1: '#5969ff',
                        data2: '#ff407b',
                        data3: '#25d5f2',
                        data4: '#ffc750',
                        data5: '#2ec551',
                        data6: '#1ba3b9',

                    }
                },
                gauge: {
                    //        label: {
                    //            format: function(value, ratio) {
                    //                return value;
                    //            },
                    //            show: false // to turn off the min/max labels.
                    //        },
                    //    min: 0, // 0 is default, //can handle negative min e.g. vacuum / voltage / current flow / rate of change
                    //    max: 100, // 100 is default
                    //    units: ' %',
                    //    width: 39 // for adjusting arc thickness
                },

                size: {
                    height: 320
                }
            });



        }


    });

})(window, document, window.jQuery);