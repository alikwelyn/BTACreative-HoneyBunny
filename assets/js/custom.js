    $(document).ready(function() {
        setTimeout(function(){
            $("body").addClass("loaded");
            $('.frigga-preloader').fadeOut();
        }, 2000);
    });
    function searchToggle(obj, evt){
        var container = $(obj).closest('.search-wrapper');
            if(!container.hasClass('active')){
                container.addClass('active');
                evt.preventDefault();
            }
            else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
                container.removeClass('active');
                container.find('.search-input').val('');
            }
    }
    function VerTelefone(){
        $("#VerTelefone").text('(11) 98817-4267');
    }
    function VerEmail(){
        $("#VerEmail").text('contato@frigga.eco.br');
    }