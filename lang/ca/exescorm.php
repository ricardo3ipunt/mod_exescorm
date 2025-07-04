<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'exescorm', language 'ca'
 *
 * @package   mod_exescorm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['toc'] = 'Taula de continguts';
$string['navigation'] = 'Navegació';
$string['aicchacptimeout'] = 'Temps d\'espera AICC HACP';
$string['aicchacptimeout_desc'] = 'Període de temps en minuts que una sessió externa AICC HACP es mantindrà oberta';
$string['aicchacpkeepsessiondata'] = 'Dades de sessió AICC HACP';
$string['aicchacpkeepsessiondata_desc'] = 'Període de temps durant el qual es mantindran les dades de la sessió externa AICC HACP (un valor alt omplirà la taula amb dades antigues, però pot ser útil a l\'hora de depurar)';
$string['aiccuserid'] = 'ID de l\'usuari amb contrasenya AICC numèrica';
$string['aiccuserid_desc'] = 'L\'estàndard AICC per a noms d\'usuari és molt restrictiu si el comparem amb Moodle. Només permet caràcters alfanumèrics, guions i subratllats. No es permeten els punts, els espais ni el símbol @. Si s\'habilita, els números ID d\'usuari es passen al paquet AICC en lloc dels noms d\'usuari.';
$string['activation'] = 'Activació';
$string['activityloading'] = 'Es redirigirà automàticament a l\'activitat en';
$string['activityoverview'] = 'Hi ha pàquets eXeLearning que requereixen la vostra atenció';
$string['activitypleasewait'] = 'S\'està carregant l\'activitat; espereu...';
$string['adminsettings'] = 'Paràmetres d\'administació';
$string['advanced'] = 'Paràmetres';
$string['aliasonly'] = 'Quan esteu seleccionant un fitxer imsmanifest.xml d\'un repositori us cal utilitzar un nom curt/àlies per a aquest fitxer.';
$string['allowapidebug'] = 'Activar depuració i traçat API (ajustar la màscara de captura amb apidebugmask)';
$string['allowtypeexternal'] = 'Habilitar tipus de paquet extern';
$string['allowtypeexternalaicc'] = 'Habilitar url AICC directa';
$string['allowtypeexternalaicc_desc'] = 'Si s\'habilita permet una url directa a un paquet AICC simple';
$string['allowtypelocalsync'] = 'Habilitar tipus de paquet descarregat';
$string['allowtypeaicchacp'] = 'Habilitar AICC HACP extern';
$string['allowtypeaicchacp_desc'] = 'Si s\'habilita, permet comunicacions externes AICC HACP sense necessitat d\'inici de sessió de l\'usuari per a peticions d\'un paquet AICC extern.';
$string['apidebugmask'] = 'Màscara de captura de depuració API (regex simple en &lt;username&gt;:&lt;activityname&gt;)';
$string['areacontent'] = 'Arxius de contingut';
$string['areapackage'] = 'Arxiu de paquet';
$string['asset'] = 'Recurs';
$string['assetlaunched'] = 'Recurs - visualitzat';
$string['attempt'] = 'Intent';
$string['attempts'] = 'Intents';
$string['attemptstatusall'] = 'La meva carpeta personal i pàgina d\'entrada';
$string['attemptstatusmy'] = 'Només la meva carpeta personal';
$string['attemptstatusentry'] = 'Només la meva pàgina d\'entrada';
$string['attemptsx'] = '{$a} intents';
$string['attemptsmanagement'] = 'Gestió dels intents';
$string['attempt1'] = '1 intent';
$string['attr_error'] = 'Valor incorrecte de l\'atribut ({$a->attr}) en l\'etiqueta {$a->tag}';
$string['autocommit'] = 'Penjada automàtica';
$string['autocommit_help'] = 'Si s\'habilita, les dades eXeLearning es desen de forma automàtica a la base de dades. Açò és útil per a objectes eXeLearning que no desen les seves dades regularment.';
$string['autocommitdesc'] = 'Desa les dades SCORM de forma automàtica si el paquet SCORM no es desa.';
$string['autocontinue'] = 'Continuació automàtica';
$string['autocontinue_help'] = '<p><b>Continuació automàtica</b></p>
<p>Si trieu l\'opció de continuació automàtica, quan el SCO cridi el mètode de "comunicació pròxima", automàticament es llançarà el següent SCO disponible.</p>
<p>Si no utilitzeu aquesta opció, els usuaris hauran de fer servir el botó "Continua" per seguir.</p>';
$string['autocontinuedesc'] = 'Si ho habiliteu els objectes educatius es llançaran de forma automàtica, en cas contrari caldrà prémer el botó "Continua" cada vegada.';
$string['EXESCORM_AVERAGEATTEMPT'] = 'Promig d\'intents';
$string['badmanifest'] = 'El manifest té errors: vg. el registre d\'errors';
$string['badimsmanifestlocation'] = 'S\'ha trobat un fitxer imsmanifest.xml, però no està a l\'arrel del vostre fitxer zip; torneu a empaquetar el vostre SCORM';
$string['badarchive'] = 'Cal que proporcioneu un fitxer zip vàlid';
$string['badexelearningpackage'] = 'El paquet no compleix les normes dels continguts eXeLearning definides per al lloc.';
$string['browse'] = 'Explora';
$string['browsed'] = 'Explorat';
$string['browsemode'] = 'Mode d\'exploració';
$string['browserepository'] = 'Explora el repositori';
$string['calculatedweight'] = 'Pes calculat';
$string['calendarend'] = '{$a} es tanca';
$string['calendarstart'] = '{$a} s\'obre';
$string['cannotaccess'] = 'No podeu cridar aquest script en aquest moment.';
$string['cannotfindsco'] = 'No s\'ha trobat SCO';
$string['closebeforeopen'] = 'Heu especificat una data de tancament anterior a la data d\'obertura.';
$string['collapsetocwinsize'] = 'Contrau l\'índex quan la mida de la finestra sigui menor de';
$string['collapsetocwinsizedesc'] = 'Aquest paràmetre us permet especificar la mida de la finestra per sota de la qual l\'índex es contraurà de forma automàtica.';
$string['compatibilitysettings'] = 'Configuració de compatibilitat';
$string['completed'] = 'Completat';
$string['completiondetail:completionstatuspassed'] = 'Superar l\'activitat';
$string['completiondetail:completionstatuscompleted'] = 'Completar l\'activitat';
$string['completiondetail:completionstatuscompletedorpassed'] = 'Completar o superar l\'activitat';
$string['completiondetail:completionscore'] = 'Obtenir una qualificació de {$a} o més';
$string['completiondetail:allscos'] = 'Fer tote sles parts de l\'activitat';
$string['completionscorerequired'] = 'Requereix una puntuació mínima';
$string['completionscorerequireddesc'] = 'Es requereix un percentatge mínim de {$a} per completar-se.';
$string['completionscorerequired_help'] = 'Si s\'activa aquest paràmetre, l\'usuari haurà de tenir almenys la puntuació mínima introduïda perquè aquesta activitat eXeLearning li sigui qualificada com a completa, a més a més de qualsevol altre requeriment de compleció de l\'activitat.';
$string['completionstatus_passed'] = 'Passat';
$string['completionstatus_completed'] = 'Completat';
$string['completionstatusallscos'] = 'Requereix que tots els scos retornin l\'estat de finalització';
$string['completionstatusallscos_help'] = 'Alguns paquets SCORM contenen múltiples components o "scos": quan està habilitat, tots els "scos" del paquet han de retornar l\'"estat de la lliçó" corresponent per tal que aquesta activitat es marqui com a completada.';
$string['completionstatusrequired'] = 'Estat requerit';
$string['completionstatusrequireddesc'] = 'L\'estudiant ha d\'aconseguir com a mínim un dels següents estats: {$a}';
$string['completionstatusrequired_help'] = 'Marcar un o més estats requerirà que l\'usuari aconsegueixi almenys un dels estats marcats perquè aquesta activitat eXeLearning li sigui qualificada com a completa o finalitzada, a més a més de necessitar complir els altres requeriments de finalització de l\'activitat, si hi haguera.';
$string['confirmloosetracks'] = 'Avís: sembla que s\'hagi canviat o modificat el paquet. Si l\'estructura del paquet ha canviat, les dades de seguiment dels usuaris es podrien perdre durant l\'actualització.';
$string['contents'] = 'Continguts';
$string['coursepacket'] = 'Paquet de curs';
$string['coursestruct'] = 'Estructura del curs';
$string['crontask'] = 'Processament en segon pla del mòdul SCORM';
$string['currentwindow'] = 'Finestra actual';
$string['datadir'] = 'S\'ha produït un error del sistema de fitxers: no s\'ha pogut crear el directori de dades del curs';
$string['defaultdisplaysettings'] = 'Configuració de pantalla predeterminada';
$string['defaultgradesettings'] = 'Configuració de qualificacions predeterminada';
$string['defaultothersettings'] = 'Altres configuracions predeterminades';
$string['deleteattemptcheck'] = 'Està completament segur de que vol eliminar aquests intents?';
$string['deleteallattempts'] = 'Suprimeix tots els intents SCORM';
$string['deleteselected'] = 'Suprimeix els intents seleccionats';
$string['deleteuserattemptcheck'] = 'Esteu totalment segur de voler eliminar completament els vostres intents?';
$string['deleteattemptcheck'] = 'Està completament segur de que vol eliminar aquests intents?';
$string['details'] = 'Detalls de seguiment';
$string['directories'] = 'Mostra els enllaços del directori';
$string['disabled'] = 'Inhabilitat';
$string['display'] = 'Visualitza';
$string['displayattemptstatus'] = 'Mostrar estat dels intents';
$string['displayattemptstatus_help'] = 'Aquest paràmetre permet mostrar un resum dels intents de l\'usuari al bloc de resum del curs al Tauler i/o a la pàgina d\'entrada de l\'eXeLearning.';
$string['displayattemptstatusdesc'] = 'Determina si voleu mostrar o no un resum dels intents de l\'usuari al bloc de resum del curs ubicat al Tauler i/o a la pàgina d\'entrada de l\'eXeLearning';
$string['displaycoursestructure'] = 'Mostra l\'estructura del curs a la plana d\'entrada';
$string['displaycoursestructure_help'] = 'Si esta activat, la taula de continguts es mostrarà a la plana resum SCORM';
$string['displaycoursestructuredesc'] = 'Si està habilitat, la taula de continguts es mostra a la pàgina de resum de l\'activitat.';
$string['displaydesc'] = 'Aquesta preferència estableix el valor per defecte per mostrar o no el paquet d\'una activitat';
$string['displaysettings'] = 'Configuració de pantalla';
$string['dnduploadexescorm'] = 'Afegir un SCORM creat amb eXeLearning';
$string['domxml'] = 'Biblioteca externa DOMXML';
$string['editdialogcontent'] = 'Està a punt d\'editar el contingut a eXelearning. Quan acabi d\'editar, tornarà automàticament a Moodle.';
$string['editdialogcontent:caution'] = 'Modificar l\'estructura del contingut o de les activitats interactives pot provocar la pèrdua de qualificacions o intents, i causar errors en el funcionament.';
$string['editdialogcontent:continue'] = 'Vol continuar?';
$string['editonlinebtnlabel'] = 'Editar';
$string['editonlinebtnlabel_help'] = 'Enviï el contingut a eXeLearning per a la seva edició';
$string['element'] = 'Element';
$string['enter'] = 'Entra';
$string['entercourse'] = 'Entra al curs eXeLearning';
$string['errorlogs'] = 'Registre d\'errors';
$string['erroraccessingreport'] = 'Error en accedir a l\'informe';
$string['eventattemptdeleted'] = 'S\'ha suprimit l\'intent';
$string['eventinteractionsviewed'] = 'S\'han mostrat les interaccions';
$string['eventreportviewed'] = 'S\'han mostrat els informes';
$string['eventscolaunched'] = 'S\'ha llançat l\'SCO';
$string['eventscorerawsubmitted'] = 'Enviada puntuació SCORM';
$string['eventstatussubmitted'] = 'Enviat estatus SCORM';
$string['eventtracksviewed'] = 'Pistes mostrades';
$string['eventuserreportviewed'] = 'S\'ha mostrat l\'informe de l\'usuari';
$string['everyday'] = 'Cada dia';
$string['everytime'] = 'Cada vegada que s\'utilitzi';
$string['exceededmaxattempts'] = 'Has arribat al nombre màxim d\'intents';
$string['exescorm:addinstance'] = 'Afegir un SCORM creat amb eXeLearning';
$string['exescormclose'] = 'Disponible per a';
$string['exescormcourse'] = 'Curs d\'aprenentatge';
$string['exescorm:deleteresponses'] = 'Eliminar intents SCORM';
$string['exescorm:forbiddenfileslist'] = 'Fitxers prohibits Llista RE';
$string['exescorm:forbiddenfileslist_desc'] = 'Aquí pot cofigurar una llista de fitxers prohibits. Introdueixi cada fitxer prohibit com una expressió regular PHP (RE) en una nova línia. Per exemple:';
$string['exescorm:onlinetypehelp'] = 'Quan faci clic en qualsevol dels botons de desar a la part inferior d\'aquesta pàgina, el portarà a eXeLearning per crear o editar el contingut. Quan finalitzi, eXeLearning l\'enviarà de tornada a Moodle.';
$string['exescorm:sendtemplate'] = 'Enviar plantilla';
$string['exescorm:sendtemplate_desc'] = 'Envia la plantilla predeterminada a eXeLearning al crear un nou contingut.';
$string['exescorm:mandatoryfileslist'] = 'Fitxers obligatories Llista RE';
$string['exescorm:mandatoryfileslist_desc'] = 'Aquí es pot configurar una llista de fitxers obligatoris. Introdueixi cada fitxer obligatori com una expressió regular PHP (RE) en una nova línia.';
$string['exescormloggingoff'] = 'El registre de la API està desactivat';
$string['exescormloggingon'] = 'El registre de la API està desactivat';
$string['exescormopen'] = 'Disponible en';
$string['exescormresponsedeleted'] = 'Intents d\'usuari eliminats';
$string['exescorm:deleteownresponses'] = 'Esborrar els propis intents';
$string['exescorm:savetrack'] = 'Guardar pistes';
$string['exescorm:skipview'] = 'Saltar resum';
$string['exescorm:template'] = 'Nova plantilla de paquet.';
$string['exescorm:template_desc'] = 'El elp pujat aquí s\'utilizarà com paquet per defecte pels nou continguts. Es mostrarà fins que sigui substituit per l\'enviat per eXeLearning.';
$string['exescorm:editonlineanddisplay'] = 'Anar a eXeLearning i mostrar';
$string['exescorm:editonlineandreturntocourse'] = 'Anar a eXeLearning i tornar al curs';
$string['exescormtype'] = 'Tipus';
$string['exescormtype_help'] = 'Aquest ajustament determina com s\'inclou el paquet en el curs. Hi ha 2 opcions:

* Paquete pujat - Permet escollir l\' SCORM creat amb eXeLearning mitjançant el selector de fitxers.
* Editar amb eXeLearning - Crea l\'activitat i et porta a eXeLearning per editar el contingut. En finalitzar, eXeLearning el retornarà a Moodle.';
$string['exescorm:viewreport'] = 'Veure informes';
$string['exescorm:viewscores'] = 'Veure puntuacions';
$string['exeonline:connectionsettings'] = 'Configuració de la connexió amb eXeLearning';
$string['exeonline:baseuri'] = 'URI remot';
$string['exeonline:baseuri_desc'] = 'URL d\'eXeLearning';
$string['exeonline:hmackey1'] = 'Clau de signatura';
$string['exeonline:hmackey1_desc'] = 'Clau utilitzada per signar les dades enviades al servidor d\'eXeLearning, de forma que puguem estar segurs de que es van originar en aquest servidor. Utilitzi un màxim de 32 caracters.';
$string['exeonline:provider_name'] = 'Nom del proveïdor';
$string['exeonline:provider_name_desc'] = 'Nom del proveïdor d\'eXeLearning. Aquest s\'utilitza per identificar el proveidor a la interfície d\'eXeLearning.';
$string['exeonline:provider_version'] = 'Versió del proveïdor';
$string['exeonline:provider_version_desc'] = 'Versió del proveïdor d\'eXeLearning. Aquest s\'utilitza per identificar el proveidor a la interfície d\'eXeLearning.';
$string['exeonline:tokenexpiration'] = 'Caducitat del token';
$string['exeonline:tokenexpiration_desc'] = 'Temps màxim (en segons) per editar el paquete en eXeLearning i tornar a Moodle.';
$string['exit'] = 'Surt del curs';
$string['exitactivity'] = 'Surt de l\'activitat';
$string['expired'] = 'Aquesta activitat es va tancar el dia {$a} i ja no està disponible';
$string['external'] = 'Termini d\'actualització de paquets externs';
$string['failed'] = 'Fallat';
$string['finishexescorm'] = 'Si ha finalitzat de veure aquest recurs, {$a}';
$string['finishexescormlinkname'] = 'Faci clic aquí per tornar a la pàgina del curs';
$string['firstaccess'] = 'Primer accés';
$string['firstattempt'] = 'Primer intent';
$string['floating'] = 'Flotant';
$string['forcecompleted'] = 'Forçar completats';
$string['forcecompleted_help'] = 'Si s\'habilita, l\'estat de l\'intent actual es canvia a "completat". (Aquest paràmetre només s\'aplica als paquets SCORM 1.2.)';
$string['forcecompleteddesc'] = 'Aquesta preferència estableix el valor per defecte per mostrar el paràmetre forçar completats';
$string['forcenewattempts'] = 'Forçar nou intent';
$string['forcenewattempts_help'] = 'Hi ha 3 opcions:

* No: si un intent anterior es completa, passa o falla, es proporcionarà a l\' estudiant l\'opció d\'ingressar en mode de revisió o iniciar un nou intent.
* Quan l\'intent anterior es va completar, passar o fallar, es basa en el paquet SCORM que estableix l\'estat de \'completat\', \'aprobat\' o \'errat\'.
* Sempre: cada retorn a l\'activitat SCORM generarà un nou intent i l\'alumne no retornarà al mateix punt al que va arribar en el seu intent anterior.';
$string['forceattemptalways'] = 'Sempre';
$string['forceattemptoncomplete'] = 'Quan l\'intent anterior s\'ha completat, s\'ha passat o errat';
$string['forcejavascript'] = 'Forçar als usuaris a habilitar JavaScript';
$string['forcejavascript_desc'] = 'Si està activat (recomanat), impedeix l\'accés als objectes SCORM quan JavaScript no és compatible amb el navegador de l\'usuari o no hi està activat. Si està desactivat, l\'usuari pot veure l\'SCORM, però la comunicació API fallarà i no es desarà la qualificació.';
$string['forcejavascriptmessage'] = 'Es requereix JavaScript per veure aquest objecte; activeu JavaScript al vostre navegador i torneu a provar-ho.';
$string['found'] = 'S\'ha trobat el manifest';
$string['frameheight'] = 'Alçada per defecte del marc o finestra';
$string['framewidth'] = 'Amplada per defecte del marc o finestra';
$string['fromleft'] = 'Des de l\'esquerra';
$string['fromtop'] = 'Des de dalt';
$string['fullscreen'] = 'Omple la pantalla completa';
$string['general'] = 'Dades generals';
$string['gradeaverage'] = 'Qualificació mitjana';
$string['gradeforattempt'] = 'Qualificació de l\'intent';
$string['gradehighest'] = 'Qualificació més alta';
$string['grademethod'] = 'Mètode de qualificació';
$string['grademethod_help'] = 'El mètode de qualificació defineix com es determina la qualificació d\'un intent en l\'activitat.

Hi ha quatre mètodes d\'avaluació:

* Objectes d\'aprenentatge - El nombre d\'objectes d\'aprenentatge que s\'han completat/superat

* Qualificació més alta - La puntuació més alta obtinguda en tots els objectes d\'aprenentatge superats

* Qualificació mitjana - La mitjana de totes les puntuacions

* Suma de qualificacions - La suma de totes les puntuacions';
$string['grademethoddesc'] = 'Aquesta preferència estableix el valor per defecte del mètode de qualificació d\'una activitat';
$string['gradenoun'] = 'Qualificació';
$string['gradereported'] = 'Qualificació enviada';
$string['gradesettings'] = 'Paràmetres de qualificació';
$string['gradescoes'] = 'Nombre de Sco';
$string['gradesum'] = 'Suma de qualificacions';
$string['height'] = 'Alçada';
$string['hidden'] = 'Ocult';
$string['hidebrowse'] = 'Inhabilita el mode de previsualització';
$string['hidebrowse_help'] = 'El mode de previsualització permet a l\'alumne navegar per una activitat abans de fer-hi un intent. Si el mode de previsualització està desactivat, el botó de previsualització està amagat.';
$string['hidebrowsedesc'] = 'El mode previsualització permet a l\'estudiant navegar per una activitat abans de intentar fer-la.';
$string['hideexit'] = 'Oculta l\'enllaç de sortida';
$string['hidereview'] = 'Oculta el botó Revisa';
$string['hidetoc'] = 'Mostra l\'estructura del curs en el reproductor';
$string['hidetoc_help'] = 'Aquest paràmetre especifica com es mostra la taula de continguts al reproductor SCORM.';
$string['hidetocdesc'] = 'Aquesta preferència especifica com es mostra l\'índex del curs al reproductor SCORM.';
$string['EXESCORM_HIGHESTATTEMPT'] = 'Intent més alte';
$string['chooseapacket'] = 'Tria un paquet SCORM';
$string['identifier'] = 'Identificador de pregunta';
$string['incomplete'] = 'Incomplet';
$string['indicator:cognitivedepth'] = 'SCORM cognitiva';
$string['indicator:cognitivedepth_help'] = 'Aquest indicador està basat en la profunditat cognitiva assolida per l\'estudiant en una activitat SCORM.';
$string['indicator:cognitivedepthdef'] = 'SCORM Cognitiu';
$string['indicator:cognitivedepthdef_help'] = 'El participant ha assolit aquest percentatge de la implicació cognitiva oferta per les activitats SCORM en el decurs d\'aquest interval d\'anàlisi (Nivells = No visualització, Visualització, Enviament, Visualització de retroalimentacions)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'SCORM social';
$string['indicator:socialbreadth_help'] = 'Aquest indicador està basat en l\'amplitud social assolida per l\'estudiant en una activitat SCORM.';
$string['indicator:socialbreadthdef'] = 'SCORM Social';
$string['indicator:socialbreadthdef_help'] = 'El participant ha assolit aquest percentatge de compromis social ofert per les activitats SCORM durant aques intèrval d\'anàlisi (Nivells = Sense participació, Només participant)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['interactions'] = 'Interaccions';
$string['masteryoverride'] = 'La puntuació de domini anul·la l\'estat';
$string['masteryoverride_help'] = 'Si està habilitat i es proporciona una puntuació de domini, quan es crida a LMSFinish i y s\'ha establert una puntuació neta, l\'estat es tornarà a calcular utilizant la puntuació neta i el de domini i s\'anul·larà qualsevol estat proporcionat per eXeLearning (inclós "incomplet").';
$string['masteryoverridedesc'] = 'Aquesta preferència estableix el valor per defecte de la nota mínima per aprobar sobrescribint el valor establert.';
$string['myattempts'] = 'Més intents';
$string['myaiccsessions'] = 'Les meves sessions AICC';
$string['repositorynotsupported'] = 'Sols els repositoris del sistema de fitxers estan suportats quan s\'enllaça directament a un fitxer imsmanifest.xml';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'Aquest és l\'identificador establert pel vostre paquet eXeLearning per a aquesta pregunta; l\'especificació eXeLearning no permet que se subministri el text de la pregunta completa.';
$string['trackcorrectcount'] = 'Recompte correcte';
$string['trackcorrectcount_help'] = 'Nombre de resultats correcte per a la pregunta';
$string['trackpattern'] = 'Patró';
$string['trackpattern_help'] = 'Aquesta seria una resposta correcta per a aquesta pregunta, no mostra la resposta dels alumnes.';
$string['tracklatency'] = 'Latència';
$string['tracklatency_help'] = 'Temps transcorregut entre el moment que l\'alumne te disponible la interacció i el moment de la primera resposta';
$string['trackresponse'] = 'Resposta';
$string['trackresponse_help'] = 'Aquesta és la resposta donada per l\'alumne a aquesta pregunta';
$string['trackresult'] = 'Resultat';
$string['trackresult_help'] = 'Mostra si l\'estudiant va introduir una resposta correcta.';
$string['trackscoremin'] = 'Puntuació mínima';
$string['trackscoremin_help'] = 'Valor mínim dintre del rang possible de puntuacions';
$string['trackscoremax'] = 'Puntuació màxima';
$string['trackscoremax_help'] = 'Valor màxim dintre del rang possible de puntuacions';
$string['trackscoreraw'] = 'Puntuació en brut';
$string['trackscoreraw_help'] = 'Nombre que reflexa el resultat de l\'alumne en relació amb el rang delimitat pels valors mínim i màxim';
$string['tracksuspenddata'] = 'Dades de suspensió';
$string['tracksuspenddata_help'] = 'Proporciona espai per emmagatzemar i recuperar dades entre sessions d\'aprenentatge';
$string['tracktime'] = 'Temps';
$string['tracktime_help'] = 'Hora en la que es va iniciar l\'intent';
$string['tracktype'] = 'Tipus';
$string['tracktype_help'] = 'Tipus de pregunta, per exemple "tria" o "resposta curta"';
$string['trackweight'] = 'Pes';
$string['trackweight_help'] = 'Pes assignat a l\'element';
$string['invalidactivity'] = 'L\'activitat SCORM és incorrecta';
$string['invalidmanifestname'] = 'Només podeu seleccionar el fitxer imsmanifest.xml o fitxers .zip';
$string['invalidstatus'] = 'Estat no vàlid';
$string['invalidurl'] = 'S\'ha especificat un URL no vàlid';
$string['invalidurlhttpcheck'] = 'L\'URL especificat no és vàlid. Missatge de depuració: <pre> {$a->cmsg} </pre>';
$string['invalidhacpsession'] = 'Sessió HACP no vàlida';
$string['invalidmanifestresource'] = 'AVÍS: Els següents recursos són al manifest però no s\'han pogut trobar';
$string['last'] = 'Darrer accés';
$string['lastaccess'] = 'Darrer accés';
$string['lastattempt'] = 'Darrer intent completat';
$string['lastattemptlock'] = 'Bloquejar després del darrer intent';
$string['lastattemptlock_help'] = 'Si està activat, a l\'estudiant se l\'impedeix executar el reproductor SCORM després d\'haver fet servir tots els intents disponibles.';
$string['lastattemptlockdesc'] = 'Si ho habiliteu, impedireu als estudiants llançar el reproductor SCORM després d\'usar tots els seus intents assignats.';
$string['location'] = 'Mostra la barra d\'ubicació';
$string['max'] = 'Puntuació màxima';
$string['maximumattempts'] = 'Nombre d\'intents';
$string['maximumattempts_help'] = 'Aquest paràmetre defineix el nombre d\'intents permesos als usuaris. Només funciona amb paquets SCORM 1.2 i AICC';
$string['maximumattemptsdesc'] = 'Aquesta preferència estableix el valor per defecte sobre el nombre màxim d\'intents per una activitat';
$string['maximumgradedesc'] = 'Aquesta preferència estableix el valor per defecte sobre la qualificació màxima d\'una activitat';
$string['menubar'] = 'Mostra la barra de menús';
$string['min'] = 'Puntuació mínima';
$string['minimumscoregreater'] = 'La puntuació mínima ha de ser major que 0.';
$string['missing_attribute'] = 'Falta l\'atribut {$a->attr} en l\'etiqueta {$a->tag}';
$string['missingparam'] = 'Falta un paràmetre necessari o el valor és incorrecte';
$string['missing_tag'] = 'Falta l\'etiqueta {$a->tag}';
$string['mode'] = 'Mode';
$string['modulename'] = 'eXeLearning (SCORM)';
$string['modulename_help'] = 'Un paquet SCORM creat amb eXeLearning és un conjunt de fitxers empaquetats segons un estàndard consensuat d\'objectes d\'aprenentatge. El mòdul d\'activitat eXeLearning (SCORM) permet pujar i afegir al curs fitxers zip que continguin paquets en format SCORM o AICC.

El contingut es mostra en varies pàgines amb navegació entre elles. Hi ha diverses opcions per mostrar el contingut en finestres emergents, amb índexs, botons de navegació, etc. Les activitats eXeLearning normalment inclouen preguntes, les qualificacions de les quals es desen al llibre de qualificacions.

Les activitat eXeLearning es poden emprar per:

* Fer presentacions amb contingut multimèdia i animacions
* Com una eina per avaluar';
$string['modulename_link'] = 'mod/mod_exescorm/view';
$string['modulenameplural'] = 'Paquets eXeLearning (SCORM)';
$string['nav'] = 'Mostra la navegació';
$string['nav_help'] = 'Aquest paràmetre especifica si s\'han de mostrar o ocultar els botons de navegació i la seva posició.

Hi ha 3 opcions:

* No - No es mostren els botons de navegació.
* Sota el contingut - El botons de navegació es mostren sota el contingut del paquet SCORM
* Flotant - Els botons de navegació es mostren surant, a la posició superior esquerra determinada pel paquet.';
$string['navdesc'] = 'Aquest paràmetre especifica si es mostren o s\'amaguen els botons de navegació i llurs posicions.';
$string['navpositionleft'] = 'Posició dels botons de navegació des de l\'esquerra en píxels.';
$string['navpositiontop'] = 'Posició dels botons de navegació des dalt en píxels.';
$string['networkdropped'] = 'El reproductor eXeLearning ha determinat que la vostra connexió a Internet no és fiable o s\'ha interromput. Si continueu en aquesta activitat eXeLearning, el seu progrés potser no es podrà desar. <br />
Hauríeu de sortir de l\'activitat ara, i tornar quan tingueu una connexió a Internet fiable.';
$string['newattempt'] = 'Comença un nou intent';
$string['next'] = 'Continua';
$string['noactivity'] = 'Res per informar';
$string['noattemptsallowed'] = 'Nombre d\'intents permesos';
$string['noattemptsmade'] = 'Nombre d\'intents realitzats';
$string['no_attributes'] = 'L\'etiqueta {$a->tag} ha de tenir atributs';
$string['no_children'] = 'L\'etiqueta {$a->tag} ha de tenir fills';
$string['nolimit'] = 'Intents il·limitats';
$string['nomanifest'] = 'Fitxer paquet incorrecte - falta el fitxer imsmanifest.xml o l\'estructura AICC';
$string['noprerequisites'] = 'No compliu prou prerequisits per accedir a aquest objecte d\'aprenentatge';
$string['noreports'] = 'No hi ha cap informe per visualitzar';
$string['normal'] = 'Normal';
$string['noscriptnoexescorm'] = 'El seu navegador no admet javascript, o té l\'opció javascript deshabilitada. Aquest contingut no pot reproduir-se o guardar les dades correctament.';
$string['notattempted'] = 'No intentat';
$string['not_corr_type'] = 'El tipus de l\'etiqueta {$a->tag} no coincideix';
$string['notopenyet'] = 'Aquesta activitat no estarà disponible fins al dia {$a}';
$string['objectives'] = 'Objectius';
$string['openafterclose'] = 'Ha especificat una data d\'apertura posterior a la data de tancament.';
$string['optallstudents'] = 'tots els usuaris';
$string['optattemptsonly'] = 'només usuaris amb intents';
$string['optnoattemptsonly'] = 'només usuaris sense intents';
$string['options'] = 'Opcions (Impedides per alguns navegadors)';
$string['optionsadv'] = 'Opcions (Avançat)';
$string['optionsadv_desc'] = 'Si està marcada, l\'amplada i l\'alçada es mostraran com a paràmetres avançats.';
$string['organization'] = 'Organització';
$string['organizations'] = 'Organitzacions';
$string['othersettings'] = 'Paràmetres addicionals';
$string['page-mod-exescorm-x'] = 'Qualsevol pàgina del mòdul eXelearning';
$string['pagesize'] = 'Mida de la plana';
$string['package'] = 'Fitxer del paquet';
$string['package_help'] = 'El fitxer de paquet és un fitxer zip que conté un SCORM generat amb eXeLearning.';
$string['packagedir'] = 'S\'ha produït un error del sistema de fitxers: no es pot crear el directori del paquet';
$string['packagefile'] = 'No s\'ha especificat cap fitxer del paquet';
$string['packagehdr'] = 'Paquet';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Aquest paràmetre habilita un URL per especificar un paquet eXeLearning en comptes de seleccionar un fitxer mitjançant el selector de fitxers.';
$string['passed'] = 'S\'ha passat';
$string['php5'] = 'PHP 5 (biblioteca nativa DOMXML)';
$string['player:next'] = 'Següent';
$string['player:prev'] = 'Anterior';
$string['player:skipnext'] = 'Següent del mateix nivell';
$string['player:skipprev'] = 'Anterior del mateix nivell';
$string['player:toogleFullscreen'] = 'Alternar pantalla completa';
$string['player:up'] = 'Pujar nivel';
$string['pluginadministration'] = 'Administració d\'eXeLearning (SCORM)';
$string['pluginname'] = 'eXeLearning (SCORM)';
$string['popup'] = 'Obre els objectes d\'aprenentatge en una altra finestra';
$string['popuplaunched'] = 'Aquest paquet SCORM ha estat llançat en una finestra emergent, si heu acabat de veure\'l cliqueu aquí per tornar a la pàgina del curs.';
$string['popupmenu'] = 'En un menú desplegable';
$string['popupopen'] = 'Obre el paquet en una finestra nova';
$string['popupsblocked'] = 'Sembla que les finestres emergents estan bloquejades, i aturen l\'execució d\'aquest mòdul SCORM. Comproveu la configuració del vostre navegador abans de començar de nou.';
$string['position_error'] = 'L\'etiqueta {$a->tag} no pot ser filla de {$a->parent}';
$string['preferencesuser'] = 'Preferències per aquest informe';
$string['preferencespage'] = 'Preferències només per aquesta plana';
$string['prev'] = 'Anterior';
$string['privacy:metadata:aicc:data'] = 'Dades personals passades mitjançant el subsistema.';
$string['privacy:metadata:aicc:externalpurpose'] = 'Aquest complement envia dades externament utilizant el protocol AICC HACP.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'Estat de la lliçó a rastrejar';
$string['privacy:metadata:aicc_session:exescormmode'] = 'Modus de l\'element a rastrejar';
$string['privacy:metadata:aicc_session:exescormstatus'] = 'Estat de l\'element a rastrejar';
$string['privacy:metadata:aicc_session:sessiontime'] = 'Temps de sessió a rastrejar';
$string['privacy:metadata:aicc_session:timecreated'] = 'L\'hora en què es va crear l\'element rastrejat';
$string['privacy:metadata:attempt'] = 'Número d\'intent';
$string['privacy:metadata:scoes_track:element'] = 'Nom de l\'element a rastrejar';
$string['privacy:metadata:scoes_track:value'] = 'Valor de l\'element donat';
$string['privacy:metadata:exescorm_aicc_session'] = 'Informació de sessió del protocol AICC HACP';
$string['privacy:metadata:exescorm_scoes_track'] = 'Les dades rastrejades de les SCOes que pertanyen a l\'activitat';
$string['privacy:metadata:timemodified'] = 'L\'hora en què l\'element rastrejat es va modificar per darrera vegada.';
$string['privacy:metadata:userid'] = 'ID de l\'usuari que va accedir al contingut eXeLearning.';
$string['protectpackagedownloads'] = 'Protegeix les descàrregues del paquet';
$string['protectpackagedownloads_desc'] = 'Si s\'habilita, els paquets eXeLearning sols es poden descarregar si l\'usuari té la capacitat "course:manageactivities". Si està inhabilitat, els paquets eXeLearning sempre es poden descarregar (amb mòbils o altres mitjans).';
$string['raw'] = 'Puntuació bruta';
$string['regular'] = 'Manifest normal';
$string['report'] = 'Informe';
$string['reports'] = 'Informes';
$string['reportcountallattempts'] = '{$a->nbattempts} intents de {$a->nbusers} usuaris, d\'un total de {$a->nbresults} resultats';
$string['reportcountattempts'] = '{$a->nbresults} resultats ({$a->nbusers} users)';
$string['response'] = 'Resposta';
$string['result'] = 'Resultat';
$string['results'] = 'Resultats';
$string['review'] = 'Revisa';
$string['reviewmode'] = 'Mode de revisió';
$string['rightanswer'] = 'Resposta correcta';
$string['exescormstandard'] = 'Modus estàndard';
$string['exescormstandarddesc'] = 'Quan està deshabilitat, Moodle permet que els paquets SCORM 1.2 emmagatzemin més del que permet l\'especificació, i utilitza la configuració de format de nom complet de Moodle quan passa el nom dels usuaris al paquet eXeLearning.';
$string['scoes'] = 'Objectes d\'aprenentatge';
$string['score'] = 'Puntuació';
$string['scrollbars'] = 'Permet el desplaçament de la finestra';
$string['search:activity'] = 'Paquet eXeLearning (SCORM) - Informació de l\'activitat';
$string['selectall'] = 'Selecciona-ho tot';
$string['selectnone'] = 'Desselecciona-ho tot';
$string['show'] = 'Mostrar';
$string['sided'] = 'A un costat';
$string['skipview'] = 'L\'estudiant omet la pàgina d\'estructura';
$string['skipview_help'] = 'Aquest paràmetre especifica si la pàgina d\'estructura dels continguts ha de ser omesa (no es mostra). Si el paquet conté només un objecte d\'aprenentatge, la pàgina de l\'estructura del contingut sempre es pot ometre.';
$string['skipviewdesc'] = 'Aquesta preferència estableix el valor per defecte sobre quan passar de la estructura del contingut d\'una plana';
$string['slashargs'] = 'AVÍS: els arguments en barra estan inhabilitats en aquest lloc, i és possible que els objectes no tinguin el funcionament esperat.';
$string['stagesize'] = 'Mida del marc o finestra';
$string['stagesize_help'] = 'Aquests dos paràmetres defineixen l\'amplada i l\'alçada del marc o finestra del objectes d\'aprenentatge.';
$string['started'] = 'Iniciat';
$string['status'] = 'Estat';
$string['statusbar'] = 'Mostra la barra d\'estat';
$string['student_response'] = 'Resposta';
$string['subplugintype_exescormreport'] = 'Informe';
$string['subplugintype_exescormreport_plural'] = 'Informes';
$string['suspended'] = 'Suspès';
$string['syntax'] = 'S\'ha produït un error de sintaxi';
$string['tag_error'] = 'Etiqueta desconeguda ({$a->tag}) amb aquest contingut: {$a->value}';
$string['time'] = 'Temps';
$string['title'] = 'Títol';
$string['toolbar'] = 'Mostra la barra d\'eines';
$string['too_many_attributes'] = 'L\'etiqueta {$a->tag} té massa atributs';
$string['too_many_children'] = 'L\'etiqueta {$a->tag} té massa fills';
$string['totaltime'] = 'Temps';
$string['trackingloose'] = 'ATENCIÓ: les dades de seguiment d\'aquest paquet es perdran.';
$string['type'] = 'Tipus';
$string['typeaiccurl'] = 'URL AICC externa';
$string['typeexescormcreate'] = 'Crear amb eXeLearning';
$string['typeexescormedit'] = 'Editar amb eXeLearning';
$string['typeexternal'] = 'Manifest SCORM extern';
$string['typelocal'] = 'Paquet pujat';
$string['typelocalsync'] = 'Paquet descarregat';
$string['undercontent'] = 'Sota el contingut';
$string['unziperror'] = 'S\'ha produït un error durant la descompressió del paquet';
$string['updatefreq'] = 'Freqüència d\'actualització automàtica';
$string['updatefreq_error'] = 'Auto actualitza la freqüència sols pot establir-se quan el paquet és allotjat externament';
$string['updatefreq_help'] = 'Això permet al paquet extern ser descarregat i actualitzat de forma automàtica';
$string['updatefreqdesc'] = 'Aquesta preferència estableix el valor per defecte sobre la freqüència d\'actualització automàtica d\'una activitat';
$string['validateaexescorm'] = 'Validar un paquet';
$string['validation'] = 'Resultat de la validació';
$string['validationtype'] = 'Aquesta preferència defineix la biblioteca DOMXML utilitzada per validar el manifest SCORM. Si no sabeu, deixeu l\'opció seleccionada per defecte.';
$string['value'] = 'Valor';
$string['versionwarning'] = 'La versió del manifest és anterior a la 1.3, avís en l\'etiqueta {$a->tag}';
$string['viewallreports'] = 'Visualitza informes de {$a} intents';
$string['viewalluserreports'] = 'Veure els informes de {$a} usuaris';
$string['whatgrade'] = 'Qualificació dels intents';
$string['whatgrade_help'] = 'Si es permeten intents múltiples, aquest paràmetre especifica si s\'emmagatzema al llibre de qualificacions el valor més alt, el valor mitjà (la mitjana), el primer intent completat o el darrer. L\'opció del darrer intent completat no inclou intents amb un estat "fallat".

Notes sobre el maneig d\'intents múltiples:

* Una casella de selecció que es troba damunt del botó "Entra" a la pàgina de l\'estructura del contingut proporciona l\'opció de començar un nou intent; per tant, assegureu-vos que proporcioneu accés a aquesta pàgina si voleu permetre més d\'un intent.

* Alguns paquets SCORM són intel·ligents pel que fa als nous intents, però molts d\'altres, no. Això vol dir que si l\'estudiant torna a introduir un intent que ja existeix, si el contingut SCORM no té una lògica interna per evitar sobreescriure intents anteriors aquests es poden sobreescriure, encara que l\'intent estigui "completat" o "passat".

* Els paràmetres "Forçar completats", "Forçar nou intent" i "Bloquejar després del darrer intent" també proporcionen una gestió addicional dels intents múltiples.';
$string['whatgradedesc'] = 'Si s\'enregistra en el butlletí de qualificacions la qualificació més alta, la mitjana, la del primer o la del darrer intent completat, si es permeten diversos intents.';
$string['width'] = 'Amplada';
$string['window'] = 'Finestra';
$string['youmustselectastatus'] = 'Ha de seleccionar un estat que serà requerit';
$string['info'] = 'Info';
$string['displayactivityname'] = 'Mostra el nom de l\'activitat';
$string['displayactivityname_help'] = 'Si cal mostrar o no el nom de l\'activitat al damunt del reproductor eXeLearning';

