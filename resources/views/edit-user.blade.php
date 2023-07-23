@include('layouts.admin.header')
@include('layouts.admin.teacher-sidebar')

        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <h3 class="mb-0"> Hi, welcome back! <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Your web analytics dashboard .</span>
              </h3>
              <div class="d-flex">
                <button type="button" class="btn btn-sm bg-white btn-icon-text border">
                  <i class="mdi mdi-email btn-icon-prepend"></i> Email </button>
                <button type="button" class="btn btn-sm bg-white btn-icon-text border ml-3">
                  <i class="mdi mdi-printer btn-icon-prepend"></i> Print </button>
                  @role('admin')
                    <a href="{{route('admin.dashboard')}}" class="btn btn-sm bg-white btn-icon-text border ml-3">Back</a>
                    @else
                    <a href="{{route('teacher.dashboard')}}" class="btn btn-sm bg-white btn-icon-text border ml-3">Back</a>
                    @endrole
              </div>
            </div>
            <div>
            @if (session()->has('message'))
            <div class="alert alert-success  alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session()->has('error'))
            <div class="alert alert-danger  alert-dismissible fade show">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
            <div>
                <h1>Edit User: {{$data->id}} </h1>
                <form method="post" action='{{route("teacher.edit",$data->id)}}'>
                    @csrf
                <div class="form-name">
                  <div class="form-name-list">
                    <label for="name">பெயர் (தமிழில்):</label>
                  <input type="text" id="nametamil" name="name" value="{{$data->name}}" required>
                  @error('name')
                        <span class="text-danger py-2">
                            {{$message}}
                        </span>
                        @enderror   
                </div>
                  <div class="form-name-list">
                    <label for="name">ஆங்கிலம் :</label>
                  <input type="text" id="nameenglish" name="eng_name" value="{{$data->eng_name}}" required>
                  @error('eng_name')
                        <span class="text-danger py-2">
                            {{$message}}
                        </span>
                        @enderror 
                  </div>
                  <div class="form-name-list">
                    <label for="name">தந்தை / கணவன் பெயர் :</label>
                  <input type="text" id="fathername" name="fh_name" value="{{$data->fh_name}}" required>
                  @error('fh_name')
                        <span class="text-danger py-2">
                            {{$message}}
                        </span>
                        @enderror 
                  </div>
                </div>
                <div class="form-name">
                  <div class="form-name-list">
                    <label for="name">பிறந்த நாள்:</label>
                  <input type="date" id="dob" name="birth" value="{{$data->birth}}" required>
                  @error('birth')
                        <span class="text-danger py-2">
                            {{$message}}
                        </span>
                        @enderror 
                  </div>
                  <div class="form-name-list">
                    <label for="name">இரத்த வகை :</label>
                  <input type="text" id="bloodgroup" name="blood_type" value="{{$data->blood_type}}" required>
                  @error('blood_type')
                        <span class="text-danger py-2">
                            {{$message}}
                        </span>
                        @enderror 
                  </div>
                  <div class="form-name-list">
                    <label for="name">வீட்டு எண், தெரு:</label>
                  <input type="text" id="door" name="no_street" value="{{$data->no_street}}" required>
                  @error('no_street')
                        <span class="text-danger py-2">
                            {{$message}}
                        </span>
                        @enderror 
                  </div>
                </div>
                <div class="form-name">
                  <div class="form-name-list">
                    <label for="name">ஊர் :</label>
                  <input type="text" id="villagename" name="city" value="{{$data->city}}"required>
                  @error('city')
                        <span class="text-danger py-2">
                            {{$message}}
                        </span>
                        @enderror 
                  </div>
                  <div class="form-name-list">
                    <label for="name">வட்டம், மாவட்டம் :</label>
                  <input type="text" id="district" name="district" value="{{$data->district}}" required>
                  @error('district')
                        <span class="text-danger py-2">
                            {{$message}}
                        </span>
                        @enderror 
                  </div>
                  <div class="form-name-list">
                    <label for="name">அஞ்சல் குறியீடு :</label>
                  <input type="text" id="postnumber" name="postal_code" value="{{$data->postal_code}}" required>
                  @error('postal_code')
                        <span class="text-danger py-2">
                            {{$message}}
                        </span>
                        @enderror 
                  </div>
                </div>
                <div class="form-name">
                  <div class="form-name-list">
                    <label for="name">அலைபேசி எண் :</label>
                  <input type="text" id="phonenumber" name="phone"  value="{{$data->phone}}" required>
                  @error('phone')
                        <span class="text-danger py-2">
                            {{$message}}
                        </span>
                        @enderror 
                  </div>
                  <div class="form-name-list">
                    <label for="name">பகிரி (whatsapp number) :</label>
                  <input type="text" id="whatsappnumber" name="wp_no" value="{{$data->wp_no}}" required>
                  @error('wp_no')
                        <span class="text-danger py-2">
                            {{$message}}
                        </span>
                        @enderror 
                  </div>
                  <div class="form-name-list">
                    <label for="name">மின்னஞ்சல் :</label>
                  <input type="text" id="email" name="email" value="{{$data->email}}" required>
                  @error('email')
                        <span class="text-danger py-2">
                            {{$message}}
                        </span>
                        @enderror 
                  </div>
                </div>
                <div class="form-name">
                  <div class="form-name-list">
                    <label for="name">ஆதார் எண் :</label>
                  <input type="text" id="aadharnumber" name="adhar_no" value="{{$data->adhar_no}}" required>
                  @error('adhar_no')
                        <span class="text-danger py-2">
                            {{$message}}
                        </span>
                        @enderror 
                  </div>
                  <div class="form-name-list">
                    <label for="name">கல்வித் தகுதி :</label>
              <select name="optradio" id="qualification"    type="text">
              <option value="{{$data->optradio}}">{{$data->optradio}}</option>
                <option value="SSLS">SSLS</option>
                <option value="+2">+2</option>
                <option value="degree">Degree</option>
              </select>
              @error('optradio')
                        <span class="text-danger py-2">
                            {{$message}}
                        </span>
                        @enderror 
                  </div>
                  
                </div>
                  <div class="btns">
                    <button type="button" onclick="closeForm()">Close</button>
                  <button type="submit">Update Data</button>
                  </div>
              </form>
          </div>
    
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('layouts.admin.footer')