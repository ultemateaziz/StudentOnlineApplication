@extends('layouts.master')
@section('main')
<section>
                <div class="main">
                    <div class="title">
                          <h3 class="title-content">முதலாம் ஆண்டு விண்ணப்பம்</h3>
                    </div>
                    <div class="sub-title">
                     (தமிழில் பூர்த்தி செய்யவும்)
                   </div>
 
               </div>
              </section>
              <br>
              <br>
<div>
    @if (session()->has('message'))
    <div class="alert alert-success  alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('danger'))
    <div class="alert alert-danger  alert-dismissible fade show">
        {{ session('danger') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>
<section id="section-form" class="section-form">
    <div class="form-header">

        <form method="post" action="{{route('first')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-header-list">
                <label for="">விண்ணப்ப எண்:</label>
                <input type="text" value="00{{$count+1}}" disabled>
            </div>
            <div class="form-header-list">
                <label for="">நாள் :</label>
                <input type="date" name="day" required>
                @error('day')
                <span class="text-danger py-2">
                    {{$message}}
                </span>
                @enderror
            </div>
    </div>
    <br>
    <br>
    <div class="form-name">
        <div class="form-name-list">
            <label for="">1. பெயர் (தமிழில்):</label>
            <input type="text" class="text-input" name="name" required>
            @error('name')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
        <div class="form-name-list">
            <label for="" class="right-label">ஆங்கிலம் :</label>
            <input type="text" class="text-input" name="eng_name" required>
            @error('eng_name')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
    </div>
    <br>
    <div class="father-name">
        <div class="father-name-list">
            <label for="">2. தந்தை / கணவன் பெயர் :</label>
            <input type="text" name="fh_name" required>
            @error('fh_name')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
    </div>
    <br>
    <div class="form-name">
        <div class="form-name-list">
            <label for="">3. பிறந்த நாள்:</label>
            <input type="date" name="birth" class="text-input" required>
            @error('birth')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
        <div class="form-name-list">
            <label for="" class="right-label">இரத்த வகை :</label>
            <input type="text" name="blood_type" class="text-input" required>
            @error('blood_type')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
    </div>
    <br>
    <div class="father-name">
        <div class="father-name-list">

            <label for="">4. முகவரி &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                வீட்டு எண், தெரு:</label>

            <input type="text" name="no_street" required>
            @error('no_street')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
        <br>
        <div class="father-name">
            <div class="father-name-list">
                <label for="">ஊர் :</label>
                <input type="text" name="city" class="text-input" required>
            </div>
            @error('city')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
        <br>
        <div class="father-name">
            <div class="father-name-list">
                <label for="">வட்டம், மாவட்டம் :</label>
                <input type="text" name="district" class="text-input" required>
            </div>
            @error('district')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
        <br>
        <div class="father-name">
            <div class="father-name-list">
                <label for="">அஞ்சல் குறியீடு :</label>
                <input type="text" name="postal_code" class="text-input" required>
            </div>
            @error('postal_code')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
        <br>
        <div class="father-name">
            <div class="father-name-list">
                <label for="">அலைபேசி எண் :</label>
                <input type="text" name="phone" class="text-input" required>
            </div>
            @error('phone')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
        <br>
        <div class="father-name">
            <div class="father-name-list">
                <label for="">பகிரி (whatsapp number) :</label>
                <input type="text" name="wp_no" class="text-input" required>
            </div>
            @error('wp_no')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
        <br>
        <div class="father-name">
            <div class="father-name-list">
                <label for="">மின்னஞ்சல் :</label>
                <input type="text" name="email" class="text-input" required>
            </div>
            @error('email')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
        <br>
        <div class="father-name">
            <div class="father-name-list">
                <label for="">ஆதார் எண் :</label>
                <input type="text" name="adhar_no" class="text-input" required>
            </div>
            @error('adhar_no')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
        <br>
        <div class="qualification">
            <div class="qualification-list">
                <label for="">5. கல்வித் தகுதி :</label>
                <label class="radio-inline">
                    <input type="radio" name="optradio" value="SSLC" required>SSLC
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio" value="+2" required>+2
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio" value="Degree" required>Degree
                </label>
            </div>
            @error('optradio')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
        <br>
        <div class="father-name">
            <div class="father-name-list">
                <label for=""> &nbsp; &nbsp; 10 பட்டம் சான்றிதழ் :</label>
                <input type="file" name="cert_10" class="text-input" >
            </div>
            @error('cert_10')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
        <br>
        <div class="father-name">
            <div class="father-name-list">
                <label for="">&nbsp; &nbsp; +2 பட்டம் சான்றிதழ் :</label>
                <input type="file" name="certi_12" class="text-input" >
            </div>
            @error('certi_12')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
        <br>
        <div class="father-name">
            <div class="father-name-list">
                <label for="">&nbsp; &nbsp; வாக்காளர் அட்டை :</label>
                <input type="file" name="voter" class="text-input" >
            </div>
            @error('voter')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
        <br>
        <div class="father-name">
            <div class="father-name-list">
                <label for="">&nbsp; &nbsp; குடும்ப அட்டை :</label>
                <input type="file" name="family_card" class="text-input" >
            </div>
            @error('family_card')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
        <br>
        <div class="father-name">
            <div class="father-name-list">
                <label for="">&nbsp; &nbsp; ஆதார் அட்டை:</label>
                <input type="file" name="adhar_card" class="text-input" >
            </div>
            @error('adhar_card')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
        </div>
        <br>
        <div class="submit">
            <div class="submit-list">
                <label for="">6. படிக்க விரும்பும் பட்டயம் : (டிக் செய்யவும்)</label>

            </div>
            <div class="submit-list">
                <label for=""> &nbsp; &nbsp; பதினெண் சித்தர்களின் மூலிகை மருத்துவ பட்டயம்</label>
                <input type="checkbox" name="checkbox" class="checkbox" required>
                @error('checkbox')
            <span class="text-danger py-2">
                {{$message}}
            </span>
            @enderror
            </div>
            <div class="submit-list">
                <input type="hidden" name="yr" class="text" value="first">
            </div>
            <div class="submit-list">
                <p> &nbsp; &nbsp; &nbsp; &nbsp; பதினெண் சித்தர்களின் ஐந்தாண்டு மருத்துவ கல்வி</p>

            </div>
            <br>
            <br>

            @endsection
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
            <script src="{{asset('validationjs/jquery.validate.js')}}"></script>