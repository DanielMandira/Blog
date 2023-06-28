
const mode = localStorage.getItem("mode")
function Dark(){
    if( mode == "1"){
        var corpo = document.getElementById('body');
        corpo.style.cssText = 'background-color: #404040;';
        var tema = document.getElementById('tema');
        tema.style.cssText = 'color:#404040'
        localStorage.setItem("mode", "0");  
        }
        else{
        var corpo = document.getElementById('body');
        corpo.style.cssText = 'background-color: #404040;';
        var tema = document.getElementById('tema');
        tema.style.cssText = 'color:#404040'
        localStorage.setItem("mode", "1");  
    }
}
function funcao(){
    var botao = document.getElementById('send');
    botao.click();
}