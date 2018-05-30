// programmed by Nikurasu.

// API Key 78d9cdf2-5e59-433f-9116-05dbd02e6564

var key = '78d9cdf2-5e59-433f-9116-05dbd02e6564';
var url1 = "https://api.fortnitetracker.com/v1/profile/pc/Nikurasu."
function testAPI() {
	var xhr = new XMLHttpRequest();
	xhr.open("GET", url1, true);
	xhr.setRequestHeader("TRN-Api-Key", "78d9cdf2-5e59-433f-9116-05dbd02e6564");
	xhr.setRequestHeader("Access-Control-Allow-Origin", "*");
	xhr.onload = function () {
	    console.log(xhr.responseText);
	};
	xhr.send();
}