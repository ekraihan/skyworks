$(document).ready(function() {
   $(".ticket-box .reply-btn").click(function(){
       $(".ticket-box .reply-body").append(
           "<textarea rows='10' cols='50'/>" +
           "<button>Send</button>")
   })
});