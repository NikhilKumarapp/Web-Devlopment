<html>
<head>
	<title>Registeration form</title>
	<link rel="stylesheet" type="text/css" href="./style_sign.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
</head>
<body>
	<div class="Registeration-form">
		<h1>Signup form</h1>
		<form action="connect.php" method="post">
			<p>Firstname</p>
            <label class="textBox">
				<input type="text" name="Firstname" id="text"  placeholder="Enter Firstname" required >
                <span class="FirstnameText"></span>
                </label>
				<p>Lastname</p>
             <label class="textBox1"> 
				<input type="text1" name="Lastname" id="text1"  placeholder="Enter Lastname"required>
                <span class="LastnameText"></span>
             </label>
				<p>Email</p>
               
				<label class="check-Email" for="Email">
                    <input type="Email" id="Email" class="form-control" onInput="checkEmail()" name="Email" placeholder="Email"/>
                    <span id="check-Email"></span>
                    
                </label>
				<label class="NoBox"> 
				<p>Phone number</p>
				<input type="number" name="Phone" id="number"placeholder="Please enter Phone number">
                <span class="NoText"></span>
                </label>

				<p>Password</p>
				<label class="passBox">
                    <input type="password" id="password" name="Password" placeholder="password">
                    <span class="passText"></span>

                <p>Date of birth</p>
				<input type="Date" name="DOB" placeholder="Enter DOB">
				<p>Bio</p>
                <label class="BiotextBox"> 
				<input type="text2" name="Bio" id="text2" placeholder="Please enter bio">
                <span class="BioText"></span>
                </label>
				<button type="submit" id="submit" value="Submit">Register </button>
                 <button type="reset">Reset</button>
				
			</a>
		</form>
        <script>
            const email = document.getElementById("email");
            const password = document.getElementById("password");
            const text = document.getElementById("text");
            const text1 = document.getElementById("text1");
            const text2= document.getElementById("text2");
            const number=document.getElementById("number");

            text.addEventListener('input',()=>{
                const textBox = document.querySelector('.textBox');
                const FirstnameText = document.querySelector('.FirstnameText');
                const textPattern =/^(?=.*[a-z]).{1,24}$/;
                if(text.value.match(textPattern)){
                    textBox.classList.add('valid');
                    textBox.classList.remove('invalid');
                    // FirstnameText.innerHTML = " Firstname is Valid"; 
                }else{
                    textBox.classList.add('invalid');
                    textBox.classList.remove('valid');
                    // FirstnameText.innerHTML = "Must be a valid firstname."; 
                }

            });

            text1.addEventListener('input',()=>{
                const textBox1 = document.querySelector('.textBox1');
                const LastnameText = document.querySelector('.LastnameText');
                const text1Pattern =/^(?=.*[a-z]).{1,24}$/;
                if(text1.value.match(text1Pattern)){
                    textBox1.classList.add('valid');
                    textBox1.classList.remove('invalid');
                    // LastnameText.innerHTML = "lastname is Valid"; 
                }else{
                    textBox1.classList.add('invalid');
                    textBox1.classList.remove('valid');
                    // LastnameText.innerHTML = "Must be a valid laststname."; 
                }

            });

            text2.addEventListener('input',()=>{
                const  BiotextBox = document.querySelector('.BiotextBox');
                const BioText = document.querySelector('.BioText');
                const text2Pattern =/^(?=.*[a-z]).{1,24}$/;
                if(text2.value.match(text2Pattern)){
                    BiotextBox.classList.add('valid');
                    BiotextBox.classList.remove('invalid');
                    // LastnameText.innerHTML = "lastname is Valid"; 
                }else{
                    BiotextBox.classList.add('invalid');
                    BiotextBox.classList.remove('valid');
                    // LastnameText.innerHTML = "Must be a valid laststname."; 
                }

            });

            number.addEventListener('input',()=>{
                const NoBox = document.querySelector('.NoBox');
                const NoText = document.querySelector('.NoText');
                const numberPattern =/^(?=.*[0-9]).{1,24}$/;
                if(number.value.match(numberPattern)){
                    NoBox.classList.add('valid');
                    NoBox.classList.remove('invalid');
                    // FirstnameText.innerHTML = " Firstname is Valid"; 
                }else{
                    NoBox.classList.add('invalid');
                    NoBox.classList.remove('valid');
                    // FirstnameText.innerHTML = "Must be a valid firstname."; 
                }

            });




            
    
            // email.addEventListener('input',()=>{
            //     const emailBox = document.querySelector('.emailBox');
            //     const emailText = document.querySelector('.emailText');
            //     const emailPattern = /[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$/;
    
            //     if(email.value.match(emailPattern)){
            //         emailBox.classList.add('valid');
            //         emailBox.classList.remove('invalid');
            //         emailText.innerHTML = " Email Address in Valid"; 
            //     }else{
            //         emailBox.classList.add('invalid');
            //         emailBox.classList.remove('valid');
            //         emailText.innerHTML = "Must be a valid email address."; 
            //     }
            // });
    
            password.addEventListener('input',()=>{
                const passBox = document.querySelector('.passBox');
                const passText = document.querySelector('.passText');
                const passPattern = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
    
                if(password.value.match(passPattern)){
                    passBox.classList.add('valid');
                    passBox.classList.remove('invalid');
                    passText.innerHTML = "Your Password in Valid"; 
                }else{
                    passBox.classList.add('invalid');
                    passBox.classList.remove('valid');
                    passText.innerHTML = "Your password must be at least 6 characters as well as contain at least one uppercase, one lowercase, and one number."; 
                }
            });
        </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
function checkEmail() {

	jQuery.ajax({
	url: "check_availability.php",
	data:'Email='+$("#Email").val(),
	type: "POST",
	success:function(data){
		$("#check-Email").html(data);
	},
	error:function (){}
	});
}
</script>

	</div>
</body>
</html>