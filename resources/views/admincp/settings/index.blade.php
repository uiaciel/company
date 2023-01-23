@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{ __('admincp.setting') }}</h3>
            </div>
            <div class="col-8 card">

                <div class="card-body">
                    <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 mt-3 row">
                            <label class="col-form-label col-sm-2 ">Sitename</label>
                            <div class="col-sm-10">
                                <input type="text" name="sitename" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-sm-2 ">Tagline</label>
                            <div class="col-sm-10">
                                <input type="text" name="tagline" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-sm-2 ">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-sm-2 ">Social Media</label>
                            <div class="col-sm-10">
                                <div class="row align-items-center">


                                    <div class="col-6">
                                        <label class="visually-hidden" for="inlineFormInputGroupUsername2">Username</label>
                                        <div class="input-group mb-2 me-sm-2">
                                            <div class="input-group-text">FB</div>
                                            <input type="text" name="facebook" class="form-control"
                                                id="inlineFormInputGroupUsername2" placeholder="Username">
                                        </div>
                                    </div>


                                    <div class="col-6">
                                        <label class="visually-hidden" for="inlineFormInputGroupUsername2">Username</label>
                                        <div class="input-group mb-2 me-sm-2">
                                            <div class="input-group-text">IG</div>
                                            <input type="text" name="instagram" class="form-control"
                                                id="inlineFormInputGroupUsername2" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="visually-hidden" for="inlineFormInputGroupUsername2">Username</label>
                                        <div class="input-group mb-2 me-sm-2">
                                            <div class="input-group-text">TW</div>
                                            <input type="text" name="twitter" class="form-control"
                                                id="inlineFormInputGroupUsername2" placeholder="Username">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label class="visually-hidden" for="inlineFormInputGroupUsername2">Username</label>
                                        <div class="input-group mb-2 me-sm-2">
                                            <div class="input-group-text">LI</div>
                                            <input type="text" name="linkedin" class="form-control"
                                                id="inlineFormInputGroupUsername2" placeholder="Username">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="mb-3 mt-3 row">
                            <label class="col-form-label col-sm-2 ">Phone</label>
                            <div class="col-sm-10">
                                <input type="number" name="phone" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-sm-2 ">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-sm-2 ">Address</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="address" placeholder="Textarea" rows="3"></textarea>
                            </div>
                        </div>
                        <fieldset class="mb-3">
                            <div class="row">
                                <label class="col-form-label col-sm-2  pt-sm-0">Radios</label>
                                <div class="col-sm-10">
                                    <label class="form-check">
                                        <input name="radio-3" type="radio" class="form-check-input" checked="">
                                        <span class="form-check-label">Default radio</span>
                                    </label>
                                    <label class="form-check">
                                        <input name="radio-3" type="radio" class="form-check-input">
                                        <span class="form-check-label">Second default radio</span>
                                    </label>
                                    <label class="form-check">
                                        <input name="radio-3" type="radio" class="form-check-input" disabled="">
                                        <span class="form-check-label">Disabled radio</span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="mb-3 row">
                            <label class="col-form-label col-sm-2  pt-sm-0">Checkbox</label>
                            <div class="col-sm-10">
                                <label class="form-check m-0">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">Check me out</span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-10 ms-sm-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
