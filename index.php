<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="Style/Style.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title>Calculator</title>
    </head>
    <body>
        <div class="container">
            <div class="topbuffer row"></div>
            <div class="row ">
                <div class="col-2"></div>
                <div class="equation col-6"></div>
                <div class="clear col-2" onclick="clearEquation()">C</div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="digit col-2 " onclick="updateEquation('1')">1</div>
                <div class="digit col-2" onclick="updateEquation('2')">2</div>
                <div class="digit col-2" onclick="updateEquation('3')">3</div>
                <div class="operator col-2" onclick="updateEquation('÷')">÷</div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="digit col-2" onclick="updateEquation('4')">4</div>
                <div class="digit col-2" onclick="updateEquation('5')">5</div>
                <div class="digit col-2" onclick="updateEquation('6')">6</div>
                <div class="operator col-2" onclick="updateEquation('x')">x</div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="digit col-2" onclick="updateEquation('7')">7</div>
                <div class="digit col-2" onclick="updateEquation('8')">8</div>
                <div class="digit col-2" onclick="updateEquation('9')">9</div>
                <div class="operator col-2" onclick="updateEquation('-')">-</div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="digit col-2" onclick="updateEquation('.')">.</div>
                <div class="digit col-2" onclick="updateEquation('0')">0</div>
                <div class="equal col-2" onclick="sendEquation()">=</div>
                <div class="operator col-2" onclick="updateEquation('+')">+</div>
                <div class="col-2"></div>
            </div>
            <div class="phpequation"></div>
        <?php
        // put your code here
        ?>
        </div>
    <script src="JavaScript/myScript.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
    </body>
</html>
