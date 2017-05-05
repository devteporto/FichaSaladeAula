// Initialize your app
var myApp = new Framework7({
    animateNavBackIcon: true,
    // Enable templates auto precompilation
    precompileTemplates: true,
    // Enabled pages rendering using Template7
	swipeBackPage: false,
	swipePanelOnlyClose: true,
	pushState: true,
    template7Pages: true
});

// Export selectors engine
var $$ = Dom7;

// Add main View
var mainView = myApp.addView('.view-main', {
    // Enable dynamic Navbar
    dynamicNavbar: false,
});








$$('.open-indicator').on('click', function () {
    myApp.showIndicator();
    setTimeout(function () {
        myApp.hideIndicator();
    }, 2000);
});




$(document).ready(function() {
		$("#RegisterForm").validate();
		$("#LoginForm").validate();
		$("#ForgotForm").validate();
		$('.close-popup').on('click', function() {
			 $("label.error").hide();
		});
});

$$(document).on('pageInit', function (e) {
		$("#RegisterForm").validate();
		$("#LoginForm").validate();
		$("#ForgotForm").validate();
		$('.close-popup').on('click', function() {
			 $("label.error").hide();
		});	
		(function() {
			[].slice.call( document.querySelectorAll( 'select#selectoptions' ) ).forEach( function(el) {	
				new SelectFx(el, {
					stickyPlaceholder: false
				});
			} );
		})();
});
myApp.onPageInit('music', function (page) {
		  audiojs.events.ready(function() {
			var as = audiojs.createAll();
		  });
});
myApp.onPageInit('videos', function (page) {
		  $(".videocontainer").fitVids();
});
myApp.onPageInit('contact', function (page) {
		$("#ContactForm").validate({
		submitHandler: function(form) {
		ajaxContact(form);
		return false;
		}
		});	
});
myApp.onPageInit('blog', function (page) {
 
		$(".post_entry").hide();	
		size_li = $(".post_entry").size();
		x=4;
		$('.post_entry:lt('+x+')').show();
		$('#loadMore').on('click', function() {
			x= (x+1 <= size_li) ? x+1 : size_li;
			$('.post_entry:lt('+x+')').show();
			if(x === size_li){
				$('#loadMore').hide();
				$('#showLess').show();
			}
		});

});

myApp.onPageInit('shop', function (page) {
			
		$('.qntyplusshop').on('click', function(e) {
									  
			e.preventDefault();
			var fieldName = $(this).attr('field');
			var currentVal = parseInt($('input[name='+fieldName+']').val(),10);
			if (!isNaN(currentVal)) {
				$('input[name='+fieldName+']').val(currentVal + 1);
			} else {
				$('input[name='+fieldName+']').val(0);
			}
			
		});
		$(".qntyminusshop").on('click', function(e) {
			e.preventDefault();
			var fieldName = $(this).attr('field');
			var currentVal = parseInt($('input[name='+fieldName+']').val(),10);
			if (!isNaN(currentVal) && currentVal > 0) {
				$('input[name='+fieldName+']').val(currentVal - 1);
			} else {
				$('input[name='+fieldName+']').val(0);
			}
		});	
  
});
myApp.onPageInit('shopitem', function (page) {
		$(".swipebox").swipebox();	
		$('.qntyplusshop').on('click', function(e) {
									  
			e.preventDefault();
			var fieldName = $(this).attr('field');
			var currentVal = parseInt($('input[name='+fieldName+']').val(),10);
			if (!isNaN(currentVal)) {
				$('input[name='+fieldName+']').val(currentVal + 1);
			} else {
				$('input[name='+fieldName+']').val(0);
			}
			
		});
		$(".qntyminusshop").on('click', function(e) {
			e.preventDefault();
			var fieldName = $(this).attr('field');
			var currentVal = parseInt($('input[name='+fieldName+']').val(),10);
			if (!isNaN(currentVal) && currentVal > 0) {
				$('input[name='+fieldName+']').val(currentVal - 1);
			} else {
				$('input[name='+fieldName+']').val(0);
			}
		});	
  
});
myApp.onPageInit('cart', function (page) {
			
    $('.item_delete').on('click', function(e) {
        e.preventDefault();
        var currentVal = $(this).attr('id');
        $('div#'+currentVal).fadeOut('slow');
    });
  
});
myApp.onPageInit('photos', function (page) {
	$(".swipebox").swipebox();
	$("a.switcher").on("click", function(e){
		e.preventDefault();
		
		var theid = $(this).attr("id");
		var theproducts = $("ul#photoslist");
		var classNames = $(this).attr('class').split(' ');
		
		
		if($(this).hasClass("active")) {
			// if currently clicked button has the active class
			// then we do nothing!
			return false;
		} else {
			// otherwise we are clicking on the inactive button
			// and in the process of switching views!

  			if(theid === "view13") {
				$(this).addClass("active");
				$("#view11").removeClass("active");
				$("#view11").children("img").attr("src","images/switch_11.png");
				
				$("#view12").removeClass("active");
				$("#view12").children("img").attr("src","images/switch_12.png");
			
				var theimg = $(this).children("img");
				theimg.attr("src","images/switch_13_active.png");
			
				// remove the list class and change to grid
				theproducts.removeClass("photo_gallery_11");
				theproducts.removeClass("photo_gallery_12");
				theproducts.addClass("photo_gallery_13");

			}
			
			else if(theid === "view12") {
				$(this).addClass("active");
				$("#view11").removeClass("active");
				$("#view11").children("img").attr("src","images/switch_11.png");
				
				$("#view13").removeClass("active");
				$("#view13").children("img").attr("src","images/switch_13.png");
			
				var theimg = $(this).children("img");
				theimg.attr("src","images/switch_12_active.png");
			
				// remove the list class and change to grid
				theproducts.removeClass("photo_gallery_11");
				theproducts.removeClass("photo_gallery_13");
				theproducts.addClass("photo_gallery_12");

			} 
			else if(theid === "view11") {
				$("#view12").removeClass("active");
				$("#view12").children("img").attr("src","images/switch_12.png");
				
				$("#view13").removeClass("active");
				$("#view13").children("img").attr("src","images/switch_13.png");
			
				var theimg = $(this).children("img");
				theimg.attr("src","images/switch_11_active.png");
			
				// remove the list class and change to grid
				theproducts.removeClass("photo_gallery_12");
				theproducts.removeClass("photo_gallery_13");
				theproducts.addClass("photo_gallery_11");

			} 
			
		}

	});	
});


function irpagina(urlrecebida){

    var url = urlrecebida;

    window.location.href = url;
}

function excluir(id) {

    var idRecebido = id;
    delete_member(idRecebido)

}

function delete_member(id) {
    if (confirm('Deseja remover realmente ?')) {
        // initialisation
        var url = 'controller/listaController.php';
        var method = 'POST';
        var params = 'id='+id;
        var container_id = 'mensagem' ;
        var loading_text = '<img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Loading_icon.gif">' ;
        // call ajax function
        ajax (url, method, params, container_id, loading_text) ;
    }
}
// ajax : basic function for using ajax easily
function ajax (url, method, params, container_id, loading_text) {
    try { // For: chrome, firefox, safari, opera, yandex, ...
        xhr = new XMLHttpRequest();
    } catch(e) {
        try{ // for: IE6+
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        } catch(e1) { // if not supported or disabled
            alert("Not supported!");
        }
    }
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4) { // when result is ready
            document.getElementById(container_id).innerHTML = xhr.responseText;

            document.getElementById(container_id).innerHTML = '<p>FICHA EXCLUIDA COM SUCESSO</p>';

            window.location.reload(1);

        } else { // waiting for result
            document.getElementById(container_id).innerHTML = loading_text;
        }
    }
    xhr.open(method, url, true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xhr.send(params);
}

