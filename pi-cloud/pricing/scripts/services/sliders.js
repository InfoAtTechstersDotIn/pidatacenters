(function () {
  var app = angular.module("PiStore");

  app.factory('piPricingSliders', ['$http', function ($http) {
    var piService = {};
    piService.changevalue = '';


    /// ******************* sample level workaround ******************* ///
    var fn1 = $.fn.roundSlider.prototype._setProperties;
    $.fn.roundSlider.prototype._setProperties = function () {
      fn1.apply(this);
      var o = this.options,
        r = o.radius,
        d = r * 2,
        r1 = r - (o.width / 2) - this._border(true),
        svgNS = "http://www.w3.org/2000/svg";
      this._circum = Math.PI * (r1 * 2);

      var $svg = $(document.createElementNS(svgNS, "svg"));
      $svg.attr({
        "height": d,
        "width": d
      });

      this.$circle = $(document.createElementNS(svgNS, 'circle')).attr({
        "fill": "transparent",
        "class": "rs-transition",
        "cx": r,
        "cy": r,
        "r": r1,
        "stroke-linecap": "round",
        "stroke-width": o.width,
        "stroke-dasharray": this._circum
      });
      var $path = this.$circle.clone().addClass("path-bg");
      this._setDashOffset($path, this._end);
      $svg.append($path, this.$circle.addClass("range-bg"));

      this.$svg_box = $(document.createElement("div")).addClass("rs-transition rs-svg").append($svg).css({
        "height": d,
        "width": d,
        "transform-origin": "50% 50%",
        "transform": "rotate(" + (o.startAngle + 180) + "deg)"
      }).appendTo(this.innerContainer);
    }

    $.fn.roundSlider.prototype._setDashOffset = function ($ele, deg) {
      var pct = (1 - (deg / 360)) * this._circum;
      $ele.css({
        strokeDashoffset: pct
      });
    }
    // // debugger;
    var fn2 = $.fn.roundSlider.prototype._changeSliderValue;
    $.fn.roundSlider.prototype._changeSliderValue = function (val, deg) {
      fn2.apply(this, arguments);
      deg = deg - this.options.startAngle;
      if (this._rangeSlider) {
        this.$svg_box.rsRotate(this._handle1.angle + 180);
        deg = this._handle2.angle - this._handle1.angle;
      }
      this._setDashOffset(this.$circle, deg);
    }

    /// ******************* --------------------- ******************* ///

    piService.cpuSlider = function (roundsliderid) {

      var rid = '#' + roundsliderid;



      $(rid).roundSlider({
        sliderType: "min-range",
        editableTooltip: false,
        handleShape: "round",
        width: 7,
        handleSize: 15,
        radius: "83",
        min: 1,
        max: 19,
        value:2,
        step: 1,
        startAngle: 317,
        endAngle: "+268",
        tooltipFormat: function (e) {
          // var months = ["0","<span class='sliderinnertext'> 0</span><sup>Core</sup>",
          //   "<span class='sliderinnertext'> 2</span><sup>Core</sup>",
          //   "<span class='sliderinnertext'> 4</span><sup>Core</sup>",
          //   "<span class='sliderinnertext'> 6</span><sup>Core</sup>",
          //   "<span class='sliderinnertext'> 8</span><sup>Core</sup>",
          //   "<span class='sliderinnertext'> 12</span><sup>Core</sup>",
          //   "<span class='sliderinnertext'> 16</span><sup>Core</sup>"
          // ];

          var months = ["0","<span class='sliderinnertext'> 0</span><sup>Core</sup>",
          "<span class='sliderinnertext'> 2</span><sup>Core</sup>",
          "<span class='sliderinnertext'> 4</span><sup>Core</sup>",
          "<span class='sliderinnertext'> 6</span><sup>Core</sup>",
          "<span class='sliderinnertext'> 8</span><sup>Core</sup>",
          "<span class='sliderinnertext'> 10</span><sup>Core</sup>",
          "<span class='sliderinnertext'> 12</span><sup>Core</sup>",
          "<span class='sliderinnertext'> 14</span><sup>Core</sup>",
          "<span class='sliderinnertext'> 16</span><sup>Core</sup>",
          "<span class='sliderinnertext'> 18</span><sup>Core</sup>",
          "<span class='sliderinnertext'> 20</span><sup>Core</sup>",
          "<span class='sliderinnertext'> 22</span><sup>Core</sup>",
          "<span class='sliderinnertext'> 24</span><sup>Core</sup>",
          "<span class='sliderinnertext'> 26</span><sup>Core</sup>",
          "<span class='sliderinnertext'> 28</span><sup>Core</sup>",
          "<span class='sliderinnertext'> 30</span><sup>Core</sup>",
          "<span class='sliderinnertext'> 32</span><sup>Core</sup>",
          "<span class='sliderinnertext'> 48</span><sup>Core</sup>",
          "<span class='sliderinnertext'> 64</span><sup>Core</sup>"
        ];

          piService.changevalue = months[e.value];
          return months[e.value];
        },
        change: function () { }
      });


    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    


    piService.ramSlider = function () {


      $("#ram").roundSlider({
        sliderType: "min-range",
        editableTooltip: false,
        handleShape: "round",
        width: 7,
        handleSize: 15,
        radius: "83",
        // value: 75,
        min: 1,
        max: 14,
        step: 1,
        value:2,
        startAngle: 317,
        endAngle: "+268",
        tooltipFormat: function (e) {
          // var months = ["0","<span class='sliderinnertext1'> 0</span><sup>GB</sup>",
          //    "<span class='sliderinnertext1'> 4</span><sup>GB</sup>",
          //   "<span class='sliderinnertext1'> 8</span><sup>GB</sup>",
          //   "<span class='sliderinnertext1'> 16</span><sup>GB</sup>",
          //   "<span class='sliderinnertext1'> 24</span><sup>GB</sup>",
          //   "<span class='sliderinnertext1'> 32</span><sup>GB</sup>"
          // ];

          var months = ["0","<span class='sliderinnertext1'> 0</span><sup>GB</sup>",
          "<span class='sliderinnertext1'> 2</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 4</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 6</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 8</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 12</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 16</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 20</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 24</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 28</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 32</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 40</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 48</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 64</span><sup>GB</sup>"
       ];

          return months[e.value];
        }
      });
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // 2, 4, 6, 8, 12, 16, 20, 24, 28, 32, 40, 48, 64


    piService.diskspaceSlider = function (id, roundsliderrr) {
      $("#diskspace").roundSlider({
        sliderType: "min-range",
        editableTooltip: false,
        handleShape: "round",
        width: 7,
        handleSize: 15,
        radius: "83",
         value: 2,
        min: 1,
        max: 19,
        step: 1,
        startAngle: 317,
        endAngle: "+268",
        tooltipFormat: function (e) {
          var months = ["0","<span class='sliderinnertext1'> 0</span><sup>GB</sup>",
             "<span class='sliderinnertext1'> 50</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 100</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 150</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 200</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 250</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 300</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 400</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 500</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 600</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 700</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 800</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 900</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 1000</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 1500</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 2000</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 3000</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 4000</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 5000</span><sup>GB</sup>",
          ];

          return months[e.value];
        }
      });

    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    piService.datatransferSlider = function (id, roundsliderrr) {
      $("#datatransfer").roundSlider({
        sliderType: "min-range",
        editableTooltip: false,
        handleShape: "round",
        width: 7,
        handleSize: 15,
        radius: "83",
        // value: 75,
        min: 1,
        max: 18,
        value:2,
        step: 1,
        startAngle: 317,
        endAngle: "+268",
        tooltipFormat: function (e) {
          var months = ["0","<span class='sliderinnertext1'> 0</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 50</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 100</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 200</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 300</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 400</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 500</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 600</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 700</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 800</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 900</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 1000</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 2000</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 3000</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 4000</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 5000</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 7000</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 10000</span><sup>GB</sup>"
          ];

          return months[e.value];
        }
      });

    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    piService.seriesSlider = function (sr) {
      var srId = "#" + sr;

      $(srId).roundSlider({
        sliderType: "min-range",
        editableTooltip: false,
        handleShape: "round",
        width: 7,
        handleSize: 15,
        radius: "83",
        // value: 75,
        min: 1,
        max: 15,
        step: 1,
        startAngle: 317,
        endAngle: "+268",
        tooltipFormat: function (e) {
          var months = ["0", "<span class='sliderinnertext1'> 50</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 100</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 200</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 300</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 400</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 500</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 600</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 700</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 800</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 900</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 1000</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 2000</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 3000</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 5000</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 10000</span><sup>GB</sup>"
          ];

          return months[e.value];
        }
      });

    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    /* piService.e5seriesSlider = function () {
       $("#e5series").roundSlider({
         sliderType: "min-range",
         editableTooltip: false,
         handleShape: "round",
         width: 7,
         handleSize: 15,
         radius: "83",
         min: 1,
         max: 15,
         step: 1,
         startAngle: 317,
         endAngle: "+268",
         tooltipFormat: function (e) {
           var months = ["0", "<span class='sliderinnertext1'> 50</span><sup>GB</sup>",
             "<span class='sliderinnertext1'> 100</span><sup>GB</sup>",
             "<span class='sliderinnertext1'> 200</span><sup>GB</sup>",
             "<span class='sliderinnertext1'> 300</span><sup>GB</sup>",
             "<span class='sliderinnertext1'> 400</span><sup>GB</sup>",
             "<span class='sliderinnertext1'> 500</span><sup>GB</sup>",
             "<span class='sliderinnertext1'> 600</span><sup>GB</sup>",
             "<span class='sliderinnertext1'> 700</span><sup>GB</sup>",
             "<span class='sliderinnertext1'> 800</span><sup>GB</sup>",
             "<span class='sliderinnertext1'> 900</span><sup>GB</sup>",
             "<span class='sliderinnertext1'> 1000</span><sup>GB</sup>",
             "<span class='sliderinnertext1'> 2000</span><sup>GB</sup>",
             "<span class='sliderinnertext1'> 3000</span><sup>GB</sup>",
             "<span class='sliderinnertext1'> 5000</span><sup>GB</sup>",
             "<span class='sliderinnertext1'> 10000</span><sup>GB</sup>"
           ];
 
           return months[e.value];
         }
       });
 
     } */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    piService.ecsSlider = function () {
      $("#ecs").roundSlider({
        sliderType: "min-range",
        editableTooltip: false,
        handleShape: "round",
        width: 7,
        handleSize: 15,
        radius: "83",
        // value: 75,
        min: 1,
        max: 14,
        step: 1,
        startAngle: 317,
        endAngle: "+268",
        tooltipFormat: function (e) {
          var months = ["0", "<span class='sliderinnertext1'> 50</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 100</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 200</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 300</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 400</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 500</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 600</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 700</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 800</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 900</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 1000</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 2000</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 3000</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 5000</span><sup>GB</sup>"
            // "<span class='sliderinnertext1'> 10000</span><sup>GB</sup>"
          ];

          return months[e.value];
        }
      });

    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    piService.ddsSlider = function () {
      $("#ddsdds").roundSlider({
        sliderType: "min-range",
        editableTooltip: false,
        handleShape: "round",
        width: 7,
        handleSize: 15,
        radius: "83",
        min: 1,
        max: 19,
        step: 1,
        value:2,
        startAngle: 317,
        endAngle: "+268",
        tooltipFormat: function (e) {
          // var months = ["0", "<span class='sliderinnertext1'> 500</span><sup>GB</sup>",
          //   "<span class='sliderinnertext1'> 1000</span><sup>GB</sup>",
          //   "<span class='sliderinnertext1'> 2000</span><sup>GB</sup>",
          //   "<span class='sliderinnertext1'> 3000</span><sup>GB</sup>",
          //   "<span class='sliderinnertext1'> 4000</span><sup>GB</sup>",
          //   "<span class='sliderinnertext1'> 5000</span><sup>GB</sup>"
          // ];

          var months = ["0","<span class='sliderinnertext1'> 0</span><sup>GB</sup>",
          "<span class='sliderinnertext1'> 50</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 100</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 150</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 200</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 250</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 300</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 400</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 500</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 600</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 700</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 800</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 900</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 1000</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 1500</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 2000</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 3000</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 4000</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 5000</span><sup>GB</sup>",
       ];


          return months[e.value];
        }
      });

    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    piService.ddsSsdSlider = function () {
      $("#ddsSsd").roundSlider({
        sliderType: "min-range",
        editableTooltip: false,
        handleShape: "round",
        width: 7,
        handleSize: 15,
        radius: "83",
        min: 1,
        max: 19,
        step: 1,
        value:2,
        startAngle: 317,
        endAngle: "+268",
        tooltipFormat: function (e) {
          // var months = ["0", "<span class='sliderinnertext1'> 128</span><sup>GB</sup>",
          //   "<span class='sliderinnertext1'> 256</span><sup>GB</sup>",
          //   "<span class='sliderinnertext1'> 512</span><sup>GB</sup>"
          // ];
          var months = ["0","<span class='sliderinnertext1'> 0</span><sup>GB</sup>",
          "<span class='sliderinnertext1'> 50</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 100</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 150</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 200</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 250</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 300</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 400</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 500</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 600</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 700</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 800</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 900</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 1000</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 1500</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 2000</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 3000</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 4000</span><sup>GB</sup>",
         "<span class='sliderinnertext1'> 5000</span><sup>GB</sup>",
       ];

          return months[e.value];
        }
      });

    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    piService.scrackspaceSlider = function () {
      $("#scrackspace").roundSlider({
        sliderType: "min-range",
        editableTooltip: false,
        handleShape: "round",
        width: 7,
        handleSize: 15,
        radius: "83",
        min: 1,
        max: 4,
        step: 1,
        startAngle: 317,
        endAngle: "+268",
        tooltipFormat: function (e) {
          var months = ["0", "<span class='sliderinnertext1'> 2</span><sup>Unit</sup>",
            "<span class='sliderinnertext1'> 3</span><sup>Unit</sup>",
            "<span class='sliderinnertext1'> 4</span><sup>Unit</sup>",
            "<span class='sliderinnertext1'> 6</span><sup>Unit</sup>"
          ];

          return months[e.value];
        }
      });

    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    // piService.sclpowerSlider = function () {
    //   $("#sclpower").roundSlider({
    //     sliderType: "min-range",
    //     editableTooltip: false,
    //     handleShape: "round",
    //     width: 7,
    //     handleSize: 15,
    //     radius: "83",
    //     min: 1,
    //     max: 4,
    //     step: 1,
    //     startAngle: 317,
    //     endAngle: "+268",
    //     tooltipFormat: function (e) {
    //       var months = ["0", "<span class='sliderinnertext1'> 200</span><sup>Watts</sup>",
    //         "<span class='sliderinnertext1'> 400</span><sup>Watts</sup>",
    //         "<span class='sliderinnertext1'> 800</span><sup>Watts</sup>",
    //         "<span class='sliderinnertext1'> 1000</span><sup>Watts</sup>"
    //       ];

    //       return months[e.value];
    //     }
    //   });

    // }


    piService.sclpowerSlider = function () {
      $("#sclpower").roundSlider({
        sliderType: "min-range",
        editableTooltip: false,
        handleShape: "round",
        width: 7,
        handleSize: 15,
        radius: "83",
        min: 1,
        max: 5,
        step: 1,
        startAngle: 317,
        endAngle: "+268",
        tooltipFormat: function (e) {
          var months = ["0", "<span class='sliderinnertext1'> 200</span><sup>Watts</sup>",
            "<span class='sliderinnertext1'> 400</span><sup>Watts</sup>",
            "<span class='sliderinnertext1'> 600</span><sup>Watts</sup>",
            "<span class='sliderinnertext1'> 800</span><sup>Watts</sup>",
            "<span class='sliderinnertext1'> 1000</span><sup>Watts</sup>"
          ];

          return months[e.value];
        }
      });

    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    piService.rackSpaceSlider = function () {
      $("#rackSpace").roundSlider({
        sliderType: "min-range",
        editableTooltip: false,
        handleShape: "round",
        width: 7,
        handleSize: 15,
        radius: "83",
        min: 1,
        max: 3,
        step: 1,
        startAngle: 317,
        endAngle: "+268",
        tooltipFormat: function (e) {
          var months = ["0", "<span class='sliderinnertext1'> 10</span><sup>Unit</sup>",
            "<span class='sliderinnertext1'> 21</span><sup>Unit</sup>",
            "<span class='sliderinnertext1'> 42</span><sup>Unit</sup>"
          ];

          return months[e.value];
        }
      });

    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    piService.rclpowerSlider = function () {
      $("#rclpower").roundSlider({
        sliderType: "min-range",
        editableTooltip: false,
        handleShape: "round",
        width: 7,
        handleSize: 15,
        radius: "83",
        min: 1,
        max: 5,
        step: 1,
        startAngle: 317,
        endAngle: "+268",
        tooltipFormat: function (e) {
          var months = ["0", "<span class='sliderinnertext1'> 1</span><sup>KVA</sup>",
            "<span class='sliderinnertext1'> 2</span><sup>KVA</sup>",
            "<span class='sliderinnertext1'> 3</span><sup>KVA</sup>",
            "<span class='sliderinnertext1'> 4</span><sup>KVA</sup>",
            "<span class='sliderinnertext1'> 6</span><sup>KVA</sup>"
          ];

          return months[e.value];
        }
      });

    }



    piService.ticks = function (speedometer) {
      var speedometerIDs = '#' + speedometer;
      var svg = d3.select(speedometerIDs)
        .append("svg:svg")
        .attr("width", "100%")
        .attr("height", "100%");
      var gauge = iopctrl.arcslider()
        .radius(60)
        .events(false);
      // .indicator(iopctrl.defaultGaugeIndicator);
      gauge.axis().orient("out")
        .normalize(true)
        .ticks(15)
        .tickSubdivide(5)
        .tickSize(-5, -4, 10)
        .tickPadding(33);
      svg.append("g")
        .attr("class", "gauge")
        .call(gauge);
    }













    return piService;
  }])

})()