<x-layout>

    <div class="container h-100">
        <div class="row py-5">
            <div class="col-12 py-5 text-center">

                <h1>Annunci per la categoria {{$category->name}}</h1>
            </div>
        </div>

        <div class="row justify-content-center mb-5 pb-5">
            @foreach ($announcements as $announcement)
                @include('announcements._announcement')
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
