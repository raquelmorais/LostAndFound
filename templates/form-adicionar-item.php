<!DOCTYPE html>
<html ng-app="login">

<head>

  <?php require 'header.php'; ?>

    <!-- Custom Theme CSS -->

    <link href="../static/css/form-adicionar-item.css" rel="stylesheet">
    <script type="text/javascript" language="javascript" src="../backend/js/adicionarItens.js"></script>

</head>

<body>
  <?php require 'top-menu-logado.php'; ?>


    <div class="wrapper">

      <div class="container-fluid">
        <div class="section text-center section-landing">
          <div class="row">

            <div class="col-md-8 col-md-offset-2">

              <div class="card card-adicionar-item">


                <h2 class="title titulo-adicionar-item">Adicionar Novo Item</h2>

                <h5 class="description descricao-adicionar-item">Por favor preencha as informações do item.</h5>

                  <form class="form" id="add-item-form" enctype="multipart/form-data">

                    <div class="content">

                      <div class="row">

                        <div class="col-md-8 col-md-offset-2 ">

                          <div class="input-group input-size-small-device">
                            <span class="input-group-addon">
                            <i class="material-icons">label</i>
                          </span>
                            <input name="titulo" type="text" class=" form-control input-lg " placeholder="Título... Ex: casaco preto" required />
                          </div>

                          <div class="input-group input-size-small-device">
                            <span class="input-group-addon">
                            <i class="material-icons">label</i>
                          </span>
                            <input name="marca" type="text" class=" form-control input-lg " placeholder="Marca... Ex: Samsung" required />
                          </div>

                          <div class="input-group input-size-small-device">
                            <span class="input-group-addon">
                            <i class="material-icons">label</i>
                          </span>
                            <input name="identificador" type="text" class=" form-control input-lg " placeholder="Identificador único... Ex: N de Serie, ID, e etc..." required />
                          </div>

                          <div class="row">
                            <div class="col-md-3">
                              <select class="form-control"  name="categoria">
                                <option value="">Categoria</option>
                                <?php

                                    //Php com categorias
                                    require('listaCategorias.php');
                                    echo $minhasCategorias;
                                  ?>
                              </select>
                            </div>

                            <div class="col-md-3">
                              <select class="form-control" name="subcategoria">
                                <option value="">Subcategoria</option>
                                <?php

                                    //Php com subcategorias
                                    require('listaSubcategorias.php');
                                    echo $minhasSubcategorias;
                                  ?>
                              </select>
                            </div>

                            <div class="col-md-3">
                              <select class="form-control" id="SelectCor1" name="cor1" onChange="javascript:var s = document.getElementById('SelectCor1');document.getElementById('divCor1').style.backgroundColor = '#'+s.options[s.selectedIndex].value;">
                                <option value="">Cor Predominante</option>
                                  <?php

                                    //Php com as cores
                                    require('listaCores.php');
                                    echo $minhasCores;
                                  ?>
                              </select>
                              <span id="divCor1" align="center" style="font-size:10px;color:black;border-radius:10px;padding:6px 8px">P</span>
                            </div>

                            <div class="col-md-3">
                              <select class="form-control" id="SelectCor2" name="cor2" onChange="javascript:var s = document.getElementById('SelectCor2');document.getElementById('divCor2').style.backgroundColor = '#'+s.options[s.selectedIndex].value;">
                                <option value="">Cor Secudária</option>
                                  <?php
                                    echo $minhasCores;
                                  ?>
                              </select>
                              <span id="divCor2" align="center" style="font-size:10px;color:black;border-radius:10px;padding:6px 8px">S</span>
                            </div>

                            <br>

                            <div class="input-group input-size-small-device">
                              <span class="input-group-addon">
                                <i class="material-icons">label</i>
                              </span>
                              <textarea name="caracteristicas" class="form-control" placeholder="Caracteristicas únicas... Ex: arranhoes, amaçados, adesivos, etc." rows="5"></textarea>
                            </div>

                            <div class="input-group input-size-small-device">
                              <span class="input-group-addon">
                                <i class="material-icons">label</i>
                              </span>
                              <textarea name="descricao" class="form-control" placeholder="Escreva uma pequena DESCRIÇÃO do item. Você pode informar algumas de suas principais caracteristicas..." rows="10"></textarea>
                            </div>

                            <div class="input-group btn-upload-imagem">
                              <label class="btn btn-md btn-default btn-cor-estilo-escuro"><i class="material-icons">file_upload</i>
                                Imagem <input style="display: none;" name="enderFoto" type="file" >
                              </label>
                              <p class="informacao-imagem-upload">
                                Enviar foto do item
                              </p>
                            </div>

                            <div class="" id="error-editar-perfil">

                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="footer text-center">
                      <input id="btnAdicionar" value="Adicionar" class="btn btn-default  btn-lg btn-cor-estilo-escuro" type="submit" />
                    </div>

                  </form>


            </div>

          </div>

        </div>
      </div>
    </div>
  </div>


</body>

<?php require 'footer.php'; ?>

</html>
