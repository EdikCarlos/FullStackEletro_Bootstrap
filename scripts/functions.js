function exibir_categoria(categoria){
    let elementos = document.getElementsByClassName('box_produto');
    for(var i=0; i<elementos.length; i++){
        if(categoria == elementos[i].id)
            elementos[i].style = 'display:inline-block';
        else
            elementos[i].style = 'display:none';
    }
}


let exibir_todos = () => {
    let elementos = document.getElementsByClassName('box_produto');
    for(var i=0; i<elementos.length;i++){
        elementos[i].style = 'display:inline-block';
    }
}

let zoom = (imagem) => {
    if(imagem.width == 120)
    imagem.style = 'width:240px'
    else
    imagem.style = 'width:120px'
}