<td>

    <a href="{{route('articles.edit' , ['lang' => app()->getLocale(), 'article' => $article->id])}}"
       class="text-success mr-2">
        <i data-feather='edit'></i>{{trans('dashboard.main.edit')}}
    </a>

    <a href="#" onclick="deleteArticle('{{$article->id}}')" class="text-danger mr-2 ">
        <i data-feather='trash-2'></i>{{trans('dashboard.main.delete')}}
    </a>

</td>
