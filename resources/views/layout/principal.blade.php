<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $('.table').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese.json"
            }
          });
      });
    </script>
    <title>Agendamento</title>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/">Agendamento</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pacientes <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/pacientes">Listagem</a></li>
            <li><a href="/pacientes/novo">Novo</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Médicos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/medicos">Listagem</a></li>
            <li><a href="/medicos/novo">Novo</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Agendamentos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/agendamentos">Listagem</a></li>
            <li><a href="/agendamentos/novo">Novo</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuários <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/usuarios">Listagem</a></li>
            <li><a href="/usuarios/novo">Novo</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

@yield('conteudo')

</body>
</html>