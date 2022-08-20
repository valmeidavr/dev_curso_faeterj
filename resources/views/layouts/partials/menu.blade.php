@section('menu_principal')
    @php
        $activePage = basename($_SERVER['PHP_SELF']) ;
    @endphp
    <li class="<?= ($activePage == 'home') ? 'isActive':''; ?>"><a href="/home">Home</a></li>
    <li class="<?= ($activePage == 'cursos') ? 'isActive':''; ?>"><a href="/cursos">Cursos</a></li>
    <li class="<?= ($activePage == 'contato') ? 'isActive':''; ?>"><a href="/contato">Contato</a></li>
@endsection
