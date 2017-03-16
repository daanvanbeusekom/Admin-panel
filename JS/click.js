$(document).ready(function(){
    $("button").click(function(){
        $("p:last").removeClass("box").addClass("box collapsed-box");
    });
});