<x-layout>
<h1 class="d-flex justify-content-center mt-3">Beschikbare kamers</h1>
<div class="row row-cols-1 row-cols-md-4 g-4 my-3 mx-4">
    @foreach ($kamers as $kamer)
        <x-kamer :kamer=$kamer/>
    @endforeach
</div>
</x-layout>

