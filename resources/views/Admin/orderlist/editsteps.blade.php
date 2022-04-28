{{-- modal add price --}}
<div class="modal fade" id="editsteps{{ $order->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit tracking Steps</h5>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                <form action="{{ route('orderlist.update',$order->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Edit tracking Steps</label>
                    {{-- <input type="text"  name="id" value="{{ $order->id }}"> --}}
                    </div>
                    {{-- <div>
                        <label for="#"> تم تجهيز الشحنه</label><br>
                        <input type="radio" class="form-control"  name="step" value="step1">
                        <label for="#"> تم التعقيم والتغليف</label><br>
                        <input type="radio" class="form-control"  name="step" value="step2">
                        <label for="#"> فى الطريق</label><br>
                        <input type="radio" class="form-control"  name="step" value="step3">
                        <label for="#"> تم تسليم المنتج</label><br>
                        <input type="radio" class="form-control"  name="step" value="step4">
                    </div> --}}
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-warning waves-effect waves-light ml-3">
                            <input type="radio" name="options" id="option1" value="1" {{ $order->step == '1' ? 'checked' : ''}}> تم تجهيز الشحنه
                        </label>
                        <label class="btn btn-outline-primary waves-effect waves-light ml-3">
                            <input type="radio" name="options" id="option2" value="2" {{ $order->step == '2' ? 'checked' : ''}}> تم التعقيم والتغليف
                        </label>
                        <label class="btn btn-outline-danger waves-effect waves-light ml-3">
                            <input type="radio" name="options" id="option3" value="3" {{ $order->step == '3' ? 'checked' : ''}}> فى الطريق
                        </label>
                        <label class="btn btn-outline-success waves-effect waves-light ml-3">
                            <input type="radio" name="options" id="option4" value="4" {{ $order->step == '4' ? 'checked' : ''}}> تم تسليم المنتج
                        </label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">{{ __('site.Close') }}</button>
                        <button type="submit" class="btn btn-success waves-effect waves-light">{{ __('site.Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
