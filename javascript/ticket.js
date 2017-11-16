$(document).ready(function() {
    $(".ticket-box .reply-btn").click(function(){
        $(".ticket-box .reply-body").append(
            "<textarea rows='10' cols='50' name='new-message'/>" +
            "<button name='save-message' type='submit'>Send</button>" +
            "<button name='cancel' type='submit'>Cancel</button>"
        );
        $(".reply").remove();
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