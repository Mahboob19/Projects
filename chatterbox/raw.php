 <a class="btn" onclick="toggleLogin()" style="margin-left: 120px;">Forgot password?</a>
<div class="overlay">
					      <div class="login">
					        <div class="header">
					          <h1>Login</h1>
					          <i class="fas fa-times" onclick="toggleLogin()"></i>
					        </div>
					        <br>
					        <div class="body">
					          <form action="forgot_password.php" class="form">
					          	<label style="margin-right:80px;"><h3>Register Email_id :</h3></label>
					            <input type="email" placeholder="eg@gmail.com" class="form-control" autocomplete="off" required>
					       		<br>
					            <br>
					          </form>
					        </div>
					        <div class="footer">
					          <button type="submit" class="btn btn-secondary">Close</button>
					          <button type="submit" class="btn btn-primary" name="next" style="margin-left:110px;">Next</button>
					        </div>
					      </div>
					    </div>
					        .overlay {
  position: fixed;
  display: none;
  align-items:top;
  height: 50vh;
  width: 100%;
  z-index: 100;
}

.overlay.open {
  display: flex;
  animation: show-overlay 0.5s;
}

@keyframes show-overlay {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.login {
  padding: 50px 25px;
  background: green;
  border-radius: 10px;
}

.header {
  position: relative;
}

.header h1 {
  text-align: center;
  text-transform: uppercase;
  color: #000051;
  padding-bottom: 7px;
  border-bottom: 2px solid #000051;
}

.header i {
  position: absolute;
  top: 0;
  right: 0;
  font-size: 20px;
  color: #000051;
}

.body .form input {
  display: block;
  padding: 10px;
  margin: 25px 10px;
  outline: none;
  border: solid #000051 1px;
  color: #000051;
  transition: 0.4s;
}

.body .form input:focus {
  border-color: #534bae;
}

.footer {
  position: relative;
  height: 40px;
  width: 100%;
}

.footer button {
  position: absolute;
  padding: 10px;
  min-width: 100px;
  left: 50%;
  transform: translateX(-50%);
   border-radius: 10px;
  cursor: pointer;
  transition: 0.4s;
}

.footer button:hover {
  background: #534bae;
}
  <script>
    	function toggleLogin(){
    		document.querySelector(".overlay").classList.toggle("open");
    	}
    </script>