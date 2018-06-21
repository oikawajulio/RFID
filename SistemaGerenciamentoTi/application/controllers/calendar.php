<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller
{

     public function __construct() {
        Parent::__construct();
        $this->load->model("calendar_model");
    }
  public function verificar_sessao(){
          if($this->session->userdata('logado')==false){
                redirect('dashboard/login');
          }
  }
     public function index()
     {     
           $this->load->view("calendar/calendario_agendamento");
            $this->load->view("includes/html_header");
            $this->load->view("includes/menu");
         
       
     }
      public function get_events()
 {
     // Our Start and End Dates
     $start = $this->input->get("start");
     $end = $this->input->get("end");

     $startdt = new DateTime('now'); // setup a local datetime
     $startdt->setTimestamp($start); // Set the date based on timestamp
     $start_format = $startdt->format('Y-m-d ');

     $enddt = new DateTime('now'); // setup a local datetime
     $enddt->setTimestamp($end); // Set the date based on timestamp
     $end_format = $enddt->format('Y-m-d');

     $events = $this->calendar_model->get_events($start_format, $end_format);

     $data_events = array();

     foreach($events->result() as $r) {

         $data_events[] = array(
             "idAgendar" => $r->idAgendar,
             "title" => $r->title,
             "description" => $r->description,
             "end" => $r->end,
             "start" => $r->start
         );
     }

     echo json_encode(array("events" => $data_events));
     exit();
 }
   public function add_event() 
{
    
    $name = $this->input->post("name", TRUE);
    $desc = $this->input->post("description", TRUE);
    $start_date = $this->input->post("start_date", TRUE);
    $end_date = $this->input->post("end_date", TRUE);

$this->calendar_model->add_event(array(
       "title" => $name,
       "description" => $desc,
       "start" => $start_date,
       "end" => $end_date
       )
    );

    redirect(site_url("calendar"));
}
public function edit_event()
     {
          $eventid = intval($this->input->post("eventid"));
          $event = $this->calendar_model->get_event($eventid);
          if($event->num_rows() == 0) {
               echo"Invalid Event";
               exit();
          }

          $event->row();

          /* Our calendar data */
          $name = $this->common->nohtml($this->input->post("name"));
          $desc = $this->common->nohtml($this->input->post("description"));
          $start_date = $this->common->nohtml($this->input->post("start_date"));
          $end_date = $this->common->nohtml($this->input->post("end_date"));
          $delete = intval($this->input->post("delete"));

          if(!$delete) {

               if(!empty($start_date)) {
                    $sd = DateTime::createFromFormat("Y/m/d", $start_date);
                 
               } else {
                    $start_date = date("Y-m-d");
                    
               }

               if(!empty($end_date)) {
                    $ed = DateTime::createFromFormat("Y/m/d", $end_date);
                 
                   
               } else {
                    $end_date = date("Y-m-d");
                  
               }

               $this->calendar_model->update_event($eventid, array(
                    "title" => $name,
                    "description" => $desc,
                    "start" => $start_date,
                    "end" => $end_date,
                    )
               );

          } else {
               $this->calendar_model->delete_event($eventid);
          }

          redirect(site_url("calendar"));
     }
     	
}

?>