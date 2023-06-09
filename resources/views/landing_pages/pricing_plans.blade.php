@include('landing_pages.header_landing_page')

<div class="container">

    {{--  PLANS HEADING START  --}}
    <div class="row row-cols-1 justify-content-center align-items-center g-2">
        <div class="col">
            <h1 class="display-1 text-center plans_heading">Premiums Plans</h1>
            <br>
            <p class="text-center h6 plans_para1">
                Our Pricing Plans are designed to be affordable, flexible, and tailored to your
                unique needs.
            </p>
            <p class="text-center plans_para2">
                Choose the plan that is best for you. Now at
                <span
                    style="color:rgb(0, 0, 0); background-color: rgb(253, 180, 80); padding-inline: 2px">25%
                    off
                </span>
            </p>
            <br>
        </div>
    </div>
    {{--  PLANS HEADING END  --}}

    {{--  PLANS START  --}}

    {{--  PLANS MANUAL ROW START  --}}

    <div class="row rows-cols-4 justify-content-center align-items-start g-2">

        {{--  PLAN 1 START  --}}
        <div class="col m-4 px-1 plans_col1">
            <div class="mx-2">
                <div class="my-3"><i class="fa fa-leaf"></i>
                </div>
                <div class="plan_type_title">
                    Basic
                </div>
                <div class="plan_type_detail">
                    Introductory Material</div>
                <div class="lead plan_price_explain"><span
                        class="h3 plan_price">₹790&nbsp;</span>/Per
                    Month</div>

                <div class="">
                    <hr class="text-center mx-1 my-4 plan_detail_hr">
                </div>
                <div class="plan_details_heading">
                    Feautures
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Blogs</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">1 User at a time</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">1 Device throughout validity</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">No download of files</span>
                </div>
                <div>
                    <a href="{{ route('get_register', ['selected_plan_id' => 1]) }}"
                        style="text-decoration: none" plan_id="1">
                        <div style="background-color: black; color:white;"
                            class="my-3 py-2 text-center h6">
                            CHOOSE PLAN
                        </div>
                    </a>
                </div>
            </div>
        </div>
        {{--  PLAN 1 END  --}}

        {{--  PLAN 2 START  --}}
        <div class="col m-4 plans_col2">
            <div class="mx-2">
                <div class="my-3"><i class="fa fa-rocket"></i>
                </div>
                <div class="plan_type_title">
                    Starter
                </div>
                <div class="plan_type_detail">
                    Introductory Material</div>
                <div class="lead plan_price_explain"><span
                        class="h3 plan_price">₹1190&nbsp;</span>/Per
                    Month</div>

                <div class="">
                    <hr class="text-center mx-1 my-4 plan_detail_hr">
                </div>
                <div class="plan_details_heading">
                    Feautures
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Blogs</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Handwritten Notes</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">2 User at a time</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">2 Device throughout validity</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Files can be downloaded</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Customer Support 24/7</span>
                </div>
                <div>
                    <a href="{{ route('get_register', ['selected_plan_id' => 2]) }}"
                        style="text-decoration: none" plan_id="2">
                        <div style="background-color: black; color:white;"
                            class="my-3 py-2 text-center h6">
                            CHOOSE PLAN
                        </div>
                    </a>
                </div>
            </div>
        </div>
        {{--  PLAN 2 END  --}}

        {{--  PLAN 3 START  --}}
        <div class="col m-4 plans_col3">
            <div class="mx-2">
                <div class="my-3"><i class="fa fa-tree"></i>
                </div>
                <div class="plan_type_title">
                    Builder
                </div>
                <div class="plan_type_detail">
                    Introductory Material</div>
                <div class="lead plan_price_explain"><span
                        class="h3 plan_price">₹1990&nbsp;</span>/Per
                    Month</div>

                <div class="">
                    <hr class="text-center mx-1 my-4 plan_detail_hr">
                </div>
                <div class="plan_details_heading">
                    Feautures
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Blogs</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Handwritten Notes</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Podcasts</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">3 User at a time</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">3 Device throughout validity</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Files can be downloaded</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Customer Support 24/7</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Dedicated Instructor</span>
                </div>
                <div>
                    <a href="{{ route('get_register', ['selected_plan_id' => 3]) }}"
                        style="text-decoration: none" plan_id="3">
                        <div style="background-color: black; color:white;"
                            class="my-3 py-2 text-center h6">
                            CHOOSE PLAN
                        </div>
                    </a>
                </div>
            </div>
        </div>
        {{--  PLAN 3 END  --}}

        {{--  PLAN 4 START  --}}
        <div class="col m-4 plans_col4">
            <div class="mx-2">
                <div class="my-3"><i class="fa fa-space-shuttle"></i>
                </div>
                <div class="plan_type_title">
                    Expert
                </div>
                <div class="plan_type_detail">
                    Introductory Material</div>
                <div class="lead plan_price_explain"><span
                        class="h3 plan_price">₹2990&nbsp;</span>/Per
                    Month</div>

                <div class="">
                    <hr class="text-center mx-1 my-4 plan_detail_hr">
                </div>
                <div class="plan_details_heading">
                    Feautures
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Blogs</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Handwritten Notes</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Podcasts</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Videos</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">3 User at a time</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">3 Device throughout validity</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Files can be downloaded</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Customer Support 24/7</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Dedicated Instructor</span>
                </div>
                <div>
                    <i class="fa fa-check-circle-o"></i>
                    <span class="plan_details_points">Special Session by Sarwan Sir</span>
                </div>
                <div>
                    <a href="{{ route('get_register', ['selected_plan_id' => 4]) }}"
                        style="text-decoration: none" plan_id="4">
                        <div style="background-color: black; color:white;"
                            class="my-3 py-2 text-center h6">
                            CHOOSE PLAN
                        </div>
                    </a>
                </div>
            </div>
        </div>
        {{--  PLAN 4 END  --}}

    </div>
    {{--  PLANS MANUAL ROW END  --}}
    {{--  DATABASE PLANS START  --}}

    @php
        $i = 0;
    @endphp
    @foreach ($plans as $aplan)
        @if ($aplan->is_active == 1)
            @if ($i % 4 == 0)
                <div class="row justify-content-center align-items-start g-2">
            @endif
            {{--  PLANS AUTO ROW START  --}}


            {{--  PLAN START  --}}
            <div class="col-3 col mx-3 my-4" style="background-color: #ffc17b; width:20%">
                <div class="mx-2">
                    <div class="my-3"><i class="fa fa-leaf"></i>
                    </div>
                    <div class="plan_type_title">
                       {{ $aplan->planname }}
                    </div>
                    <div class="plan_type_detail">
                        Introductory Material</div>
                    <div class="lead plan_price_explain"><span
                            class="h3 plan_price">₹{{ $aplan->price }}&nbsp;</span>/Per
                        Month</div>

                    <div class="">
                        <hr class="text-center mx-1 my-4 plan_detail_hr">
                    </div>
                    <div class="plan_details_heading">
                        Feautures
                    </div>
                    @php
                        $features = json_decode($aplan->features);
                    @endphp
                    @foreach ($features as $feature)
                        @if ($feature != null)
                            <div>
                                <i class="fa fa-check-circle-o"></i>
                                <span class="plan_details_points">{{ $feature }}</span>
                            </div>
                        @endif
                    @endforeach

                    <div>
                        <a href="{{ route('get_register', ['selected_plan_id' => $aplan->plan_id]) }}"
                            style="text-decoration: none" plan_id={{ $aplan->plan_id }}>
                            <div style="background-color: black; color:white;"
                                class="my-3 py-2 text-center h6">
                                CHOOSE PLAN
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            {{--  PLAN END  --}}

            {{--  PLANS AUTO ROW END  --}}
            @if ($i % 4 == 3)
</div>
@endif

@php
    $i += 1;
@endphp
@endif
@endforeach

{{--  DATABASE PLANS END  --}}

{{--  PLANS END  --}}
</div>

@include('landing_pages.footer_landing_page')
