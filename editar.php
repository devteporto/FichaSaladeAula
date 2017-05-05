<?php

include('entity/Usuario.class.php');
include('entity/Ficha.class.php');
include_once "dao/DAO.class.php";
include_once "connection/conexao.php";


session_start();
if(!isset ($_SESSION['usuario']))
{
    unset($_SESSION['usuario']);
    header('location:index.php');
}


$id = $_GET['id'];

$fichaConection = FichaDAO::getInstance(Conexao::getInstance());

$ficha = $fichaConection->buscarFicha($id);

?>

<div class="pages">
  <div data-page="form" class="page no-toolbar no-navbar">
    <div class="page-content">
    
	<div class="navbarpages">
		<div class="navbar_left">
			<div class="logo_text"><a href="logado.php"><span>techporto</span>classroom</a></div>
		</div>
		<a href="index.php" data-panel="left" >
			<div class="navbar_right"><img src="images/icons/green/menu.png" alt="" title="" /></div>
		</a>					
	</div>
	
     <div id="pages_maincontent">
     
<!--              <h2 class="page_title">CUSTOM FORM</h2> -->
     
     <div class="page_single layout_fullwidth_padding">

                <div class="contactform">


                    <form method="post" action="controller/fichaController.php" enctype="multipart/form-data">

                        <div class="form_row">
                        <label>Avaliador(a):</label>
                            <h4><?php echo $ficha[0]->getUser()?></h4>
                        <input type="hidden" name="nome" value="<?php echo $ficha[0]->getUser()?>" class="form_input" />
                        </div>

                        <div class="form_row">
                            <label>Disciplina:</label>
                            <div class="selector_overlay">
                                <select  class="cs-select cs-skin-overlay" name="disciplina" id="selectoptions">
                                    <option value="<?php echo $ficha[0]->getDisciplina()?>"  selected><?php  echo $ficha[0]->getDisciplina()?></option>
                                    <option value="Alemao">Alemão</option>
                                    <option value="Portugues">Português</option>
                                    <option value="Matemática">Matemática</option>
                                    <option value="Ciências">Ciências</option>
                                    <option value="Fisica">Fisica</option>
                                    <option value="Quimica">Quimica</option>
                                    <option value="Geografia">Geográfia</option>
                                    <option value="História">História</option>
                                    <option value="Ed. Fisica">Ed. Fisica</option>
                                </select>
                            </div>
                        </div>

                        <div class="form_row">
                            <p>&nbsp;</p>
                        </div>


                        <div  class="form_row">
                            <label>Câmpus</label>


                            <div class="form_row_right">

                                <?php

                                $campus = $ficha[0]->getCampus();

                                switch ($campus) {
                                    case "Morumbi":
                                    echo "<label class=\"label-radio item-content\">
                                    <!-- Checked by default -->
                                    <input type=\"radio\" name=\"campus\" value=\"Morumbi\" checked=\"checked\">
                                    <div class=\"item-inner\">
                                        <div class=\"item-title\">Morumbi</div>
                                    </div>
                                    </label>
                                    


                                <label class=\"label-radio item-content\">
                                    <!-- Checked by default -->
                                    <input type=\"radio\" name=\"campus\" value=\"Panamby\">
                                    <div class=\"item-inner\">
                                        <div class=\"item-title\">Panamby</div>
                                    </div>
                                </label>

                                <label class=\"label-radio item-content\">
                                    <!-- Checked by default -->
                                    <input type=\"radio\" name=\"campus\" value=\"Valinhos\">
                                    <div class=\"item-inner\">
                                        <div class=\"item-title\">Valinhos</div>
                                    </div>
                                </label>";
                                    break;
                                    case "Panamby":
                                        echo "<label class=\"label-radio item-content\">
                                    <!-- Checked by default -->
                                    <input type=\"radio\" name=\"campus\" value=\"Morumbi\" >
                                    <div class=\"item-inner\">
                                        <div class=\"item-title\">Morumbi</div>
                                    </div>
                                    </label>
                                    


                                <label class=\"label-radio item-content\">
                                    <!-- Checked by default -->
                                    <input type=\"radio\" name=\"campus\" value=\"Panamby\" checked=\"checked\">
                                    <div class=\"item-inner\">
                                        <div class=\"item-title\">Panamby</div>
                                    </div>
                                </label>

                                <label class=\"label-radio item-content\">
                                    <!-- Checked by default -->
                                    <input type=\"radio\" name=\"campus\" value=\"Valinhos\">
                                    <div class=\"item-inner\">
                                        <div class=\"item-title\">Valinhos</div>
                                    </div>
                                </label>";
                                        break;
                                    case "Valinhos":
                                        echo "<label class=\"label-radio item-content\">
                                    <!-- Checked by default -->
                                    <input type=\"radio\" name=\"campus\" value=\"Morumbi\" >
                                    <div class=\"item-inner\">
                                        <div class=\"item-title\">Morumbi</div>
                                    </div>
                                    </label>
                                    


                                <label class=\"label-radio item-content\">
                                    <!-- Checked by default -->
                                    <input type=\"radio\" name=\"campus\" value=\"Panamby\" >
                                    <div class=\"item-inner\">
                                        <div class=\"item-title\">Panamby</div>
                                    </div>
                                </label>

                                <label class=\"label-radio item-content\">
                                    <!-- Checked by default -->
                                    <input type=\"radio\" name=\"campus\" value=\"Valinhos\" checked=\"checked\">
                                    <div class=\"item-inner\">
                                        <div class=\"item-title\">Valinhos</div>
                                    </div>
                                </label>";

                                        break;
                                }
                                ?>


                            </div>
                        </div>




                        <!--NIVEL-->

                        <div  class="form_row">
                            <label>Nível</label>

                            <?php $nivel = $ficha[0]->getNivel()?>

                            <div class="form_row_right">
                                <label class="label-radio item-content">
                                    <!-- Checked by default -->
                                    <input type="radio" name="nivel" value="Fundamental I" <?php echo ($nivel ==='Fundamental I')?'checked':'' ?>/>
                                    <div  class="item-inner">
                                        <div class="item-title">Fundamental I</div>
                                    </div>
                                </label>

                                <label class="label-radio item-content">
                                    <!-- Checked by default -->
                                    <input type="radio" name="nivel" value="Fundamental II" <?php echo ($nivel ==='Fundamental II')?'checked':'' ?>/>
                                    <div class="item-inner">
                                        <div class="item-title">Fundamental II</div>
                                    </div>
                                </label>




                                <label class="label-radio item-content">
                                    <!-- Checked by default -->
                                    <input type="radio" name="nivel" value="Ensino Medio" <?php echo ($nivel==='Ensino Medio')?'checked':'' ?>/>
                                    <div class="item-inner">
                                        <div class="item-title">Ensino Médio</div>
                                    </div>
                                </label>
                            </div>
                        </div>


                        <h3>* As questões e o parecer não podem ser editados após enviado</h3>

                        <input type="hidden" value="editar" name="envio"/>
                <input type="submit" name="editar" class="form_submit open-indicator"  value="Enviar" />
                </form>
                </div>

              
              
              </div>
      
      </div>
      
      
    </div>
  </div>
</div>

