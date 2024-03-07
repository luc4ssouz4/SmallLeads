@extends("auth.main")

@section("content")

<main class="form-signin w-100 m-auto">
        <form id="loginForm" action="{{ route('login') }}">
        @csrf
            <h1 class="h3 mb-3 fw-normal">Acesse sua conta</h1>
          
            <div class="form-floating">
                <input type="email" name="email" class="form-control" placeholder="Digite seu email" required >
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" placeholder="Digite sua senha" required>
                <label for="floatingPassword">Senha</label>
            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input" name="remember" type="checkbox" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Lembrar de mim
                </label>
            </div>

            <div class="text-start text-danger" id="messageError"></div>
            <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>
            <div class="text-center my-3">
                Não tem uma conta? <a href="{{ url('/register') }}">Registre-se</a>
            </div>

        </form>
    </main>

@endsection