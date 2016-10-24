<!DOCTYPE html>
<html ng-app="login">

<head>

  <?php require 'header.php'; ?>
    <script type="text/javascript" language="javascript" src="../backend/js/cadastroUsuario.js"></script>

    <!-- Custom Theme CSS -->
    <link href="../static/css/index-logado.css" rel="stylesheet">

    <script type="text/javascript">
      function Nova() {
        location.href = "index.php"
      }
    </script>

</head>

<body ng-controller="CadastroController">



  <?php require 'top-menu-logado.php'; ?>

    <div class="wrapper">


    </div>
    <!-- Wrapper -->


    <div class="container-fluid">
      <div class="section text-center section-landing">
        <div class="row">

          <form class="form">

            <div class="col-md-8 col-md-offset-2">
              <div class="input-group">
                <!-- <span class="input-group-addon">
            			<i class="material-icons">search</i>
            		</span> -->
                <input type="text" class="form-control" placeholder="Pesquise Itens. Ex: Casaco">

                <span class="input-group-btn">
                        <button class="btn btn-round btn-default  btn-sm btn-cor-estilo-escuro" type="button">
                            <i class="material-icons">search</i>Buscar
                        </button>
                    </span>
                    


              </div>

            </div>
          </form>

          <div class="col-md-4 col-md-offset-8">

            <a class="link-busca-avancada" href="#">Busca Avançada</a>

          </div>


          <div class="col-md-8 col-md-offset-2">
            <h2 class="title">Lost & Found</h2>
            <h5 class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor.
                 </div>
             </div>

             <div class="modal fade" id="resultados" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                   </div>
                   <div class="modal-body">
                     Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-info btn-simple">Save</button>
                   </div>
                 </div>
               </div>
             </div>



     <div class="features">
       <div class="row">
                   <div class="col-md-4">

           <div class="info">
             <div class="icon icon-primary">
               <i class="material-icons usuario-icon">person</i>
             </div>
             <h4 class="info-title">Usuários</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosq.</p>
           </div>
                   </div>
                   <div class="col-md-4">
           <div class="info">
             <div class="icon icon-success">
               <i class="material-icons">map</i>
             </div>
             <h4 class="info-title">Localização</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex quam, mattis ac nisl sed, commodo dapibus quam. In fermentum auctor lacus, id imperdiet magna pellentesque egestas. Cras at arcu nec lectus rutrum tempor. Vivamus semper dolor eros, non imperdiet nulla vulputate id. Duis sit amet nisi sapien. Proin vitae dolor nec leo sagittis mollis. Vestibulum in tempor lectus. Fusce ut justo placerat, aliquet tortor sed, suscipit sem. Sed aliquam scelerisque m...(line truncated)...

               </p>
           </div>
                   </div>
                   <div class="col-md-4">
           <div class="info">
             <div class="icon icon-danger">
               <i class="material-icons">view_agenda</i>
             </div>
             <h4 class="info-title">Itens</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.</p>
           </div>
                   </div>
               </div>
     </div>

     </div>
</div>



    <?php require 'footer.php'; ?>
  </body>
</html>