@props(['kamer'])

<div class="col">
    <div class="card mb-3">
        <div id="{{ $kamer->id }}" class="carousel slide">
            <div class="carousel-inner">
                @foreach ($kamer->images as $image)
                @if ($loop->first)
                    <div class="carousel-item active">
                        <img src="{{ $image->url }}" class="d-block w-100" id="carousel_image" alt="...">
                    </div>
                @else
                    <div class="carousel-item">
                        <img src="{{ $image->url }}" class="d-block w-100" id="carousel_image" alt="...">
                    </div>
                @endif
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#{{ $kamer->id }}" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#{{ $kamer->id }}" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $kamer->naam }}</h5>
            <p class="card-text">{{ $kamer->beschrijving }}</p>
            <p class="card-text"><small class="text-body-secondary">{{ $kamer->prijs }} euro per nacht</small></p>
            <x-ReserveButton :kamer=$kamer />
        </div>
    </div>
</div>




