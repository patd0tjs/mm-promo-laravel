@extends('cms.layout')

@section('content')

    @if ($message = Session::get('message'))
        <div class="alert alert-warning">
            Entry {{ $message }} successfully!
        </div>
    @endif

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
                                    <th>Receipt</th>
                                    <th>Mobil 1 Racing</th>
                                    <th>Mobil Super Moto</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Birthday</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Province</th>
                                    <th>Stamp</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($entries as $entry)
                                    @if ($entry->status == '0')
                                        <tr>
                                            <td>
                                                <img src="{{ URL::asset('receipts') . '/' . $entry->receipt_img }}" class="img-fluid" role="button" data-bs-toggle="modal" data-bs-target="#img_pop{{ $entry->id }}">
                                            
                                                <!-- image popup view -->
                                                <div class="modal fade" id="img_pop{{ $entry->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="img_pop{{ $entry->id }}Label" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="img_pop{{ $entry->id }}Label">View Receipt</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="{{ URL::asset('receipts') . '/' . $entry->receipt_img }}" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $entry->has_racing }}</td>
                                            <td>{{ $entry->has_super }}</td>
                                            <td>{{ $entry->name }}</td>
                                            <td>{{ $entry->mobile }}</td>
                                            <td>{{ $entry->email }}</td>
                                            <td>{{ $entry->birthday }}</td>
                                            <td>{{ $entry->address }}</td>
                                            <td>{{ $entry->city }}</td>
                                            <td>{{ $entry->province }}</td>
                                            <td>{{ $entry->created_at }}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <form action="{{ route('cms.update', $entry->id) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status" value="1">
                                                            <input type="hidden" name="id" value="{{ $entry->id }}">
                                                            <button type="submit" class="btn btn-success">Accept</button>
                                                        </form>
                                                    </div>
                                                    <div class="col">
                                                        <form action="{{ route('cms.update', $entry->id) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status" value="2">
                                                            <input type="hidden" name="id" value="{{ $entry->id }}">
                                                            <button type="submit" class="btn btn-danger">Reject</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
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
                                    <th>Receipt</th>
                                    <th>Mobil 1 Racing</th>
                                    <th>Mobil Super Moto</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Birthday</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Province</th>
                                    <th>Stamp</th>
                                    <th>Accepted On</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($entries as $entry)
                                    @if ($entry->status == '1')
                                    <tr>                          
                                        <td>
                                            <img src="{{ URL::asset('receipts') . '/' . $entry->receipt_img }}" class="img-fluid" role="button" data-bs-toggle="modal" data-bs-target="#img_pop{{ $entry->id }}">
                                        
                                            <!-- image popup view -->
                                            <div class="modal fade" id="img_pop{{ $entry->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="img_pop{{ $entry->id }}Label" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="img_pop{{ $entry->id }}Label">View Receipt</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="{{ URL::asset('receipts') . '/' . $entry->receipt_img }}" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $entry->has_racing }}</td>
                                        <td>{{ $entry->has_super }}</td>
                                        <td>{{ $entry->name }}</td>
                                        <td>{{ $entry->mobile }}</td>
                                        <td>{{ $entry->email }}</td>
                                        <td>{{ $entry->birthday }}</td>
                                        <td>{{ $entry->address }}</td>
                                        <td>{{ $entry->city }}</td>
                                        <td>{{ $entry->province }}</td>
                                        <td>{{ $entry->created_at }}</td>
                                        <td>{{ $entry->updated_at }}</td>
                                    </tr>
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
                                    <th>Receipt</th>
                                    <th>Mobil 1 Racing</th>
                                    <th>Mobil Super Moto</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Birthday</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Province</th>
                                    <th>Stamp</th>
                                    <th>Rejected On</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($entries as $entry)
                                    @if ($entry->status == '2')
                                        <tr>
                                            <td>
                                                <img src="{{ URL::asset('receipts') . '/' . $entry->receipt_img }}" class="img-fluid" role="button" data-bs-toggle="modal" data-bs-target="#img_pop{{ $entry->id }}">
                                            
                                                <!-- image popup view -->
                                                <div class="modal fade" id="img_pop{{ $entry->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="img_pop{{ $entry->id }}Label" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="img_pop{{ $entry->id }}Label">View Receipt</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="{{ URL::asset('receipts') . '/' . $entry->receipt_img }}" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $entry->has_racing }}</td>
                                            <td>{{ $entry->has_super }}</td>
                                            <td>{{ $entry->name }}</td>
                                            <td>{{ $entry->mobile }}</td>
                                            <td>{{ $entry->email }}</td>
                                            <td>{{ $entry->birthday }}</td>
                                            <td>{{ $entry->address }}</td>
                                            <td>{{ $entry->city }}</td>
                                            <td>{{ $entry->province }}</td>
                                            <td>{{ $entry->created_at }}</td>
                                            <td>{{ $entry->updated_at }}</td>
                                        </tr>
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
