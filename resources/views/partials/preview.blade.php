<article class="card card-style2">
    <div class="card-img d-flex justify-content-around">
        <img class="rounded-top img-fluid" src="{{$article->image}}" alt="...">
    </div>
    <div class="card-body">
        <h3 class="h5"><a href="{{$article->full_url}}">{{$article->title}}</a></h3>
        <p class="display-30">{{$article->content_preview}}</p>
    </div>
    <div class="card-footer d-flex justify-content-between icons">
        <div class=""><i class="bi bi-eye">{{$article->views}}</i></div>
        <div class=""><i class="bi bi-heart">{{$article->likes}}</i></div>
    </div>
</article>
