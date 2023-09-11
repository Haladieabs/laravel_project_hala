@extends('layout.master')

@section('Tour')

@section('page')
<br><br><br><br><br>

<section class="ftco-counter img" id="section-counter">

    @foreach($trips as $trip)
    <div class="container" >
       
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img d-flex align-self-stretch" style="background-image:url({{ $trip->photo }}); width:25rem; height:30rem;"></div>
            </div>
            <div class="col-md-6 pl-md-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h2 class="mb-4">{{ $trip->trip_name }}</h2>
                        <p>{{ $trip->details }}</p>

                        
                    </div>

                    <form  action="usertrup" method="POST">
                        @csrf
                        <input type="hidden" name="trip_id" value="{{ $trip->id }}">
                        {{-- <input type="hidden" name="user_id" value="{{ 1 }}"> --}}
                        <input type="submit" value="Reservation confirmation" class="btn btn-primary">
                    </form>
                    
                    </form>
                </div>
            </div>
        </div>
       
    </div>

    @endforeach
</section>

<br><br>



@endsection
