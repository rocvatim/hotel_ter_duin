<x-layout>
@foreach ($availableRoomsCountByDate as $date => $availableRoomsCount)
    @if ($availableRoomsCount < 2)
        <div class="alert alert-dismissible alert-danger">
            Er zijn minder dan 2 kamers beschikbaar op {{ $date }}!.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endforeach
    <table>
        <tr>
            <th>Id</th>
            <th>Van</th>
            <th>Tot</th>
            <th>Kamer nummer</th>
            <th>Naam</th>
            <th>Adres</th>
            <th>Plaats</th>
            <th>Postcode</th>
            <th>Telefoon</th>
            <th>Wijzig</th>
            <th>Verwijder</th>
        </tr>
        @foreach ($reserveringen as $reservering)
        <tr>
            <td>{{ $reservering->id }}</td>
            <td>{{ $reservering->van }}</td>
            <td>{{ $reservering->tot }}</td>
            <td>{{ $reservering->kamer_id }}</td>
            <td>{{ $reservering->naam }}</td>
            <td>{{ $reservering->adres }}</td>
            <td>{{ $reservering->plaats }}</td>
            <td>{{ $reservering->postcode }}</td>
            <td>{{ $reservering->telefoon }}</td>
            <x-UpdateButton :reservation=$reservering/>
            <td class="delete"><a href="/delete/{{ $reservering->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg></a></td>
        </tr>
        @endforeach
    </table>
<a href="/reserveringen/pdf" style="width: 18rem;" class="btn btn-primary mt-5">Download Reservations PDF</a>

</x-layout>