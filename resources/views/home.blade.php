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
                @include('announcements._announcement')
            @endforeach
        </div>
        <div class="row mb-5 pb-5"></div>
    </div>

</x-layout>
