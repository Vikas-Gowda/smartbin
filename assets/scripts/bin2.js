function createGauge2(labelPosition) {
                    $("#gauge2").kendoRadialGauge({

                        pointer: {
                            value: myData2
                        },

                        scale: {
                            minorUnit: 5,
                            startAngle: -30,
                            endAngle: 210,
                            max: 100,
                            labels: {
                                position: labelPosition || "inside"
                            },
                            ranges: [
                                {
                                    from: 0,
                                    to: 40,
                                    color: "#54a4a4"
                                },
								
								{
                                    from: 40,
                                    to: 60,
                                    color: "#61f74a"
                                },
							
							
								{
                                    from: 60,
                                    to: 80,
                                    color: "#ffde00"
                                },
							
								{
                                    from: 80,
                                    to: 100,
                                    color: "#ff6347"
                                }, 
                            ]
                        }
                    });
                }

                $(document).ready(function() {
                    createGauge2();

                    $(".box").bind("change", refresh);

                    $(document).bind("kendo:skinChange", function(e) {
                        createGauge2();
                    });

                    window.configuredRanges = $("#gauge2").data("kendoRadialGauge").options.scale.ranges;
                });

                function refresh() {
                    var gauge = $("#gauge2").data("kendoRadialGauge"),
                        showLabels = $("#labels").prop("checked"),
                        showRanges = $("#ranges").prop("checked"),
                        positionInputs = $("input[name='labels-position']"),
                        labelsPosition = positionInputs.filter(":checked").val(),
                        options = gauge.options;

                    options.transitions = false;
                    options.scale.labels.visible = showLabels;
                    options.scale.labels.position = labelsPosition;
                    options.scale.ranges = showRanges ? window.configuredRanges : [];

                    gauge2.redraw();
                }