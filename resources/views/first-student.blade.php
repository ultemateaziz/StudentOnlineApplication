@include('layouts.admin.header')
@role('admin')
@include('layouts.admin.admin-sidebar')
@else
@include('layouts.admin.teacher-sidebar')
@endrole

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
              </div>
            </div>
            <!-- <div id="userForm">
                <h1>Edit User</h1>
                @foreach($datas as $data)
                <form method="post" action='{{route("admin.edit",$data->id)}}'>
                    @csrf
                <div class="form-name">
                  <div class="form-name-list">
                    <label for="name">பெயர் (தமிழில்):</label>
                  <input type="text" id="nametamil" name="name" value="{{$data->name}}" required>
                  </div>
                  <div class="form-name-list">
                    <label for="name">ஆங்கிலம் :</label>
                  <input type="text" id="nameenglish" name="eng_name" value="{{$data->eng_name}}" required>
                  </div>
                  <div class="form-name-list">
                    <label for="name">தந்தை / கணவன் பெயர் :</label>
                  <input type="text" id="fathername" name="fh_name" value="{{$data->fh_name}}" required>
                  </div>
                </div>
                <div class="form-name">
                  <div class="form-name-list">
                    <label for="name">பிறந்த நாள்:</label>
                  <input type="date" id="dob" name="birth" value="{{$data->birth}}" required>
                  </div>
                  <div class="form-name-list">
                    <label for="name">இரத்த வகை :</label>
                  <input type="text" id="bloodgroup" name="blood_type" value="{{$data->blood_type}}" required>
                  </div>
                  <div class="form-name-list">
                    <label for="name">வீட்டு எண், தெரு:</label>
                  <input type="text" id="door" name="no_street" value="{{$data->no_street}}" required>
                  </div>
                </div>
                <div class="form-name">
                  <div class="form-name-list">
                    <label for="name">ஊர் :</label>
                  <input type="text" id="villagename" name="city" value="{{$data->city}}"required>
                  </div>
                  <div class="form-name-list">
                    <label for="name">வட்டம், மாவட்டம் :</label>
                  <input type="text" id="district" name="district" value="{{$data->district}}" required>
                  </div>
                  <div class="form-name-list">
                    <label for="name">அஞ்சல் குறியீடு :</label>
                  <input type="text" id="postnumber" name="postal_code" value="{{$data->postal_code}}" required>
                  </div>
                </div>
                <div class="form-name">
                  <div class="form-name-list">
                    <label for="name">அலைபேசி எண் :</label>
                  <input type="text" id="phonenumber" name="phone"  value="{{$data->phone}}" required>
                  </div>
                  <div class="form-name-list">
                    <label for="name">பகிரி (whatsapp number) :</label>
                  <input type="text" id="whatsappnumber" name="wp_no" value="{{$data->wp_no}}" required>
                  </div>
                  <div class="form-name-list">
                    <label for="name">மின்னஞ்சல் :</label>
                  <input type="text" id="email" name="email" value="{{$data->email}}" required>
                  </div>
                </div>
                <div class="form-name">
                  <div class="form-name-list">
                    <label for="name">ஆதார் எண் :</label>
                  <input type="text" id="aadharnumber" name="adhar_no" value="{{$data->adhar_no}}" required>
                  </div>
                  <div class="form-name-list">
                    <label for="name">கல்வித் தகுதி :</label>
              <select name="optradio" id="qualification"    type="text">
              <option value="{{$data->optradio}}">{{$data->optradio}}</option>
                <option value="SSLS">SSLS</option>
                <option value="+2">+2</option>
                <option value="degree">Degree</option>
              </select>
                  </div>
                  
                </div>
                @endforeach
                  <div class="btns">
                    <button type="button" onclick="closeForm()">Close</button>
                  <button type="submit">Update Data</button>
                  </div>
              </form>
          </div> -->
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
            <table id="product-table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Father's Name</th>
                  <th>Email</th>
                  <th>Edit</th>
                  @role('admin')
                  <th>Delete</th>
                  @endrole
                  <th>Document</th>
                  <th>Application Status</th>
                  <th>Book Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                    @foreach($datas as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->fh_name}}</td>
                        <td>{{$data->email}}</td>
                        <td>
                      @role('admin')
                      <a href="{{route('admin.show',$data->id)}}" class="btn btn-sm ml-3 btn-success" onclick="openForm()"> Edit </a>
                      @else
                      <a href="{{route('teacher.show',$data->id)}}" class="btn btn-sm ml-3 btn-success" onclick="openForm()"> Edit </a>
                      @endrole
                    </td>
                    @role('admin')
                    <td>
                    <form action='{{route("admin.destroy",$data->id)}}' method="post">
                        @csrf
                        <button type="submit" class="btn btn-sm ml-3 btn-success" onclick="confirmation()"> Delete </button>
                    </form>
                    </td>
                    @endrole
                    <td>                      
                    @role('admin')
                    <a href='{{route("admin.view",$data->id)}}' class="btn btn-sm ml-3 btn-success"> View </a>
                    @else
                    <a href='{{route("teacher.view",$data->id)}}' class="btn btn-sm ml-3 btn-success"> View </a>
                    @endrole
                  </td>
                    <td>
                    <form action='{{route("admin.app_status",$data->id)}}' method="post">
                        @csrf
                    <select name="application_status" id="application_status{{$data->id}}" onChange="disable_select('{{$data->id}}')">
                      <option value="{{$data->application_status}}">{{$data->application_status}}</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                </td>
                    <td>
                    <select name="book_status" id="book_status{{$data->id}}" disabled>
                      <option value="{{$data->book_status}}">{{$data->book_status}}</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                </td>
                <td><button type="submit" class="btn btn-sm ml-3 btn-success">Change Status</button></td>
            </form>
                  </tr>
                  @endforeach
              </tbody>
            </table>
            <!--browser stats ends-->
            {{$datas->links()}}
              </div>
            </div>
          </div>
          
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <script>
      /*
      $('#application_status').change(function (){
        var test = $('#application_status').val();
        if(test=='yes')
        {
          $('#book_status').removeAttr('disabled');
        }else{
          $('#book_status').attr('disabled','disabled');
        }
      });
      */

      function disable_select(id)
      {

        var selected_val = $('#application_status'+id).val();
        if(selected_val=='yes')
        {
          $('#book_status'+id).removeAttr('disabled');
        }else
        {
          $('#book_status'+id).attr('disabled','disabled');
        }

      }


    </script>
    @include('layouts.admin.footer')