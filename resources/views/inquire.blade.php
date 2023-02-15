@extends('layouts.buysellrent')

@section('content')
<div class="container">
        <div class="row">
            <div class="col pt-5">
            <img class="mx-auto d-block mb-2" src="../images/DreamFields Logo Green-01.png" width="4%" alt="">
                <p class="text-center fs-2 mt-4 mb-0"> A convenient way to inquire our property.</p>
                
            </div>
        </div>

        <form>
        @csrf
        <div class="row">
            <div class="col-5 mt-5">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name*" name="name">
            </div>

            <div class="row mt-4">
                <div class="col-3">
                    <input type="text" class="form-control" placeholder="Contact Number*" aria-label="Contact Number" name="contact_number">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Email Adress*" aria-label="Email Adress" name="e_add">
                </div>


                <div class="row">
                    <div class="col-14 mt-4">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Subject*" name="subject" >
                    </div>
                </div>

                <div class="row">
                    <div class="col mt-4">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="message"></textarea>
                            <label for="floatingTextarea2">Message</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col mt-4 ml-4">
                    <button type="submit" class="btn btn-warning"><b>Submit</b></button>
                    </div>
                </div>

                <div class="row">
                    <div class="col mt-5">
                  
                    </div>
                </div>
            </div>
            </form>

           

@endsection