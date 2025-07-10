@if ($mensagem = Session::get('erro'))
    {{ $mensagem }}
@endif

@if($errors->any())
	@foreach($errors->all() as $error)
        {{ $error }} <br>
    @endforeach
@endif

<form action="{{ route('login.auth') }}" method="POST">
    @csrf
    @method('POST')

    Email: <br> <input type="email" name="email"> <br>
    Password: <br> <input type="password" name="password"> <br>
    <input type="checkbox" name="remember"> Lembrar-me <br>
    <button type="submit"> Entrar </button>
</form>