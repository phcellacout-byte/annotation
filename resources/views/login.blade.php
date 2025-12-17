@extends('layouts.app')

@section('content')
<section class="form_pg">
  <div class="form_left">
    <h1 class="title">Fazer login!</h1>
    <p class="subtitle">Acesse nossa plataforma para gerenciar a sua rotina semanal.</p>
  </div>

  <div class="form_right">
    <form method="POST" action="{{ route('auth') }}">
      @csrf

      <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required />
      <input type="password" name="password" placeholder="Senha" required />

      <span><a href="{{ route('forgot-password') }}">Esqueceu sua senha?</a></span>

      {{-- IMPORTANTE: submit, sem linkto --}}
      <x-button class="btn_fullwidth" type="submit">Logar
        <x-entypo-login />
      </x-button>
    </form>
  </div>
</section>
@endsection

