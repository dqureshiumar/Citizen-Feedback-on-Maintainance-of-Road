@extends('layouts.app')
@section('content')
    <div class="container">
            <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Edit your Feedback') }}</div>
            
                            <div class="card-body">
                                <form method="POST" action="{{ route('submit-a-feedback.update',$feedback->id) }}" enctype="multipart/form-data">
                                        @method('PUT')
                                    @csrf
                                    <div class="form-group row">
                                            <label class="col-md-4 col-form-label text-md-right" for="exampleFormControlSelect1">Select Feedback Area</label>
                                            <div class="col-md-6">
                                            <select name="feedarea" class="form-control" id="exampleFormControlSelect1" onchange="showfield(this.options[this.selectedIndex].value)" required>
                                              <option value="">Select Feedback Area</option>
                                              <option value="Slow Progress">Slow Progress</option>
                                              <option value="Abandoned Work">Abandoned Work</option>
                                              <option value="Poor Quality">Poor Quality</option>
                                              <option value="Other">Other</option>
                                            </select>
                                          </div>
                                    </div>

                                    <div id="div1"></div>

                                    <script type="text/javascript">
                                        function showfield(name){
                                            if(name=='Other')document.getElementById('div1').innerHTML = '<div class="form-group row"><label for="name" class="col-md-4 col-form-label text-md-right">Other:</label> <div class="col-md-6"><input class="form-control" type="text" name="other" /></div></div>';
                                            else 
                                                document.getElementById('div1').innerHTML='';
                                        }
                                        </script>
            
                                    <div class="form-group row">
                                        <label for="remark" class="col-md-4 col-form-label text-md-right">{{ __('Remark') }}</label>
            
                                        <div class="col-md-6">
                                            <textarea id="remark" name="remark" type="text" class="form-control @error('remark') is-invalid @enderror" name="remark" value="{{ old('remark') }}" required autocomplete="remark" autofocus></textarea>
            
                                            @error('remark')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                            <label class="col-md-4 col-form-label text-md-right" for="state">Select State</label>
                                            <div class="col-md-6">
                                            <select name="state" class="form-control" id="state" required>
                                            <option value="">State</option>
                                            <option value="Andra Pradesh">Andra Pradesh</option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>                                                
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Orissa">Orissa</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telagana">Telagana</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttaranchal">Uttaranchal</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="West Bengal">West Bengal</option>
                                            </select>
                                          </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city">
            
                                            @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pincode" class="col-md-4 col-form-label text-md-right">{{ __('Pincode') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="pincode" type="text" class="form-control @error('pincode') is-invalid @enderror" name="pincode" value="{{ old('pincode') }}" required autocomplete="pincode">
            
                                            @error('pincode')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="landmark" class="col-md-4 col-form-label text-md-right">{{ __('Landmark') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="landmark" type="text" class="form-control @error('landmark') is-invalid @enderror" name="landmark" value="{{ old('landmark') }}" required autocomplete="landmark">
                
                                                @error('landmark')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('More Precise Address') }}</label>
                
                                            <div class="col-md-6">
                                                <textarea id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus></textarea>
                
                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="filename[]" class="col-md-4 col-form-label text-md-right">{{ __('Upload Images') }}</label>
                
                                            <div class="col-md-6">
                                                <input type="file" id="filename[]" class="form-control" name="filename[]" required multiple>
                                            </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Submit my Feedback') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
@endsection