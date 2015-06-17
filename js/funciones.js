var submenus = [0,0,0,5,6,0,3,0];
var altoSubmenu = 0;

function abrirSubmenu(submenu,accion) {

	if (accion === 1) {
	
		for (i = 1; i <= 7; i++) {
			
			if (submenu === i) {
			
				altoSubmenu = submenus[i] * 40;
				
				$('#submenu' + i).css('display','block');
				$('.btn-menu-prin-' + i).attr('href','javascript:abrirSubmenu(' + i + ',2)');
				$('#submenu' + i).animate({height : altoSubmenu + 'px'},600);
			
			} else {
				$('.btn-menu-prin-' + i).attr('href','javascript:abrirSubmenu(' + i + ',1)');
				$('#submenu' + i).animate({height : '1px'},400, function () {
				
					$(this).css('display','none');
				
				});
			
			}
		
		}
	
	} else {
	
		for (i = 1; i <= 7; i++) {
			
			if (submenu === i) {
			
				$('.btn-menu-prin-' + i).attr('href','javascript:abrirSubmenu(' + i + ',1)');
				$('#submenu' + i).animate({height : '1px'},400, function () {
				
					$(this).css('display','none');
				
				});
			
			}
		
		}
	
	}

}


