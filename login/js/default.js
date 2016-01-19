function login() {
	var id = document.getElementById('id').value;
	var pw = document.getElementById('password').value;

	var httpRequest;

	if(window.XMLHttpRequest) httpRequest = new XMLHttpRequest();
	else if(window.ActiveXObject) httpRequest = new ActiveXObject("Microsoft.XMLHTTP");

	httpRequest.onreadystatechange = function() {
		if(httpRequest.readyState == 4 && httpRequest.status == 200) {
			var data = JSON.parse(httpRequest.responseText);
			
			if(data.RESULT == "LOGIN_SUCCESS") {
				window.location.replace('../cloud/');
			} else if(data.RESULT == "LOGIN_FAILED") {
				alert('로그인에 실패하였습니다.');
			} else {
				alert('서버 문제로 로그인에 실패하였습니다.');
			}
		}
	};
	
	httpRequest.open('POST', 'php/login.php', true);
	httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	httpRequest.send("id=" + id + "&pw=" + pw);
}