<?php include('header.php'); ?>
<div class="container">
    <div class="margin-top">

        <div class="details" align="center" >FORMULARIO DE REGISTRO <?php echo "<br>" ?> Ingrese los siguientes Datos</div>		
        <form class="form-horizontal" method="POST"  action="save2.php" enctype="multipart/form-data">
            <table>
                <table align="center" border="0">
                    <tr>
                        <td class="registr">No. Documento:</td>
                        <td class="registr">   
                            <input type="text" name="dni_user" pattern="^[0-9_]{7,11}$"  autocomplete="off" maxlength="11" value=""required>
                        </td>

                        <td class="registr">Tipo de documento:</td>
                        <td class="registr"><select name="tipodni_user" required>
                                <option value="">Seleccione</option>
                                <option value="Cedula Ciudadania">CC</option>
                                <option value="Tarjeta Identidad">TI</option>
                                <option value="Cedula Extranjera">CE</option> 
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="registr"></td>
                        <td class="registr"><input type="hidden" name="foto_user" title="foto" value="estudiante.png"></td>
                    </tr>
                    <tr>
                        <td class="registr">Nombre(s):</td>
                        <td class="registr"><input type="text"  min="5" max="30" name="nom_user" pattern="^[A-Za-záéíóúñ]{2,}([\s][A-Za-záéíóúñ]{2,})+$" title="Nombre Completo Por favor" required></td>
                        <td class="registr">Apellido(s):</td>
                        <td class="registr"><input type="text"  min="5" max="20" name="apell_user" pattern="^[A-Za-záéíóúñ]{2,}([\s][A-Za-záéíóúñ]{2,})+$" title="Ingrese los Apellidos Por favor" required ></td>
                    </tr>
                    <tr>  
                        <td class="registr">Sexo</td>
                        <td class="registr"><select name="sex_user" id="tipodni_user" required>
                                <option value="">Seleccione</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="registr">Correo</td>
                        <td class="registr"><input type="email" name="mail_user" title="correo electronico de contacto" value="@" required></td>

                        <td class="registr">Clave</td>
                        <td class="registr"><input type="password" name="clave_user" title="clavde de Ingreso" value="0000"></td>
                    </tr>      

                    <tr>
                        <td class="registr">Telefono Usuario</td>
                        <td class="registr"><input type="text"  name="tel_user" pattern="^[0-9_]{10}" placeholder="3133556565" title="Telefono de Contacto" required></td>
                        <td class="registr">Estado Civil</td>
                        <td class="registr"><select name="civil_user" id="civil_user" required>
                                <option value="">Seleccione</option>
                                <option value="Solter@">Solter@</option>
                                <option value="union_Libre">Union_Libre</option>
                                <option value="Comprometid@">Comprometid@</option>
                                <option value="Casad@">Casad@</option>
                                <option value="Divorciad@">Divorciad@</option>
                            </select>
                        </td>


                    </tr>


                    <tr>
                        <td class="registr">Lugar Nacimiento:</td>
                        <td class="registr"><input type="text" name="lugarnac_user" title="¿Donde nacio?" required=""></td>
                    </tr><tr>
                        <td class="registr">Fecha Nacimiento:</td>
                        <td class="registr">
                            <input type="date" name="nac_user"  min="1980-10-10" max="2012-10-10" required></td>
                    </tr>

                    <tr>
                        <td class="registr">Localidad:</td>
                        <td class="registr"><select  name="localidad_user" required>
                                <option></option>
                                <option value="1.Usaquen" >1.Usaquen</option>
                                <option value="2. Chapinero" >2. Chapinero</option>
                                <option value="3.Santafe" >3.Santa fe</option>
                                <option value="4. San Cristobal" >4.San Cristobal</option>
                                <option value="5. Usme" >5.Usme</option>                <option value="6. Tunjuelito" >6. Tunjuelito</option>
                                <option value="7. Bosa" >7. Bosa</option>             <option value="8. Kennedy" >8. Kenendy</option>
                                <option value="9. Fontibon" >9. Fontibon</option>
                                <option value="10. Engativa" >10. Engativa</option>         <option value="11. Suba" >11.Suba</option>
                                <option value="12. B. Unidos" >12.B. Unidos</option>
                                <option value="13. Teusaquillo" >13. Teusaquillo</option>     <option value="14. Martires" >14. Martires</option>     <option value="15 Antonio Nariño" >15. Antonio Nariño</option>
                                <option value="16. Puente Aranda" >16. Puente Aranda</option>    <option value="17. Candelaria" >17. La Candelaria</option>  <option value="18 R. uribe uribe" >18. R. uribe uribe</option>
                                <option value="19 C. bolivar" >19. ciudad Bolivar</option>    <option value="20. Sumapaz" >20. Sumapaz</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="registr">Estrato:</td>
                        <td class="registr"><input type="text" min="1" max="6" value="0" name="estrato_user" title="estrato de Vivienda" required></td>
                    </tr>
                    <tr>
                        <td class="registr">Barrio:</td>
                        <td class="registr"><input type="text" name="barrio_user"  pattern="^[A-Za-záéíóúñ]{2,}([\s][A-Za-záéíóúñ]{2,})+$" title="barrio" required></td>

                    </tr>

                    <tr>

                        <td class="registr">Acudiente Nombre</td>
                        <td class="registr"><input type="text" name="responsable_user" pattern="^[A-Za-záéíóúñ]{2,}([\s][A-Za-záéíóúñ]{2,})+$" title=" Nombre" required></td>
                    </tr>
                    <tr>

                        <td class="registr">Telefono acudiente</td>
                        <td class="registr"><input type="text" name="cel_respon_user" pattern="^[0-9_]{7,10}" title="Telefono de Contacto" ></td>

                    </tr>           <input type="hidden" name="fecha_registro_user" title="Fecha de registro ">
                    <input type="hidden" name="carrera_user" title=" Carrera"  >
                    <input type="hidden" name="universidad_user" title="Universidad " >
                    <tr>

                        <td class="registr">Tipo Colegio</td>
                        <td>
                            <select name="id_colegio" id="id_colegio"required>
                                <option value="">Seleccione Colegio</option>
                                <?php
                                include("../3modelo/conexion.php");
                                $consulta1 = mysql_query("select *from t_colegio");
                                while ($row = mysql_fetch_array($consulta1)) {
                                    echo '<option value="' . $row['id_colegio'] . '">' . $row['tipo_colegio'] . '</option>';
                                }
                                ?></select>
                        </td>
                    </tr>
                    <tr>

                        <td class="registr">Estado Usuario</td>
                        <td class="registr">
                            <select name="id_estado" id="id_colegio" required>
                                <option value="1">Activado </option>
                            </select>
                        </td>

                        <td class="registr">Jornada </td>
                        <td class="registr">
                            <select name="id_jornada" id="id_colegio"required>
                                <option value="">Seleccione </option>
                                <?php
                                include("../3modelo/conexion.php");
                                $consulta3 = mysql_query("select *from t_jornada");
                                while ($row = mysql_fetch_array($consulta3)) {
                                    echo '<option value="' . $row['id_jornada'] . '">' . $row['tipo_jornada'] . '</option>';
                                }
                                ?></select>


                        </td>
                    </tr><br>
                    <tr>
                        <th colspan="2" aling="center"> 
                    <h4>..::Adjuntar Documento::..</h4>
                    <input type="file" name="archivo_usuario" /><br/>
                    </th>
                    </tr>

                    <tr>
                        <td class="registr"> </td>
                        <td class="registr">
                            <input name="id_materia_user" id="id_colegio" value="0" type="hidden">
                        </td>
                    </tr> 
                    <tr>
                        <td class="registr"> </td>
                        <td class="registr">
                            <input name="rol_user" id="Rolusuario" value="3" type="hidden">
                        </td>
                    </tr>
                    <tr>
                        <td class="registr"> </td>
                        <td class="registr">
                            <input name="clasificacion_usuario" id="" value="0" type="hidden">
                        </td>
                    </tr> 
                    <tr>
                        <td class="registr"> </td>
                        <td class="registr">
                            <input name="ultimo_acceso" id="" value="3" type="hidden">
                        </td>
                    </tr>
                </table>
                <table  align="center">
                    <tr>
                        <td>
                            <textarea name="Terminos" style="width: 800px; height: 150px;  resize: vertical;" disabled>
Terminos y Condiciones 
Por su seguridad realice sus consultas por Internet desde un sitio seguro. 
Utilice siempre el computador personal de su casa u ofícina. 
Toda la información sumisnistrada debe ser veridica y correctamente digitada.
Aceptar los siguientes términos legales: 
Entiendo que, en consecuencia, Aspiantes UN es un grupo sin ánimo de lucro que surgue en el año 2010 con
el ánimo de fortalecer  debilidades academicas de los estudiantes a nivel distrital,por ello Aspirantes UN
no guarda ningun tipo de relación formal e informal con la Universidad Nacional de Colombia,así 
responsable por asegurar la concordancia entre los datos que le han sido suministrados y los que registra/divulga, 
pero no tiene ninguna responsabilidad por la veracidad de tales datos. 

Entiendo que, por medio del presente sistema informático, la ASpirantes UN está poniendo a mi alcance los mecanismos necesarios para que 
pueda vincularme de manera presencial al proyecto, 

Declaro conocer que, además del presente sistema informático, la Aspirantes UN Bogotá ha puesto a mi disposición otros mecanismos para facilitarme
 el ejercicio del habeas data, tanto presencialmente como por escrito. 

 En consecuencia, reconozco que si por motivos técnicos o de cualquier otra índole, 
 no pudiere acceder a mi información personal por este sistema informático, no se me está impidiendo ni limitando el ejercicio del habeas data. 
Acepto que en cualquier momento y sin previo aviso, Aspirantes UN puede modificar o actualizar el servicio de este sistema informático
 de la manera que estime conveniente, y que Aspirantes UN Bogotá no tiene ninguna obligación de continuar el servicio en sus actuales condiciones 
 Declaro que Únicamente solicitaré información relativa a mi persona y que no obtendré beneficios económicos con este servicio. 


 

Al ingresar al sitio web www.aspirantesun.com y al utilizar nuestros servicios gratuitos, usted está aceptando automáticamente los términos y condiciones establecidos en esta página, para hacer uso de la misma o de los servicios que en ella se ofrecen y que pueden ser o no modificados en cualquier momento.

La identificación y la clave de acceso son personales e intransferibles y el USUARIO será el único responsable por su uso adecuado. Cualquier violación a esta disposición dará lugar a que ASPIRANTES UN BOGOTÁ pueda terminar la correspondiente licencia, sin perjuicio del cobro de las indemnizaciones a las que hubiere lugar.

Autorizaciones

EL USUARIO autoriza de manera voluntaria y expresa a ASPIRANTES UN BOGOTÁ para recolectar, registrar, procesar, difundir y comercializar todos los datos e información que el USUARIO de forma voluntaria suministre en el momento del registro o al usar el sitio web. Con base en lo anterior, ASPIRANTES UN BOGOTÁ podrá reproducir, publicar, traducir, adaptar, extraer o compendiar los datos o la información suministrada, así como disponer de los datos o la información a título oneroso o gratuito.


Responsabilidad

La información que aparece en www.aspirantesun.com no constituye siquiera un mero consejo y por ello ASPIRANTES UN BOGOTÁ no asume ninguna responsabilidad por eventuales pérdidas, costos, perjuicios o daños que pueda sufrir el USUARIO por el uso o la imposibilidad de uso de dicha información.

ASPIRANTES UN BOGOTÁ no otorga garantía alguna sobre la exactitud, confiabilidad u oportunidad de la información, los servicios, los textos, el software, las gráficas y los vínculos a otras páginas.

El sitio www.aspirantesun.com contiene vínculos a sitios de terceras personas, los cuales se suministran a modo de referencia pues ASPIRANTES UN BOGOTÁ no respalda, recomienda, patrocina o asume responsabilidad alguna sobre la disponibilidad de dichos sitios y su contenido.

ASPIRANTES UN BOGOTÁ no garantiza que la conexión y la operación del sitio www.aspirantesun.com estén exentas de errores, y el USUARIO manifiesta expresamente que conoce estas circunstancias, y que en el evento de un error, la responsabilidad de ASPIRANTES UN BOGOTÁ se limitará exclusivamente a corregirlo en un tiempo prudencial.

ASPIRANTES UN BOGOTÁ no será responsable por daños que los programas sobre los cuales corren sus sitios, ni por los archivos que se bajen del mismo, ocasionen en el equipo o los archivos del USUARIO, incluyendo virus.

ASPIRANTES UN BOGOTÁ no será responsable por los perjuicios que el USUARIO pueda causar a terceros en la utilización del sitio www.aspirantesun.com.

ASPIRANTES UN BOGOTÁ no guarda ningún tipo de relación personal o comercial con la Universidad Nacional de Colombia.

Restricciones

El USUARIO únicamente podrá ingresar a las secciones que le sea autorizadas por ASPIRANTES UN BOGOTÁ por lo tanto se abstendrá de utilizar cualquier medio para violar la seguridad y restricciones, así como cualquier medida tecnológica y la sola intención de hacerlo evidenciada por ASPIRANTES UN BOGOTÁ será causal para dar por terminada esta licencia e informar a las autoridades correspondientes de este hecho.

El USUARIO no podrá reproducir, adaptar, distribuir, alquilar, vender, otorgar licencia o ejecutar cualquier otra forma de transferencia, del sitio www.aspirantesun.com o cualquiera de sus partes, incluyendo los códigos de programación.

El USUARIO no podrá reversar la ingeniería, descompilar, desensamblar, modificar, crear trabajos derivados de, traducir la información o usar la información publicada en el sitio www.aspirantesun.com con fines comerciales o de lucro.

El USUARIO no podrá remover u ocultar los derechos de autor, las marcas o cualquier otra información o leyenda relacionada con la propiedad y derechos deASPIRANTES UN BOGOTÁ o de sus proveedores de información y de servicios. 

El USUARIO reconoce y acepta que podrá descargar guías (información particular sobre situaciones concretas), documentos, disponibles en esta página en formato Word o Excel u otros formatos disponibles para ser usadas solo en su proceso de estudio.


Derechos de autor 

De conformidad con las disposiciones legales vigentes, (Art. 61 Constitución Política de Colombia, Art. 671 Código Civil y Ley 23 de 1982) y los diseños, redacciones , contenidos e información aquí presentada, está protegidos por las leyes de derechos de autor, según las cuales, salvo licencia o autorización de su titular, no pueden ser fotocopiadas, reproducidas digital o físicamente, modificadas total o parcialmente o comunicadas públicamente, so pena de ser responsable civil y penalmente de infracción de derechos patrimoniales y/o morales de autor.

Marcas y propiedad intelectual

ASPIRANTES UN BOGOTÁ es el legítimo propietario de los derechos marcarios de las marcas ASPIRANTES UN BOGOTÁ, y otras que aparezcan que no estén identificadas como de propiedad de los proveedores de información y servicios o de terceros. Las marcas que aparezcan a nombre de las empresas proveedoras de información y servicios o de terceros son de su propiedad o están autorizados para explotarlas.

La información que aparece en www.aspirantesun.com , el diseño gráfico, la presentación, la compilación de la información, así como el look and feel del sitio son propiedad exclusiva de ASPIRANTES UN BOGOTÁ y están protegidos por las normas sobre derechos de autor nacionales y por los tratados internacionales que sobre la materia ha suscrito y ratificado la República de Colombia.

EL USUARIO no podrá utilizar, comercializar, explotar o modificar de ninguna manera, la información suministrada por www.aspirantesun.com, las marcas de ASPIRANTES UN BOGOTÁ, de los proveedores de información y de servicios o de terceros y se obliga a informar a ASPIRANTES UN BOGOTÁ cualquier hecho sobre el cual tenga conocimiento y que pueda considerarse como lesivo de los derechos que legalmente éste o los proveedores de información y servicios que se estén ejerciendo de manera irregular.

Terminación

ASPIRANTES UN BOGOTÁ se reserva el derecho, a su exclusiva discreción, de borrar toda la información que EL USUARIO ha incluido en www.aspirantesun.com y de terminar su registro y acceso a ésta página, ante el incumplimiento por parte del USUARIO de estos términos y condiciones sin previo aviso.
                            </textarea>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">                  
                            <?php
                            $row_terminos = array();
                            $row_terminos['terminos'] = 'v';
                            ?>
                            <script type="text/javascript">
                                // Selecciono los elementos <input /> por su atributo "terminos"
                                var boton = document.getElementsByName('submit');
                                function habilitarb() {
                                    // Habilito los elementos
                                    boton[0].disabled = false;
                                }
                                function deshabilitarb() {
                                    // Deshabilito los elementos
                                    boton[0].disabled = true;
                                }
                            </script>
                            Acepta termino y Condiciones: <br>
                            <input type="radio" name="terminos" value="v"<?php echo $row_terminos['terminos'] == "v" ? ' checked="checked"' : ''; ?> onclick="habilitarb();"/> <b>Si</b>
                            <input type="radio" name="terminos" value="f"<?php echo $row_terminos['terminos'] == "f" ? ' checked="checked"' : ''; ?> onclick="deshabilitarb();"> <b>No </b>
                            <br/>
                        </td>
                    </tr>


                    <tr><br>
                    <td colspan="4" align="center" class="registr"> 
                        <button name="submit" type="submit" class="btn btn-success" ><i class="icon-save icon-large"></i>&nbsp;Registrar Información Personal</button>

                    </td>
                    </tr>
                </table>












        </form>
        <br><br>

    </div>




</div>
</div>

<?php include('footer.php') ?>
