@extends('guest.porzioni.base')

@section('divSimpatico')
    <div class="blobs" >
        <div class="focus-container" >
            <img class="focus" src="<?php echo 'https://picsum.photos/200'?>" alt="">
            <h6 style="color: white" >text</h6>
        </div>
    </div>
@endsection

@section('main')
<main class="contenitore flex-card" >
    <div class="meta-main-card">
        <h2 style="color: #0c7cec "> text </h2>
        <div class="green-line" >
            <ul class="ul-gl" >
                <li>
                    prezzo
                </li>
                <li>
                    vendibile
                </li>
            </ul>
            <div class="opt-gl">
                <select  name="1" id="">
                    opzioni
                    <option value="1">1</option>
                </select>
            </div>
        </div>
    </div>
    <div>
        <img src="<?php echo 'https://picsum.photos/200'?>" alt="">
    </div>
</main>

@endsection
@section('corpo')
    <section class="blue-mid" >
        <div class="contenitore" >
            <div class="flex-blueMid" >
                <div class="card-blueMid" > <img src="./img/buy-comics-digital-comics.png" alt=""> <span>DIGITAL COMICS</span>  </div>
                <div class="card-blueMid" > <img src="./img/buy-comics-merchandise.png" alt=""> <span>DC MERCHANDISE</span>  </div>
                <div class="card-blueMid" > <img src="./img/buy-comics-shop-locator.png" alt=""> <span>SUBSCRIPTION</span>  </div>
                <div class="card-blueMid" > <img src="./img/buy-comics-subscriptions.png" alt=""> <span>COMIC SHOP LOCATOR</span>  </div>
                <div class="card-blueMid" >
                    <svg style="width: 150px;" version="1.1" id="Layer_2_1_" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 79.5 50.9" xml:space="preserve"><style>.st0{fill:none;stroke:#fff;stroke-width:1.7732;stroke-miterlimit:10}</style><path class="st0" d="M73.9 49.6H5.3c-2.1 0-3.8-1.7-3.8-3.8V5.4c0-2.1 1.7-3.8 3.8-3.8h68.6c2.1 0 3.8 1.7 3.8 3.8v40.3c0 2.1-1.7 3.9-3.8 3.9zM1.5 15.4h76.2"/><path fill="#fff" stroke="#fff" stroke-width=".998" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M50.1 22.1l-9.7 1.4 5.1-16.4L29 30.2l9.3-1.3L34.4 44z"/></svg>
                 <span>DC POWER VISA</span>
                </div>
            </div>
        </div>
    </section>

@endsection
