@extends('layouts.buysellrent')

@section('content')
<div class="container">
        <div class="row py-4">
            <div class="col pt-5">
            <img class="mx-auto d-block mb-2" src="../images/DreamFields Logo Green-01.png" width="4%" alt="">
                <p class="text-center fs-2 my-4 mb-0"> A convenient way to inquire our property.</p>
                
            </div>
        </div>

        <form method="POST" action="{{route('createinquire')}}">
        @csrf

        <div class=" container border border-1 border-light bg-light rounded-2 shadow">
            <div class=" mt-5 d-flex">
            
                <input type="text" class="bg-primary input textcolorblack form-control bg-transparent border-0 border-bottom rounded-0 border-b" id="exampleFormControlInput1" placeholder="Name*" name="name">
                <input type="text" class="bg-primary input textcolorblack form-control bg-transparent border-0 border-bottom rounded-0 border-b mx-4" placeholder="Contact Number*" aria-label="Contact Number" name="contact_number">
                <input type="text" class="bg-primary input textcolorblack form-control bg-transparent border-0 border-bottom rounded-0 border-b" placeholder="Email Adress*" aria-label="Email Adress" name="e_add">
            </div>

            <div class="col-lg-12 mt-4">
                <div class="">
                    <div class=" mt-4">
                        <input type="text" class="bg-primary input textcolorblack form-control bg-transparent border-0 border-bottom rounded-0 border-b" id="exampleFormControlInput1" placeholder="Subject*" name="subject" >

      
                    </div>
                </div>

                <div class="">
                    <div class=" mt-4">
                        <div class="form-floating">

                            <textarea class="bg-primary input textcolorblack form-control bg-transparent border-0 border-bottom rounded-0 border-b" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="message"></textarea>
                            <label for="floatingTextarea2">Message</label>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="col mt-4 ml-4 d-flex justify-content-end">
                    <button type="submit" class="btn orangebutton text-light"><b>Submit</b></button>
                    </div>
                </div>

                  

               
    </form>
</div>
 

    @endsection
