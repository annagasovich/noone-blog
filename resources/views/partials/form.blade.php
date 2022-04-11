<div class="container commentary-form row">
    <h2>Оставить комментарий</h2>
    <form action="/api/comment" method="post" class="form-signin col-md-4" id="comment-form">
        @csrf
        <input  name="article_id" type="hidden" value="{{$article->id}}">
        <input  name="subject" type="text" placeholder="Тема сообщения" class="form-control">
        <textarea name="body" id="" cols="30" rows="10" placeholder="Сообщение" class="form-control"></textarea>
        <button class="btn btn-lg btn-primary btn-block">Отправить</button>
    </form>
</div>
