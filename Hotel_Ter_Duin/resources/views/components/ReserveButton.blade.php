@props(['kamer'])

<button type="button" class="btn btn-success mb-3 me-3 position-absolute end-0" id="reserveerKnop" data-bs-toggle="modal" data-bs-target="#reservationModal">
    Reserveer Kamer
</button>

<div class="modal fade" id="reservationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Reserveer Kamer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/addReservation" method="POST">
                @csrf
                <div class="mb-2">
                    <label class="form-label" for="kamer_id">Kamer Id</label>
                    <input class="form-control" type="text" readonly value="{{ $kamer->id }}" id="kamer_id" name="kamer_id" required>
                    @error('name')
                        <p class="text-danger fs-6">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                        <label class="form-label" for="Van">Van</label>
                        <input class="form-control" type="text" id="Van" name="Van" readonly value="{{ $_GET['van'] }}" required>
                        @error('body')
                            <p class="text-danger fs-6">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="Tot">Tot</label>
                        <input class="form-control" type="text" id="Tot" name="Tot" readonly value="{{ $_GET['tot'] }}" required>
                        @error('body')
                            <p class="text-danger fs-6">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="Naam">Naam</label>
                        <input class="form-control" type="text" id="Naam" name="Naam"  required>
                        @error('body')
                            <p class="text-danger fs-6">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="Adres">Adres</label>
                        <input class="form-control" type="text" id="Adres" name="Adres" required>
                        @error('body')
                            <p class="text-danger fs-6">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="Plaats">Plaats</label>
                        <input class="form-control" type="text" id="Plaats" name="Plaats" required>
                        @error('body')
                            <p class="text-danger fs-6">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="Postcode">Postcode</label>
                        <input class="form-control" type="text" id="Postcode" name="Postcode" required>
                        @error('body')
                            <p class="text-danger fs-6">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="Telefoon">Telefoon</label>
                        <input class="form-control" type="text" id="Telefoon" name="Telefoon" required>
                        @error('body')
                            <p class="text-danger fs-6">{{ $message }}</p>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sluiten</button>
                <button class="btn btn-primary">Bevestig</button>
            </div>
        </form>
    </div>
  </div>
</div>