@extends('cms.layout')

@section('content')
    <center>
        <form action="{{ route('cms/draw') }}" method="post">
            @csrf

            <div class="row" style="width: 80%">
                <div class="col">
                    <label for=""> Start Date</label>
                    <input
                        type="date"
                        name="s_date"
                        id="start"
                        onchange="endDateLimiter()"
                        class="form-control"
                        value="{{ (isset($_POST['s_date'])) ? $_POST['s_date'] : ''}}"
                        max="{{ date('Y-m-d') }}"
                        required
                    >
                </div>
                <div class="col">
                    <label for="">End Date</label>
                    <input
                        type="date"
                        name="e_date"
                        id="end"
                        class="form-control"
                        onchange="endDateLimiter()"
                        value="{{ (isset($_POST['e_date'])) ? $_POST['e_date'] : ''}}"
                        max="{{ date('Y-m-d') }}"
                        required
                    >
                </div>
                <div class="col">
                    <label for="">No. of Winners</label>
                    <input
                        type="number"
                        name="winner_count"
                        class="form-control"
                        value="{{ (isset($_POST['winner_count'])) ? $_POST['winner_count'] : ''}}"
                        min="1"
                        required
                    >
                </div>
                <div class="col">
                    <label for="">Location</label>
                    <select name="location" class="form-control" required>
                        <option value="{{ (isset($_POST['location'])) ? $_POST['location'] : ''}}" selected hidden {{ (isset($_POST['location'])) ? $_POST['location'] : 'disabled'}}>
                            {{ (isset($_POST['location'])) ? strtoupper($_POST['location']) : 'Please select a location'}}
                        </option>
                        <option value="all">ALL</option>
                        <option value="ncr">NCR</option>
                        <option value="luzon">LUZON</option>
                        <option value="visayas">VISAYAS</option>
                        <option value="mindanao">MINDANAO</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="submit" class="btn btn-success" value="Draw Winners">
                </div>
            </div>
        </form>
    </center>

    <br>

    @if(isset($_POST['s_date']) && isset($_POST['e_date']) && isset($_POST['location']))
        <table class="table table-stripped" id="rejected">
            <thead>
                <tr>
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
                </tr>
            </thead>
            <tbody>
                <?php foreach($winners as $winner):?>
                    <tr>
                        <td><?= $winner['has_racing']?></td>
                        <td><?= $winner['has_super']?></td>
                        <td><?= $winner['name']?></td>
                        <td><?= $winner['mobile']?></td>
                        <td><?= $winner['email']?></td>
                        <td><?= $winner['birthday']?></td>
                        <td><?= $winner['address']?></td>
                        <td><?= $winner['city']?></td>
                        <td><?= $winner['province']?></td>
                        <td><?= $winner['created_at']?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <script>
            function endDateLimiter(){
                let start = document.getElementById('start');
                let end = document.getElementById('end');
                end.setAttribute('min', start.value);
            }
        </script>
    @endif
@endsection
