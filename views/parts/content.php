<?php
/**
 * Created by PhpStorm.
 * User: Toole
 * Date: 13.04.2019
 * Time: 19:04
 */

?>
<div style="display: flex; flex-direction: row; height: 60vh; margin-bottom: 1vh;">
    <div style="width: 200px; margin-right: 10px; height: 100%">
        <nav style="background: #ffd682; height: 100%">
            <ul style="margin: 0">
                <li><a href="/news">Новости</a></li>
                <li><a href="/products">Продукты</a></li>
            </ul>
        </nav>
    </div>
    <div style="background-color: #ccc; padding: 5px; display: flex; flex-direction: column;">
        <div style="background-color: #fff; border: 1px solid #838383; width: 35em; min-height: 1em; padding: 10px; display: inline-flex; justify-content: space-around; margin-bottom: 5px;">
            <span class="slidecontainer">
                <input type="range" min="0" max="30000" value="4200" class="slider" id="myRange0" vls="0">
            </span>
            <span>
                <span id="demo0"></span>
                <i class="fas fa-ruble-sign" style="font-size: 14px"></i>
            </span>
        </div>
        <div style="background-color: #fff; border: 1px solid #838383; width: 35em; min-height: 1em; padding: 10px; display: inline-flex; justify-content: space-around; margin-bottom: 5px;">
            <span class="slidecontainer">
                <input type="range" min="0" max="100" value="30" step="1" class="slider" id="myRange1" vls="1">
            </span>
            <span>
                <span id="demo1"></span>
            </span>
        </div>
        <div style="background-color: #fff; border: 1px solid #838383; width: 35em; min-height: 1em; padding: 10px; display: inline-flex; justify-content: space-around">
            <span class="slidecontainer">
                <input type="range" min="0" max="30000" value="4000" step="100" class="slider" id="myRange2" vls="2">
            </span>
            <span>
                <span id="demo2"></span>
                <i class="fas fa-ruble-sign" style="font-size: 14px"></i>
            </span>
        </div>
    </div>
    <script src="/js/content.js"></script>