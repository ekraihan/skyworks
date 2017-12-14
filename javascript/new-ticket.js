$(document).ready(function() {
    $(".submit-ticket").click(function(){
        console.log("dsfdfsafd");
        $.getJSON("http://tickethawk.8p8jwpidms.us-west-2.elasticbeanstalk.com/analyze", function(res) {
            console.log(res)
        })
        // $(".possible-answers").append("Some Possible Answers...<br><br>  Do you still want to submit? <button>Yes</button><button>No</button>")
    })
});



