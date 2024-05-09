<?php
/*
+---------------------------------------------------------------+
|        e107 sítio internet content management system Portuguese Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2021/02/14 20:24:21
|
|        $Author: Ricardo $
+---------------------------------------------------------------+
*/
define("UCSLAN_30", "Nome curto exibido em seletores");
define("UCSLAN_31", "Informações sobre a aplicabilidade da classe");
define("UCSLAN_32", "utilizadores nesta classe podem adicionar/remover próprios da classe sendo editado");
define("UCSLAN_33", "Determina quais utilizadores podem ver essa classe em listas drop-down");
define("UCSLAN_36", "Se o topo da árvore é 'Ninguém', permissões aumentam em direção ao topo da árvore<br>Se o topo da árvore é 'Todos', permissões aumentam à medida que você descer da árvore");
define("UCSLAN_37", "Você deve digitar um nome para a classe");
define("UCSLAN_38", "Classe de utilizador inicial");
define("UCSLAN_39", "Não há classes que podem ser definidas");
define("UCSLAN_40", "Conjunto de classes iniciais");
define("UCSLAN_41", "Configurações atualizadas");
define("UCSLAN_43", "Classes existentes:");
define("UCSLAN_45", "Ponto em que classes de conjunto:");
define("UCSLAN_46", "(ignorado se não verificação)");
define("UCSLAN_47", "Inscrição inicial");
define("UCSLAN_48", "Verificação por endereço electrónico ou admin");
define("UCSLAN_49", "Essas classes são definidas para qualquer utilizador recentemente se inscreveu - associação quer imediatamente, ou uma vez seu site foi verificada");
define("UCSLAN_53", "Cuidado! Só usar essas opções se você entende o que eles fazem");
define("UCSLAN_54", "Definir uma hierarquia de utilizador padrão");
define("UCSLAN_55", "Limpar a hierarquia de utilizador");
define("UCSLAN_56", "(isso define uma estrutura de classe de utilizador 'plana')");
define("UCSLAN_57", "(a hierarquia pode ser modificada mais tarde)");
define("UCSLAN_58", "Executar");
define("UCSLAN_62", "Crie a árvore de classe padrão:");
define("UCSLAN_63", "Esse nome de classe já existe - por favor escolha outro");
define("UCSLAN_64", "concluído");
define("UCSLAN_65", "Achate a hierarquia de classes de utilizador:");
define("UCSLAN_69", "Opcional ícone associado com classe - diretório");
define("UCSLAN_70", "Reconstruindo a hierarquia de classe:");
define("UCSLAN_71", "Manutenção de classe de utilizador");
define("UCSLAN_72", "Reconstruir a hierarquia de classes");
define("UCSLAN_73", "(Pode ser necessária se ocorrer corrupção de banco de dados)");
define("UCSLAN_74", "Os administradores e moderadores");
define("UCSLAN_75", "Membros registrados e logados");
define("UCSLAN_76", "Administradores do site");
define("UCSLAN_77", "Os administradores de site principal");
define("UCSLAN_78", "Moderadores de fóruns e outras áreas");
define("UCSLAN_80", "Padrão");
define("UCSLAN_81", "Grupo");
define("UCSLAN_82", "Um grupo reúne uma série de aulas individuais");
define("UCSLAN_83", "Aulas em grupo");
define("UCSLAN_85", "Você tem atribuído a todas as classes disponíveis; por favor, reatribuir um que não está em uso");
define("UCSLAN_86", "Algumas configurações não permitida para classes de admin - eles tiverem sido definidos para os padrões.");
define("UCSLAN_87", "Recentemente se juntou aos utilizadores");
define("UCSLAN_88", "Robôs de busca identificados");
define("UCSLAN_89", "Verificado as classes são membros do grupo");
define("UCSLAN_90", "Você não pode editar certas classes de utilizador do sistema!");
define("UCSLAN_91", "Estrutura da classe");
define("UCSLAN_92", "Ajuda da classe de utilizador");
define("UCSLAN_93", "Você pode selecionar classes para edição e também excluir classes existentes nesta página.");
define("UCSLAN_94", "Defina as classes às quais um novo membro do site será atribuído inicialmente.
Se você tiver a verificação ativada, essa atribuição poderá ocorrer quando o utilizador se inscrever ou quando o utilizador for verificado.<br /><br />
E lembre-se de que se você estiver usando classes de utilizador hierárquicas, um utilizador será automaticamente membro de todas as classes 'acima' de cada classe selecionada na árvore");
define("UCSLAN_95", "As opções de configuração permitem criar e remover a hierarquia de classes padrão. Você pode ver o efeito olhando a árvore de usuários.<br />
Isso não destruirá as informações de outras classes e você poderá modificar ou remover a hierarquia posteriormente.<br /><br />
Você só precisará reconstruir a hierarquia de classes se ocorrer corrupção do banco de dados");
define("UCSLAN_96", "Você pode criar classes ou editar classes existentes nesta página.<br />         Isso é útil para restringir usuários a determinadas partes do seu site. Por exemplo, você poderia criar uma classe chamada TEST,
em seguida, crie um fórum que permita apenas que usuários da classe TEST o acessem.<br /><br />
O nome da classe é exibido em listas suspensas e similares; em alguns lugares, a descrição mais detalhada também é exibida.<br /><br />
O ícone da classes poderá ser exibido em vários locais do site, caso haja algum configurado.<br /><br />
Para permitir que os usuários determinem se podem ser membros de uma classe, permita que eles a gerenciem. Se você definir 'ninguém' aqui, apenas os administradores
pode gerenciar a associação da classe<br /><br />");
define("UCSLAN_97", "Para permitir que os usuários determinem se podem ser membros de uma classe, permita que eles a gerenciem. Se você definir 'ninguém' aqui, apenas os administradores pode gerenciar a associação da classe<br /><br />
O campo 'visibilidade' permite ocultar a classe da maioria dos membros - aplica-se em algumas listas suspensas e caixas de seleção.<br /><br />
A 'classe pai' permite definir uma hierarquia de classes. Se o 'topo' da hierarquia for a classe 'Todos/Público' ou 'Membro', o
as classes mais abaixo na hierarquia também têm os direitos de sua classe pai, e do pai dessa classe, e assim por diante. Se o 'topo' da hierarquia for
classe 'Ninguém/Ninguém', então os direitos são acumulados na direção oposta - uma classe acumula todos os direitos de uma classe <b>abaixo</b> dela no
árvore. A árvore resultante é mostrada na parte inferior da página; você pode expandir e contrair filiais clicando nas caixas '+' e '-'.");
