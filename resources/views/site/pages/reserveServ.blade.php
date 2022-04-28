@extends('site.layouts.master')

@section('content')
    <img src={{ asset('assets/images/default_1.jpg') }} class="img-fluid" alt="...">

    <form>
        <div class="   flex d-flex  justify-content-evenly reserve-Serv mt-4" dir="rtl">
            <div class="personal-form">

                <h2 class="m-4"> البيانات الشخصية</h2>
               
                
                <div class="mb-3">

                    <input type="text" class="form-control" id="company_name" placeholder="اسم الشركة">
                </div>
                <div class="mb-3">

                    <input type="phone" class="form-control" id="phone" name="phone" placeholder="رقم الموبايل">
                </div>
                <div class="mb-3">

                    <input type="text" class="form-control" id="address" name="address" placeholder="العنوان">
                </div>
                <div class="mb-3">

                    <input type="text" class="form-control" id="city" name="city" placeholder="المدينة">
                </div>
                <div class="mb-3">

                    <input type="text" class="form-control" id="country" placeholder="country">
                </div>
            </div>
            <div class="service-form">
                <h2 class="m-4"> تفاصيل الشحنة<h2>

                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>من</option>
                                <option value="القاهرة">القاهرة</option>
                                <option value="اسوان">اسوان</option>
                                <option value="السعودية">السعودية</option>
                              </select>
                        
                            <select class="form-select" aria-label="Default select example">
                                <option selected>إلي</option>
                                <option value="القاهرة">القاهرة</option>
                                <option value="اسوان">اسوان</option>
                                <option value="السعودية">السعودية</option>
                              </select>
                        </div>
                       
                        <div class="mb-3">

                            <input type="text" class="form-control" id="client_address" name="client_address"
                                placeholder="عنوان االمستلم">
                        </div>
                        <div class="mb-3">

                            <input type="text" class="form-control" id="service_city" name="service_city"
                                placeholder="المدينة/الدولة">
                        </div>
                        
                        <div class="mb-3">

                            <select class="form-select" aria-label="Default select example">
                                <option selected>طريقة الشحن</option>
                                <option value="القاهرة">القاهرة</option>
                                <option value="اسوان">اسوان</option>
                                <option value="السعودية">السعودية</option>
                              </select>
                        </div>
                        <div class="mb-3">

                            <input type="text" class="form-control" id="service_type" name="service_type"
                                placeholder="نوع الشحنة">
                        </div>

            </div> 
        </div>
        <div class="field my-4 mx-5  ">
            <div class="control order-btn">
                <button class="button  order-btn" type="submit"> ارسل طلبك <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154l.215.338 7.494-7.494Z"/>
                  </svg>  </button>
            </div>
        </div>
    </form>

    

    

@endsection
