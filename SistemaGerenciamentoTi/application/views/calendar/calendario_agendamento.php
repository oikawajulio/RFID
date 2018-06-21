
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 <link rel="stylesheet" href="<?php echo base_url()?>scripts/fullcalendar/fullcalendar.min.css" />
  <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
               <script src="<?php echo base_url() ?>scripts/fullcalendar/lib/moment.min.js"></script>
               <script src="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.js"></script>
               <script src="<?php echo base_url() ?>scripts/fullcalendar/gcal.js"></script>
              <script src='<?php echo base_url()?>scripts/fullcalendar/locale/pt-br.js'></script>
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h2 class="page-header">
            <i class="fa fa-calendar fa-2x" aria-hidden="true"></i> Agenda de Manutenções
        </h2>
    </div> 
<div class="form-group row">
   <div class="col-md-10">
     <div id="calendar">
     </div>
        </div>
    </div>
    
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Adicionar Manutenção</h4>
      </div>
      <div class="modal-body">
         <form action="<?= base_url()?>calendar/add_event" method="post">
     <div class="col-md-12" form-group>
		   <label for="">Descrição do Agendamento:</label>
		   <input type="text" class="form-control" name="name" value="">
	</div>
  <div class="col-md-12" form-group>
		    <label for="equipamento">Nome do Equipamento:</label>
		    <input type="text" class="form-control" name="description">
  </div>
		<div class="col-md-12" form-group>
		        <label for="data_inicio">Data Início:</label>
		        <input type="date" class="form-control" name="start_date">
		</div>
		<div class="col-md-12" form-group>
		        <label for="data_final">Data Final:</label>
		         <input type="date" class="form-control" name="end_date">
		   </div>
	    </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        <input type="submit" class="btn btn-success" value="Enviar">
        </form>
      </div>
    </div>
  </div>
 </div>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Atualizar Agendamento</h4>
      </div>
      <div class="modal-body">
  <form action="<?= base_url()?>calendar/edit_event" method="post">
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Descrição do Agendamento</label>
                <div class="col-md-12" form-group>
                    <input type="text" class="form-control" name="name" value="" id="name">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Nome do Equipamento</label>
                <div class="col-md-12" form-group>
                    <input type="text" class="form-control" name="description" id="description">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Data Inicial</label>
                <div class="col-md-12" form-group>
                    <input type="text" class="form-control" name="start_date" id="start_date">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Data Final</label>
                <div class="col-md-12" form-group>
                    <input type="text" class="form-control" name="end_date" id="end_date">
                </div>
        </div>
        <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Excluir Agendamento</label>
                    <div class="col-md-12" form-group>
                        <input type="checkbox" name="delete" value="1">
                    </div>
            </div>
            <input type="hidden" name="eventid" id="event_id" value="0"/>
            </div>
         <div class="modal-footer">
         <input type="submit" class="btn btn-info" value="Atualizar">
         <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
      </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
var date_last_clicked = null;

$('#calendar').fullCalendar({
    eventSources: [
    {    
      events: function(start, end, timezone, callback) {
            $.ajax({
                url: '<?php echo base_url()?>calendar/get_events',
                dataType: 'json',
                data: {                
                    start: start.unix(),
                    end: end.unix()
                },
                success: function(msg) {
                    var events = msg.events;
                    callback(events);
                }
            });
       }
    },
    ],
    dayClick: function(date, jsEvent, view) {
        date_last_clicked = $(this);
        $(this).css('background-color', '#87CEEB');
        $('#addModal').modal();
      },
      eventClick: function(event, jsEvent, view) {
  
          $('#name').val(event.title);
          $('#description').val(event.description);
          $('#start_date').val(moment(event.start).format('DD/MM/YYYY'));
          if(event.end) {
            $('#end_date').val(moment(event.end).format('DD/MM/YYYY'));
          } else {
            $('#end_date').val(moment(event.start).format('DD/MM/YYYY'));
          }
          $('#event_id').val(event.id);
          $('#editModal').modal();
          
          },
      
});
</script>






 

       