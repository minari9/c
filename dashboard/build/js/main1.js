$('#profiles').change(()=>{
    console.log('/assets/media/'+$('#profiles').val().split(/(\\|\/)/g).pop())
    $('#profileHolder').prop('src', '/assets/media/'+$('#profiles').val().split(/(\\|\/)/g).pop())
})


$('#brgy').css({'background':'var(--orange)',"color":"white"})
$('#one').show();
$('#two').hide();
$('#three').hide();

$('#brgy').click(()=>{
    $('#brgy').css({'background':'var(--orange)',"color":"white"})
    $('#pcnc').css({'background':'white',"color":"var(--black)"})
    $('#bir').css({'background':'white',"color":"var(--black)"})
    $('#one').show();
$('#two').hide();
$('#three').hide();
})

$('#pcnc').click(()=>{
    $('#pcnc').css({'background':'var(--orange)',"color":"white"})
    $('#brgy').css({'background':'white',"color":"var(--black)"})
    $('#bir').css({'background':'white',"color":"var(--black)"})
    $('#one').hide();
$('#two').show();
$('#three').hide();

})
$('#bir').click(()=>{
    $('#bir').css({'background':'var(--orange)',"color":"white"})
    $('#brgy').css({'background':'white',"color":"var(--black)"})
    $('#pcnc').css({'background':'white',"color":"var(--black)"})
    $('#one').hide();
    $('#two').hide();
    $('#three').show();
})


$('#brgyfile').change(()=>{
    $('#brgyprev').attr('src','/assets/media/'+$('#brgyfile').val().split(/(\\|\/)/g).pop())
})

$('#pcncfile').change(()=>{
    $('#pcncprev').attr('src','/assets/media/'+$('#pcncfile').val().split(/(\\|\/)/g).pop())
})
$('#birfile').change(()=>{
    $('#birprev').attr('src','/assets/media/'+$('#birfile').val().split(/(\\|\/)/g).pop())
})
$('#signs').hide();

$('#signout').click(()=>{
    $('#signs').toggle();
})
$('#pass').click(()=>{
    $('#profilebtn').css({"border-left":"3px solid var(--orange)","color":"var(--orange)"})
    $('#overviewbtn').css({"border-left":"none","color":"var(--black)"})
    $('#documentsbtn').css({"border-left":"none","color":"var(--black)"})
    $('#actives2').css("color","var(--orange)")
    $('#actives1').css("color","var(--blue)")
    $('#actives3').css("color","var(--blue)")
    $('#profile').hide();
    $('#overview').hide();
    $('#documents').hide();
    $('#passwords').show();

})

$('.back').click(()=>{
    $('#profilebtn').css({"border-left":"3px solid var(--orange)","color":"var(--orange)"})
    $('#overviewbtn').css({"border-left":"none","color":"var(--black)"})
    $('#documentsbtn').css({"border-left":"none","color":"var(--black)"})
    $('#actives2').css("color","var(--orange)")
    $('#actives1').css("color","var(--blue)")
    $('#actives3').css("color","var(--blue)")
    $('#profile').show();
    $('#overview').hide();
    $('#documents').hide();
    $('#passwords').hide();

})

$('.togle').click(()=>{
    $('#menu').toggle()
})