<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>First-Year Application Form</title>
  <!--external css
<link rel="stylesheet" href="./style.css">-->

  <!--Fontawesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


</head>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

  #section-form {
    margin: 0px 30px;
  }

  .space {
    margin-bottom: 10px;
  }

  .header img {
    width: 100%;
    height: 35vh;
    background-size: cover;
  }

  .main .title {
    display: flex;
    justify-content: center;
    margin: 0px 30%;
    border: 3px solid brown;
    padding: 10px 5px;
    text-align: center;
  }

  .main .sub-title {
    text-align: center;
    align-items: center;
  }

  .form-header {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
  }

  .form-name {
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
  }

  .form-name .form-name-list label {
    margin-left: 20px;
    width: 237px;
    display: inline-block;
  }

  .form-name .form-name-list .right-label {
    text-align: end;
  }

  .father-name .father-name-list label {
    margin-left: 20px;
    width: 240px;
    display: inline-block;
  }

  .qualification .qualification-list label {
    margin-left: 20px;
    width: 240px;
    display: inline-block;
  }

  .submit .submit-list label {
    margin-left: 20px;
    width: 550px;
    display: inline-block;
  }

  .form-name .form-name-list input {
    width: 300px;
  }

  .father-name .father-name-list input {
    width: 300px;
  }

  .footer {
    display: flex;
    flex-direction: row;
    padding: 0px 50px;
  }

  .footer .footer-list {
    margin-right: 50px;
  }

  .footer-2 {
    display: flex;
    flex-direction: column;
    padding: 0px 50px;
  }

  .footer .footer-list-2 {
    margin-right: 50px;
  }

  .space {
    margin-bottom: 17px;
  }

  .signature {
    display: flex;
    justify-content: end;

  }

  .row ul li img {
    vertical-align: middle;
  }

  .row ul {
    line-height: 2.4em;
  }

  .signature .signature-list {
    display: flex;
    flex-direction: column;
    text-align: center;
    justify-content: space-between;
    height: 60px;
  }

  @media(max-width:799px) {
    .main .title {
      margin: 10px 30%;
      font-size: 10px;
      width: auto;
    }

    .header img {
      width: 100%;
      height: 20vh;
    }

    .form-name .form-name-list input {
      width: auto;
    }

    .form-name .form-name-list label {
      margin-left: 0px;
    }

    .form-name .form-name-list label {
      margin-left: 0px;
      width: 170px;
      display: inline-block;
    }

    .qualification .qualification-list label {
      margin-left: 0px;
      width: 250px;
      display: inline-block;
    }

    #section-form {
      margin: 0px 10px;
    }

    .form-name .form-name-list .right-label {
      text-align: start;
    }

    .father-name .father-name-list label {
      margin-left: 0px;
    }

    .form-name .form-name-list input {
      width: auto;
    }

    .submit .submit-list label {
      margin-left: 0px;
      width: 350px;
      display: inline-block;
    }

    .footer .footer-list {
      margin-right: 40px;
    }
  }

  @media(max-width:699px) {
    .space {
      margin-bottom: 5px;
    }

    body {
      font-size: 10px;
    }

    #section-form {
      margin: 0px 10px;
    }

    .main .title {
      margin: 5px 28%;
      font-size: 10px;
      width: auto;
      padding: 5px 5px;
    }

    .main .title h3 {
      font-size: 12px;
    }

    .header img {
      width: 100%;
      height: 10vh;

    }

    .form-name .form-name-list input {
      width: 300px;
      height: 30px;
      margin: 10px 0px;
    }

    .father-name .father-name-list input {
      width: 300px;
      height: 30px;
      margin: 10px 0px;
    }

    .form-header {
      display: flex;
      flex-direction: row;
    }

    .form-header .form-header-list input {
      width: 100px;
      height: 20px;
      margin: 0px 0px;
    }

    .father-name .father-name input {
      width: 150px;
      height: 20px;
      margin: 0px 0px;
    }

    .form-name .form-name-list label {
      margin-left: 0px;
    }

    .form-name .form-name-list label {
      margin-left: 0px;
      width: 200px;
      display: inline-block;
    }

    .qualification .qualification-list {
      display: flex;
    }

    .qualification .qualification-list label {
      width: 200px;
      display: flex;
    }

    .submit .submit-list label {
      margin-left: 0px;
      width: 350px;
      display: inline-block;
    }

    .form-name .form-name-list .right-label {
      text-align: start;
    }

    .father-name .father-name-list label {
      margin-left: 0px;
    }

    .footer .footer-list {

      margin-right: 40px;
    }

    .footer {
      display: flex;
      flex-direction: row;
      padding: 10px 50px;
    }

    .footer-3 {
      text-align: start;
      padding: 0px 20px;
      margin-bottom: 30px;
    }

    .form-header {
      display: flex;
      flex-direction: row;
      justify-content: space-between;

    }

    .form-header .form-header-list label {
      margin-top: 20px;
      width: auto;
      display: inline-block;
    }

    .form-name {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      padding: 0px 20px;
    }

    .form-name .form-name-list label {
      margin-top: 20px;
      width: 140px;
      display: inline-block;
    }

    .father-name .father-name label {
      margin-top: 20px;
      width: 140px;
      display: inline-block;
    }

    .form-name .form-name-list input {
      width: 150px;
      height: 20px;
      margin: 0px 0px;
    }

    .father-name {
      padding: 0px 20px;
    }

    .father-name .father-name-list label {
      margin-top: 10px;
      width: 140px;
      display: inline-block;
    }

    .father-name .father-name-list input {
      width: 150px;
      height: 20px;
      margin: 0px 0px;
    }

    .button button {
      display: none;
    }

    .certificate {
      display: none;
    }
  }
</style>

<body>
    <h2>preview</h2>
  <section>
    <div class="main-container">
      <section>
        <div class="header space">
          <img src="./images/Header.jpg" alt="">
        </div>

      </section>
      <section>
        <div class="main">
          <div class="title space">
            <h3 class="title-content">முதலாம் ஆண்டு விண்ணப்பம்</h3>
          </div>
          <div class="sub-title space">
            (தமிழில் பூர்த்தி செய்யவும்)
          </div>

        </div>
      </section>
      <section id="section-form" class="section-form">
        <div class="form-header space">
          <div class="form-header-list">
            <label for="">விண்ணப்ப எண்:</label>
            <input type="text" value="00{{$count}}" disabled>
          </div>
          <div class="form-header-list">
            <label for="">நாள் :</label>
            <input type="date" value="{{$data->day}}" required>
          </div>
        </div>
        <div class="form-name space">
          <div class="form-name-list">
            <label for="">1. பெயர் (தமிழில்):</label>
            <input type="text" class="text-input" value="{{$data->name}}" required>

          </div>
          <div class="form-name-list">
            <label for="" class="right-label">ஆங்கிலம் :</label>
            <input type="text" class="text-input" value="{{$data->eng_name}}"required>

          </div>
        </div>

        <div class="father-name space">
          <div class="father-name-list">
            <label for="">2. தந்தை / கணவன் பெயர் :</label>
            <input type="text" value="{{$data->fh_name}}" required>
          </div>
        </div>

        <div class="form-name space">
          <div class="form-name-list">
            <label for="">3. பிறந்த நாள்:</label>
            <input type="date" class="text-input" value="{{$data->birth}}"  required>

          </div>
          <div class="form-name-list">
            <label for="" class="right-label">இரத்த வகை :</label>
            <input type="text" class="text-input" value="{{$data->blood_type}}"  required>

          </div>
        </div>
        <div class="father-name">
          <div class="father-name-list">

            <label for="">4. முகவரி </label>
          </div>
        </div>
        <div class="father-name ">
          <div class="father-name space">
            <div class="father-name-list">
              <label>வீட்டு எண், தெரு:</label>

              <input type="text" value="{{$data->no_street}}" required>
            </div>
          </div>
          <div class="father-name space">
            <div class="father-name-list">
              <label for="">ஊர் :</label>
              <input type="text" class="text-input" value="{{$data->city}}" required>
            </div>

          </div>

          <div class="father-name space">
            <div class="father-name-list">
              <label for="">வட்டம், மாவட்டம் :</label>
              <input type="text" class="text-input" value="{{$data->district}}" required>
            </div>

          </div>

          <div class="father-name space">
            <div class="father-name-list">
              <label for="">அஞ்சல் குறியீடு :</label>
              <input type="text" class="text-input" value="{{$data->postal_code}}" required>
            </div>

          </div>

          <div class="father-name space">
            <div class="father-name-list">
              <label for="">அலைபேசி எண் :</label>
              <input type="text" class="text-input" value="{{$data->phone}}" required>
            </div>

          </div>

          <div class="father-name space">
            <div class="father-name-list">
              <label for="">பகிரி (whatsapp number) :</label>
              <input type="text" class="text-input" value="{{$data->wp_no}}"required>
            </div>

          </div>

          <div class="father-name space">
            <div class="father-name-list">
              <label for="">மின்னஞ்சல் :</label>
              <input type="text" class="text-input" value="{{$data->email}}" required>
            </div>

          </div>

          <div class="father-name space">
            <div class="father-name-list">
              <label for="">ஆதார் எண் :</label>
              <input type="text" class="text-input" value="{{$data->adhar_no}}" required>
            </div>

          </div>

          <div class="qualification space">
            <div class="qualification-list">
              <label for="">5. கல்வித் தகுதி :</label>
              <label class="radio-inline">
              @if('SSLC' == $data->optradio)
              <input type="radio" name="optradio" checked required>SSLC
              @else
              <input type="radio" name="optradio" required>SSLC
              @endif
              </label>
              <label class="radio-inline">
                @if('+2' == $data->optradio)
              <input type="radio" name="optradio" checked required>+2
              @else
              <input type="radio" name="optradio" required>+2
              @endif
              </label>
              <label class="radio-inline">
              @if('degree' == $data->optradio)
              <input type="radio" name="optradio" checked required>Degree
              @else
              <input type="radio" name="optradio" required>Degree
              @endif
              </label>
            </div>

          </div>
          <div class="father-name space certificate">
            <div class="father-name-list">
              <label for=""> &nbsp; &nbsp; 10 பட்டம் சான்றிதழ் :</label>
              <img src="{{asset('photos/'.$data->cert_10)}}" alt="" class="img-thumbnail rounded" width="100px">
            </div>

          </div>

          <div class="father-name space certificate">
            <div class="father-name-list">
              <label for="">&nbsp; &nbsp; +2 பட்டம் சான்றிதழ் :</label>
              <img src="{{asset('photos/'.$data->certi_12)}}" alt="" class="img-thumbnail rounded" width="100px">
            </div>

          </div>

          <div class="father-name space certificate">
            <div class="father-name-list">
              <label for="">&nbsp; &nbsp; வாக்காளர் அட்டை :</label>
              <img src="{{asset('photos/'.$data->voter)}}" alt="" class="img-thumbnail rounded" width="100px">
            </div>

          </div>

          <div class="father-name space certificate">
            <div class="father-name-list">
              <label for="">&nbsp; &nbsp; குடும்ப அட்டை :</label>
              <img src="{{asset('photos/'.$data->family_card)}}" alt="" class="img-thumbnail rounded" width="100px">
            </div>

          </div>

          <div class="father-name space certificate">
            <div class="father-name-list">
              <label for="">&nbsp; &nbsp; ஆதார் அட்டை:</label>
              <img src="{{asset('photos/'.$data->adhar_card)}}" alt="" class="img-thumbnail rounded" width="100px">
            </div>


          </div>

          <div class="submit ">
            <div class="submit-list">
              <label for="">6. படிக்க விரும்பும் பட்டயம் : (டிக் செய்யவும்)</label>

            </div>
            <div class="submit-list">
              <label for=""> &nbsp; &nbsp; பதினெண் சித்தர்களின் மூலிகை மருத்துவ பட்டயம்</label>
              <input type="checkbox" class="checkbox" checked required>

            </div>
            <div class="submit-list">
              <p> &nbsp; &nbsp; &nbsp; &nbsp; பதினெண் சித்தர்களின் ஐந்தாண்டு மருத்துவ கல்வி</p>

            </div>
            <div class="footer">
              <div class="footer-list">
                <p>பெறுநர் &nbsp; &nbsp; &nbsp;: </p>
              </div>
              <div class="footer-list space">
                <p>மைய இருக்கைப் பொறுப்பாளர்,</p>
                <p>கௌரவ முனைவர் மரு.ஆ.செல்வராஜ்,</p>
                <p>நிறுவனர் / பொறுப்பாளர், பதினெண் சித்தர்கள் மருத்துவ ஆய்விருக்கை.</p>
              </div>
            </div>

            <div class="footer-2 space">
              <div class="footer-list-2">
                <p>ஐயா,</p>
              </div>
              <div class="footer-list-2" style="margin: 0px 0px 0px 80px;">
                <p>பொருள் &nbsp;:&nbsp; பதிணென் சித்தர்கள் மருத்துவ ஆய்விருக்கையின் பட்டய வகுப்பில் சேர்தல் -
                  தொடர்பாக</p>

              </div>
            </div>

            <div class="footer-3 space">
              <p>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; வணக்கம். உலக தமிழாராய்ச்சி
                நிறுவனத்தில் பதினெண் சித்தர்கள் மருத்துவ
                ஆய்விருக்கையின்வழி நடைபெறும் பட்டய வகுப்பில் பயில்வதற்கு அனுமதி வழங்குமாறு பணிவுடன்
                கேட்டுக்கொள்கிறேன். பதினெண் சித்தர்களின் மருத்துவ ஆய்விருக்கையின் மாணவர்கள்
                விதிமுறைகளை படித்து நிறுவன விதிமுறைகளுக்கு உட்பட்டு நடப்பேன் என்றும் மேலே அளிக்கப்பட்ட
                விபரங்கள் அனைத்தும் உண்மை என்று உறுதிமொழி அளிக்கின்றேன்.
              </p>
            </div>

            <div class="footer-3 ">
              <p style="text-align: center; margin-bottom: 20px;">
                நன்றி !
              </p>
            </div>
          </div>
          <div class="signature">
            <div class="signature-list">
              <div class="signature-list-item">
                இப்படிக்கு
              </div>
              <div class="signature-list-item">
                (விண்ணப்பதாரர் கையொப்பம்)
              </div>
            </div>
          </div>
        </div>

      </section>


    </div>
  </section>

  <section id="terms">
    <br>

    <div class="innerbanner">
      <div class="wrapper">
        <div class="innerpage_heading ">
          <h2 style="text-align: center;">மாணவர்களுக்கான விதிமுறைகள்</h2>
        </div>
      </div>
    </div>


    <div class="row " style="padding:30px;">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="" style="list-style: none;">
          <li class="highlights  cat_active">
            <span class="lampicon"><img src="/images/bullets.png" class=""></span>
            விருப்பம் உள்ள அனைத்து மாணவ மாணவியர்கள் இப்பட்டயப் படிப்பில் இணைந்து
            பயன்பெறலாம்.
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"><img src="/images/bullets.png" class=""></span>
            பட்டய வகுப்பில் சேரும்போது ஒவ்வொருவரும் தங்களுடைய சேர்க்கை கடிதங்கள், வாக்காளர்
            அடையாள அட்டை, ஆதார் அட்டை, கல்வித் தகுதிச் சான்றிதழ்கள், புகைப்படம்(4) போன்றவை
            கொண்டு வருதல் வேண்டும்.
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"><img src="/images/bullets.png" class=""></span>
            பட்டயப் படிப்பில் சேர்வதற்கு 10, +2 ஆம் வகுப்பு படித்தவர்கள், பட்டம் பெற்றவர்கள் என
            அனைவரும் பட்டயப் படிப்பில் சேரலாம்.
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"><img src="/images/bullets.png" class=""></span>
            மாணவர்கள் அளிக்கும் தமிழ் பெயர், ஆங்கில பெயர் மற்றும் முகவரி ஐந்து ஆண்டுகளுக்கு
            மாற்றம் செய்ய இயலாது. எனவே மாணவர்கள் சரியான பெயர் மற்றும் முகவரி அளிக்க வேண்டும்.
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"><img src="/images/bullets.png" class=""></span>
            ஏற்கனவே மருத்துவம் பற்றி ஓரளவிற்குத் தெரிந்தவர்கள் இப்பட்டயப் படிப்பில் சேர்ந்து முழுமையாக
            கற்றுக் கொள்வதற்கு அவரர்கள் தமக்கு மருத்துவம் பற்றித் தெரியும் என்று அவ்வூரின் கிராம
            மக்கள் பத்துப் பேரின் சான்றொப்பம் (முகவரியுடன்) மற்றும் கிராம நிர்வாக அதிகாரியின்
            கையொப்பம் பெற்று வர வேண்டும். இதன்பிறகே அவர்கள் சேர்த்துக் கொள்ளப்படுவர்.
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"><img src="/images/bullets.png" class=""></span>
            ஒவ்வொரு மாணவர்களுக்கும் அடையாள அட்டை (ID card) வழங்கப்படும்.
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"><img src="/images/bullets.png" class=""></span>
            குறிப்பிட்டக் காலங்களில் கல்விக் கட்டணம் முழுமையாக செலுத்த வேண்டும். பதினெண்
            சித்தர்கள் மருத்துவ ஆய்விருக்கையின் பட்டயத்தில் சேரும் மாணவர்களின் கட்டணத்
            தொகையை முழுமையாக இருக்கையின் வங்கிக் கணக்கில் செலுத்த வேண்டும். வங்கியில் பணம்
            செலுத்தியதற்கான ஒப்புகைச் சீட்டை விவரங்களுடன் அலுவலகத்தில் தெரிவித்து பதிவு எண்
            பெற்றுக் கொள்ள வேண்டும்.
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"><img src="/images/bullets.png" class=""></span>
            மாணவர்கள் சேர்க்கையில் இருந்து விலகிக்கொள்ள விரும்பினால் கட்டணம் திருப்பித் தரப்பட
            மாட்டாது. தவிர்க்க இயலாத காரணத்தால் தேர்வு எழுத முடியாதவர்கள் மற்றும் தேர்வில் வெற்றி
            பெறாதவர்கள் தனிக்கட்டணம் குறிப்பிட்ட நாட்களுக்குள் செலுத்தி அடுத்த ஆண்டு மறுதேர்வு
            எழுதலாம்.
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"><img src="/images/bullets.png" class=""></span>
            ஆண்டுக்கு இரு முறை, எழுத்துத் தேர்வும், பயிற்சித் தேர்வும் நடத்தப்படும். இவை இரண்டிலும் தேர்ச்சி பெற்ற
            மாணவர்களுக்கு மதிப்பெண் சான்றுகள் வழங்கப்படும்.
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"><img src="/images/bullets.png" class=""></span>
            பாடநூல்கள், பயிற்சிக் காலங்களில் பயன்படுத்தப்படும் மருந்துப் பொருட்களுக்குரிய
            கட்டணத்தைத் தனியாக செலுத்த வேண்டும்.
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"><img src="/images/bullets.png" class=""></span>
            பதினெண் சித்தர்களின் நூல்கள் பாடநூல்களாக வைக்கப்படும்.
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"><img src="/images/bullets.png" class=""></span>
            ஒவ்வொரு வாரமும் சனி, ஞாயிறு ஆகிய இரண்டு நாட்களில் வகுப்புகள் நேர்முகமாகவும்
            அறிவிக்கப்பட்ட இடங்களில் நடைபெறும். இணையம் வழியாகவும் நடைபெறும்.
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"><img src="/images/bullets.png" class=""></span>
            ஆண்டுக்கு இரு முறை, எழுத்துத் தேர்வும், பயிற்சித் தேர்வும் நடத்தப்படும். இவை இரண்டிலும்
            தேர்ச்சி பெற்ற மாணவர்களுக்கு மதிப்பெண் சான்றிதழ் வழங்கப்படும்.
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"><img src="/images/bullets.png" class=""></span>
            பதினெண் சித்தர்கள் மருத்துவ ஆய்விருக்கையில் பயிலும் மாணவர்கள் நிறுவன செயல்பாடு
            விதிமுறைகளுக்கு உட்பட்டு செயல்பட வேண்டும். நிறுவன விதிமுறைகளுக்கு மாறாக செயல்படும்
            மாணவர்களை அவர்களுடைய சான்றிதழ்கள் பறிமுதல் செய்யப்பட்டு நடவடிக்கை
            மேற்கொள்ளப்படும்.
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"><img src="/images/bullets.png" class=""></span>
            நிறுவனத்தின் பட்டயங்களின் விபரம்
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon">1.</span>
            பதினெண் சித்தர்களின் மூலிகை மருத்துவம் &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - &nbsp;முதலாமாண்டு
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"></span>&nbsp; &nbsp;
            18 Siddhars Herbal Medicine &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp;- &nbsp;First Year
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon">2.</span>
            பதினெண் சித்தர்களின் தமிழ் மரபு மருத்துவம் &nbsp; &nbsp; &nbsp; &nbsp; - &nbsp;இரண்டாமாண்டு
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"></span>&nbsp; &nbsp;
            18 Siddhars Tamil Traditional Medicine
            &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp;- &nbsp;Second Year
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon">3.</span>
            பதினெண் சித்தர்களின் உயர்கல்வி மருத்துவம் &nbsp; &nbsp; &nbsp; &nbsp; - &nbsp;மூன்றாமாண்டு (மற்றும்)
            நான்காமாண்டு
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"></span>&nbsp; &nbsp;
            18 Siddhars Higher Education Medicine &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;- &nbsp;Third Year (and) Fourth Year
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon">4.</span>
            பதினெண் சித்தர்களின் உயராய்வு மருத்துவம் &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - &nbsp;ஐந்தாமாண்டு
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"></span>&nbsp; &nbsp;
            18 Siddhars Advanced Medicine &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-
            &nbsp;Five Year
          </li>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"></span>
            &nbsp; &nbsp; &nbsp; முதலாமாண்டு மதிப்பெண் சான்றிதழ் மற்றும் பட்டயச் சான்றிதழ் வைத்து கல்வியை தொடர
            மட்டுமே பயன்படுத்த வேண்டும். பதினெண் சித்தர்களின் மருத்துவ ஆய்விருக்கையின் ஐந்து ஆண்டு
            கல்வியை முழுமையாக முடித்து தேர்ச்சி பெற்ற பின்பு பதிவுக்கான உரிய ஏற்பாடு நிறுவனத்தின் வழி
            செய்யப்படும். மாணவர்கள் நிறுவனம் விதிமுறைகளுக்கு உட்பட்டு செயல்பட வேண்டும்.
          </li>
          <br>
          <li class="philanthropy cat_no_active ">
            <span class="lampicon"></span>
            &nbsp; &nbsp; &nbsp; சித்தர்களின் கல்வி என்பது கற்று அறிவை வளர்த்து கொள்வதற்கு மட்டும்மல்ல எல்லோருக்கும்
            பயன்
            பெறும் வகையில் அமைதல் வேண்டும்.
          </li>


      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="signature">
        <div class="signature-list">
          <div class="signature-list-item">
            இப்படிக்கு
          </div>
          <div class="signature-list-item">
            (விண்ணப்பதாரர் கையொப்பம்)
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>