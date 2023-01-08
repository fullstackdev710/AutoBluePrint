$(document).ready(function() {
   $('#copy_webinar_link').on('click', function() {
      console.log('aaaaa');
      $('#view_page input').select();      
      document.execCommand("copy");
   });
});
