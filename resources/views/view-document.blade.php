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
                    @role('admin')
                    <a href="{{route('admin.dashboard')}}" class="btn btn-sm bg-white btn-icon-text border ml-3">Back</a>
                    @else
                    <a href="{{route('teacher.dashboard')}}" class="btn btn-sm bg-white btn-icon-text border ml-3">Back</a>
                    @endrole
            </div>
        </div>
        <div>
                    <!-- ============================================================== -->
                    <!-- Three charts -->
                    <div class="d-flex justify-content-btween">
                        <div class="col-lg-4 col-md-12">
                            <div class="white-box analytics-info shadow border py-3 px-4 m-3">
                                <h3 class="box-title">10 பட்டம் சான்றிதழ்</h3>
                                <ul class="list-inline two-part d-flex align-items-center mb-0">
                                    <li>
                                    <img src="{{asset('photos/'.$data->cert_10)}}" alt="" class=" rounded" width="200px">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="white-box analytics-info shadow border py-3 px-4 m-3">
                                <h3 class="box-title">+2 பட்டம் சான்றிதழ்</h3>
                                <ul class="list-inline two-part d-flex align-items-center mb-0">
                                    <li>
                                    <img src="{{asset('photos/'.$data->certi_12)}}" alt="" class=" rounded" width="200px">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="white-box analytics-info shadow border py-3 px-4 m-3">
                                <h3 class="box-title">வாக்காளர் அட்டை</h3>
                                <ul class="list-inline two-part d-flex align-items-center mb-0">
                                    <li>
                                    <img src="{{asset('photos/'.$data->voter)}}" alt="" class=" rounded" width="200px">
                                    </li>
                                </ul>
                            </div>
                        </div>                       
                    </div>
                    <div class="d-flex justify-content-space-between">
                    <div class="col-lg-4 col-md-12">
                            <div class="white-box analytics-info shadow border py-3 px-4 m-3">
                                <h3 class="box-title">குடும்ப அட்டை</h3>
                                <ul class="list-inline two-part d-flex align-items-center mb-0">
                                    <li>
                                    <img src="{{asset('photos/'.$data->family_card)}}" alt="" class=" rounded" width="200px">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="white-box analytics-info shadow border py-3 px-4 m-3">
                                <h3 class="box-title">ஆதார் அட்டை</h3>
                                <ul class="list-inline two-part d-flex align-items-center mb-0">
                                    <li>
                                    <img src="{{asset('photos/'.$data->adhar_card)}}" alt="" class=" rounded" width="200px">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>

</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
@include('layouts.admin.footer')