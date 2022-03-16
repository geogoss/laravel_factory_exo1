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
            @foreach ($trainings as $training)
                <tr>
                    <th scope="row">{{ $training->id }} </th>
                    <td>{{ $training->name }} </td>
                    <td>{{ $training->description }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>