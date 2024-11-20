document.querySelector(".enviar").addEventListener("click", ()=>{
    var name = document.querySelector(".input").value;
    var email = document.querySelector(".email").value;
    var senha = document.querySelector(".senha").value;
    var cheackbox = document.querySelector("#checkbox");
    if(name == ""){
        senha.insertAdjacentHTML('beforebegin', '<p class="erro">Erro: Preencha todos os campos corretamente e verifique se a senha está correta.</p>');
    }else if(email == "" || email.includes(" ")){
        senha.insertAdjacentHTML('beforebegin', '<p class="erro">Erro: Preencha todos os campos corretamente e verifique se a senha está correta.</p>');
    }else if(senha == "" || senha.includes(" ")){
        senha.insertAdjacentHTML('beforebegin', '<p class="erro">Erro: Preencha todos os campos corretamente e verifique se a senha está correta.</p>');
    }else if(!cheackbox.checked){
        senha.insertAdjacentHTML('beforebegin', '<p class="erro">Erro: Preencha todos os campos corretamente e verifique se a senha está correta.</p>');
    }else{
        email = email.replace(/ /g, "")
                     .replace(/\//g, "")
                     .replace(/@./g, "@")
                     .replace(/.\@/g, "@")
                     .replace(/,/g, ".")
                     .replace(/;/g, ".");
    }
})
document.querySelector(".delete").addEventListener("click", () =>{
    var cookies_list = ['nome', 'email', 'senha'];
    var cookies = document.cookie.split('; ');
    for(var i = 0; i<cookies_list.length; i++){
        var cookie_name = cookies_list[i];
        var find = cookies.some(cookie => cookie.startsWith(cookie_name + '='));
    }
    if(find){
        alert("cookie existe");
    }else if(!find){
        alert("cookie invalido");
    }
})