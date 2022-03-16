<section class="w-50 mx-auto">
    <table class="table table-striped table-danger">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <th scope="row">{{ $type->id }} </th>
                    <td>{{ $type->name }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>