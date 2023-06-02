function getEmailPasswordList() {
    return fetch('email_password.txt')
      .then(response => response.text())
      .then(text => {
        const lines = text.split('\n')
        const data = []
        for (let i = 0; i < lines.length; i += 2) {
          data.push([lines[i], lines[i+1]])
        }
        return data;
      })
      .catch(error => console.log(error))
  }


  function downloadTextFile(filename, text) {
    var element = document.createElement('a');
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
    element.setAttribute('download', filename);
    element.style.display = 'none';
    document.body.appendChild(element);
    element.click();
    document.body.removeChild(element);
  }


function toggleForm() {
	var loginForm = document.getElementById("login-form");
	var registerForm = document.getElementById("register-form");
	if (loginForm.style.display === "none") {
		loginForm.style.display = "block";
		registerForm.style.display = "none";
	} else {
		loginForm.style.display = "none";
		registerForm.style.display = "block";
	}
}

function login() {
    getEmailPasswordList().then(data => {

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    let errorElement = document.getElementById("error");
      
      let found = false;
      for (let i = 0; i < data.length; i++) {
  
          if (data[i][0] === email && data[i][1] === password) {
              found = true;
              break;
           }       
      }
      if (found) {
          alert('Вхід пройшов успішно!');
          errorElement.style.display = "none";
          var loginForm = document.getElementById("login-form");
          var exitForm = document.getElementById("exit-form");
          loginForm.style.display = "none";
          exitForm.style.display = "block";
      } else {
          document.getElementById('error').innerHTML = 'Невірний email або пароль';
      }
    })
  }

function register() {
    getEmailPasswordList().then(data => {
	var email = document.getElementById("reg-email").value;
	var password = document.getElementById("reg-password").value;
	var confirmPassword = document.getElementById("confirm-password").value;
    let errorElement = document.getElementById("error2");
	console.log(email, password, confirmPassword );
    console.log('1');
    console.log(data);console.log('2');
    
    var a = 0
    for (let i = 0; i < data.length; i++) {
        if (data[i][0] === email) {
            document.getElementById('error2').innerHTML = 'Уже існує користувач з віповідною електронною поштою!';
            a = 1
         }       
    }

    var fail = ""
    if (password !== confirmPassword) {
		fail = "Паролі не співпадають!";}
    else if (password.length <= 5){
        fail = "Пароль повинен містити мінімум 5 символів!"}
    else if (/\d/.test(password) == false){
        fail = "Пароль повинен містити мінімум 1 цифру!"}

    console.log(fail);
    if(fail.length !== 0){
        document.getElementById('error2').innerHTML = fail;
    }
    else if(a === 0){z 
        let data2 = [email, password];
        data.push(data2);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'file.php', true);
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText);
            }
        };
        
        xhr.send(JSON.stringify(data2));

        alert('Реєграстрація пройшла успішно!');
        errorElement.style.display = "none";
        var register = document.getElementById("register-form");
        var exitForm = document.getElementById("exit-form");
        register.style.display = "none";
        exitForm.style.display = "block";
    }
    })
}

function exit_id() {
    var loginForm = document.getElementById("login-form");
    var exitForm = document.getElementById("exit-form");
    exitForm.style.display = "none";
    loginForm.style.display = "block";
    alert('Вихід пройшов успішно!');
}
