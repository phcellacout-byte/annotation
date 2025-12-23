<header>
    <div class="head_left">
      <a href="{{ 'home' }}">
        <img src="{{ asset('imgs/logo.png') }}" alt="Alesolucoes" title="Alesolucoes">
      </a>
    </div>

    <div class="head_right">
        @auth
           <div class="menu_profile">
             <div class='user_picture'>{{ mb_strtoupper(mb_substr(auth()->user()->name, 0, 1, 'UTF-8'), 'UTF-8') }}</div>
               <nav>
            <div class="user_infos">
             <span>{{auth()->user()->name}}</span>
            </div>
            <ul>
                <li>
                     <a href="#">Minhas Anotações</a>
                <li>
                <li>
                     <a href="/sair">Sair</a>
                <li>
            </ul>
           </nav>
        </div>



        @endauth
    @guest
        <x-button  class='' to='create-account'>Criar conta</x-button>
      <x-button  class='btn_login' to='login' >Login</x-button>
    </div>
    @endguest

  </header>
