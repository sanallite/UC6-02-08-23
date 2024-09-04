function abrirJanela(acao) { 
    let janelaCliente = document.getElementById("clientes");
    let janelaCondo = document.getElementById("condominios");
    let janelaLogin = document.getElementById("login");
    let msgCadastrovr2= document.getElementById("msgCadastro");
    let msgLogin2= document.getElementById("msgLogin");
    
    if (acao === 'cadastrocl') { 
        janelaCliente.style.display="block";
        janelaCondo.style.display="none";
        janelaLogin.style.display="none";
        msgCadastrovr2.style.display="none";
        msgLogin2.style.display="none";
    }

    else if (acao === 'cadastrocd') { 
        janelaCondo.style.display="block";
        janelaCliente.style.display="none";
        janelaLogin.style.display="none";
        msgCadastrovr2.style.display="none";
        msgLogin2.style.display="none";
    }

    else if (acao === 'login') { janelaLogin.style.display="block";
        janelaCondo.style.display="none";
        janelaCliente.style.display="none";
        msgCadastrovr2.style.display="none";
        msgLogin2.style.display="none";
    }
}

/* Glossário: 
final com cl é referente ao cliente,
final com cd é referente ao condomínio,
final com vr é uma variável,
final com it é um item do storage,
final com pr é um parâmetro de uma função. */

function armazenarDados(acao) {
    let nomeclvr= document.getElementById('nomecl').value;
    let emailclvr= document.getElementById('emailcl').value;
    let telefoneclvr= document.getElementById('telefonecl').value;
    let residenciavr= document.getElementById('residencia').value;
    let profissaovr= document.getElementById('profissao').value;
    let cepclvr= document.getElementById('cepcl').value;
    let enderecoclvr= document.getElementById('enderecocl').value;

    let razaocdvr= document.getElementById('razaocd').value;
    let cepcdvr= document.getElementById('cepcd').value;
    let enderecocdvr= document.getElementById('enderecocd').value;
    let nomesindicovr= document.getElementById('nomesindico').value;
    let telefonecdvr= document.getElementById('telefonecd').value;
    let emailcdvr= document.getElementById('emailcd').value;
    let numeroapsvr= document.getElementById('numeroaps').value;
    let numoradoresvr= document.getElementById('numoradores').value;

    if (acao === 'nomeclpr') { 
        if (nomeclvr) { localStorage.setItem("nomeclit", nomeclvr); }
    }
    
    if (acao === 'emailclpr') { 
        if (emailclvr) { localStorage.setItem("emailclit", emailclvr); }
    }
    
    if (acao === 'telefoneclpr') {
        if (telefoneclvr) { localStorage.setItem("telefoneclit", telefoneclvr); }
    }

    if (acao === 'residenciapr') {
        localStorage.setItem("residenciait", residenciavr);
    }

    if (acao === 'profissaopr') {
        localStorage.setItem('profissaoit', profissaovr);
    }

    if (acao === 'cepclpr') {
        if (cepclvr) { localStorage.setItem('cepclit', cepclvr); }
    }

    if (acao === 'enderecoclpr') {
        if (enderecoclvr) { localStorage.setItem('enderecoclit', enderecoclvr); }
    }

    if (acao === 'razaocdpr') {
        if (razaocdvr) { localStorage.setItem('razaocdit', razaocdvr); }
    }

    if (acao === 'cepcdpr') {
        if (cepcdvr) { localStorage.setItem('cepcdit', cepcdvr); }
    }

    if (acao === 'enderecocdpr') {
        if (enderecocdvr) { localStorage.setItem('enderecocdit', enderecocdvr); }
    }

    if (acao === 'nomesindicopr') {
        if (nomesindicovr) { localStorage.setItem('nomesindicoit', nomesindicovr); }
    }

    if (acao === 'telefonecdpr') {
        if (telefonecdvr) { localStorage.setItem('telefonecdit', telefonecdvr); }
    }

    if (acao === 'emailcdpr') {
        if (emailcdvr) { localStorage.setItem('emailcdit', emailcdvr); }
    }

    if (acao === 'numeroapspr') {
        if (numeroapsvr) { localStorage.setItem('numeroapsit', numeroapsvr); }
    }

    if (acao === 'numoradorespr') {
        if (numoradoresvr) { localStorage.setItem('numoradoresit', numoradoresvr); }
    }
}

function mensagem(acao) { 
    if (acao === 'cadastro') { let msgCadastrovr= document.getElementById('msgCadastro');
        msgCadastrovr.style.display="block";
        msgCadastrovr.textContent="Seu cadastro foi realizado com sucesso!";
    }
}

function pegarDados() { 
    let emaildigitado= document.getElementById('entraremailcl').value;
    let emailitvr= localStorage.getItem('emailclit');    

    let senhadigitada= document.getElementById('senhacl').value;
    /* let senhaclitvr= localStorage.getItem('senhaclit'); */

    let msgLoginvr= document.getElementById('msgLogin');
    msgLoginvr.style.display="block";

    if (emaildigitado === emailitvr) {
        msgLoginvr.textContent="Login realizado com sucesso!";
    }

    else { msgLoginvr.style.color="red";
        msgLoginvr.textContent="Dados incorretos, tente novamente.";
    }
}