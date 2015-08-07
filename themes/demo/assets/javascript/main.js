$(function () {
    app.init();
    app.galleryWorks.init();
});

var app = {};



app.init = function () {
    this.html.init();
    this.event();
    this.drawLogo();
};

app.html = {
    init: function () {}
};

app.event = function () {

};


app.drawLogo = function (color) {

    var logo = document.getElementById("canvasLogo")
        ,ctx = logo.getContext('2d')
        ,color = color || '#fff'
        ,scale = 0.3
        ;
    logo.width  = 252 * scale;
    logo.height = 140 * scale;
    ctx.scale(scale, scale);

    ctx.beginPath();
    ctx.moveTo(0, 0); ctx.lineTo(56, 0); ctx.lineTo(56, 42); ctx.lineTo(0, 30);
    ctx.closePath();
    ctx.fillStyle = color; ctx.fill();
    ctx.strokeStyle = color; ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(62, 0); ctx.lineTo(88, 0); ctx.lineTo(88, 58); ctx.lineTo(62, 58);
    ctx.closePath();
    ctx.fillStyle = color; ctx.fill();
    ctx.strokeStyle = color; ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(96, 0); ctx.lineTo(122, 0); ctx.lineTo(122, 60); ctx.lineTo(96, 60);
    ctx.closePath();
    ctx.fillStyle = color; ctx.fill();
    ctx.strokeStyle = color; ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(130, 0); ctx.lineTo(156, 0); ctx.lineTo(156, 58); ctx.lineTo(130, 58);
    ctx.closePath();
    ctx.fillStyle = color; ctx.fill();
    ctx.strokeStyle = color; ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(166, 0); ctx.lineTo(192, 0); ctx.lineTo(192, 60); ctx.lineTo(166, 60);
    ctx.closePath();
    ctx.fillStyle = color; ctx.fill();
    ctx.strokeStyle = color; ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(200, 0); ctx.lineTo(252, 0); ctx.lineTo(252, 5); ctx.lineTo(200, 34);
    ctx.closePath();
    ctx.fillStyle = color; ctx.fill();
    ctx.strokeStyle = color; ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(70, 66); ctx.lineTo(112, 66); ctx.lineTo(110, 94); ctx.lineTo(154, 96); ctx.lineTo(148, 110);
    ctx.lineTo(162, 140); ctx.lineTo(88, 140); ctx.lineTo(100, 110);
    ctx.closePath();
    ctx.fillStyle = color; ctx.fill();
    ctx.strokeStyle = color; ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(120, 70); ctx.lineTo(176, 70); ctx.lineTo(168, 90); ctx.lineTo(116, 88);
    ctx.closePath();
    ctx.closePath();
    ctx.fillStyle = color; ctx.fill();
    ctx.strokeStyle = color; ctx.stroke();

};



app.galleryWorks = {};
app.galleryWorks.init = function () {
    this.html.init();
    //this.setParam();
    this.event();
};

app.galleryWorks.html = {
    init: function () {
        this.gw_scroll = $('#gw_scroll div');
    }
};

app.galleryWorks.event = function () {
    var self = this, html = this.html;

    //$('#gw_scroll').horizon();
};

//app.galleryWorks.setParam = function () {
//    var html = this.html;
//    html.gw_scroll.css('width', html.gw_scroll.find('li').length * 840);
//};


$(function () {
//    var mouseWheelEvt = function (event) {
//        if (document.body.doScroll)
//            document.body.doScroll(event.wheelDelta>0 ? "left":'right');
//        else if ((event.wheelDelta || event.detail) > 0)
//            document.body.scrollLeft -= 10;
//        else
//            document.body.scrollLeft += 10;
//
//        return false;
//    };
////document.body.addEventListener("mousewheel", mouseWheelEvt);
//    document.getElementById('galleryTest').addEventListener("mousewheel", mouseWheelEvt);

    $('#galleryTest').scroll(function(e){
        console.log(e);
    });
});