@props(['reservation'])
<td class="edit"><a href="#" data-bs-toggle="modal" data-bs-target="#reservationModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a></td>

<div class="modal fade" id="reservationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Wijzig Reservering</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/update/{{ $reservation->id }}" method="POST">
                @csrf
                <div class="mb-2">
                    <label class="form-label" for="kamer_id">Kamer Id</label>
                    <input class="form-control" type="text" readonly value="{{ $reservation->kamer_id }}" id="kamer_id" name="kamer_id" required>
                    @error('name')
                        <p class="text-danger fs-6">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                        <label class="form-label" for="Van">Van</label>
                        <input class="form-control" type="text" id="Van" name="Van" value="{{ $reservation->van }}" required>
                        @error('body')
                            <p class="text-danger fs-6">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="Tot">Tot</label>
                        <input class="form-control" type="text" id="Tot" name="Tot" value="{{ $reservation->tot }}" required>
                        @error('body')
                            <p class="text-danger fs-6">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="Naam">Naam</label>
                        <input class="form-control" type="text" id="Naam" name="Naam"  value="{{ $reservation->naam }}" required>
                        @error('body')
                            <p class="text-danger fs-6">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="Adres">Adres</label>
                        <input class="form-control" type="text" id="Adres" name="Adres" value="{{ $reservation->adres }}" required>
                        @error('body')
                            <p class="text-danger fs-6">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="Plaats">Plaats</label>
                        <input class="form-control" type="text" id="Plaats" name="Plaats" value="{{ $reservation->plaats }}" required>
                        @error('body')
                            <p class="text-danger fs-6">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="Postcode">Postcode</label>
                        <input class="form-control" type="text" id="Postcode" name="Postcode" value="{{ $reservation->postcode }}" required>
                        @error('body')
                            <p class="text-danger fs-6">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="Telefoon">Telefoon</label>
                        <input class="form-control" type="text" id="Telefoon" name="Telefoon" value="{{ $reservation->telefoon }}" required>
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