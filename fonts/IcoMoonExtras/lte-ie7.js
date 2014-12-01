/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'IcoMoonExtras\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-stats' : '&#x31;',
			'icon-bars' : '&#x32;',
			'icon-coin' : '&#x33;',
			'icon-dashboard' : '&#x34;',
			'icon-meter' : '&#x35;',
			'icon-wrench' : '&#x36;',
			'icon-info' : '&#x37;',
			'icon-tags' : '&#x38;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; i < els.length; i += 1) {
		el = els[i];
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};