<x-layout>

    <div class="container h-100">
        <div class="row py-5">
            <div class="col-12 py-5 text-center">

                <h1>Contattaci via mail. Ti risponderemo al più presto</h1>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <form method="POST" action="{{route('revisor.submit')}}">
                    @csrf
                    <div class="mt-5">
                        <h3>Ciao {{Auth::user()->name}}</h3>
                    </div>
                    <div class="mb-5">
                        <h5 class="mb-5">Controlla che i tuoi dati siano corretti</h5>
                        <p>La tua Email: <span><h4>{{Auth::user()->email}}</h4></span></p>
                    </div>
                    <div class="my-5">
                        <h5>Scrivici la tua richiesta</h5>
                        <textarea id="" cols="60" rows="10" style="max-width:100%;" placeholder="Scrivi qui la tua richiesta" name="message"></textarea>
                      </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-lg presto-btn rounded-pill">Invia</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>

</x-layout>
