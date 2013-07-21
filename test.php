<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
p {
    margin:0
}
ul.popup {
    width:50%;
    border:1px solid #000;
    position:relative;
    margin:0 auto;
    padding:0 0 100px;
    list-style:none;
}
ul.popup li {
    display:inline-block;
    margin:10px;
    vertical-align:top;
}
* html ul.popup li {
    display:inline
}
*+html ul.popup li {
    display:inline
}
.item {
    width:150px;
    height:150px;
    border:1px solid #000;
    background:red
}
.info {
    position:absolute;
    left:-999em;
    background:yellow;
    padding:10px;
    margin:-25px 0 0 10px;
    border:1px solid #000;
    width:130px;
}
.popup li:hover .item, .popup li:hover .info {
    position:relative;
    z-index:100
}
.popup li:hover .info {
    left:auto;
    position:absolute
}
.overlay {
    display:none;
    position:absolute;
    left:0;
    top:0;
    width:100%;
    height:100%;
    z-index:1;
    background:#fff;
    opacity:0.7;
    -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(opacity=70)";
 filter:progid:DXImageTransform.Microsoft.Alpha(opacity=70);
}
.popup li:hover .overlay {
    display:block;
}
.popup li:hover .overlay:hover {
    display:none
}
</style>
</head>
<body>
<ul class="popup">
    <li>
        <div class="item">Test1</div>
        <div class="info">
            <p>Lorem ipsum text</p>
        </div>
        <div class="overlay"></div>
    </li>
    <li>
        <div class="item">Test2<b></b></div>
        <div class="info">
            <p>Lorem ipsum text lortem ipsum text</p>
        </div>
        <div class="overlay"></div>
    </li>
    <li>
        <div class="item">Test2<b></b></div>
        <div class="info">
            <p>Lorem ipsum text</p>
        </div>
        <div class="overlay"></div>
    </li>
    <li>
        <div class="item">Test2<b></b></div>
        <div class="info">
            <p>Lorem ipsum text</p>
        </div>
        <div class="overlay"></div>
    </li>
    <li>
        <div class="item">Test2<b></b></div>
        <div class="info">
            <p>Lorem ipsum text</p>
        </div>
        <div class="overlay"></div>
    </li>
    <li>
        <div class="item">Test2<b></b></div>
        <div class="info">
            <p>Lorem ipsum text</p>
        </div>
        <div class="overlay"></div>
    </li>
    <li>
        <div class="item">Test2<b></b></div>
        <div class="info">
            <p>Lorem ipsum text</p>
        </div>
        <div class="overlay"></div>
    </li>
</ul>
</body>
</html>