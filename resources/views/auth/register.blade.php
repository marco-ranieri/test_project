<x-layout>
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-12 col-lg-3">

            </div>
            <div class="col-12 col-lg-6 py-5 px-5">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="py-3">
                        <label for="inputUserName" class="form-label">Inserisci il tuo Nome Utente</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="py-3">
                        <label for="inputEmail" class="form-label">Inserisci la tua Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="py-3">
                        <label for="inputPassword" class="form-label">Inserisci la tua Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="py-3">
                        <label for="inputEmail" class="form-label">Inserisci di nuovo la tua Password</label>
                        <input type="password" name="password_confirmation" class="form-control">
                    </div>
                    <div class="py-3">
                        <button type="submit" class="btn btn-lg bg-info">Registrati</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-layout>
