<html>

<head>
    <title>Vote Result Chart</title>

    <style>
        canvas {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
body {
    margin:0px;
    padding: 0px;

 }

 .button {
  --y: -25;
  --x: 0;
  --rotation: 0;
  --speed: 2;
  --txt: "Next Result";
  --padding: 1rem 1.25rem;
  cursor: pointer;
  padding: var(--padding);
  color: transparent;
  font-weight: bold;
  font-size: 1rem;
  transition: background 0.1s ease;
  background: #251d3a;
  outline-color: hsl(var(--hue), 100%, 80%);
  -webkit-animation-name: flow-and-shake;
          animation-name: flow-and-shake;
  -webkit-animation-duration: calc(var(--speed) * 1s);
          animation-duration: calc(var(--speed) * 1s);
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  -webkit-animation-timing-function: ease-in-out;
          animation-timing-function: ease-in-out;
}
.button:after {
  content: var(--txt);
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: var(--padding);
  color: #fff;
}
.button:hover {
  background: #000;
  --speed: 0.1;
  --rotation: -1;
  --y: -1;
  --x: 1;
  --txt: "Let's Check It!";
}
.button:active {
  --speed: 4;
  --x: 0;
  --y: 5;
  --rotation: 0;
  --txt: "Yes...";
  background: #af9d9d;
}
.button__wrap {
  position: relative;
}
.button__shadow {
  position: absolute;
  border-radius: 100%;
  bottom: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: #af9d9d;
  -webkit-animation: shadow 2s infinite ease-in-out;
          animation: shadow 2s infinite ease-in-out;
  z-index: -1;
}
@-webkit-keyframes shadow {
  0%, 100% {
    -webkit-transform: scaleX(1);
            transform: scaleX(1);
    opacity: 1;
  }
  50% {
    opacity: 0.2;
    -webkit-transform: scaleX(0.25);
            transform: scaleX(0.25);
  }
}
@keyframes shadow {
  0%, 100% {
    -webkit-transform: scaleX(1);
            transform: scaleX(1);
    opacity: 1;
  }
  50% {
    opacity: 0.2;
    -webkit-transform: scaleX(0.25);
            transform: scaleX(0.25);
  }
}
@-webkit-keyframes flow-and-shake {
  0%, 100% {
    -webkit-transform: translate(calc(var(--x) * -1%), 0) rotate(calc(var(--rotation) * -1deg));
            transform: translate(calc(var(--x) * -1%), 0) rotate(calc(var(--rotation) * -1deg));
  }
  50% {
    -webkit-transform: translate(calc(var(--x) * 1%), calc(var(--y) * 1%)) rotate(calc(var(--rotation) * 1deg));
            transform: translate(calc(var(--x) * 1%), calc(var(--y) * 1%)) rotate(calc(var(--rotation) * 1deg));
  }
}
@keyframes flow-and-shake {
  0%, 100% {
    -webkit-transform: translate(calc(var(--x) * -1%), 0) rotate(calc(var(--rotation) * -1deg));
            transform: translate(calc(var(--x) * -1%), 0) rotate(calc(var(--rotation) * -1deg));
  }
  50% {
    -webkit-transform: translate(calc(var(--x) * 1%), calc(var(--y) * 1%)) rotate(calc(var(--rotation) * 1deg));
            transform: translate(calc(var(--x) * 1%), calc(var(--y) * 1%)) rotate(calc(var(--rotation) * 1deg));
  }
}

        .container {
    height: 100vh;
    margin: 0 auto;
    width: 100%;
    position: fixed;
    z-index: 9;
    background-color: #251d3a;
    text-align: center;
}

.holder{
    margin: 0px auto;
    width: 400px;
    position: relative;
}

.pathOne {
    background-color: transparent !important;
    border: 3px solid #19112d;
    border-radius: 50%;
    height: 150px;
    left: 122px;
    position: absolute;
    top: 122px;
    width: 150px;
}

.pathTwo {
    background-color: transparent !important;
    border: 3px solid #19112d;
    border-radius: 50%;
    height: 130px;
    left: 132px;
    position: absolute;
    top: 132px;
    width: 130px;
}

.pathThree {
    background-color: transparent !important;
    border: 3px solid #19112d;
    border-radius: 50%;
    height: 110px;
    left: 142px;
    position: absolute;
    top: 142px;
    width: 110px;
}

.ldrOne {
    background-color: transparent !important;
    border: 4px solid;
    border-color: transparent #00d850 #00d850 transparent;
    border-radius: 50%;
    height: 150px;
    left: 122px;
    position: absolute;
    top: 122px;
    width: 150px;
    -webkit-animation: aniOne 1.5s linear infinite;
            animation: aniOne 1.5s linear infinite;
}

.ldrTwo {
    background-color: transparent !important;
    border: 4px solid;
    border-color: #fafe00 #fafe00 transparent transparent;
    border-radius: 50%;
    height: 130px;
    left: 131px;
    position: absolute;
    top: 131px;
    width: 130px;
    transform: rotateZ(360deg);
    -webkit-animation: aniTwo 1.5s linear infinite;
            animation: aniTwo 1.5s linear infinite;
}

.ldrThree {
    border: 4px solid;
    border-color: #0097c9 transparent transparent #0097c9;
    border-radius: 50%;
    height: 110px;
    left: 141px;
    position: absolute;
    top: 141px;
    width: 110px;
    -webkit-animation: aniThree 1.5s linear infinite;
            animation: aniThree 1.5s linear infinite;
}

.text {
    color: #fff;
    font-family: sans-serif;
    left: 165px;
    position: absolute;
    top: 170px;
    -webkit-animation: aniFour 1.5s linear infinite alternate;
            animation: aniFour 1.5s linear infinite alternate;
}

@-webkit-keyframes aniOne {
    0% {transform: rotateZ(0deg)}
    20% {transform: rotateZ(72deg)}
    40% {transform: rotateZ(120deg)}
    60% {transform: rotateZ(160deg)}
    80% {transform: rotateZ(260deg)}
    100% {transform: rotateZ(360deg)}
}

@-webkit-keyframes aniTwo {
    0% {transform: rotateZ(360deg)}
    20% {transform: rotateZ(260deg)}
    40% {transform: rotateZ(160deg)}
    60% {transform: rotateZ(120deg)}
    80% {transform: rotateZ(72deg)}
    100% {transform: rotateZ(0deg)}
}

@-webkit-keyframes aniThree {
    0% {transform: rotateZ(0deg)}
    20% {transform: rotateZ(100deg)}
    40% {transform: rotateZ(200deg)}
    60% {transform: rotateZ(260deg)}
    80% {transform: rotateZ(320deg)}
    100% {transform: rotateZ(360deg)}
}

@-webkit-keyframes aniFour {
    from{transform: scale(0.6);opacity: 0}
    to{transform: scale(0.8);opacity: 1}
}

@keyframes aniOne {
    0% {transform: rotateZ(0deg)}
    20% {transform: rotateZ(72deg)}
    40% {transform: rotateZ(120deg)}
    60% {transform: rotateZ(160deg)}
    80% {transform: rotateZ(260deg)}
    100% {transform: rotateZ(360deg)}
}

@keyframes aniTwo {
    0% {transform: rotateZ(360deg)}
    20% {transform: rotateZ(260deg)}
    40% {transform: rotateZ(160deg)}
    60% {transform: rotateZ(120deg)}
    80% {transform: rotateZ(72deg)}
    100% {transform: rotateZ(0deg)}
}

@keyframes aniThree {
    0% {transform: rotateZ(0deg)}
    20% {transform: rotateZ(100deg)}
    40% {transform: rotateZ(200deg)}
    60% {transform: rotateZ(260deg)}
    80% {transform: rotateZ(320deg)}
    100% {transform: rotateZ(360deg)}
}

@keyframes aniFour {
    from{transform: scale(0.6);opacity: 0}
    to{transform: scale(0.8);opacity: 1}
}
    </style>
</head>

<body style="text-align: center;">

    <div class="container">
        <div class="holder">

            <div class="pathOne"></div>
            <div class="pathTwo"></div>
            <div class="pathThree"></div>

            <div class="ldrOne"></div>
            <div class="ldrTwo"></div>
            <div class="ldrThree"></div>

            <div class="text">
                <h4>LOADIND</h4>
            </div>
        </div>
        <h2 style="color: #fafe00; text-transform:uppercase; margin-top:400px;">the result of vice president</h2>
    </div>
    <div style="width:75%; margin: 0px auto;">
        <canvas id="canvas"></canvas>
    </div>
    <br>
    <br>
    <h2>Winner: <span style="color: red;"> Mr X </span><small>Got: 30 Votes</small> </h2>

    <div class="button__wrap">
  <button onclick="window.location = '{{ URL::to('/president/vote/result')}}'" class="button" style="--hue: 80.17458568455291;">Get Next Result</button>
  <div class="button__shadow"></div>
</div>
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/Chart.min.js')}}"></script>
    <script src="{{ asset('js/utils.js') }}"></script>
    <script>
        setTimeout(function() {
            // $('#container').fadeOut();
            $('.container').delay(150).fadeOut('slow');
        }, 10);
        var config = {
            type: 'line',
            data: {!!$dummy!!},
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Vice President Vote Casting'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Candidates'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Votes'
                        }
                    }]
                }
            }
        };

        window.onload = function() {
            var ctx = document.getElementById('canvas').getContext('2d');
            window.myLine = new Chart(ctx, config);
        };



        var colorNames = Object.keys(window.chartColors);
    </script>


</body>

</html>
