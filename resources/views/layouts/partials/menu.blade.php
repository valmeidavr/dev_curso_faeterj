@section('menu_principal')
    @php
        $activePage = basename($_SERVER['PHP_SELF']) ;
    @endphp
    <li class="<?= ($activePage == 'quemsomos') ? 'isActive':''; ?>"><a href="/">Quem Somos</a></li>
    <li class="<?= ($activePage == 'cursos') ? 'isActive':''; ?>"><a href="/">Cursos</a></li>
    <li class="<?= ($activePage == 'faleconosco') ? 'isActive':''; ?>"><a href="/">Fale Conosco</a></li>
@endsection
