<section class="w-50 mx-auto">
    <table class="table table-striped table-danger">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buildings as $building)
                <tr>
                    <th scope="row">{{ $building->id }} </th>
                    <td>{{ $building->name }} </td>
                    <td>{{ $building->description }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
