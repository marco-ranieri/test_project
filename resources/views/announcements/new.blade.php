<x-layout>
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1>Inserisci un nuovo annuncio</h1>
            </div>
            @if ($errors->any())
                <div class="row justify-content-center py-5">
                    <div class="col-md-auto alert alert-warning">
                            @foreach ($errors->all() as $error)
                            <li class="nav-item"><i class="fas fa-exclamation-triangle"></i> {{$error}}</li>
                            @endforeach
                    </div>
                </div>
            @endif
            <div class="col-12 col-lg-3">

            </div>

            <div class="col-12 col-lg-6 py-5 px-5">
                <form method="POST" action="{{route('announcement.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="py-3">
                        <label class="form-label">Inserisci un titolo per il tuo annuncio</label>
                        <input type="text" name="title" class="form-control" value="{{old('title')}}">
                    </div>
                    <div class="py-3">
                        <label class="form-label">Inserisci il testo dell'annuncio</label>
                        <textarea type="text" name="body" class="form-control"></textarea>
                    </div>
                    <div class="py-3">
                        <label class="form-label">Inserisci il prezzo</label>
                        <input type="text" name="price" class="form-control" value="{{old('price')}}">
                    </div>
                    <div class="py-3">
                        <button type="submit" class="btn btn-lg bg-info">Salva annuncio</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-layout>
