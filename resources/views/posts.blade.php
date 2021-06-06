
<x-layout>
@foreach ($posts as $post)

    <article class="{{$loop->even ? 'mb-6': ''}}">
       <h1>
           <a href="/posts/{{ $post->slug }}">
               {{ $post->title  }}
           </a>
           <p>By <a href="/authors/{{ $post->author->id}}">{{ $post->author->name }}</a>  on <a href="/categories/{{ $post->category->slug}}">{{ $post->category->name }}</a></p>

       </h1>
        <div>
            {{ $post->excerpt  }}

        </div>
    </article>
@endforeach

</x-layout>

