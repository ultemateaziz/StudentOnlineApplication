<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
<!--external css-->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">


<!--Fontawesome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="{{asset('validationjs/jquery.validate.js')}}"></script>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
} 
#section-form{
  margin: 0px 30px;
}
.header img{
    width: 100%;
    height: 35vh;
    background-size: cover;
}
.main .title {
  display: flex;
  justify-content: center;
  margin: 10px 30%;
  border: 3px solid brown;
  padding: 10px 5px;
  text-align: center;
}
.main .sub-title{
  text-align: center;
  align-items: center;
}
.form-header{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}
.form-name{
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
}
.form-name .form-name-list label{
  margin-left: 20px;
  width: 237px;
  display: inline-block;
}
.form-name .form-name-list .right-label{
  text-align: end;
}
.father-name .father-name-list label{
  margin-left: 20px;
  width: 240px;
  display: inline-block;
}
.qualification .qualification-list label{
  margin-left: 20px;
  width: 240px;
  display: inline-block;
}
.submit .submit-list label{
  margin-left: 20px;
  width: 550px;
  display: inline-block;
}
.form-name .form-name-list input{
  width: 300px;
}
.father-name .father-name-list input{
  width: 300px;
}
.footer{
  display: flex;
  flex-direction: row;
  padding: 10px 50px;
}
.footer .footer-list{
  margin-right: 50px;
}
.footer-2{
  display: flex;
  flex-direction: column;
  padding: 10px 50px;
}
.footer .footer-list-2{
  margin-right: 50px;
}
.button button{
  display: flex;
  justify-content: center;
  padding: 10px 30px;
  margin-left: 40%;
  font-size: 16px;
  font-weight: 700;
  outline: none;
  background-color: rgb(18, 243, 213);
  color: #222;
  cursor: pointer;
  border: none;
  border-radius: 5px;
  margin-bottom: 20px;
  text-transform: uppercase;

}
.button button:hover{
  background-color:rgba(18, 240, 210, 0.589) ;
}
.space{
  margin-bottom: 17px;
}
@media(max-width:799px){
  .main .title {
    margin: 10px 30%;
    font-size: 10px;
    width: auto;
  }
  .header img{
    width: 100%;
    height: 20vh;
}
.form-name .form-name-list input{
  width:auto;
}
.form-name .form-name-list label{
  margin-left: 0px;
}
.form-name .form-name-list label{
  margin-left: 0px;
  width: 170px;
  display: inline-block;
}
.qualification .qualification-list label{
  margin-left: 0px;
  width: 250px;
  display: inline-block;
}
#section-form{
  margin: 0px 10px;
}
.form-name .form-name-list .right-label{
  text-align: start;
}
.father-name .father-name-list label{
  margin-left: 0px;
}
.form-name .form-name-list input{
  width: auto;
}
.submit .submit-list label{
  margin-left: 0px;
  width: 350px;
  display: inline-block;
}
.footer .footer-list{
  margin-right: 40px;
}
}
@media(max-width:677px){
  body{
    font-size: 10px;
  }
  #section-form{
    margin: 0px 10px;
  }
  .main .title {
    margin: 5px 28%;
    font-size: 10px;
    width: auto;
    padding: 5px 5px;
  }
  .main .title h3{
    font-size: 12px;
  }
  .header img{
    width: 100%;
    height: 10vh;
    
}
.form-name .form-name-list input{
  width: 300px;
  height: 30px;
  margin: 10px 0px;
}
.father-name .father-name-list input{
  width: 300px;
  height: 30px;
  margin: 10px 0px;
}
.form-header .form-header-list input{
  width: 300px;
  height: 30px;
  margin: 10px 0px;
}
.form-name .form-name-list label{
  margin-left: 0px;
}
.form-name .form-name-list label{
  margin-left: 0px;
  width: 170px;
  display: inline-block;
}
.qualification .qualification-list label{
  margin-left: 0px;
  width: 240px;
  display: inline-block;
}
.submit .submit-list label{
  margin-left: 0px;
  width: 350px;
  display: inline-block;
}
.form-name .form-name-list .right-label{
  text-align: start;
}
.father-name .father-name-list label{
  margin-left: 0px;
}
.footer .footer-list{
  
  margin-right: 40px;
}
.footer{
  display: flex;
  flex-direction: row;
  padding: 10px 50px;
}
.footer-3{
  text-align:start;
  padding: 0px 20px;
  margin-bottom: 30px;
}
.form-header{
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  
}
.form-header .form-header-list label{
  margin-top: 20px;
  width: 237px;
  display: inline-block;
}
.form-name{
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}
.form-name .form-name-list label{
  margin-top: 20px;
  width: 237px;
  display: inline-block;
}
.button button{
  margin-left: 30%;
}

.alert-success{
  text-align: center;
border: 1px solid green;
width: 30%;
padding: 5px;
border-radius: 8px;
margin: 10px auto;
background: green;
}
.alert-danger{
  text-align: center;
border: 1px solid red;
width: 30%;
padding: 5px;
border-radius: 8px;
margin: 10px auto;
background: red;
}
}
</style>
<body>
    <section>
        <div class="main-container">
              <section >
                <div class="header">
                    <img src="{{asset('images/Header.jpg')}}" alt="">
                 </div>
              </section>
         