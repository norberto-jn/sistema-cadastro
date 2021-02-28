//faz a validaçao do formulario conferindo se o mes de agosto tem dias maiores que 29

function validacaoFormulario(){
    var dia=document.getElementById('dia').value;
    var mes=document.getElementById('mes').value;
    var ano=document.getElementById('ano').value;

    //confere se o mes de agosto tem dias maiores que 29
    if(mes==2 && dia>29){
        alert("impossivel fazer o cadastro data incorreta")
        return false
    }
}
