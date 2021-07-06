<x-layout>
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-12 col-lg-3">

            </div>
            <div class="col-12 col-lg-6 py-5 px-5">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="py-3">
                        <label for="inputEmail" class="form-label">Inserisci la tua email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="py-3">
                        <label for="inputPassword" class="form-label">Inserisci la tua Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="py-3">
                        <button type="submit" class="btn btn-lg bg-info">Effettua il Login</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-layout>
