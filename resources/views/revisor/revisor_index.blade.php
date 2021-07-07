<x-layout>

    <div class="container h-100">
        <div class="row py-5">
            <div class="col-12 py-5 text-center">

                <h1>Pannello revisore {{Auth::user()->name}}</h1>
            </div>
        </div>

        <div class="row justify-content-center mb-5 pb-5">
            @foreach ($announcements as $announcement)
                @include('announcements._announcement')
                <form action="{{route('revisor.accept', $announcement->id)}}" method="POST">
                    @csrf
                    <button type="submit">Accetta</button>
                </form>
                <form action="{{route('revisor.reject', $announcement->id)}}" method="POST">
                    @csrf
                    <button type="submit">Rifiuta</button>
                </form>
            @endforeach
        </div>

        <div class="row justify-content-center my-5 py-5">
            <div class="col-12 col-md-6">
                {{$announcements->links()}}
            </div>
        </div>
        <div class="row mb-5 pb-5"></div>
    </div>
</x-layout>
