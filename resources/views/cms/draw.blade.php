@extends('cms.layout')

@section('content')
    <center>
        <form action="winners" method="post">
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
                        value="" 
                        max="<?= date('Y-m-d')?>" 
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
                        value="" 
                        max="<?= date('Y-m-d')?>" 
                        required
                    >
                </div>
                <div class="col">
                    <label for="">No. of Winners</label>
                    <input 
                        type="number" 
                        name="winner_count" 
                        class="form-control"
                        value="" 
                        min="1" 
                        required
                    >
                </div>
                <div class="col">
                    <label for="">Location</label>
                    <select name="location" class="form-control" required>
                        <option value="" selected hidden disabled>
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
    <script>
        function endDateLimiter(){
            let start = document.getElementById('start');
            let end = document.getElementById('end');
            end.setAttribute('min', start.value);
        }
    </script>
@endsection
