$(document).ready(function() {
    $.get("http://pesqueiro-canaa.herokuapp.com/api/produtos", function(data, status){
        var json = jQuery.parseJSON(data);
        var tipos_banco = ['Porção', 'Combo', 'Prato Executivo', 'Bebida', 'Suco'];
        var tipos_classes = ['porcoes', 'combos', 'pratos-executivos', 'bebidas', 'sucos'];
        var produtos = '';
               
        for (var tipo_banco of tipos_banco) {
            $.each(json, function(key, value) {
                if (this.tipo == tipo_banco) {
                    produtos += 
                        '<center>' +
                            '<div class="col mb-4">' +
                                '<div class="card">' +
                                    '<img style="height: 340px; 340px;" src="' +this.caminho_imagem+ '" class="card-img-top">' +
                                    '<div class="card-body">' +
                                        '<h6 class="card-title">' +this.nome+ '</h6>' +
                                        '<p class="card-text">R$ ' +this.preco+ '</p>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</center>';
                }
                var index = tipos_banco.indexOf(tipo_banco);
                $('div[name="'+tipos_classes[index]+'"]').html(produtos);
            });
            produtos = '';
        }
    });
});