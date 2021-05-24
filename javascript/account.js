function validate()
  {
      document.getElementById("err").innerHTML="";
      document.getElementById("errp").innerHTML="";
      var str =  document.getElementById("pwd").value; 
    if (str.match(/[a-z]/g) && str.match( 
            /[A-Z]/g) && str.match( 
            /[0-9]/g) && str.match( 
            /[^a-zA-Z\d]/g) && str.length >= 8){
        document.getElementById('errp').innerHTML="";
        var x=document.getElementById("mob").value;
          if(x.length!=10){

              document.getElementById('err').innerHTML="!!!Please enter a valid mobile number";
              return false;
          }
          else{
              document.getElementById("err").innerHTML="";
              return true;
          }
  }
      else{
          document.getElementById("errp").innerHTML="!!!Please enter a valid password";
          return false;
      }
  }
  function myFunction() {
  var y = document.getElementById("pwd");

  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}