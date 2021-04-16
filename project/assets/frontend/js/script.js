  // Sets interval...what is transition slide speed?
$('#naviCarousel').carousel({
    	interval: 3000
    });
$('#hotHairCarousel').carousel({
    	interval: 10000
    });
$('#hotSellCarousel').carousel({
    	interval: 15000
    }); 
// active fast navi
$('#tab2').click(function(){
    var ttt=document.getElementById('tab1')
    ttt.className = ttt.className.replace(" active", "");
    this.className = this.className.replace(" active", "");
    this.className += " active";
    $(".content-booking").css("display","none");
    $(".content-search").css("display","block");
})
$('#tab1').click(function(){
    var tt=document.getElementById('tab2')
    tt.className = tt.className.replace(" active", "");
    this.className = this.className.replace(" active", "");
    this.className += " active";
    $(".content-booking").css("display","block");
    $(".content-search").css("display","none");
})

$('.loai .item').click(function()
{
    if (this.className.indexOf(" active")!= -1)
    this.className = this.className.replace(" active", "");
    else
    this.className += " active";
})
// 
$('.thurong').click(function(){
    $('.nd-sp').css("height","auto");
});

$(document).ready(function(){
        //tao doi tuog thoi gian
        var date=new Date();
        var day=date.getDate();
        var month =date.getMonth()+1; // thang hcay tu 0-11
        var hn=day + "/" + month;
        var day2=day + 1 + "/"+month;
        var day3=day + 2 + "/"+month;
        //hien thi thoi gian
        document.getElementById('labelday1').innerHTML = hn;
        document.getElementById('labelday2').innerHTML = day2;
        document.getElementById('labelday3').innerHTML = day3;
    });
// drop gio hang
  $(".dropdown").click(function() {
    $(".dropdown-content").fadeToggle( "fast");
  });
    