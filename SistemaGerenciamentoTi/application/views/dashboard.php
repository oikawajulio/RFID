



<!-- Biblioteca jQuery -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
 <link rel="stylesheet" href="assets/css/dashboardStyle.css" />  
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

  <h3 class="page-header">PAINEL DE CONTROLE</h3>

  <div class="container">
  

   <div class="row" >
                    
                <section>    
                <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="<?=base_url();?>usuario">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-user-o fa-2x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                 Usuários 
                                </div>
                                <div class="circle-tile-number text-faded">
                                 <i class="fa fa-sliders" aria-hidden="true"></i>

                                    <span id="sparklineA"></span>
                                </div>
                                <a href="<?=base_url();?>usuario" class="circle-tile-footer">Ver Usuários <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="<?=base_url();?>produtos">
                                <div class="circle-tile-heading green">
                                    <i class="fa fa-shopping-basket fa-2x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content green">
                                <div class="circle-tile-description text-faded">
                                   Produtos 
                                </div>
                                <div class="circle-tile-number text-faded">
                                   <i class="fa fa-sliders" aria-hidden="true"></i>

                                </div>
                                <a href="<?=base_url();?>produtos" class="circle-tile-footer">Ver Produtos <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="<?=base_url();?>equipamento">
                                <div class="circle-tile-heading orange">
                                    <i class="fa fa-desktop fa-2x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content orange">
                                <div class="circle-tile-description text-faded">
                                   Equipamentos 
                                </div>
                                <div class="circle-tile-number text-faded">
                                 <i class="fa fa-sliders" aria-hidden="true"></i>

                                </div>
                                <a href="<?=base_url();?>equipamento" class="circle-tile-footer">Ver Equipamentos <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="<?=base_url();?>manutencao">
                                <div class="circle-tile-heading blue">
                                    <i class="fa fa-wrench fa-2x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content blue">
                                <div class="circle-tile-description text-faded">
                                   Manutenções 
                                </div>
                                <div class="circle-tile-number text-faded">
                                 <i class="fa fa-sliders" aria-hidden="true"></i>

                                    <span id="sparklineB"></span>
                                </div>
                                <a href="<?=base_url();?>manutencao" class="circle-tile-footer">Ver Manutenções <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                
                   <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="<?=base_url();?>calendar">
                                <div class="circle-tile-heading red">
                                   <i class="fa fa-calendar fa-2x" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content red">
                                <div class="circle-tile-description text-faded">
                                   Agendamentos
                                </div>
                                <div class="circle-tile-number text-faded">
                                 <i class="fa fa-sliders" aria-hidden="true"></i>

                                    <span id="sparklineC"></span>
                                </div>
                               <a href="<?=base_url();?>calendar" class="circle-tile-footer">Ver agendamentos<i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                       <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="<?=base_url();?>relatorio">
                                <div class="circle-tile-heading purple">
                                   <i class="fa fa-print fa-2x"></i>  
                                </div>
                            </a>
                            <div class="circle-tile-content purple">
                                <div class="circle-tile-description text-faded">
                                 Relatórios
                                </div>
                                <div class="circle-tile-number text-faded">
                                 <i class="fa fa-sliders" aria-hidden="true"></i>

                                    <span id="sparklineD"></span>
                                </div>
                                <a href="<?=base_url();?>relatorio" class="circle-tile-footer">Ver Manutenções <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                
                
                 
                     
   
   </div><!-- container-1 END-->
						
		</section>
		
	</div>


<hr>


 <div class="col-sm-12">

    <div class="grafics">
         <h4>Estatísticas do Sistema</h4>
          <hr>
       
   <div class="row">
              <div class="col-xs-6"><div id="piechart_3d" style="width: 600px; height: 500px;"></div></div>
              <div class="col-xs-6">
   <div id="columnchart_values" style="width: 600px; height: 200px;"></div></div>
</div>
    </div>
      </div>
      
       
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Toner',     11],
          ['Teclado',      2],
          ['Mouse',  2],
          ['Mouse Pad', 2],
          ['Memória RAM',    7]
        ]);

        var options = {
          title: 'Gráficos de Quantidade de Produtos',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

    
             
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Servidor", 8.94, "#008B8B"],
        ["Impressora", 12.49, "#00BFFF"],
        ["Notebook", 19.30, "#FFFF00"],
        ["Computador", 21.45, "color:#FF0000"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Gráficos de Quantidade Manutenções",
        width: 400,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

   
 
</div>
            
             
          

 
