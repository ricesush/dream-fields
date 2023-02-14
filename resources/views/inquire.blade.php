@extends('layouts.guest')
@section('content')

<div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center fs-2 mt-4 mb-0"> A convenient way to inquire our property</p>
                <p class="text-center fs-7 "> Complte the form below to list your property</p>
            </div>
        </div>
        <div class="row">
            <div class="col-5 mt-5">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name*">
            </div>

            <div class="row mt-4">
                <div class="col-3">
                    <input type="text" class="form-control" placeholder="Contact Number*" aria-label="Contact Number">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Email Adress*" aria-label="Email Adress">
                </div>


                <div class="row">
                    <div class="col-14 mt-4">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Location*">
                    </div>
                </div>

                <div class="row">
                    <div class="col mt-4">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Message</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col mt-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>

@endsection