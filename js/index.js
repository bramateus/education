


// pega minha imagens na pasta
 // var dir = ['img/50.png','img/40.png','img/70.png','img/80.png'] // Pasta Minhas imagens
 // document.body.innerHTML += "<img src='"+dir+".png'>";
const mq = window.matchMedia( "(min-width: 768px)" );




        if (mq.matches) {
            // Se Maior que 768px pega as imagens grandes
            var dir = ['img/50.png','img/40.png','img/70.png','img/80.png'] 
            console.log("Maior que 425");

                // AO DETECTAR MUDANÇAS NO RESIZE DA PÁGINA, A MESMA É RECARREGADA A CADA 100MS
                function recarregarPagina(){
                // Sem redimencionamento à 100ms!
                location.reload();
                }

                var boraLa;
                window.onresize = function(){
                  clearTimeout(boraLa);
                  boraLa = setTimeout(recarregarPagina, 100);
                };


        } else {
          // Se menor que 425 MOBILE pega as imagens pequenas
          var dir = ['img/50.png','img/40.png','img/70.png','img/80m.png']
          console.log("Menor que 425");

                // AO DETECTAR MUDANÇAS NO RESIZE DA PÁGINA, A MESMA É RECARREGADA A CADA 100MS
                function recarregarPagina(){
                // Sem redimencionamento à 100ms!
                location.reload();
                }

                var boraLa;
                window.onresize = function(){
                clearTimeout(boraLa);
                boraLa = setTimeout(recarregarPagina, 100);
                };
        }
      


var bodyStyle = document.body.style;
bodyStyle.mozUserSelect = 'none';
bodyStyle.webkitUserSelect = 'none';
var img = new Image();
// var canvas = document.querySelector('canvas');
// canvas.style.backgroundColor='transparent';
// canvas.style.position = 'absolute';
var imgs = ['' + dir[0],'' + dir[1], '' + dir[2], '' + dir[3]];
var num = Math.floor(Math.random()*4);

// https://www.kellyhoppen.com/media/overlayicons/UPTO-50_off.png

var desc = 0;

jQuery(document).ready(function ($) {

// alert("dffdas");



if (num === 0) {
    desc = 49;
    // $('h2 span').html("59,90");
    // console.log(num);

    var vp = desc;
    // var c = $("#idmatricula").val();
    // $.post('uproleta.php', {vp: vp, c: c}, function (data) {});
    // $('h3 span').html("" + vp + "%");

} 
    
else if (num === 1) {
    desc = 59;
    // $('h2 span').html("40 %");
    // console.log(num);

    var vp = desc;
    // var c = $("#idmatricula").val();
    // $.post('uproleta.php', {vp: vp, c: c}, function (data) {});
    // $('h3 span').html("" + vp + "%");

} 

else if (num === 2) {
    desc = 69;
    // $('h2 span').html("70 %");
    // console.log(num);

    var vp = desc;
    // var c = $("#idmatricula").val();
    // $.post('uproleta.php', {vp: vp, c: c}, function (data) {});
    // $('h3 span').html("" + vp + "%");
}

else if (num === 3) {
    desc = 79;
    // $('h2 span').html("80 %");
    // console.log(num);

    var vp = desc;
    // var c = $("#idmatricula").val();
    // $.post('uproleta.php', {vp: vp, c: c}, function (data) {});
    // $('h3 span').html("" + vp + "%");
}
    var c = $("#idmatricula").val();
    vp = vp+".90";
    $.post('uproleta.php', {vp: vp, c: c}, function (data) {});

    var sc = $('#raspadinha').wScratchPad({
    bg: './images/'+desc+'.png',
    fg: './images/RaspeAqui.png',
    size: 10,
    'cursor': 'pointer',
    scratchMove: function (e, percent) {
    // $('#raspadinha-percent').html(percent);
    // var premio = "<?php echo $_SESSION["premio"] ?>";
    if (percent > 35) {
        this.clear();
        $(".msg span#premio").html("R$ "+desc+",90");
        console.log("R$ "+vp+",90");
    }
    }
});

// var c = $("#idmatricula").val();
// $.post('uproleta.php', {c: c}, function (data) {});
// $('h3 span').html("" + vp + "%");

// let vp = _valores[_random];
    
            // var vp = 10.90;
            // var c = $("#idmatricula").val();
            // $.post('uproleta.php', {vp: vp, c: c}, function (data) {});
            // $('h3 span').html("" + vp);

        });






img.src = imgs[num];
/*
var pp = 0;
var ww = 0;

function drawScratchCard(e){
    var ctx;

    // var w = 320,
    //     h = 250;


        const mq = window.matchMedia( "(min-width: 768px)" );

        if (mq.matches) {
            var w = 500,
                h = 500;
          // window width is at least 500px
          console.log("Maior que 425");
        } else {
          // Se menor que 425
        var w = 320,
            h = 250;
          console.log("Menor que 425");
        }



    var offsetX = canvas.offsetLeft,
        offsetY = canvas.offsetTop;
    var mousedown = false;
    function layer(ctx) {
        ctx.fillStyle = 'gray';
        ctx.fillRect(pp, ww, w, h); 
    }
    function eventDown(e){
        e.preventDefault();
        mousedown=true;
    }
    function eventUp(e){
        e.preventDefault();
        mousedown=false

    }
    function eventMove(e){
        e.preventDefault();
        if(mousedown) {
             if(e.changedTouches){
                 e=e.changedTouches[e.changedTouches.length-1];
             }
             var x = (e.clientX + document.body.scrollLeft || e.pageX) - offsetX || 0,
                 y = (e.clientY + document.body.scrollTop || e.pageY) - offsetY || 0;

             with(ctx) {
                 beginPath()
                 arc(x, y, 35, 0, Math.PI * 2);
                 fill();
             }
        } 
    }
    canvas.width=w;
    canvas.height=h;
    canvas.style.backgroundImage='url('+img.src+')';
    ctx=canvas.getContext('2d');
    ctx.fillStyle='transparent';
    ctx.fillRect(0, 0, w, h);
    layer(ctx);
    ctx.globalCompositeOperation = 'destination-out';
    canvas.addEventListener('touchstart', eventDown);
    canvas.addEventListener('touchend', eventUp);
    canvas.addEventListener('touchmove', eventMove);
    canvas.addEventListener('mousedown', eventDown);
    canvas.addEventListener('mouseup', eventUp);
    canvas.addEventListener('mousemove', eventMove);
} 
img.addEventListener('load',drawScratchCard);*/











// function keypresed() {
// alert('seu teclado está desabilitado!!');
// }
// document.onkeydown=keypresed;
// document.onmousedown=click;
