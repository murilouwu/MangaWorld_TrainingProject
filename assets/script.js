//preview Img
function PreViewImg(input, imgPreview){
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(imgPreview).attr('style', "background-image: url('"+e.target.result+"');");
        }
        reader.readAsDataURL(input.files[0]);
    }
}

//mostrar e ocutar divs, em array
function mostrar(ocu, chave){
    for (var i=0; i<ocu.length; i++){	
		if (i<chave){
			ocultar(ocu[i], 0);	
		}else{
			ocultar(ocu[i], 1);
		};
	};
};

//ocultar e mostra div
function ocultar(obj, es){
	let div = document.querySelector(obj);
	if(es==1){
		div.style.display = 'flex';
	}else{
		div.style.display = 'none';
	};
};

//open menu left expesific
function OpenModal(funMost, div, fun){
	ocultar(div[0], funMost);
	if(fun==0){
		
	}else{
		
	}
}

//redirecionar pagina
function redirect(page) {
    window.location.href = page;
}

function Scroll0Display(item) {
	let fun = window.scrollY === 0 ? 0 : 1;
	ocultar(item, fun);
}