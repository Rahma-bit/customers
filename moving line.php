<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>مخطط بياني متحرك</title>
  <style>
    body {
      background: #f4f6f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .chart {
      width: 400px;
      height: 300px;
    }

    .line {
      fill: none;
      stroke-width: 3;
      stroke-linecap: round;
      stroke-dasharray: 1000;
      stroke-dashoffset: 1000;
      animation: draw 2s forwards ease-in-out;
    }

    .line1 { stroke: #00c853; animation-delay: 0s; }
    .line2 { stroke: #2196f3; animation-delay: 0.3s; }
    .line3 { stroke: #ff9800; animation-delay: 0.6s; }

    .axis {
      stroke: #aaa;
      stroke-width: 1;
    }

    .grid {
      stroke: #eee;
      stroke-width: 1;
    }

    @keyframes draw {
      to {
        stroke-dashoffset: 0;
      }
    }
  </style>
</head>
<body>

<svg class="chart" viewBox="0 0 400 300">
  <!-- شبكة -->
  <line class="grid" x1="0" y1="250" x2="400" y2="250" />
  <line class="grid" x1="0" y1="200" x2="400" y2="200" />
  <line class="grid" x1="0" y1="150" x2="400" y2="150" />
  <line class="grid" x1="0" y1="100" x2="400" y2="100" />
  <line class="grid" x1="0" y1="50" x2="400" y2="50" />

  <!-- المحاور -->
  <line class="axis" x1="40" y1="20" x2="40" y2="260" />
  <line class="axis" x1="40" y1="260" x2="380" y2="260" />

  <!-- الخط البياني الأول -->
  <path class="line line1" d="M40 230 L100 190 L160 160 L220 110 L280 80 L340 60" />

  <!-- الخط البياني الثاني -->
  <path class="line line2" d="M40 240 L100 210 L160 170 L220 130 L280 100 L340 80" />

  <!-- الخط البياني الثالث -->
  <path class="line line3" d="M40 250 L100 220 L160 180 L220 150 L280 130 L340 110" />
</svg>

</body>
</html>
