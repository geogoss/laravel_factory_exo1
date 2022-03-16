<section class="w-50 mx-auto">
    <table class="table table-striped table-danger">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">name</th>
                <th scope="col">firstname</th>
                <th scope="col">age</th>
                <th scope="col">state</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{ $student->id }} </th>
                    <td>{{ $student->name }} </td>
                    <td>{{ $student->firstname }} </td>
                    <td>{{ $student->age }} </td>
                    <td>{{ $student->state }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>