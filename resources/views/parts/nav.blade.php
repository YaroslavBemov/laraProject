<div class="container">
    <ul class="nav nav-pills nav-fill mt-3">

        @php
            $url = route('news::all');
            $active = isset($id) ? '' : 'active';
        @endphp

        <li class="nav-item">
            <a class="nav-link {{ $active }}" aria-current="page" href="{{ $url }}">All categories</a>
        </li>

        @foreach($category as $key)

            @php
                $url = route('news::byCategory', ['categoryId' => $key->id]);
                $active = isset($id) && $id == $key->id ? 'active' : '';
            @endphp

            <li class="nav-item">
                <a class="nav-link {{ $active }}" aria-current="page" href="{{ $url }}">{{ $key->title }}</a>
            </li>

        @endforeach

    </ul>
</div>
