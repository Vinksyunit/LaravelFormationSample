        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$movie['title']}} - {{$movie['year']}}</h4>
                        <h6 class="card-subtitle mb-2 text-muted">
                        @fullname($movie['author'])
                        </h6>
                        
                        @if(isset($withDetail) && $withDetail === true)
                        <p class="card-text">{{$movie['desc']}}</p>
                        @else
                        <a href="{{ route('moviesdetail', ['id' => $movie['id']]) }}" class="card-link">Détails</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
