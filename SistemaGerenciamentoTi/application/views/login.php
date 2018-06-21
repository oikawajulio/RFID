

<body class="container-login">
 
 <div class="container-fluid">

  <form class="form-signin" method="post" action="<?= base_url()?>dashboard/logar" >
      <div class="row">
         <div class="well center-block">
            <div class="well-header">
               <center><img src="<?= base_url()?>assets/img/logoMarca2.png"></center>
              <hr>
            </div>
        <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                           <div class="input-group">
                              <div class="input-group-addon">
                               <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                              </div>
                           <input type="text" placeholder="Email" id="email" name="email" class="form-control">
                            <div class="input-group-btn">
                            </div>
                        </div>
                     </div>
                  </div>
                  </div>
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                           <div class="input-group">
                              <div class="input-group-addon">
                                 <span class="glyphicon glyphicon-lock"></span>
                              </div>
                              <input type="password" id="senha" class="form-control" placeholder="Senha" name="senha">
                             
                           </div>
                        </div>
                     </div>
                  </div>
                 
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                           <input type="checkbox" name="check" checked> Lembrar-me
                        </div>

                       
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                           <button type="submit" class="btn btn-lg btn1 btn-block">Entrar</button>
                        </div>
                         
                  </div>
               </div>
             
               <div>
            </div>
         </div>
      </div>
     </div>
   </div>
   </form>
