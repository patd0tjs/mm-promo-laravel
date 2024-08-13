@extends('cms.draw')

@section('winners')
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
@endsection
