@extends('main')
@section('content')
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-header gap-3 d-flex justify-content-between align-items-center">
                <p class="my-auto">Universitas Detail</p>
                <p class="my-auto"><a href="/biodata">back..</a></p>
            </div>
            <div class="card-body">
                <div class="d-flex gap-3 pb-2 align-items-center" style="border-bottom: 1px solid gray ;">
                    <img src="src/assets/img/house-door-fill.svg" alt="alfi" style="width: 35px;">
                    <div class="my-auto">
                        <small style="font-size:12px;">Universitas</small>
                        <p style="font-weight: 500; font-size:18px;">{{ $data['study']['universitas'] }}</p>
                    </div>
                </div>
                <div class="d-flex gap-3 pb-1 align-items-center mb-3" style="border-bottom: 1px solid gray ;">
                    <img src="src/assets/img/alexa.svg" alt="alfi" style="width: 35px;">
                    <div class="my-auto">
                        <small style="font-size:12px;">Jurusan</small>
                        <p style="font-weight: 500; font-size:18px;">
                            {{ $data['study']['jurusan'] }}
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-3 align-items-center pb-2" style="border-bottom: 1px solid gray ;">
                    <img src="src/assets/img/emoji-heart-eyes-fill.svg" alt="alfi" style="width: 35px;">
                    <div class="my-auto">
                        <small style="font-size:12px;">Semester</small>
                        <p style="font-weight: 500; font-size:18px;">{{ $data['study']['semester'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
