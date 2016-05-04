/**
 * Created by Tyler on 4/15/2016.
 */

// A $( document ).ready() block.
$( document ).ready(function() {
    console.log( "ready!" );
    $('.project').click(projectClick);
    $('#exitPopup').click(exitProject);
    $('#cover').click(exitProject);
});

// function called when a project is clicked on
function projectClick(){
    $("#cover").css("display", "block");
    $("#popup").css("display", "block");
    var that = this;
    $.ajax({ url: '../ajax-project.php',
        data: {projectId: that.id},
        type: 'POST',
        cache: false,
        dataType:"json",
        success: function(output) {
            alert(output[0]["id"]);
        },
        error:function(){
            alert("error");
        }

    });
    return false;
}

// function called when a project is closed
function exitProject(){
    $("#cover").css("display", "none");
    $("#popup").css("display", "none");
    return false;
}


