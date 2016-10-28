
$(document).ready(function(){
    // update films //
    $('.film-update-btn').click(function(){
        var film_id = $(this).attr('name');
        var film_name = $(this).parent().parent().children().children('.film-name-inp').val();
        var film_votes = $(this).parent().parent().children().children('.film-votes-inp').val();
        $.ajax({
            type:'post',
            url:'/kino/adminaccount/updateFilm/',
            data:{
                ajax_film_id:film_id,
                ajax_film_name:film_name,
                ajax_film_votes:film_votes
            },
            success:function(result){

            }
        });
    });
    // ....... //

    // voting films //
    $('.vote').click(function(){
        var film_id = $(this).attr('data');
        $.ajax({
            type:'post',
            url:'/kino/home/voting/',
            data:{
                ajax_film_id:film_id
            },
            success:function(result){

            }
        });
    });
    // ....... //
});



