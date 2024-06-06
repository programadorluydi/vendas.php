<!-- grafico.php
Ver em: https://developers.google.com/chart?hl=pt-br
-->
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            <?php
    		 include 'conexao.php';
    		 $sql = "select c.desc_categoria as categoria,sum(qtde_estoque*preco) as total from produtos p INNER JOIN categorias c on p.id_categoria=c.id_categoria group by c.desc_categoria";
         $busca = mysqli_query($conexao,$sql);
         ?>
         ['Categoria', 'Valor'],
         <?php
         while ($array = mysqli_fetch_array($busca)) {
            ?>   
         ['<?php echo($array['categoria'])?>', <?php echo($array['total'])?>],
         <?php
         }
         ?>

        ]);

        var options = {
          title: 'Dashboard - Estoque',
          is3D: true,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>