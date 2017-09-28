$(document).ready(function() {
    $(".ticket-box .reply-btn").click(function(){
        $(".ticket-box .reply-body").append(
            "<textarea rows='10' cols='50'/>" +
            "<button>Send</button>")
    })


});


function change_to_dropdown()
{
    $(".status > div").replaceWith("<div>drop</div>");
}

function change_to_text()
{
    $(".status > div").replaceWith("<div>text</div>");
}