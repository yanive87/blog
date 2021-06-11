<div  x-data="{ show: false}" @click.away="show=false">
    <botton @click="show = !show">
        {{isset($currentCategory)? ucwords($currentCategory->name) : 'Categories' }}
    </botton>
    <div x-show="show" class="py-2 absolute" style="display: none">
        <a href="/" class="block">
            all </a>
        @foreach($categories as $category)
            <a href="/categories/{{$category->slug}}" class="block
                    {{isset($currentCategory)&& $currentCategory->is($category)?'bg-blue-500 text-white':''}}
                ">
                {{$category->name}} </a>
        @endforeach

    </div>
</div>
