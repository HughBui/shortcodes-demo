<?php
/*
Template Name: Taplist Page
*/
?>

<?php get_header(); ?>

	<style>
    .tapList {
        background: #182018;
        width: 100%;
        overflow-x: hidden;
    }

    ul {
        list-style: none;   
        left : 0px; 
        top: 50px;
        position: absolute;
    }

    li {
        margin : 0px;
    }

    div {
        font-family: Quattrocento;
        color: #ffffff;
    }

    .banner {
        position: fixed;
        top:0px;
        height: 58px;
        width: 100%;
        z-index: 10;
        background: #182018;
    }

    .logoImage {
        position: absolute;
        text-align: left;
        top:5px;
    }

    .header {
        position: absolute;
        top:5px;
        left:250px;
    }

    .lineItem {
        margin:0px;
        padding: 0px;
        width:100%;
        min-width: 320px;
    }

    .tapInfoWrapper {
        font-size: 22;      
        width:20px;
        vertical-align: middle;
        text-align: right;
        padding-right: 10px;
    }

    .beverageInfo {
        margin-left: 10px;
        width: 550px;
    }

    .producerName {
        font-size: 19;
        float: left;
        margin-right: 5px;
    }

    .beverageName {
        font-size: 19;
        color: #F88617;
    }

    .beverageColor {
        width: 10px;
        height: 10px;
        margin-top: 1px;
        float: left;
        border-style : solid;
        border-width: 1px;
        border-color: #FFFFFF       
    }

    .dryness {      
        font-size: 14;
        margin-left: 20px;
    }

    .beverageStyle {        
        font-size: 14;
        margin-left: 20px;
    }


    .producerLocation {
        margin-left: 0;
        font-size: 14;
        float: left;
    }

    .abv {
        margin-left: 10px;
        font-size: 14;
        float: left;        
    }

    .ibu {
        margin-left: 10px;
        font-size: 14;
    }

    .smv {
        margin-left: 10px;
        font-size: 14;
    }

    .kegLevelWrapper {
        height: 35px;   
        vertical-align: bottom; 
        position: relative;
    }

    .kegLevel {
        position:absolute;
        bottom:7px;
        left:11px;
        width: 21px;    
        opacity: 0.7;
    }

    .justTappedWrapper {
        position: relative;
        left:45px;
    }

    .justTapped {
        color: #FFEF20;
        font-size: 12;
    }

</style>
<div class="tapList">
<div class="banner">
        <img class="logoImage" src="./fbpage.digitalpour.com_files/DigitalPour logo.png">
        <div class="header"><h2>Current Tap List</h2></div>
    </div>
    <ul>
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>1</div>    
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">13%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">13%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">13%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">13%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:table-cell">
                            <div class="producerName">Fullerton Five Faces</div> 
                            <div class="beverageName">Pinot Noir</div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation">USA</div>
                            <div class="producerLocation">Willamette Valley</div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">13%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">13%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:collapse"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">13%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#4BFF28;height:31px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>2</div>    
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:table-cell">
                            <div class="producerName">Volcano Vineyards</div> 
                            <div class="beverageName">Sangria Cranberry/Pomegranate</div>
                            <div class="beverageColor" style="background:#D16567"></div>
                            <div class="producerLocation">USA</div>
                            <div class="producerLocation">Bend, OR</div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#D16567"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:collapse"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#D16567"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#6AFF28;height:29px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>3</div>    
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">12%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">12%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">12%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">12%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:table-cell">
                            <div class="producerName">Volcano Vineyards</div> 
                            <div class="beverageName">V-Licious Blend</div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation">USA</div>
                            <div class="producerLocation">Bend, OR</div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">12%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">12%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:collapse"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">12%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#53FF28;height:30px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>4</div>    
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:table-cell">
                            <div class="producerName">Fullerton Five Faces</div> 
                            <div class="beverageName">Pinot Noir Rose</div>
                            <div class="beverageColor" style="background:#EDA6C4"></div>
                            <div class="producerLocation">USA</div>
                            <div class="producerLocation">Willamette Valley</div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#EDA6C4"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:collapse"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#EDA6C4"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#4BFF28;height:31px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>5</div>    
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.5%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:table-cell">
                            <div class="producerName">Finnriver</div> 
                            <div class="beverageName">Dry Hop</div>
                            <div class="beverageColor" style="background:#F5E00B"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle">Apple Cider</div>
                            <div class="producerLocation">Chimacum, WA</div>
                            <div class="abv" style="visibility:inherit">6.5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.5%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:collapse"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">6.5%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#FFA828;height:12px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>6</div>    
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.2%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:table-cell">
                            <div class="producerName">Atlas</div> 
                            <div class="beverageName">Apricot</div>
                            <div class="beverageColor" style="background:#FFEBA3"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle">Fruit Cider</div>
                            <div class="producerLocation">Bend, OR</div>
                            <div class="abv" style="visibility:inherit">6.2%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.2%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.2%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.2%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.2%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:collapse"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">6.2%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#FFA128;height:11px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>7</div>    
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">North Rim</div> 
                            <div class="beverageName">Peach Pepper Wheat</div>
                            <div class="beverageColor" style="background:#FFCA5A"></div>
                            <div class="beverageStyle">Belgian Wheat</div>
                            <div class="producerLocation">Bend, OR</div>
                            <div class="abv" style="visibility:inherit">5.5%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">15 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.5%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">5.5%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#FF8E28;height:10px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>8</div>    
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">21st Amendment</div> 
                            <div class="beverageName">Hell Or High Watermelon</div>
                            <div class="beverageColor" style="background:#FFD761"></div>
                            <div class="beverageStyle">Wheat</div>
                            <div class="producerLocation">San Francisco, CA</div>
                            <div class="abv" style="visibility:inherit">4.9%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">17 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">4.9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">4.9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">4.9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">4.9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">4.9%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">4.9%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#FF8F28;height:10px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>9</div>    
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Double Mountain</div> 
                            <div class="beverageName">Pilsner</div>
                            <div class="beverageColor" style="background:#EFEF07"></div>
                            <div class="beverageStyle">Pilsner</div>
                            <div class="producerLocation">Hood River, OR</div>
                            <div class="abv" style="visibility:inherit">5.5%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">50 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.5%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">5.5%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#DCFF28;height:21px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>10</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Widmer Brothers</div> 
                            <div class="beverageName">Hefeweizen</div>
                            <div class="beverageColor" style="background:#EFEF07"></div>
                            <div class="beverageStyle">Hefeweizen</div>
                            <div class="producerLocation">Portland, OR</div>
                            <div class="abv" style="visibility:inherit">4.9%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">4.9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">4.9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">4.9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">4.9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">4.9%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:collapse"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">4.9%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#87FF28;height:27px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>11</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Pelican</div> 
                            <div class="beverageName">Kiwanda Cream Ale</div>
                            <div class="beverageColor" style="background:#F4F460"></div>
                            <div class="beverageStyle">Cream Ale</div>
                            <div class="producerLocation">Pacific City, OR</div>
                            <div class="abv" style="visibility:inherit">5.1%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">25 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.1%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.1%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.1%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.1%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.1%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">5.1%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#FFB328;height:13px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>12</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Lagunitas</div> 
                            <div class="beverageName">A Little Sumpin' Extra!</div>
                            <div class="beverageColor" style="background:#EFEF08"></div>
                            <div class="beverageStyle">Double IPA</div>
                            <div class="producerLocation">Petaluma, CA</div>
                            <div class="abv" style="visibility:inherit">8.7%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">64 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">8.7%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">8.7%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">8.7%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">8.7%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">8.7%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">8.7%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#00FF28;height:37px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0.7268524537037038">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>13</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Epic</div> 
                            <div class="beverageName">Element 29</div>
                            <div class="beverageColor" style="background:#EBDA1D"></div>
                            <div class="beverageStyle">American Pale Ale</div>
                            <div class="producerLocation">Salt Lake City, UT</div>
                            <div class="abv" style="visibility:inherit">5.2%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">35 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.2%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.2%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.2%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.2%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.2%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">5.2%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#EBFF28;height:19px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>14</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Wild Ride</div> 
                            <div class="beverageName">Float On</div>
                            <div class="beverageColor" style="background:#E8F22F"></div>
                            <div class="beverageStyle">Saison</div>
                            <div class="producerLocation">Redmond, OR</div>
                            <div class="abv" style="visibility:inherit">5%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:collapse"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">5%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#CFFF28;height:21px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>15</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Alpine Beer Co.</div> 
                            <div class="beverageName">Hoppy Birthday</div>
                            <div class="beverageColor" style="background:#EBDA1D"></div>
                            <div class="beverageStyle">American Pale Ale</div>
                            <div class="producerLocation">Alpine, CA</div>
                            <div class="abv" style="visibility:inherit">5.3%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">45 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.3%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.3%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.3%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.3%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.3%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">5.3%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#46FF28;height:31px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>16</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Oakshire</div> 
                            <div class="beverageName">Line Dry Rye</div>
                            <div class="beverageColor" style="background:#FCD417"></div>
                            <div class="beverageStyle">IPA</div>
                            <div class="producerLocation">Eugene, OR</div>
                            <div class="abv" style="visibility:inherit">6.3%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">66 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.3%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.3%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.3%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.3%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.3%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">6.3%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#FF5528;height:6px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>17</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">10 Barrel</div> 
                            <div class="beverageName">Swill</div>
                            <div class="beverageColor" style="background:#F7F7A0"></div>
                            <div class="beverageStyle">Radler</div>
                            <div class="producerLocation">Bend, OR</div>
                            <div class="abv" style="visibility:inherit">4.5%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">13 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">4.5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">4.5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">4.5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">4.5%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">4.5%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">4.5%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#1CFF28;height:34px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>18</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Sunriver</div> 
                            <div class="beverageName">Vicious Mosquito</div>
                            <div class="beverageColor" style="background:#FBB123"></div>
                            <div class="beverageStyle">IPA</div>
                            <div class="producerLocation">Sunriver, OR</div>
                            <div class="abv" style="visibility:inherit">7%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">70 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">7%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">7%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">7%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">7%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">7%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">7%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#FF8428;height:9px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>19</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Deschutes</div> 
                            <div class="beverageName">Chainbreaker</div>
                            <div class="beverageColor" style="background:#D5E00C"></div>
                            <div class="beverageStyle">White IPA</div>
                            <div class="producerLocation">Bend, OR</div>
                            <div class="abv" style="visibility:inherit">5.6%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">55 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.6%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.6%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.6%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.6%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.6%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">5.6%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#FFCB28;height:14px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>20</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Dogfish Head</div> 
                            <div class="beverageName">90 Minute IPA</div>
                            <div class="beverageColor" style="background:#F29801"></div>
                            <div class="beverageStyle">Imperial IPA</div>
                            <div class="producerLocation">Milton, DE</div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">90 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#BFFF28;height:23px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>21</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Deschutes</div> 
                            <div class="beverageName">Fresh Squeezed</div>
                            <div class="beverageColor" style="background:#E87503"></div>
                            <div class="beverageStyle">American IPA</div>
                            <div class="producerLocation">Bend, OR</div>
                            <div class="abv" style="visibility:inherit">6.4%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">60 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.4%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.4%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.4%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.4%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.4%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">6.4%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#FF0028;height:1px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>22</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Boneyard</div> 
                            <div class="beverageName">Armored Fist</div>
                            <div class="beverageColor" style="background:#2B1603"></div>
                            <div class="beverageStyle">Imperial Cascadian Dark Ale</div>
                            <div class="producerLocation">Bend, OR</div>
                            <div class="abv" style="visibility:inherit">10%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">80 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">10%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">10%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">10%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">10%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">10%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">10%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#13FF28;height:35px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>23</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Lompoc</div> 
                            <div class="beverageName">Proletariat Red</div>
                            <div class="beverageColor" style="background:#C76307"></div>
                            <div class="beverageStyle">Red Ale</div>
                            <div class="producerLocation">Portland, OR</div>
                            <div class="abv" style="visibility:inherit">6.2%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">32 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.2%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.2%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.2%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.2%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6.2%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">6.2%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#AFFF28;height:24px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>24</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Bend</div> 
                            <div class="beverageName">Scarlet</div>
                            <div class="beverageColor" style="background:#CF6C3D"></div>
                            <div class="beverageStyle">Imperial Red Ale</div>
                            <div class="producerLocation">Bend, OR</div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">85 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#FF9328;height:10px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>25</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Full Sail</div> 
                            <div class="beverageName">Amber Ale</div>
                            <div class="beverageColor" style="background:#9E5F0B"></div>
                            <div class="beverageStyle">American Amber Ale</div>
                            <div class="producerLocation">Hood River, OR</div>
                            <div class="abv" style="visibility:inherit">6%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">31 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">6%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">6%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#5EFF28;height:30px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>26</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Mac &amp; Jack</div> 
                            <div class="beverageName">African Amber</div>
                            <div class="beverageColor" style="background:#DB520C"></div>
                            <div class="beverageStyle">Amber Ale</div>
                            <div class="producerLocation">Redmond, WA</div>
                            <div class="abv" style="visibility:inherit">5.6%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">24 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.6%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.6%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.6%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.6%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.6%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">5.6%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#23FF28;height:34px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>27</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Rogue</div> 
                            <div class="beverageName">Mocha Porter</div>
                            <div class="beverageColor" style="background:#120901"></div>
                            <div class="beverageStyle">Porter</div>
                            <div class="producerLocation">Newport, OR</div>
                            <div class="abv" style="visibility:inherit">5.3%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.3%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.3%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.3%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.3%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.3%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:collapse"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">5.3%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#D3FF28;height:21px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>28</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Cascade Lakes</div> 
                            <div class="beverageName">Paddleboard Porter</div>
                            <div class="beverageColor" style="background:#120901"></div>
                            <div class="beverageStyle">Porter</div>
                            <div class="producerLocation">Redmond, OR</div>
                            <div class="abv" style="visibility:inherit">5.4%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">34 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.4%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.4%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.4%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.4%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.4%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">5.4%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#A5FF28;height:25px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>29</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">Deschutes</div> 
                            <div class="beverageName">Armory XPA (Nitro)</div>
                            <div class="beverageColor" style="background:#EBDA1D"></div>
                            <div class="beverageStyle">American Pale Ale</div>
                            <div class="producerLocation">Bend, OR</div>
                            <div class="abv" style="visibility:inherit">5.9%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">58 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">5.9%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">5.9%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#04FF28;height:36px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0.5055906018518519">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    
        <li>
        <div class="lineItem">
            <table>
                <tbody><tr>
                    <td class="tapInfoWrapper">
                    <div>30</div>   
                    </td>
                    <td>            
                        <div class="beverageInfo" name="obsoleteBeverage" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:collapse">%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:collapse"> IBU</div>
                        </div>
                        <div class="beverageInfo" name="beerLayout" style="display:table-cell">
                            <div class="producerName">North Coast</div> 
                            <div class="beverageName">Old Rasputin (Nitro)</div>
                            <div class="beverageColor" style="background:#1C0B03"></div>
                            <div class="beverageStyle">Russian Imperial Stout</div>
                            <div class="producerLocation">Fort Bragg, CA</div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                            <div class="ibu" style="visibility:inherit">75 IBU</div>
                        </div>
                        <div class="beverageInfo" name="ciderLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="dryness"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="meadLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="softDrinkLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                        </div>
                        <div class="beverageInfo" name="kombuchaLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="coffeeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="beverageStyle"></div>
                            <div class="producerLocation"></div>
                            <div class="roasting">&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="wineLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                        </div>
                        <div class="beverageInfo" name="sakeLayout" style="display:none">
                            <div class="producerName"></div> 
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="producerLocation"></div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                            <div class="smv" style="visibility:inherit"> SMV</div>
                        </div>
                        <div class="beverageInfo" name="customBeverageLayout" style="display:none">
                            <div class="beverageName"></div>
                            <div class="beverageColor" style="background:#000000"></div>
                            <div class="abv" style="visibility:inherit">9%&nbsp;&nbsp;</div>
                        </div>
                    </td>
                    <td class="kegLevelWrapper" style="display:table-cell">
                        <img src="./fbpage.digitalpour.com_files/empty_keg_bottom.png" style="position:absolute;bottom:0px;width:40px;height=55px;">                        
                        <img src="./fbpage.digitalpour.com_files/empty_keg_front.png" style="position:absolute;bottom:0px;width:40px;height=55px;opacity:0.5;z-index:5;">
                        <div class="kegLevel" style="background:#2FFF28;height:33px;"></div>
                    </td>
                    <td class="justTappedWrapper">
                        <div class="justTapped" style="opacity:0">Just Tapped</div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        </li>
    </ul>
</div>
<?php get_footer(); ?>
