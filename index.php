<?php
  if(!isset($_GET['mode'])) $mode = 'default';
  else if(isset($_GET['mode']) && $_GET['mode'] == 'webgl') $mode = 'webgl';
  echo '<script>renderMode="'.$mode.'"</script>'
?>

<!DOCTYPE html>
<html>
  <head>
    <script>if (typeof module === 'object') {window.module = module; module = undefined;}</script>
    <script>window.$ = window.jQuery = require('jquery');</script>
    <meta charset="utf-8" />
    <script src="p5.min.js"></script>
    <script src="p5.sound.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" onload="if (typeof require !=== 'undefined') window.$ = window.jQuery = module.exports;"></script>
    <script src="script.js"></script>
    <script>if (window.module) module = window.module;</script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div id="gear"></div>
    <div id="settingsDiv">
      <center>
        <h1 style="color: red">settings have not been fully tested and may break the page</h1>
        <!-- <img id="sound" src="images/soundOff.png" class="" /> -->
        <div id="wrapper0" class="wrapper">
          <div id="renderModeWrapper" class="subWrapper">
            <h1>render mode</h1>
            <select id="renderModeSelector">
              <option value="default">default</option>
              <option value="webgl">WebGL</option>
            </select>
          </div>
        </div>
        <div id="wrapper1" class="wrapper">
          <div id="themeWrapper" class="subWrapper">
            <h1>theme</h1>
            <select id="themeSelector">
              <option value="pond">pond</option>
              <option value="lava">lava</option>
              <option value="bee">bee</option>
              <option value="black and white">black and white</option>
              <option value="custom">custom</option>
            </select>
          </div>
          <div id="bgWrapper" class="subWrapper colorSelector">
            <h1>background</h1>
            <input type="color" id="bgSelector" />
          </div>
          <div id="strokeWrapper" class="subWrapper colorSelector">
            <h1>stroke</h1>
            <input type="color" id="strokeSelector" />
          </div>
          <div id="modeWrapper" class="subWrapper">
            <h1>mode</h1>
            <select id="modeSelector">
              <option value="default">circle</option>
              <option value="square">square</option>
              <option value="triangle">triangle</option>
            </select>
          </div>
          <div id="fillWrapper" class="subWrapper">
            <h1>fill</h1>
            <select id="fillSelector">
              <option value="none">none</option>
              <option value="theme">theme</option>
            </select>
          </div>
        </div>
        <div id="wrapper2" class="wrapper">
          <div id="frequencyWrapper" class="subWrapper">
            <h1>frequency</h1>
            <input type="range" min="0" max="100" value="50" class="slider" id="frequencySlider" />
            <h1 id="frequencyText">50</h1>
          </div>
          <div id="lifespanWrapper" class="subWrapper">
            <h1>lifespan</h1>
            <input type="range" min="20" max="200" value="120" class="slider" id="maxLifespanSlider" />
            <h1 id="maxLifespanText">120</h1>
          </div>
          <div id="weightWrapper" class="subWrapper">
            <h1>weight</h1>
            <input type="range" min="1" max="15" value="5" class="slider" id="weightSlider" />
            <h1 id="weightText">1</h1>
          </div>
          <div id="speedWrapper" class="subWrapper">
            <h1>speed</h1>
            <input type="range" min="1" max="10" value="5" class="slider" id="speedSlider" />
            <h1 id="speedText">5</h1>
          </div>
        </div>
        <div id="wrapper3" class="subWrapper">
        </div>
      </center>
    </div>
  </body>
</html>
