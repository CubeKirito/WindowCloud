function login() {
	var id = document.getElementById('id').value;
	var pw = document.getElementById('password').value;

	var httpRequest;

	if(window.XMLHttpRequest) httpRequest = new XMLHttpRequest();
	else if(window.ActiveXObject) httpRequest = new ActiveXObject("Microsoft.XMLHTTP");

	httpRequest.onreadystatechange = function() {
		if(httpRequest.readyState == 4 && httpRequest.status == 200) {
			
		}
	};
	
	httpRequest.open('POST', '../php/login.php', true);
	httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	httpRequest.send("id=" + id + "&pw=" + pw);
}