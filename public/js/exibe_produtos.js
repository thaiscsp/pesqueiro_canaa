$(document).ready(function() {
    $.get("https://pesqueiro-canaa.herokuapp.com/api/produtos", function(data, status){
        var json = jQuery.parseJSON(data);
        var tipos_banco=[   'porcao', 'combo', 'prato_executivo',
                            'bebida_cerveja_600ml', 'bebida_long_neck', 'bebida_cerveja_lata',
                            'bebida_refrigerante_1L', 'bebida_refrigerante_lata', 'bebida_drink',
                            'bebida_opcao_de_fruta', 'bebida_bebida_quente', 'bebida_combo',
                            'suco_copo_500ml', 'suco_1L'
                        ];
        var produtos = '';
        for (var tipo_banco of tipos_banco) {
            $.each(json, function(key, value) {
                if (this.tipo == tipo_banco) {
                    produtos += 
                        '<center>' +
                            '<div class="col mb-4">' +
                                '<div class="card">' +
                                    '<img src="' +this.caminho_imagem+ '" class="card-img-top">' +
                                    '<div class="card-body">' +
                                        '<h6 class="card-title">' +this.nome+ '</h6>' +
                                        '<p class="card-text">R$ ' +this.preco+ '</p>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</center>';
                }
                
            });
            $('div[name="'+tipo_banco+'"]').html(produtos);
            produtos = '';
        }
    });
});