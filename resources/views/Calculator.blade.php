@extends('layouts.app')
<body>

    <input type="button" id="slide" value="Calculator"/>&nbsp;
    <div id="flip" style="width:380px;margin:auto; padding:10px; background-color:#29A3A3">
        <form action="" id="calculator" >
            <input type="hidden" id="operation" value=""/>

            <input type="text" id="Text1" value="" style="width:20%; height:35px;" />&nbsp;&nbsp;
            <input type="text" id="Text2" value="" style="width:20%; height:35px;"  />&nbsp;&nbsp;&nbsp;
            <input type="text" id="answer" value="" style="width:23%; height:35px;"  />
            <br />
            <input type="button" value="+" id="plus" style="width:50px; height:50px; float:left;"/>
            <input type="button" value="-" id="subtract" style="width:50px; height:50px; float:left;"/>
            <input type="button" value="/" id="divide" style="width:50px; height:50px; float:left;"/>
            <input type="button" value="*" id="product" style="width:50px; height:50px; float:left;"/>
            <input type="button" value="1" id="1" style="width:50px; height:50px; float:left;"/>
            <input type="button" value="2" id="2" style="width:50px; height:50px; float:left;"/>
            <input type="button" value="3" id="3" style="width:50px; height:50px; float:left;"/>
            <input type="button" value="4" id="4" style="width:50px; height:50px; float:left;"/>
            <input type="button" value="5" id="5" style="width:50px; height:50px; float:left;"/>
            <input type="button" value="6" id="6" style="width:50px; height:50px; float:left;"/>
            <input type="button" value="7" id="7" style="width:50px; height:50px; float:left;"/>
            <input type="button" value="8" id="8" style="width:50px; height:50px; float:left;"/>
            <input type="button" value="9" id="9" style="width:50px; height:50px; float:left;"/>
            <input type="button" value="0" id="0" style="width:50px; height:50px; float:left;"/>
            <input type="button" value="C" id="C" style="width:50px; height:50px; float:left; color:red;"/>
            <input type="button" value="=" id="equals" style="width:50px; height:50px; float:left;"/>
        </form>
    </div>

<!--<div style="background:98bf21#;height:100px;width:100px;position:absolute;"></div>-->
</body>
</html>
