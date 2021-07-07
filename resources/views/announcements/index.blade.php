<x-layout>

    <div class="container h-100">
        <div class="row py-5">
            <div class="col-12 py-5 text-center">

                <h1>Annunci per la categoria {{$category->name}}</h1>
            </div>
        </div>

        @foreach ($announcements as $announcement)
            <div class="row justify-content-center">
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
                            Category: <a href="">{{$announcement->category->name}}</a>
                            <i>Annuncio creato il {{$announcement->created_at->format('d/m/Y')}}</i>
                            <i>ID annuncio: {{$announcement->id}}</i>
                            <i>Inserito da: {{$announcement->user->name}}</i>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            {{$announcements->links()}}
        </div>
    </div>

</x-layout>
