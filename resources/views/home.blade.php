@extends('master')

@section('title', 'Fibonacci Extractor')

@section('content')

    <p class="fw-bold">Show Numbet at Position</p>
    <div id="form_div" class="container">
        <form method="POST" action="{{ route('fib.calculate') }}" id="main_form" class="fclass">
            @csrf
            <label for="position" class="flabel">Enter a number (1-90)</label>
            <input class="colorize" placeholder="Position" name="position" type="text" id="position" value="">
            <input id="main_form_submit" type="Submit" value="Submit">
        </form>
        <br/>
    </div>
    <div class="container">
        <div class="row">
            <div id="msgbox" class="d-flex text-danger">
            </div>
            <div class="d-flex">
                <div id="border" class="invisible outer rounded-pill align-middle d-flex">
                    <div class="inner h1 rounded-pill fw-bolder align-items-center justify-content-center d-flex">
                        <div id="number_display" ></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection