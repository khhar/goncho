
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
                if(result == 'error') {
                    $('.error-or-success').css('display', 'block');
                    $('.error-or-success').addClass('panel-danger');
                    $('.error-or-success').text('error');
                }
                else {
                    $('.error-or-success').css('display', 'block');
                    $('.error-or-success').addClass('panel-success');
                    $('.error-or-success').text('success');
                }
            }
        });
    });
    // ....... //

    // delete films //
    $('.del-film').click(function(){
        window.film_id = $(this).attr('data');
        window.this_tr = $(this).parent().parent();
    });
    $('.yes').click(function(){
        $.ajax({
            type:'post',
            url:'/kino/adminaccount/deleteFilm/',
            data:{
                ajax_film_id:film_id
            },
            success:function(result){
                this_tr.remove();
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
            dataType: 'json',
            data:{
                ajax_film_id:film_id
            },
            success:function(result){
                if(result == 'error') {
                    return false;
                }
                else {
                    $('.progress-bar').each(function(index){
                        $(this).css('width',result[index]);
                        $(this).parent().parent().children('.progress').children('.progress-completed').text(result[index]);
                    })
                }
            }
        });
    });
    // ....... //
});



