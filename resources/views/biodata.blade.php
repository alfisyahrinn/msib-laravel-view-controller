@extends('main')
@section('content')
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-header d-flex gap-3">
                <img src="src/assets/img/Logo-Main-1.png" alt="" width="70">
                <p class="my-auto">MSIB Gits.id</p>
            </div>
            <div class="card-body">
                <div class="d-flex gap-3 pb-1 align-items-center mb-3" style="border-bottom: 1px solid gray ;">
                    <img src="src/assets/img/chili.jpg" alt="alfi" style="width: 35px;">
                    <div class="my-auto">
                        <small style="font-size:12px;">nama</small>
                        <p style="font-weight: 500; font-size:18px;"><?= $data['nama'] ?></p>
                    </div>
                </div>
                <div class="d-flex gap-3 pb-2 align-items-center" style="border-bottom: 1px solid gray ;">
                    <img src="src/assets/img/house-door-fill.svg" alt="alfi" style="width: 35px;">
                    <div class="my-auto">
                        <small style="font-size:12px;">Universitas</small>
                        <p style="font-weight: 500; font-size:18px;"><a href="/universitas">detail...</a></p>
                    </div>
                </div>
                <div class="d-flex gap-3 pb-1 align-items-center mb-3" style="border-bottom: 1px solid gray ;">
                    <img src="src/assets/img/alexa.svg" alt="alfi" style="width: 35px;">
                    <div class="my-auto">
                        <small style="font-size:12px;">hobby</small>
                        <p style="font-weight: 500; font-size:18px;">
                            <?php foreach ($data['hobby'] as $item) : ?>
                            <?= $item ?>,
                            <?php endforeach ?>
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-3 align-items-center pb-2" style="border-bottom: 1px solid gray ;">
                    <img src="src/assets/img/emoji-heart-eyes-fill.svg" alt="alfi" style="width: 35px;">
                    <div class="my-auto">
                        <small style="font-size:12px;"><?= $data['favorite']['goat'] ?></small>
                        <p style="font-weight: 500; font-size:18px;"><?= $data['favorite']['team'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
