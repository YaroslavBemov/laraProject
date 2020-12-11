<h1>Страница для вывода нескольких новостей</h1>

@foreach($data as $news)
    <h2>{{ $news['title'] }}</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem deserunt distinctio dolorem ea enim harum illum
        inventore ipsam, molestiae molestias nihil ratione recusandae saepe sed, temporibus ut, veniam voluptates
        voluptatum!
    </p>
@endforeach
