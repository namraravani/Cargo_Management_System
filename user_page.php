<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Add-Cargo</title>
  <script type="module" src="user_page.js"></script>
	<style>
    
     h1 {
      text-align: center;
      font-size: 36px;
      margin-top: 50px;
    }

 
  
		form {
    width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px #ccc;
    font-family: Arial, sans-serif;
  }
  .row {
    display: flex;
    flex-wrap: wrap;
    margin: 10px 0;
  }
  .column {
    flex: 50%;
  }
  label {
    display: block;
    margin-bottom: 10px;
  }
  input[type="text"],
  input[type="email"],
  input[type="number"],
  select {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
  }
  .checkbox-label {
    display: block;
    margin-top: 29px;
  }
  .checkbox-input {
    display: inline-block;
    vertical-align: middle;
    margin-right: 2px;
  }
  .submit-button{
    display: block;
    margin-top: 10px;
    padding: 10px;
    border: none;
    border-radius: 3px;
    color: #fff;
    background-color: #00f;
    cursor: pointer;
    align-items: center;
    margin-left: 40%;
  }
  .submit-button:hover {
    background-color: #0f0;
  }
  .submit-button:active {
    background-color: #ff0;
  }

  #weight{
    padding-top: 9px;
  }

  #log-out{

    background-color : red;
    margin-bottom : 100px;


  }
	</style>
</head>
<body>
    <h1>Add Cargo</h1>
	<form>
		<div class="row">
            <div class="column">
              <label>
                Full Name:
                <input type="text" name="name" required>
              </label>
              <label>
                From:
                <input type="text" name="from" required>
              </label>
              <label>
                To:
                <input type="text" name="to" required>
              </label>
              <label>
                Price:
                <input type="number" name="price" required>
              </label>
              <label>
                Cargo Type:
                <input type="text" name="cargo-type" required>
              </label>
              <label>
                Type of Product:
                <input type="text" name="type-of-product" required>
              </label>
            </div>
            <div class="column">
              <label>
                How many containers:
                <input type="number" name="containers" required>
              </label>
              <label>
                Phone Number:
                <input type="text" name="phone" required >
              </label>
              <label>
                Email Address:
                <input type="email" name="email" required>
              </label>
              <label>
                Gender:
                <select name="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
              <label id="weight">
                Weight:
                <input type="text" name="weight" required>
              </label>
              </label>
              <label class="checkbox-label">
                <input type="checkbox" name="terms" class="checkbox-input">
                I accept the terms and conditions
              </label>
            </div>
          </div>
          <div class="row">
            <a href="end_page.php">
              <input class="submit-button" type="button" value="Submit"></button>
            </a>
            
          </div>
    </form>
    <div id="message"></div>

    <div  style="text-align: right;">
    <a href="HomePage.php">
              <input id="log-out" type="button" value="Log-out"></button>
            </a>
</div>
</body>
</html>        
