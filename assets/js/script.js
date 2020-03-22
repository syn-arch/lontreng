function time() {
	  var d = new Date();
	  var s = d.getSeconds();
	  var m = d.getMinutes();
	  var h = d.getHours();
	  var now = h + ":" + m + ":" + s;

	  document.getElementById('span').textContent = now;
}

var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

var date = new Date();

var day = date.getDate();

var month = date.getMonth();

var thisDay = date.getDay(),

    thisDay = myDays[thisDay];

var yy = date.getYear();

var year = (yy < 1000) ? yy + 1900 : yy;

var full = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;

$("#now").text(full);