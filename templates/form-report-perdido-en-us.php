<!DOCTYPE html>
<html ng-app="login">

<head>

  <?php require 'header.php'; ?>

    <!-- Custom Theme CSS -->

    <link href="../static/css/form-report-achado.css" rel="stylesheet">
    <script type="text/javascript" language="javascript" src="../backend/js/reportPerdido.js"></script>

</head>

<body>
  <?php require 'top-menu-logado-en-us.php'; ?>


    <div class="wrapper">

      <div class="container-fluid">
        <div class="section text-center section-landing">
          <div class="row">

            <div class="col-md-8 col-md-offset-2">

              <div class="card card-adicionar-item">


                <h2 class="title titulo-adicionar-item">Report: Lost Item</h2>

                <h5 class="description descricao-adicionar-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris.</h5>

                <!-- carrega itens do user em um drop-down list -->
                <?php

                  require('../backend/Item.php');
                  require('../backend/conBd.php');

                  //Coleta os itens do usuario
                  $dados = getItensUsuario(BaseDados::conBdUser(), $_SESSION['Lost_Found']["id"]);

                  //Verifica se o usuario tem itens
                  if (count($dados) > 0) {
                    echo '<p align="right">Add an item: &nbsp;<select id="meusItens" onChange="preencher(this.options[this.selectedIndex].value)">';
                    echo '<option value="">choose...</option>';

                    for ($i=0; $i<count($dados); $i++) {
                      echo '<option value="'.$dados[$i]['id'].'">'.$dados[$i]['titulo'].'</option>';
                    }

                    echo '</select>&nbsp;&nbsp;&nbsp;</p>';
                  }
                ?>

                <form class="form" id="add-report-form" enctype="multipart/form-data" method="POST" action="../backend/Report.php?tipo=novoReport&report=perdido">
                  <input type="hidden" name="idItemExistente" id="idItemExistente" value="" />
                  <div class="content">

                    <div class="row">

                      <div class="col-md-8 col-md-offset-2 ">

                        <div class="input-group input-size-small-device">
                          <span class="input-group-addon">
                            <i class="material-icons">label</i>
                          </span>
                          <input name="titulo" id="formTitulo" type="text" class=" form-control input-lg " placeholder="Nome/Título... Ex: Black Jacket" required />
                        </div>

                        <div class="input-group input-size-small-device">
                          <span class="input-group-addon">
                            <i class="material-icons">label</i>
                          </span>
                          <input name="marca" id="formMarca" type="text" class=" form-control input-lg " placeholder="Brand... Ex: Samsung" required />
                        </div>

                        <div class="input-group input-size-small-device">
                          <span class="input-group-addon">
                            <i class="material-icons">label</i>
                          </span>
                          <input name="identificador" id="formIdentificador" type="text" class=" form-control input-lg " placeholder="Unique ID... Ex: Serial number, ID..." required />
                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="input-group data">
                              <span class="input-group-addon">
                              <i class="material-icons">today</i>
                            </span>

                              <p class="data-nascimento-label">Data</p>
                              <input type="date" place class="form-control input-lg" id="dataItem" name="dataItem" ng-model="data_achado" placeholder="Date..." required>
                              <p class="informacao-data-nascimento">
                                *Day you lost the item.
                              </p>
                            </div>

                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-8">

                            <div class="input-group data">
                              <span class="input-group-addon">
                              <i class="material-icons">today</i>
                            </span>

                              <p class="data-nascimento-label">Hora</p>
                              <input type="text" place class="form-control input-lg" id="horaItem" name="horaItem" ng-model="hora_achado" placeholder="Time..." required>
                              <p class="informacao-data-nascimento">
                                *Approximate time..
                              </p>
                            </div>

                          </div>

                        </div>

                        <div class="row">
                          <div class="col-md-3">
                            <select class="form-control" name="categoria" id="formCategoria">
                              <option value="">Category</option>
                              <?php

                                    //Php com categorias
                                    require('listaCategorias.php');
                                    echo $minhasCategorias;
                                  ?>
                            </select>
                          </div>

                          <div class="col-md-3">
                            <select class="form-control" name="subcategoria" id="formSubcategoria">
                              <option value="">Subcategory</option>
                              <?php

                                    //Php com subcategorias
                                    require('listaSubcategorias.php');
                                    echo $minhasSubcategorias;
                                  ?>
                            </select>
                          </div>

                          <div class="col-md-3">
                            <select class="form-control" id="SelectCor1" name="cor1" onChange="javascript:var s = document.getElementById('SelectCor1');document.getElementById('divCor1').style.backgroundColor = '#'+s.options[s.selectedIndex].value;">
                              <option value="">Main Color</option>
                              <?php

                                    //Php com as cores
                                    require('listaCores.php');
                                    echo $minhasCores;
                                  ?>
                            </select>
MC                          </div>

                          <div class="col-md-3">
                            <select class="form-control" id="SelectCor2" name="cor2" onChange="javascript:var s = document.getElementById('SelectCor2');document.getElementById('divCor2').style.backgroundColor = '#'+s.options[s.selectedIndex].value;">
                              <option value="">Secundary Color</option>
                              <?php
                                    echo $minhasCores;
                                  ?>
                            </select>
                            <span id="divCor2" align="center" style="font-size:10px;color:black;border-radius:10px;padding:6px 8px">SC</span>
                          </div>

                          <br>

                          <div class="input-group input-size-small-device">
                            <span class="input-group-addon">
                                <i class="material-icons">label</i>
                              </span>
                            <textarea name="caracteristicas" id="formCaracteristicas" class="form-control" placeholder="Unique Characteristics... Ex: scratches, crumpled, stickers, etc." rows="5"></textarea>
                          </div>

                          <div class="input-group input-size-small-device">
                            <span class="input-group-addon">
                                <i class="material-icons">label</i>
                              </span>
                            <textarea name="descricao" id="formDescricao" class="form-control" placeholder="Write a little description of the item...." rows="10"></textarea>
                          </div>

                          <div class="input-group input-size-small-device">
                            <span class="input-group-addon">
                                <i class="material-icons">label</i>
                              </span>
                            <textarea name="informacao" id="formInformacao" class="form-control" placeholder="Write a short text about the situation where the item was lost. Ex: I was on a wooden bench, which is in metro station N 22, Sunday afternoon, approximately 3pm" rows="10"></textarea>
                          </div>

                          <div class="input-group btn-upload-imagem">
                            <label class="btn btn-md btn-default btn-cor-estilo-escuro"><i class="material-icons">file_upload</i> Picture
                              <input style="display: none;" name="enderFoto" id="formEnderFoto" type="file">
                            </label>
                            <p class="informacao-imagem-upload">
                              Item Picture
                            </p>
                          </div>


                          <h3 class="title titulo-adicionar-item">Please Write the address where <strong>the Item</strong> was lost.</h2>

                          <!-- input auto-complete para o endereço -->
                          <div class="input-group input-size-small-device">
                            <input id="autocomplete" name="autocomplete" class=" form-control input-lg " placeholder="Address" onFocus="geolocate()" type="text" size="50" required></input>
                          </div>

                          <div class="input-group input-size-small-device">

                            <span class="input-group-addon">
                              <i class="material-icons">home</i>
                            </span>
                            <input disabled="true" id="route" name="rua" type="text" class=" form-control input-lg " placeholder="Street Name..." required></input>
                          </div>

                          <div class="input-group input-size-small-device">
                            <span class="input-group-addon">
                              <i class="material-icons">label</i>
                            </span>
                            <input disabled="true" id="street_number" name="numero" type="text" class=" form-control input-lg " placeholder="Number... Ex: 1254"></input>
                          </div>

                          <div class="input-group input-size-small-device">
                            <span class="input-group-addon">
                              <i class="material-icons">label</i>
                            </span>
                            <input disabled="true" id="administrative_area_level_1" name="estado" type="text" class=" form-control input-lg " placeholder="State/Province... " required></input>
                          </div>

                          <div class="input-group input-size-small-device">
                            <span class="input-group-addon">
                              <i class="material-icons">location_city</i>
                            </span>
                            <input disabled="true" id="locality" name="cidade" type="text" class=" form-control input-lg " placeholder="City... Ex: Las Vegas" required></input>
                          </div>

                          <div class="input-group input-size-small-device">
                            <span class="input-group-addon">
                              <i class="material-icons">local_post_office</i>
                            </span>
                            <input disabled="true" id="postal_code" name="cep" type="text" class=" form-control input-lg " placeholder="Zip Code... "></input>
                          </div>

                          <div class="input-group input-size-small-device">
                            <span class="input-group-addon">
                              <i class="material-icons">label</i>
                            </span>
                            <input disabled="true" id="country" name="pais" type="text" class=" form-control input-lg " placeholder="Coutry... Ex: Brasil" required></input>
                          </div>

                          <div class="col-md-4">

                          </div>

                            <script>
                              // This example displays an address form, using the autocomplete feature
                              // of the Google Places API to help users fill in the information.

                              var placeSearch, autocomplete;
                              var componentForm = {
                                street_number: 'short_name',
                                route: 'long_name',
                                locality: 'long_name',
                                administrative_area_level_1: 'short_name',
                                country: 'long_name',
                                postal_code: 'short_name'
                              };

                              function initAutocomplete() {
                                // Create the autocomplete object, restricting the search to geographical
                                // location types.
                                autocomplete = new google.maps.places.Autocomplete(
                                    /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
                                    {types: ['geocode']});

                                // When the user selects an address from the dropdown, populate the address
                                // fields in the form.
                                autocomplete.addListener('place_changed', fillInAddress);
                              }

                              // [START region_fillform]
                              function fillInAddress() {
                                // Get the place details from the autocomplete object.
                                var place = autocomplete.getPlace();

                                for (var component in componentForm) {
                                  document.getElementById(component).value = '';
                                  document.getElementById(component).disabled = false;
                                }

                                // Get each component of the address from the place details
                                // and fill the corresponding field on the form.
                                for (var i = 0; i < place.address_components.length; i++) {
                                  var addressType = place.address_components[i].types[0];

                                  if (componentForm[addressType]) {
                                    var val = place.address_components[i][componentForm[addressType]];
                                    document.getElementById(addressType).value = val;
                                  }
                                }
                              }
                              // [END region_fillform]

                              // [START region_geolocation]
                              // Bias the autocomplete object to the user's geographical location,
                              // as supplied by the browser's 'navigator.geolocation' object.
                              function geolocate() {
                                if (navigator.geolocation) {
                                  navigator.geolocation.getCurrentPosition(function(position) {
                                    var geolocation = {
                                      lat: position.coords.latitude,
                                      lng: position.coords.longitude
                                    };
                                    var circle = new google.maps.Circle({
                                      center: geolocation,
                                      radius: position.coords.accuracy
                                    });
                                    autocomplete.setBounds(circle.getBounds());
                                  });
                                }
                              }
                              // [END region_geolocation]

                          </script>
                          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1jcQdqAcbQSi0yuUDshqpLiz-fPqQ3m8&signed_in=true&libraries=places&callback=initAutocomplete" async defer></script>



                          <div class="col-md-4">

                          </div>

                          <br>
                          <br>
                          <br>
                          <br>

                          <div class="" id="error-editar-report">

                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="footer text-center">
                      <input id="btnAdicionar" value="Create" class="btn btn-default  btn-lg btn-cor-estilo-escuro" type="submit" />
                    </div>

                </form>

                <!-- script para preencher os campos -->
                <script type="text/javascript">
                  function preencher(id){

                    //Pega a variavel coletada no php acima e converte para json
                    var meuArray = <?php echo json_encode($dados); ?>;
                    var valuesCampos = null;

                    //Procura pelo id passado
                    for(var i = 0; i<meuArray.length; i++) {
                      if (meuArray[i]['id'] == id) {
                        valuesCampos = meuArray[i];
                      };
                    };

                    //Caso o id passado seja valido, preenche os campos do form
                    if (valuesCampos != null) {
                      document.getElementById("idItemExistente").value = valuesCampos['id'];
                      document.getElementById("formTitulo").value = valuesCampos['titulo'];
                      document.getElementById("formMarca").value = valuesCampos['marca'];
                      document.getElementById("formIdentificador").value = valuesCampos['identificador'];
                      document.getElementById("formCategoria").value = valuesCampos['idCategoria'];
                      document.getElementById("formSubcategoria").value = valuesCampos['idSubcategoria'];
                      document.getElementById("SelectCor1").value = valuesCampos['cor1'];
                      document.getElementById("SelectCor2").value = valuesCampos['cor2'];
                      document.getElementById("formCaracteristicas").value = valuesCampos['caracteristicas'];
                      document.getElementById("formDescricao").value = valuesCampos['descricao'];
                      document.getElementById("formEnderFoto").disabled = true;

                    } else {
                      // document.getElementById("add-report-form").reset();
                      document.getElementById("idItemExistente").value = "";
                      document.getElementById("formTitulo").value = "";
                      document.getElementById("formMarca").value = "";
                      document.getElementById("formIdentificador").value = "";
                      document.getElementById("formCategoria").value = "";
                      document.getElementById("formSubcategoria").value = "";
                      document.getElementById("SelectCor1").value = "";
                      document.getElementById("SelectCor2").value = "";
                      document.getElementById("formCaracteristicas").value = "";
                      document.getElementById("formDescricao").value = "";
                      document.getElementById("formEnderFoto").disabled = false;
                    };

                  }//function preencher()
                </script>

                </div>

              </div>

            </div>
          </div>
        </div>
      </div>


</body>

<?php require 'footer-en-us.php'; ?>

</html>
