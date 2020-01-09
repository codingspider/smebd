@if ((count($category->children) > 0) AND ($category->parent_id > 0))

    <!-- <li><a href="/catagory/{{ $category->id }}">{{ $category->title }} pp<i class="fa fa-chevron-right"></i></a> -->
    <li style=" display: block;padding: 1em;text-decoration: none;white-space: nowrap;color: #fff;" >{{ $category->title }}<i class="fa fa-chevron-right"></i>
@else
    

    
    <li><a href="/catagory/{{ $category->id }}">{{ $category->title }}</a>

@endif

    @if (count($category->children) > 0)

        <ul>

        @foreach($category->children as $category)
            @include('partials.index', $category)

        @endforeach

        </ul>

    @endif

    </li>
    
   