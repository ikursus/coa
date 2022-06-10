<table style="width: 100%">

    <thead>
        <tr>
            <th>ID</th>
            <th>USER ID</th>
            <th>USER NAME</th>
            <th>KOD</th>
            <th>KETERANGAN</th>
            <th>AMAUN</th>
        </tr>
    </thead>

    <tbody>

        @foreach($senaraiCoa as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->user->id }}</td>
            <td>{{ $item->user->name }}</td>
            <td>{{ $item->kod }}</td>
            <td>{{ $item->keterangan }}</td>
            <td>{{ $item->amaun }}</td>
        </tr>
        @endforeach

    </tbody>

</table>`
