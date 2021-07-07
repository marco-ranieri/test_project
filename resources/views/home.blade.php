<x-layout>

    @if (session('revisor.request.message'))
        <div class="row justify-content-center py-5">
            <div class="col-md-auto text-center">
                {{session('revisor.request.message')}} <i class="fas fa-check-circle"></i>
            </div>
        </div>
    @endif
    @if (session('access.denied.revisor.only'))
    <div class="row justify-content-center py-5">
        <div class="col-md-auto text-center">
            {{session('access.denied.revisor.only')}} <i class="fas fa-exclamation-triangle"></i>
        </div>
    </div>
    @endif
    @if (session('announcement.created.success'))
        <div class="row justify-content-center py-5">
            <div class="col-md-auto alert alert-success text-center">
                Annuncio creato correttamente! <i class="fas fa-check-circle"></i>
            </div>
        </div>
    @endif

    <div class="container h-100">
        <div class="row py-5">
            <div class="col-12 py-5 text-center">

                <h1>Welcome</h1>
            </div>
        </div>

        <div class="row justify-content-center mb-5 pb-5">
            @foreach ($announcements as $announcement)
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
                            Category: <a href="{{ route( 'announcements.by.category', [$announcement->category->name, $announcement->category->id] ) }}">{{$announcement->category->name}}</a>
                            <i>Annuncio creato il {{$announcement->created_at->format('d/m/Y')}}</i>
                            <i>ID annuncio: {{$announcement->id}}</i>
                            <i>Inserito da: {{$announcement->user->name}}</i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mb-5 pb-5"></div>
    </div>

</x-layout>
