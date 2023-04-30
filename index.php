<!DOCTYPE html>
<html lang="en">
<head>
    <title>CollegeFP</title>
    <style>
        body {
          background-image: url('ef.jpg.jpg');
          background-size: cover;
        }
        .brand-image{
            width: 500px;
            margin-top:20px;
            margin-left:60px;
        }
  .container {
  max-width: 350px;
  position: absolute;
  top: 310px;
  right: 40px;
  transform: translate(0, -52%);
  padding: 10px;
  background-color: #f2f2f2;
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 1.2;
  border-radius: 4px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

input[type="text"],
input[type="email"],
input[type="tel"],
textarea {
  width: 100%;
  padding: 8px;
  margin-bottom: 8px;
  border: none;
  border-radius: 5px;
  box-sizing: border-box;
}
select {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: none;
  border-radius: 5px;
  box-sizing: border-box;
}
button[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
.form-row {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -10px;
  
}

.form-col {
  flex: 1;
  padding: 0 10px;
  box-sizing: border-box;
  margin-bottom:-15px;
}

button[type="submit"]:hover {
  background-color: #3e8e41;
}
h2 {
  font-size: 24px;
  margin-top: 1px;
  text-align: center;
  color:red
}
h1 {
  font-size: 50px;
  margin-top: 10px;
  margin-left: 40px;
  color:#fff;
  font-family: slab serif;
}
h5 {
  margin-top: -10px;
  margin-bottom: 2px;
  border-bottom:2px solid red ;
  display: inline-block;
  
}

        </style>
    </head>
<body>
    <form action="codex.php" method="post">
    
            <div class="icon">
                <img src="https://cdn.npfs.co/uploads/template/85/4468/publish/images/logo.png" alt="MMDU Logo" class="brand-image " style="opacity: .9">
            </div>
            <h1> Every success is <br>
              usually an admission <br>
               ticket to a new set<br>
                of decisions.</h1>
            <div class="container">
              
              <h2>ADMISSION OPEN</h2>
              <h5 ><button style="border: none;">Register</button></h5>
              <h5><button style="border: none;" onclick="window.open('login_form.php', '_blank')">Login</button></h5>
                <input type="text" id="name" name="name" placeholder="Enter Name" required>
              
                <input type="email" id="email" name="email" placeholder="Enter Email Address" required>
                <div style="position: relative;">
                <input type="tel" id="phone" name="phone" placeholder="Enter Mobile Number" required>
                <button style="position: absolute; right: 0; top: 0; padding: 8px 10px;"type="submit" name="sendotp" >Send OTP</button></div>
                <input type="text" id="send-otp" placeholder="Enter OTP" >
      
                <div class="form-row">
                  <div class="form-col">

                <select id="state" name="state" required>
                  <option value="">Select a state</option>
                  <option value="program1">Bihar</option>
                  <option value="program2">Haryana</option>
                  <option value="program3">Uttarakhand</option>
                </select>
                
                <select id="city" name="city" required>
                  <option>Select a city</option>
                  <option>Ambala</option>
                  <option>Patna</option>
                  <option>Dehradun</option>
                </select>
                <input type="text"  class="form-control" readonly id="capt" >
                
                <img src="capt.png" style="margin-top: -39px; margin-bottom: 30px; margin-left: 120px;" width="40px" onclick="cap()">
                
              </div>
              <div class="form-col">
                <select id="program" name="program" required>
                  <option>Select a program</option>
                  <option>Bachelors</option>
                  <option>Masters</option>
                  <option>Phd</option>
                </select>
             
                <select id="specialization" name="spec" required>
                  <option>Select a specialization</option>
                  <option>Computer Science</option>
                  <option>Mechanical</option>
                  <option>Civil</option>
                </select>

                <input type="text" placeholder="Enter text as shown" class="form-control" id="textinput" required>
                </div>
                </div>
                <select id="department" name="department" required>
                  <option value="">Select a department</option>
                  <option value="program1">B.tech</option>
                  <option value="program2">MBBS</option>
                  <option value="program3">BCA</option>
                </select>
                <p style="margin-top: -10px;"> <input type="checkbox" id="checkbox" name="checkbox" required>&nbsp;I hereby state that facts mentioned above are true to the best of my knowledge and belief.</p>
                <button type="submit" onclick="validcap()" name="add" >Apply Now</button>
                </div>
                </form>
                
                <script type="text/javascript">
                  function cap(){
                    var alpha=['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i',
                    'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 
                    'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 
                     'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P',
                      'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z','0', 
                      '1', '2', '3', '4', '5', '6', '7', '8', '9', '!', '@',
                       '#', '$', '%', '^', '&', '*'];
                       var a=alpha[Math.floor(Math.random ()*71)];
                       var b=alpha[Math.floor(Math.random()*71)];
                       var c=alpha[Math.floor(Math.random()*71)];
                       var d=alpha[Math.floor(Math.random()*71)];
                       var e=alpha[Math.floor(Math.random()*71)];
                       var f=alpha[Math.floor(Math.random()*71)];

                       var final= a+b+c+d+e+f;
                       document.getElementById("capt").value=final;

                  }
                  function validcap(){
                    var stg1= document.getElementById('capt').value;
                    var stg2 = document.getElementById('textinput').value;
                    if(stg1==stg2){
                      alert("Form is validated successfully");
                    }
                    else{
                      alert("Please enter a valid captcha");
                      return false;
                    }
                  }

                </script>

            
</body>
</html>