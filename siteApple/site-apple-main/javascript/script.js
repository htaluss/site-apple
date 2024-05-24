$(document).ready(function(){
    //slider
    $("#banners ul").bxSlider({
        auto: true,
        // mode: 'horizontal', // define a direçao e o tipo da transição
        // speed: 600, //  velocidade
        // pager: false, // botoes embaixo
    });
    //popup
    $('#fotos .container').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			// titleSrc: function(item) {
			// 	return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
			// }
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('img');
			}
		}
		
	});
});

function openForm() {
	document.getElementById("myForm").style.display = "block"; 
	document.body.classList.add("popup-open");
}
  
 function closeForm() {
	document.getElementById("myForm").style.display = "none";
	document.body.classList.remove("popup-open");
}

window.onload = function() {
	document.getElementById("myForm").style.display = "none";
}
