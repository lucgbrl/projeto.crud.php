<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
    .btn{ border-radius: 100rem; min-width: 20px;}
    .btn.a{ border-radius: 100rem; width: 40px; height: 40px;}
    table{ zoom: 75%;}
    </style>
    <title>Página Inicial</title>
</head>
<body>

        <br><br>
          <div class="container-fluid p-5 mb-3">
            <div class="row">
              <div class="col-md-6">
                  <h2>Catalogação de materiais</h2>
                  
              </div>
            </div>
              </br>
              <div class="row">
                  <table class="table table">
                      <thead>
                          <tr>
                              <th scope="col">Tipo de material</th>
                              <th scope="col">Formato</th>
                              <th scope="col">Título</th>
                              <th scope="col">Descrição</th>
                              <th scope="col">Autor</th>
                              <th scope="col">Titulação</th>
                              <th scope="col">Ano</th>
                              <th scope="col">Páginas</th>
                              <th scope="col">Vídeos</th>
                              <th scope="col">ISBN</th>
                              <th scope="col">Duração</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                          include 'banco.php';
                          $pdo = Banco::conectar();
                          $a = 'SELECT * FROM material';

                          foreach($pdo->query($a) as $row)
                          {
                              echo '<tr>';
                              echo '<th scope="row">'. utf8_encode($row['Tipo_de_Material']) . '</th>';
                              echo '<td>'. utf8_encode($row['Formato']) . '</td>';
                              echo '<td>'. utf8_encode($row['Titulo']) . '</td>';
                              echo '<td>'. utf8_encode($row['Descricao_Referencias']) . '</td>';
                              echo '<td>'. utf8_encode($row['Autor']) . '</td>';
                              echo '<td>'. utf8_encode($row['Titulacao']) . '</td>';
                              echo '<td>'. utf8_encode($row['Ano']) . '</td>';
                              //echo '<td>'. utf8_encode($row['Mes']) . '</td>';
                              //echo '<td>'. utf8_encode($row['Dia']) . '</td>';
                              echo '<td>'. utf8_encode($row['Num_Paginas_duracao']) . '</td>';
                              echo '<td>'. utf8_encode($row['Qt_Videos']) . '</td>';
                              echo '<td>'. utf8_encode($row['ISBN']) . '</td>';
                              echo '<td>'. utf8_encode($row['Disponivel']) . '</td>';

                              /*
                              echo '<td width=250>';
                              echo '<a class="btn btn-primary a" href="read.php?id='.$row['id'].'"><i class = "fa fa-info"></i></a>';
                              echo ' ';
                              echo '<a class="btn btn-warning a" href="update.php?id='.$row['id'].'"><i class = "fa fa-edit"></i></a>';
                              echo ' ';
                              echo '<a class="btn btn-danger a" href="delete.php?id='.$row['id'].'"><i class = "fa fa-trash"></i></a>';
                              echo '</td>';
                              echo '</tr>';
                              */
                          }
                          Banco::desconectar();
                          ?>
                      </tbody>
                  </table>
                  <p>
                      <a href="create.php" class="btn btn-success"><i class  ="fa fa-plus-circle"></i> Adicionar nova entrada</a>
                  </p>
              </div>
          </div>

        <!-- -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
