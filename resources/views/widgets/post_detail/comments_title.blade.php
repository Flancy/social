<p class="text-muted"><i class="fa fa-comment" aria-hidden="true"></i>
    <small>
        @if($post->getCommentCount() > 0)
            @if($post->getCommentCount() > 1){{ $post->getCommentCount().' комментариев' }}@else{{ $post->getCommentCount().' комментарий' }}@endif
        @else
            Нет комментариев. Напишите комментарий!
        @endif
    </small>
</p>
<hr>
@if($post->getCommentCount() > 2 && (empty($comment_count) || $comment_count < 3))
    <a class="btn btn-link btn-block btn-xs" href="{{ url('/post/'.$post->id) }}"><i class="fa fa-bars" aria-hidden="true"></i> Показать все комментарии</a>
@endif