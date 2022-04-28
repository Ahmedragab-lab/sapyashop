@extends('site.layouts.master')
@section('title') order steps @endsection
@section('css')
<link rel="stylesheet" href="{{ asset('front/star.css') }}">
@endsection
@section('content')
<div id="content-main-wrap" class="is-clearfix">
    <div id="content-area" class="site-content-area">
      <div id="content-area-inner" class="site-content-area-inner">
             <!-- #content-main-wrap -->
            <section id="tracking-steps" class="section tracking-steps-section is-clearfix" >
                <div class="container">
                <p class="heading-title-top has-text-centered">tracking</p>
                <h1 class="heading-title style-3">how we work</h1>
                <br>
                <br>
                <div class="steps" data-aos="fade-right">
                    <div class="step-item {{ $order_step->step==1 ? 'active':'' }}" data-step-id="0">
                    <div class="step-marker"> 1 </div>
                    <div class="step-details">
                        <p class="step-title">تم تجهيز الشحنه</p>
                        <p>هذه الخطوه يتم تجهيز وسيله النقل وترتيبات النقل.</p>
                    </div>
                    </div>
                    <div class="step-item  {{ $order_step->step==2 ? 'active':'' }}" data-step-id="1">
                    <div class="step-marker">2</div>
                    <div class="step-details">
                        <p class="step-title">تم التعقيم والتغليف</p>
                        <p>الان يتم عمليه تعقيم وتغليف الشحنه بعنايه لتسليمها اليكم بجوده عاليه.</p>
                    </div>
                    </div>
                    <div class="step-item {{ $order_step->step==3 ? 'active':'' }}" data-step-id="2">
                    <div class="step-marker">3</div>
                    <div class="step-details">
                        <p class="step-title">عمليه المتابعه</p>
                        <p>تم التحرك ومتابعه عمليه سير الشحنه.</p>
                    </div>
                    </div>
                    <div class="step-item {{ $order_step->step==4 ? 'active':'' }}" data-step-id="3">
                    <div class="step-marker"> 4 </div>
                    <div class="step-details">
                        <p class="step-title">التسليم النهائى</p>
                        <p>الان تم استلام الشحنه يرجى تقييمكم للخدمه شكرا لكم مع تحيات مورا سوفت للنقل والشحن.</p>
                    </div>
                    </div>
                </div>
                </div>
            </section>
         
      </div>
  </div>
</div>
@endsection
@section('js')

@endsection
