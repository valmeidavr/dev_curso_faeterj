@section('menu_principal')
    @php
        $activePage = basename($_SERVER['PHP_SELF']) ;
    @endphp
    <li class="<?= ($activePage == 'cursos') ? 'isActive':''; ?>"><a href="/">Cursos</a></li>
    <li class="<?= ($activePage == 'contato') ? 'isActive':''; ?>"><a href="/contato">Contato</a></li>
@endsection
