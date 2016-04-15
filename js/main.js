/**
 * Created by Tyler on 4/15/2016.
 */

// A $( document ).ready() block.
$( document ).ready(function() {
    console.log( "ready!" );
    $('.project').click(projectClick);
});

// function called when a project is clicked on
function projectClick(){
    console.log(this);
}
