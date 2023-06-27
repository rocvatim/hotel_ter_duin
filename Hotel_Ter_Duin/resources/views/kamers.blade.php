<x-layout>
<h1 class="d-flex justify-content-center mt-5">Selecteer uw verblijf</h1>
<div class="container d-flex justify-content-center align-items-center mt-5">
    <form action="{{ route('booking.availableRooms') }}" method="GET">
        <label for="van">van</label>
        <input id="van" name="van" class="form-control" type="date" />
        <label for="tot">Tot</label>
        <input id="tot" name="tot" class="form-control mb-3" type="date" />
        <button class="btn btn-primary" type="submit">Zoek Kamers</button>
    </form>
</div>
</x-layout>