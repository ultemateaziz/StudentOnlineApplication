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
              </div>
            </div>
            <div class="d-flex justify-content-btween">
            <div class="col-lg-4 col-md-12">
                <div class="white-box analytics-info shadow border mx-3">
                    <h3 class="box-title p-3 text-center">Total students</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            <div id="sparklinedash2"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                            </div>
                        </li>
                        <li class="ms-auto px-3 text-center"><span class="counter text-purple h3">{{$count}}</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="white-box analytics-info shadow border mx-3">
                    <h3 class="box-title p-3 text-center">Total First Year</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            <div id="sparklinedash2"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                            </div>
                        </li>
                        <li class="ms-auto px-3 text-center"><span class="counter text-purple h3">{{$count1}}</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="white-box analytics-info shadow border mx-3">
                    <h3 class="box-title p-3 text-center">Total Second Year</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            <div id="sparklinedash2"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                            </div>
                        </li>
                        <li class="ms-auto px-3 text-center"><span class="counter text-purple h3">{{$count2}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-btween mt-5">
            <div class="col-lg-4 col-md-12">
                <div class="white-box analytics-info shadow border mx-3">
                    <h3 class="box-title p-3 text-center">Total Third Year</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            <div id="sparklinedash2"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                            </div>
                        </li>
                        <li class="ms-auto px-3 text-center"><span class="counter text-purple h3">{{$count3}}</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="white-box analytics-info shadow border mx-3">
                    <h3 class="box-title p-3 text-center">Total Fourth Year</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            <div id="sparklinedash2"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                            </div>
                        </li>
                        <li class="ms-auto px-3 text-center"><span class="counter text-purple h3">{{$count4}}</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="white-box analytics-info shadow border mx-3">
                    <h3 class="box-title p-3 text-center">Total Fifth Year</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            <div id="sparklinedash2"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                            </div>
                        </li>
                        <li class="ms-auto px-3 text-center"><span class="counter text-purple h3">{{$count5}}</span></li>
                    </ul>
                </div>
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