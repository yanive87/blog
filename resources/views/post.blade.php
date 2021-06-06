
<x-layout>
<h1>
    {{ $post->title  }}
    <p>By <a href=#>{{ $post->author->name }}</a>  on <a href="/categories/{{ $post->category->slug}}">{{ $post->category->name }}</a></p>
</h1>
<div>
    {!! $post->body  !!}

</div>

<a href="/">Go Back!</a>


</x-layout>
