<?php

include('entity/Usuario.class.php');

session_start();
if(!isset ($_SESSION['usuario']))
{
    unset($_SESSION['usuario']);
    header('location:index.php');
}


$usuarioRecebido = $_SESSION['usuario'];




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


                    <form class="form_clientes" method="post" action="controller/fichaController.php" enctype="multipart/form-data">

                        <div class="form_row">
                        <label>Avaliador(a):</label>
                            <h4><?php echo $usuarioRecebido->getNome(); ?></h4>
                        <input type="hidden" name="nome" value="<?php echo $usuarioRecebido->getNome();?>" class="form_input" />
                        </div>


                        <div class="form_row">
                            <label>Professor(a) Avaliado:</label>

                            <input type="text" name="professorAvaliado" value="" class="form_input" />
                        </div>

                        <div class="form_row">
                            <label>Turma:</label><p style="font-size: 9px">ex: F-7MA1, F-7MA2</p>

                            <input type="text" name="turma" value="" class="form_input" />
                        </div>



                        <div class="form_row">
                            <label>Disciplina:</label>
                            <div class="selector_overlay">
                                <select  class="cs-select" name="disciplina" id="selectoptions">
                                    <option value="" disabled="disabled" selected>Selecione a disciplina abaixo</option>
                                    <option value="Alemao">Alemão</option>
                                    <option value="Portugues">Português</option>
                                    <option value="Matemática">Matemática</option>
                                    <option value="Ciências">Ciências</option>
                                    <option value="Fisica">Fisica</option>
                                    <option value="Quimica">Ciências</option>
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
                                <label class="label-radio item-content">
                                    <!-- Checked by default -->
                                    <input type="radio" name="campus" value="Morumbi" checked="checked">
                                    <div class="item-inner">
                                        <div class="item-title">Morumbi</div>
                                    </div>
                                </label>

                                <label class="label-radio item-content">
                                    <!-- Checked by default -->
                                    <input type="radio" name="campus" value="Panamby">
                                    <div class="item-inner">
                                        <div class="item-title">Panamby</div>
                                    </div>
                                </label>

                                <label class="label-radio item-content">
                                    <!-- Checked by default -->
                                    <input type="radio" name="campus" value="Valinhos">
                                    <div class="item-inner">
                                        <div class="item-title">Valinhos</div>
                                    </div>
                                </label>
                            </div>
                        </div>




                        <!--NIVEL-->

                        <div  class="form_row">
                            <label>Nível</label>


                            <div class="form_row_right">
                                <label class="label-radio item-content">
                                    <!-- Checked by default -->
                                    <input type="radio" name="nivel" value="Fundamental I" checked="checked">
                                    <div  class="item-inner">
                                        <div class="item-title">Fundamental I</div>
                                    </div>
                                </label>

                                <label class="label-radio item-content">
                                    <!-- Checked by default -->
                                    <input type="radio" name="nivel" value="Fundamental II">
                                    <div class="item-inner">
                                        <div class="item-title">Fundamental II</div>
                                    </div>
                                </label>

                                <label class="label-radio item-content">
                                    <!-- Checked by default -->
                                    <input type="radio" name="nivel" value="Ensino Medio">
                                    <div class="item-inner">
                                        <div class="item-title">Ensino Médio</div>
                                    </div>
                                </label>
                            </div>
                        </div>



                <!--QUESTÃO 01-->
                <div  class="form_row">
                        <label>1) Criação de ambiente de aprendizagem (espaços e recursos)</label>
                        <p>Como o professor deixa o espaço e a preparação da sala de aula ou outros espaços ?</p>

                    <div class="form_row_right">
                        <label class="label-radio item-content">
                            <!-- Checked by default -->
                            <input type="radio" name="questao01" value="Excelente" checked="checked">
                            <div class="item-inner">
                                <div class="item-title">Excelente</div>
                            </div>
                        </label>

                        <label class="label-radio item-content">
                            <!-- Checked by default -->
                            <input type="radio" name="questao01" value="Satisfatório">
                            <div class="item-inner">
                                <div class="item-title">Satisfatório</div>
                            </div>
                        </label>

                        <label class="label-radio item-content">
                            <!-- Checked by default -->
                            <input type="radio" name="questao01" value="Insatisfatório">
                            <div class="item-inner">
                                <div class="item-title">Insatisfatório</div>
                            </div>
                        </label>
                    </div>
                </div>

                    <!--QUESTÃO 02-->
                    <div  class="form_row">
                        <label>2) Organização da aula (coerência)</label>
<!--                        <p>Como o professor deixa o espaço e a preparação da sala de aula ou outros espaços ?</p>-->

                        <div class="form_row_right">
                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao02" value="Excelente" checked="checked">
                                <div class="item-inner">
                                    <div class="item-title">Excelente</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao02" value="Satisfatório">
                                <div class="item-inner">
                                    <div class="item-title">Satisfatório</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao02" value="Insatisfatório">
                                <div class="item-inner">
                                    <div class="item-title">Insatisfatório</div>
                                </div>
                            </label>
                        </div>
                    </div>



                    <!--QUESTÃO 03-->
                    <div  class="form_row">
                        <label>3) Interações na aula  </label>
                        <p>(participação/produção do aluno, metodologia)</p>

                        <div class="form_row_right">
                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao03" value="Excelente" checked="checked">
                                <div class="item-inner">
                                    <div class="item-title">Excelente</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao03" value="Satisfatório">
                                <div class="item-inner">
                                    <div class="item-title">Satisfatório</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao03" value="Insatisfatório">
                                <div class="item-inner">
                                    <div class="item-title">Insatisfatório</div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!--QUESTÃO 04-->
                    <div  class="form_row">
                        <label>4) Motivação da aula </label>
                        <p>(entusiasmo professor x aluno)</p>

                        <div class="form_row_right">
                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao04" value="Excelente" checked="checked">
                                <div class="item-inner">
                                    <div class="item-title">Excelente</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao04" value="Satisfatório">
                                <div class="item-inner">
                                    <div class="item-title">Satisfatório</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao04" value="Insatisfatório">
                                <div class="item-inner">
                                    <div class="item-title">Insatisfatório</div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!--QUESTÃO 05-->
                    <div  class="form_row">
                        <label>5) Relação aluno x professor </label>
                        <p>(vínculos estabelecidos)</p>

                        <div class="form_row_right">
                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao05" value="Excelente" checked="checked">
                                <div class="item-inner">
                                    <div class="item-title">Excelente</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao05" value="Satisfatório">
                                <div class="item-inner">
                                    <div class="item-title">Satisfatório</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao05" value="Insatisfatório">
                                <div class="item-inner">
                                    <div class="item-title">Insatisfatório</div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!--QUESTÃO 06-->
                    <div  class="form_row">
                        <label>6) Conteúdos </label>
                        <p>( aprofundamento, estimula a pesquisa - extrapola “contexto de mundo”)</p>

                        <div class="form_row_right">
                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao06" value="Excelente" checked="checked">
                                <div class="item-inner">
                                    <div class="item-title">Excelente</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao06" value="Satisfatório">
                                <div class="item-inner">
                                    <div class="item-title">Satisfatório</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao06" value="Insatisfatório">
                                <div class="item-inner">
                                    <div class="item-title">Insatisfatório</div>
                                </div>
                            </label>
                        </div>
                    </div>





                    <div class="form_row">
               <label>Parecer do Observador:</label>
                <textarea name="parecer" class="form_textarea" rows="20" cols="" placeholder="Digite aqui o seu parecer"></textarea>
                </div>

                        <input type="hidden" value="cadastrar" name="envio">
                <input type="submit" name="cadastrar" class="form_submit open-indicator"  value="Enviar" />
                </form>
                </div>

              
              
              </div>
      
      </div>
      
      
    </div>
  </div>
</div>

