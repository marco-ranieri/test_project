<div class="col-12 col-md-8 py-3">
    <div class="card">
        <div class="card-header"> {{$announcement->title}}</div>

        <div class="card-body">
            <p>
                <img src="https://via.placeholder.com/300x150.png" class="rounded float-right"alt="">
                {{$announcement->body}}
            </p>
        </div>
        <div class="card-footer d-flex justify-content-between">
            Category: <a href="{{ route( 'announcements.by.category', [$announcement->category->name, $announcement->category->id]) }}">{{$announcement->category->name}}</a>
            <i>Annuncio creato il {{$announcement->created_at->format('d/m/Y')}}</i>
            <i>ID annuncio: {{$announcement->id}}</i>
            <i>Inserito da: {{$announcement->user->name}}</i>
        </div>
    </div>
</div>
