function registerView() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let data = {"id": articleId};
    $.post( "/api/view", data, function (response) {
        $('.views .count').html(response.views);
    });
}

function registerLike() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let data = {"id": articleId};
    $.post( "/api/like", data, function (response) {
        $('.like .count').html(response.likes);
    });
}

setTimeout(registerView, 1000);

$(function () {
    $('.like').on('click', function () {
        registerLike();
    })
})
