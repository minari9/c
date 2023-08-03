$('#upcomingEvents').show();
$('#upcoming').css({"border-bottom":"2px solid var(--blue)","color":"var(--black)"})
$('#startEvents').hide();
$('#password').hide();
$('#actives1').css("color","var(--orange)")
    $('#actives2').css("color","var(--blue)")
    $('#actives3').css("color","var(--blue)")
    $('#overviewbtn').css({"border-left":"3px solid var(--orange)","color":"var(--orange)"})
    $('#profilebtn').css({"border-left":"none","color":"var(--black)"})
    $('#documentsbtn').css({"border-left":"none","color":"var(--black)"})
    $('#passwords').hide();
    $('#overview').show();
    $('#profile').hide();
    $('#documents').hide();

$('#overviewbtn').click(()=>{
    $('#actives1').css("color","var(--orange)")
    $('#actives2').css("color","var(--blue)")
    $('#actives3').css("color","var(--blue)")
    $('#overviewbtn').css({"border-left":"3px solid var(--orange)","color":"var(--orange)"})
    $('#profilebtn').css({"border-left":"none","color":"var(--black)"})
    $('#documentsbtn').css({"border-left":"none","color":"var(--black)"})
    $('#overview').show();
    $('#profile').hide();
    $('#documents').hide();
    $('#passwords').hide();
})
$('#profilebtn').click(()=>{
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
$('#documentsbtn').click(()=>{
    $('#documentsbtn').css({"border-left":"3px solid var(--orange)","color":"var(--orange)"})
    $('#overviewbtn').css({"border-left":"none","color":"var(--black)"})
    $('#profilebtn').css({"border-left":"none","color":"var(--black)"})
      $('#actives3').css("color","var(--orange)")
    $('#actives2').css("color","var(--blue)")
    $('#actives1').css("color","var(--blue)")
    $('#documents').show();
    $('#profile').hide();
    $('#overview').hide();
    $('#passwords').hide();
})
$('#upcoming').click(()=>{
    $('#upcomingEvents').show();
    $('#activeEvents').hide();
    $('#startEvents').hide();
    $('#endedEvents').hide();
    $('#upcoming').css({"border-bottom":"2px solid var(--blue)","color":"var(--black)"})
    $('#active').css({"border-bottom":"none","color":"var(--gray)"})
    $('#ended').css({"border-bottom":"none","color":"var(--gray)"})
});
$('#active').click(
    ()=>{
        $('#upcomingEvents').hide();
        $('#activeEvents').show();
        $('#startEvents').hide();
        $('#endedEvents').hide();
        $('#active').css({"border-bottom":"2px solid var(--blue)","color":"var(--black)"})
        $('#upcoming').css({"border-bottom":"none","color":"var(--gray)"})
        $('#ended').css({"border-bottom":"none","color":"var(--gray)"})
    }
);

$('#ended').click(
    ()=>{
        $('#upcomingEvents').hide();
        $('#activeEvents').hide();
        $('#startEvents').hide();
        $('#endedEvents').show();
        $('#ended').css({"border-bottom":"2px solid var(--blue)","color":"var(--black)"})
        $('#upcoming').css({"border-bottom":"none","color":"var(--gray)"})
        $('#active').css({"border-bottom":"none","color":"var(--gray)"})
    }
);


$('#start').click(()=>{
    $('#upcomingEvents').hide();
    $('#activeEvents').hide();
    $('#endedEvents').hide();
    $('#upcoming').css({"border-bottom":"2px solid var(--blue)","color":"var(--black)"})
    $('#active').css({"border-bottom":"none","color":"var(--gray)"})
    $('#ended').css({"border-bottom":"none","color":"var(--gray)"})
    $('#startEvents').show();

});


$('#file').change(()=>{
    let v = $('#file').val().split(/(\\|\/)/g).pop()
    $('#prev').prop('src','/assets/media/'+v)
  
})