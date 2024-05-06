
grecaptcha.ready(function() {
    grecaptcha.execute('6Le9UEUaAAAAALA_vEgMqN0al7Hkm6CEcMi2O426', {action: 'homepage'}).then(function(token) {
		console.log(token);
       document.getElementById("g-token").value = token;
    });
});

