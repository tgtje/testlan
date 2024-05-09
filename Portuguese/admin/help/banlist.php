<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/banlist.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Banindo utilizadores do seu site";
if (e_QUERY) list($action,$junk) = explode('-',e_QUERY.'-'); else $action = 'list';		// Non-standard separator in query

switch ($action)
{
case 'transfer' :
$text = 'Esta p�gina permite que voc� transfira dados de listas banidas de e para este site como arquivos CSV (Comma Separated Variable).<br /><br />';
  $text .= "<b>Exporta��o de dados</b><br />
  Selecione os tipos de proibi��o a exportar. Os campos ser�o delimitados pelo separador escolhido, e opcionalmente inclu�dos entre aspas selecionadas.<br /><br />";
  $text .= "<b>Importa��o de dados</b><br />
  Voc� pode escolher se as proibi��es importadas substituem as proibi��es importadas existentes ou se s�o adicionadas � lista. Se os dados importados inclu�rem uma data/hora de expira��o, voc�
  pode selecionar se isso ser� usado ou se o valor deste site ser� usado.<br /><br />";
  $text .= "<b>Formato CSV</b><br />
  O formato de cada linha do arquivo �: IP/endere�o electr�nico, data, expira��o, tipo, motivo, notas.<br />
  A data e o vencimento est�o no formato AAAAMMDD_HHMMDD, exceto que um valor zero indica 'desconhecido' ou 'indefinido'<br />
  Apenas o endere�o IP ou endere�o electr�nico � essencial; os outros campos ser�o importados se estiverem presentes.<br /><br />
  <b>Observa��o:</b> Voc� precisar� modificar filetypes.xml para permitir que os administradores carreguem o tipo de arquivo 'CSV'.";
  break;
case 'times' :
$text = 'Esta p�gina define o comportamento padr�o para v�rios tipos de banimento.<br />
  Se uma mensagem for especificada, ela ser� mostrada ao utilizador (quando apropriado). Se a mensagem come�ar com \'http://\' ou \'https://\' o controle ser�
  passado para o URL especificado. Caso contr�rio, o utilizador provavelmente ver� uma tela em branco.<br />
  A proibi��o vigorar� pelo tempo especificado; ap�s isso ser� apagado na pr�xima vez que acessarem o site.';
  break;
case 'options' :
$text = '<b>DNS reverso</b><br />
    Se ativado, o endere�o IP do utilizador � consultado para obter o nome de dom�nio associado. Isso acessa um servidor externo, ent�o pode haver
haver� um atraso antes que a informa��o esteja dispon�vel - e se o servidor estiver off-line, poder� haver um atraso muito longo.<br /><br />
Voc� pode optar por procurar nomes de servidores em todos os acessos ao site, ou apenas ao adicionar um novo ban.<br /><br />
<b>Taxa m�xima de acesso</b><br />
Isto define o n�mero m�ximo de acessos ao site permitidos a partir de um �nico utilizador ou endere�o IP em qualquer per�odo de cinco minutos e tem como objetivo
para detectar ataques de nega��o de servi�o. Ao atingir 90% do limite selecionado, o utilizador recebe um aviso; ao atingir o limite s�o banidos.
Limites diferentes podem ser definidos para convidados e usu�rios logados.<br /><br />
<b>Per�odo de proibi��o de reativa��o</b><br />
Esta op��o s� � relevante se a op��o de banir usu�rios por um per�odo determinado, em vez de indefinidamente, tiver sido usada. Se habilitado, e
o utilizador tenta acessar o site, o per�odo de banimento � estendido (como se o banimento tivesse acabado de come�ar).
	';
  break;
case 'edit' :
case 'add' :
$text = "Voc� pode banir usu�rios do seu site nesta tela.<br />
Insira o endere�o IP completo ou use um curinga para banir um intervalo de endere�os IP. Voc� tamb�m pode inserir um endere�o electr�nico para impedir que um utilizador se registre como membro do seu site.<br /><br />
<b>Banir por endere�o IP:</b><br />
Inserir o endere�o IP 123.123.123.123 impedir� que o utilizador com esse endere�o visite seu site.<br />
Inserir um endere�o IP com um ou mais curingas nos blocos finais, como 123.123.123.* ou 214.098.*.*, impedir� que qualquer pessoa nesse intervalo de IP visite seu
site. (Observe que deve haver exatamente quatro grupos de d�gitos ou asteriscos)<br /><br />
Endere�os no formato IPV6 tamb�m s�o suportados, incluindo '::' para representar um bloco de valores zero. Cada par de d�gitos nos campos finais pode ser um curinga separado<br /><br />
<b>Banir por endere�o electr�nico</b><br />
Inserir o endere�o electr�nico foo@bar.com impedir� que qualquer pessoa que use esse endere�o electr�nico se registre como membro do seu site.<br />
Inserir o endere�o electr�nico *@bar.com impedir� que qualquer pessoa que use esse dom�nio de endere�o electr�nico se registre como membro do seu site.<br /><br />
<b>Banir por nome de utilizador</b><br />
Isso � feito na p�gina de administra��o de usu�rios.<br /><br />";
  break;
case 'whadd' :
case 'whedit' :
$text = "Voc� pode especificar endere�os IP que voc� sabe que s�o 'amig�veis' aqui - geralmente aqueles dos principais administradores do site, para garantir que eles possam
  sempre tenha acesso ao site.<br />
  � aconselh�vel manter o n�mero de endere�os nesta lista no m�nimo absoluto; tanto para seguran�a quanto para minimizar o impacto no desempenho do site.";
  break;
case 'banlog' :
$text = 'Mostra uma lista de todos os acessos ao site envolvendo um endere�o que est� na lista de banimentos ou na lista branca. A coluna \'motivo\' mostra o resultado.';
  break;
case 'white' :
$text = "Esta p�gina mostra uma lista de todos os endere�os IP e endere�os de endere�o electr�nico que s�o explicitamente permitidos.<br />
    Esta lista tem prioridade sobre a lista de banimentos - n�o deveria ser poss�vel banir um endere�o desta lista.<br />
Todos os endere�os devem ser inseridos manualmente.";
  break;
case 'list' :
default :
$text = 'Esta p�gina mostra uma lista de todos os endere�os IP, nomes de host e endere�os de endere�o electr�nico que foram banidos.
(Usu�rios banidos s�o mostrados na p�gina de administra��o de usu�rios)<br /><br />
<b>Banimentos Autom�ticos</b><br />
O e107 bane automaticamente endere�os IP individuais se eles tentarem inundar o site, bem como endere�os com falhas de entrar.<br />
Essas proibi��es tamb�m aparecem nesta lista. Voc� pode selecionar (na p�gina de op��es) o que fazer para cada tipo de banimento.<br /><br />
<b>Removendo um banimento</b><br />
Voc� pode definir um per�odo de expira��o para cada tipo de banimento; nesse caso, a entrada ser� removida assim que o per�odo de banimento expirar. Caso contr�rio, o
 o banimento permanece at� que voc� o remova.<br />
Voc� pode modificar o per�odo de banimento nesta p�gina - os tempos s�o calculados a partir de agora.';
}
$ns -> tablerender($caption, mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
