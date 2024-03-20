<div class="news-container">
    @foreach($newsList as $news)
        <div class="news-card">
        <img src="{{ $news->image }}" alt="Image de la news">
            <div class="news-content">
                <h3>{{ $news->title }}</h3>
                <p>{{ $news->summary }}</p>
                <a href="{{ route('news.show', $news->id) }}" class="btn btn-primary">Lire plus</a>
            </div>
        </div>
    @endforeach
</div>

{{ $newsList->links() }}
