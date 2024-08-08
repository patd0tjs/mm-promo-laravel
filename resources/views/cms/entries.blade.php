@extends('cms.layout')

@section('content')

    <h4>Entries</h4>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Pending Entries
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="table-responsive">
                        <table class="table table-stripped" id="entries">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Birthday</th>
                                    <th>Address</th>
                                    <th>Stamp</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($entries as $entry)
                                    @if ($entry->status == '0')
                                        <td>{{ $entry->name }}</td>
                                        <td>{{ $entry->mobile }}</td>
                                        <td>{{ $entry->email }}</td>
                                        <td>{{ $entry->birthday }}</td>
                                        <td>{{ $entry->address }}</td>
                                        <td>{{ $entry->created_at }}</td>
                                        <td></td>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Approved Entries
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="table-responsive">
                        <table class="table table-stripped" id="accepted">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Birthday</th>
                                    <th>Address</th>
                                    <th>Stamp</th>
                                    <th>Accepted On</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($entries as $entry)
                                    @if ($entry->status == '1')
                                        <td>{{ $entry->name }}</td>
                                        <td>{{ $entry->mobile }}</td>
                                        <td>{{ $entry->email }}</td>
                                        <td>{{ $entry->birthday }}</td>
                                        <td>{{ $entry->address }}</td>
                                        <td>{{ $entry->created_at }}</td>
                                        <td>{{ $entry->updated_at }}</td>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Rejected Entries
            </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="table-responsive">
                        <table class="table table-stripped" id="rejected">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Birthday</th>
                                    <th>Address</th>
                                    <th>Stamp</th>
                                    <th>Rejected On</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($entries as $entry)
                                    @if ($entry->status == '2')
                                        <td>{{ $entry->name }}</td>
                                        <td>{{ $entry->mobile }}</td>
                                        <td>{{ $entry->email }}</td>
                                        <td>{{ $entry->birthday }}</td>
                                        <td>{{ $entry->address }}</td>
                                        <td>{{ $entry->created_at }}</td>
                                        <td>{{ $entry->updated_at }}</td>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
