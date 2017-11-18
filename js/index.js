

// Script for the sidebar nav
$('document').ready(function() { 
  $('.icon').click(function(){
    var icon = $('i.icon');
    if($(this).hasClass('closed')){
      $('.admin-aside-panel').animate({
        marginLeft: '0px'
      }, 500);
      $(this).removeClass('closed');
      $(this).addClass('open');
      icon.addClass('fa-chevron-left');
      icon.removeClass('fa-chevron-right');   
    }
    else{
      $('.admin-aside-panel').animate({
        marginLeft: '-275px'
      }, 500);
      
      $(this).removeClass('open');
      $(this).addClass('closed');
      icon.addClass('fa-chevron-right');
      icon.removeClass('fa-chevron-left');    
    }
  });
});



// Script for the login form
 $("#login-button").click(function(event){
     event.Default();
   
   $('form').fadeOut(500);
   $('.wrapper').addClass('form-success');
});



 // JavaScript for the table

 // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();a