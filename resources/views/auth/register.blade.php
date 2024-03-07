@extends("auth.main")

@section("content")

<main class="form-signin w-100 m-auto">
        <form id="loginRegister" action="{{ route('register') }}">
        @csrf
            <h1 class="h3 mb-3 fw-normal">Crie sua conta</h1>
            <div class="form-floating">
                <input type="text" class="form-control" name="name" placeholder="Digite seu nome" required>
                <label for="floatingInput">Nome</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" name="email" placeholder="Digite seu email" required>
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" placeholder="Digite sua senha" required>
                <label for="floatingPassword">Senha</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Repita a senha digitada" required>
                <label for="floatingPassword">Repita a senha</label>
            </div>

            <div class="text-start text-danger my-3" id="messageError"></div>
            <button class="btn btn-primary w-100 py-2" type="submit">Registrar</button>
            <div class="text-center my-3">
                Já tem uma conta? <a href="{{ url('/login') }}">Entrar</a>
            </div>

        </form>
    </main>

@endsection