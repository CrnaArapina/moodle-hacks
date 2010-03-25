<?PHP // $Id: mnet.php,v 1.2 2008/10/02 22:57:43 papita Exp $ 
      // mnet.php - created with Moodle 1.9.2+ (Build: 20080903) (2007101522)


$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (auto-assinado)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (assinado)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP decriptado';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (auto-assinado)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (assinado)';
$string['aboutyourhost'] = 'O seu servidor';
$string['accesslevel'] = 'Nível de acesso';
$string['addhost'] = 'Adicionar hospedeiro';
$string['addnewhost'] = 'Adicionar novo hospedeiro';
$string['addtoacl'] = 'Adicionar a controle de acesso';
$string['allow'] = 'Permitir';
$string['authfail_nosessionexists'] = 'Autorização falida: a sessão mnet não existe.';
$string['authfail_sessiontimedout'] = 'Autorização falida: a sessão mnet superou o limite de tempo.';
$string['authfail_usermismatch'] = 'Autorização falida: o usuário não tem equivalentes.';
$string['authmnetautoadddisabled'] = '<em>Adicionar usuários automaticamente</em> está <strong>desabilitado</strong> no plugin de rede Moodle.';
$string['authmnetdisabled'] = 'O plugin de <em>autenticação</em> de rede Moodle está <strong>desabilitado</strong>.';
$string['badcert'] = 'Este certificado não é válido.';
$string['couldnotgetcert'] = 'Nenhum certificado encontrado em <br />$a. <br />O hospedeiro pode estar desligado ou configurado em modo errado.';
$string['couldnotmatchcert'] = 'Isto não combina com o certificado publicado atualmente pelo servidor web';
$string['courses'] = 'cursos';
$string['courseson'] = 'cursos em';
$string['current_transport'] = 'Transporte atual';
$string['currentkey'] = 'Chave pública atual';
$string['databaseerror'] = 'Não foi possível escrever os detalhes no banco de dados';
$string['deleteaserver'] = 'Excluindo um server';
$string['deletehost'] = 'Excluindo o hospedeiro';
$string['deletekeycheck'] = 'tem certeza que quer apagar esta chave?';
$string['deleteoutoftime'] = 'Tente novamente. O limite de 60 segundos para apagar esta chave acabou.';
$string['deleteuserrecord'] = 'SSO ACL: apagar registro do usuário \'$a[0]\' de $a[1].';
$string['deletewrongkeyvalue'] = 'Erro. Se você nãao estava tentando apagar a chave SSL do seu servidor, é possível que tennha ocorrido um ataque malicioso.';
$string['deny'] = 'Negar';
$string['description'] = 'Descrição';
$string['duplicate_usernames'] = 'Erro ao criar um índice nas colunas \"mnethostid\" e \"username\" na tabela de usuários.<br /> Isto acontece quando há <a href=\"$a\" target=\"_blank\">nomes de usuários duplicados</a>.<br />O upgrade vai continuar com sucesso. Clicando o link acima é possível acessar instruções para a resolução deste problema. Você pode esperar o fim do upgrade antes de fazer isto.<br />';
$string['editenrolments'] = 'Inscrever';
$string['enabled_for_all'] = '(Este serviço foi habilitado para todos os hospedeiros)';
$string['enrolcourseenrol_desc'] = 'Inscrever e desinscrever usuários deste curso usando a Rede Moodle. Os usuários podem ter sido inscritos usando outros métodos. Estas inscrições são listadas em <em>Outros usuários inscritos</em>';
$string['enrolcourses_desc'] = 'Cursos con inscrição remota oferecidos por este site.';
$string['enrollingincourse'] = 'Inscrevendo no curso $a[0] do site $a[1]<br />';
$string['enrolments'] = 'inscrições';
$string['enterausername'] = 'Favor inserir um nome de usuário ou uma lista de usuários separados por vírgulas.';
$string['error7020'] = 'Este erro ocorre se o site remoto criou um registro com o wwwroot errado, por exemplo, http://yoursite.com em lugar de http://www.yoursite.com. Contate o administrador do site remoto para que seja possível atualizar os dados segundo o seu config.php';
$string['error7022'] = 'A mensagem enviada ao site remoto não estava assinada. Isto é estranho, provavelmente se trata de um bug.';
$string['error7023'] = 'O site remoto não conseguiu decriptar a sua mensagem com as chaves que tem. Tente reconfigurar as chaves no site remoto. Isto acontece quando as comunicações entre os sites são interrompidas por períodos longos.';
$string['error7024'] = 'Você manda uma mensagem decriptada ao site remoto mas este não aceita este tipo de comunicação. Isto é estranho, provavelmente se trata de um bug. Indique este bug no bugtracker de moodle.org';
$string['error7026'] = 'A chave che marcou a sua mensagem é diferente da chave que hospedeiro remote tem registrada. O hospedeiro tentou obter a nova chave mas falhou. Reconfigure manualmente a comunicação da chave.';
$string['error709'] = 'O site remoto não conseguiu obter a sua chave SSL.';
$string['expired'] = 'Esta chave terminou em';
$string['expires'] = 'Válido até';
$string['expireyourkey'] = 'Apagar esta chave';
$string['expireyourkeyexplain'] = 'Moodle faz a rotação automatica de suas chaves a cada 28 dias (por padrão) mas você pode terminar esta chave manualmente. Isto é útil se você achar que a chave tem riscos. Uma nova chave é criada automaticamente. Cancelando esta chave, os outros Moodles não conseguem mais entrar em comunicação com o seu. Reconfigure a comunicação contatando os administradores dos sites remotos e indicando a nova chave.';
$string['failedaclwrite'] = 'Erro ao escrever na lista de controle de acesso MNET, usuário \'$a\'.';
$string['forbidden-function'] = 'Esta funcionalidade não está habilitada para RPC.';
$string['forbidden-transport'] = 'O método de transporte usado não é autorizado.';
$string['forcesavechanges'] = 'Forçar Salvar Mudanças';
$string['helpnetworksettings'] = 'Configura comunicação entre Moodles';
$string['hidelocal'] = 'Oculta usuários locais';
$string['hideremote'] = 'Oculta usuários remotos';
$string['host'] = 'hospedeiro';
$string['hostcoursenotfound'] = 'Hospedeiro ou curso não encontrado';
$string['hostdeleted'] = 'OK - hospedeiro excluído';
$string['hostexists'] = 'Um registro já existe identificando este hospedeito e a instalação de moodle com ID ID $a.<br />Clique em <em>Continuar</em> para editar este registro.';
$string['hostname'] = 'Nome do hospedeiro';
$string['hostnamehelp'] = 'O nome do dominio do site remoto, ex. www.examplo.com';
$string['hostnotconfiguredforsso'] = 'Esta central Moodle remota não está configurada para login remoto.';
$string['hostsettings'] = 'Configuração do hospedeiro';
$string['http_self_signed_help'] = 'Permitir conexões usando um certificado DIY SSL auto-assinado no servidor remoto.';
$string['http_verified_help'] = 'Permitir conexões usando um certificado SSL verificado com PHP no servidor remoto, mas com http (not https).';
$string['https_self_signed_help'] = 'Permitir conexões usando um certificado DIY SSL auto-assinado no servidor remoto usando http.';
$string['https_verified_help'] = 'Permitir conexões usando um certificado SSL verificado no servidor remoto.';
$string['id'] = 'ID';
$string['idhelp'] = 'Este valor é designado automaticamente e não pode ser mudado';
$string['illegalchar-host'] = 'O seu nome de hospedeiro contém caracteres não autorizados: $a';
$string['illegalchar-moodlehome'] = 'O endereço do seu moodle contém caracteres não autorizados: $a';
$string['invalidaccessparam'] = 'Parametro de acesso inválido';
$string['invalidactionparam'] = 'parametrode ação inválido';
$string['invalidhost'] = 'Você tem que fornecer uma identificação de hospedeiro válida';
$string['invalidpubkey'] = 'A chave não é uma chave SSL valida';
$string['invalidurl'] = 'URL não válido';
$string['ipaddress'] = 'enderço IP';
$string['is_in_range'] = 'O endereço IP &nbsp;<code>$a</code>&nbsp; representa um hospedeiro válido.';
$string['ispublished'] = 'O Moodle $a habilitou este serviço para você.';
$string['issubscribed'] = 'O Moodle $a subscreve este serviço no seu hospedeiro.';
$string['keydeleted'] = 'Sua chave foi apagada e substituída.';
$string['keymismatch'] = 'A chave pública deste hospedeiro que você está administrando é diferente da chave pública que ele está publicando.';
$string['last_connect_time'] = 'Última data de conexão';
$string['last_connect_time_help'] = 'A última vez que você se conectou a este site.';
$string['last_transport_help'] = 'O transporte que você usou na última conexão a este site.';
$string['loginlinkmnetuser'] = '<br/>Se você é um usuário de Rede Moodle e pode<a href=\"$a\">confirmar o seu endereço aqui</a>, você pode ser redirecionado para a página de ligin.<br />';
$string['logs'] = 'logs';
$string['mnet'] = 'Rede Moodle';
$string['mnet_concatenate_strings'] = 'Concatenar até 3 strings e retornar o resultado';
$string['mnet_session_prohibited'] = 'Usuários do seu servidor não tem autorização para acessar com roaming o  $a.';
$string['mnetdisabled'] = 'A Rede Moodle está desabilitada.';
$string['mnetenrol'] = 'Inscrições';
$string['mnetlog'] = 'Logs';
$string['mnetpeers'] = 'Pares';
$string['mnetservices'] = 'Serviços';
$string['mnetsettings'] = 'Configuração da rede Moodle';
$string['mnetthemes'] = 'Temas';
$string['moodle_home_help'] = 'O caminho para a página principal do Moodle remoto, por exemplo, /moodle/.';
$string['moodleloc'] = 'posição do Moodle';
$string['net'] = 'Rede';
$string['networksettings'] = 'Configuração da Rede';
$string['never'] = 'Nunca';
$string['noaclentries'] = 'Nenhuma item na lista de controle SSO';
$string['nocurl'] = 'O cURL não está instalado no PHP';
$string['nohostid'] = 'Esta paágina requer um ID de hospedeiro, que deve ser um integral.';
$string['noipmatch'] = 'Endereço do servidor remoto: <br /><em>$a[0]</em><br />não é aquele registrado:<br /><em>$a[1]</em>.';
$string['nolocaluser'] = 'Nenhum registro local deste usuário remoto.';
$string['nomodifyacl'] = 'Você não tem permissão para mudar a lista de controle MNET.';
$string['nonmatchingcert'] = 'O assunto do certificado: <br /><em>$a[0]</em><br />não indica o hospedeiro de origem:<br /><em>$a[1]</em>.';
$string['nopubkey'] = 'Problema obtendo uma chave pública.<br />Talvez o hospedeiro não permite a rede Moodle ou a chave não é válida.';
$string['nosite'] = 'Não foi achado o curso principal (site)';
$string['nosuchfile'] = 'O arquivo ou a funcionalidade $a não existe.';
$string['nosuchfunction'] = 'Impossível encontrar a função ou função proibida para RPC.';
$string['nosuchmodule'] = 'A função foi endereçada em modo errado e não foi possível entrá-la. Por favor use o formato mod/modulename/lib/functionname.';
$string['nosuchpublickey'] = 'Impossível obter chave pública para verificar a assinatura.';
$string['nosuchservice'] = 'O serviço RPC não está ativado neste servidor.';
$string['nosuchtransport'] = 'Nenhum transporte foi achado com este ID.';
$string['notBASE64'] = 'Esta string não é codificada como Base64. Não é uma chave válida.';
$string['notPEM'] = 'Esta chave não é em formato PEM. Não funciona.';
$string['not_in_range'] = 'O endereço IP &nbsp;<code>$a</code>&nbsp; não representa um hospedeiro confiável.';
$string['notpermittedtojump'] = 'Você não tem permissáo para iniciar uma sessão remota partindo deste Moodle.';
$string['notpermittedtoland'] = 'Você não tem permissão para iniciar uma sessão remota.';
$string['off'] = 'Desligar';
$string['on'] = 'Ligar';
$string['otherenrolledusers'] = 'Outros usuários inscritos';
$string['permittedtransports'] = 'Transportes autorizados';
$string['phperror'] = 'Um erro interno de PHP interrompeu o seu pedido.';
$string['postrequired'] = 'A função de exclusão requer uma interrogação POST';
$string['promiscuous'] = 'Promiscuo';
$string['publickey'] = 'Chave pública';
$string['publickey_help'] = 'A chave pública é recebida automaticamente do servidor remoto.';
$string['publish'] = 'Publicar';
$string['reallydeleteserver'] = 'Tem certeza que quer excluir este servidor';
$string['receivedwarnings'] = 'Os seguintes avisos foram recebidos';
$string['recordnoexists'] = 'O registro não existe';
$string['reenableserver'] = 'Não - selecionar esta opção para reabilitar este servidor.';
$string['registerallhosts'] = 'Registrar todos os hospedeiros (<em>modo Hub</em>)';
$string['registerallhostsexplain'] = 'Você pode escolher se registrar todos os hospedeiros que tentem conectar com o seu moodle automaticamente. Um registro vai ser criado na sua lista de hospedeiros para cada site Moodle que requer uma chave pública..<br />Você tem a opção de configurar serviços para todos os hospedeiros e, habilitando alguns serviços, você pode fornecer serviços a todos estes servidores remotos.';
$string['remotecourses'] = 'Cursos Remotos';
$string['remoteenrolhosts_desc'] = 'Inscrição e desinscrição de usuários da sua instalação de Moodle em hospedeiros da rede de hospedeiros moodle que autorizam esta operação.';
$string['remotehost'] = 'Hub Remoto';
$string['remotehosts'] = 'Hospedeiros Remotos';
$string['remotemoodles'] = 'Moodles Remotos';
$string['requiresopenssl'] = 'A Rede requer a extensão OpenSSL';
$string['restore'] = 'Restaurar';
$string['reviewhostdetails'] = 'Rever detalhes do hospedeiro';
$string['reviewhostservices'] = 'Rever serviços do hospedeiro';
$string['selectaccesslevel'] = 'Selecionar um nível de acesso na lista.';
$string['selectahost'] = 'Selecionar um hospedeiro Moodle remoto.';
$string['serviceswepublish'] = 'Serviços que publicamos para $a.';
$string['serviceswesubscribeto'] = 'Serviços que assinamos em $a.';
$string['settings'] = 'Configurações';
$string['showlocal'] = 'Mostrar usuários locais';
$string['showremote'] = 'Mostrar usuários remotos';
$string['ssl_acl_allow'] = 'SSO ACL: Permitir usuário $a[0] de $a[1]';
$string['ssl_acl_deny'] = 'SSO ACL: Negar usuário $a[0] de $a[1]';
$string['ssoaccesscontrol'] = 'Controle de acesso SSO';
$string['ssoacldescr'] = 'Usar esta página para autorizar ou negar o acesso de usuários específicos de hospedeiros remotos da rede moodle. Isto serve quando você oferece serviços SSO. Para controlar a habilidade dos usuários locais, usar o sistema de funções para atribuir a permissão <em>mnetlogintoremote</em> aos usuários em questão.';
$string['ssoaclneeds'] = 'Para que isto funcione é preciso ligar a opção Redes Moodle e configurar o plugin de autenticação nas redes autorizando a auto-inscrição de usuários.';
$string['strict'] = 'Restrito';
$string['subscribe'] = 'Inscrever';
$string['system'] = 'Sistema';
$string['testtrustedhosts'] = 'Testar endereço';
$string['testtrustedhostsexplain'] = 'Inserir endereço IP para verificar se é hospedeiro confiável.';
$string['themesavederror'] = 'Erro: não foi alterado o tema';
$string['transport_help'] = 'Estas opções são recíprocas, então você pode forçar um hospedeiro remoto a usar o certificado SSL apenas se o seu servidor também tiver um certificado SSL';
$string['trustedhosts'] = 'hospedeiro XML-RPC';
$string['trustedhostsexplain'] = '<p>O mecanismo de hospedeiros confiáveis permite que máquinas específicas executem chamadas via XML-RPC para qualquer parte do API Moodle.
Assim os roteiros podem controlar o comportamento do Moodle, use com moderação para evitar perigos de ataques.
This</p>
<p>Isto <strong>não</strong> é necessário em Redes Moodle.</p>
<p>Para ativar, inserir lista de endereços IP ou redes,um em cada linha.
Exemplos:</p>O seu hospedeiro local:<br />127.0.0.1<br />O seu hospedeiro local(com bloco de Redes):<br />127.0.0.1/32<br />Apenas o hospedeiro com endereço IP 192.168.0.7:<br />192.168.0.7/32<br />
Qualquer hospedeiro com endereço IP entre 192.168.0.1 e 192.168.0.255:<br />192.168.0.0/24<br />Qualquer hospedeiro:<br />192.168.0.0/0<br />
Obviamente o último exemplo<strong>não é</strong> uma configuração ideal.';
$string['unknownerror'] = 'Erro desconhecido durante a negociação.';
$string['usercannotchangepassword'] = 'Você não pode mudar a senha aqui porque é um usuário remoto.';
$string['userchangepasswordlink'] = '<br /> Voc~e deve mudar a sua senha no seu<a href=\"$a->wwwroot/login/change_password.php\">$a->description</a> provedor.';
$string['usersareonline'] = 'Atenção: $a usuários deste servidor estão logados ao seu site.';
$string['validated_by'] = 'Isto é validado pela Rede:&nbsp;<code>$a</code>';
$string['verifysignature-error'] = 'Erro: a assinatura não foi confirmada.';
$string['verifysignature-invalid'] = 'Erro: a assinatura não foi confirmada. Aparentemente esta transação não foi assinada por você.';
$string['version'] = 'versão';
$string['warning'] = 'Aviso';
$string['wrong-ip'] = 'Seu endereço IP não é aquele registrado.';
$string['xmlrpc-missing'] = 'Você tem que instalar XML-RPC no PHP para usar esta funcionalidade.';
$string['yourhost'] = 'Seu hospedeito';
$string['yourpeers'] = 'Seus pares';

?>