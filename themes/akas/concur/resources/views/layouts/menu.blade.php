<nav class="nav-menu d-none d-lg-block">
    <ul>
        @foreach($navigations as $value)
        <li {{ $value->childrens->count() > 0 ? 'class=drop-down' : '' }}>
            <a data-toggle="drop-down" class="drop-down" href="{{ url($value->url) }}">
                {{ $value->name }} </a>
            <ul>
                @foreach($value->childrens as $sub)
                <li><a href="{{ url($sub->url) }}">{{ $sub->name }}</a></li>
                @endforeach
            </ul>
        </li>
        @endforeach
    </ul>
</nav>