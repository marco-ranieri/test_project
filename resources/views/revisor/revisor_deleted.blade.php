<x-layout>

    @if(count($announcements) > 0)
        <div class="container h-100">
            <div class="row py-5">
                <div class="col-12 py-5 text-center">

                    <h1>Cestino/eliminati revisore {{Auth::user()->name}}</h1>
                </div>
            </div>

            <div class="row justify-content-center mb-5 pb-5">
                @foreach ($announcements as $announcement)
                <div class="col-12 col-md-8 py-3">
                    <div class="card">
                        <div class="card-header"> {{$announcement->title}}</div>
                        <div class="card-footer d-flex justify-content-between">
                            <i>Category: {{$announcement->category->name}}</i>
                            <i>Annuncio creato il {{$announcement->created_at->format('d/m/Y')}}</i>
                            <i>ID annuncio: {{$announcement->id}}</i>
                            <i>Inserito da: {{$announcement->user->name}}</i>
                        </div>
                    </div>
                    <form action="{{route('revisor.power.restore', $announcement->id)}}" method="POST">
                        @csrf
                        <button type="submit">Rimettilo nel cestino</button>
                    </form>

                </div>
                @endforeach
            </div>

            <div class="row justify-content-center my-5 py-5">
                <div class="col-12 col-md-6">
                    {{$announcements->links()}}
                </div>
            </div>
            <div class="row mb-5 pb-5"></div>
        </div>
    @else
        <div class="container h-100">
            <div class="row py-5">
                <div class="col-12 py-5 text-center">

                    <h1>Ciao, {{Auth::user()->name}}. Non ci sono annunci cancellati </h1>
                </div>
            </div>
        </div>
    @endif

</x-layout>
