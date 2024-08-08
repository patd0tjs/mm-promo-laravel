@extends('promo.layout')

@section('content')

    <form action="{{ route('promo.store') }}" id="reg_form" enctype="multipart/form-data" method="post">
        @csrf
        <p class="text-size" style="font-size: 9px">
            Please provide the following details.
            <br>
            Winners will be verified using  the registered information
            <br>
            Please make sure to enter your correct details.
        </p>

        @if($errors->any())
            <div class="alert alert-danger" style="text-align: left">
                There was a problem with your request.
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- name -->
        <div class="row">
            <div class="col">
                <div align="left">
                    <label>*Full Name:</label>
                </div>
                <input type="text" class="form-control text-size" name="name" pattern="[a-zA-Z\s]+" title="Letters and spaces only" required>
            </div>
        </div>

        <!-- address -->
        <div class="row">
            <div class="col-12">
                <div align="left">
                    <label>*Full Address</label>
                </div>
                <input type="text" class="form-control text-size" name="address" required>
            </div>
        </div>

        <!-- locations -->
        {{-- <div class="row">
            <div class="col-6">
                <div align="left">
                    <label>*Province</label>
                </div>
                <select id="province" class="form-control text-size" name="province" required></select>
            </div>
            <div class="col-6">
                <div align="left">
                    <label>*City</label>
                </div>
                <select id="city" class="form-control text-size" name="city" required></select>
            </div>
        </div> --}}

        <!-- mobile -->
        <div class="row">
            <div class="col-12">
                <div align="left">
                    <label>*Mobile Number</label>
                </div>
                <input type="tel" name="mobile" class="form-control text-size" id="mobile" pattern="[0]{1}[9]{1}[0-9]{9}" title="09XXXXXXXXX" placeholder="09XXXXXXXXX" required>
            </div>
        </div>

        <!-- email -->
        <div class="row">
            <div class="col-12">
                <div align="left">
                    <label>*Email</label>
                </div>
                <input type="email" name="email" class="form-control text-size" required>
            </div>
        </div>

        <!-- bday -->
        <div class="row">
            <div class="col-12">
                <div align="left">
                    <label>*Birthday</label>
                </div>
                <input type="date" name="birthday" max="" id="birthday" class="form-control text-size" oninput="setCustomValidity('')" oninvalid="setCustomValidity('Age should be 18 years old and above')" required>
            </div>
        </div>

        <!-- product select -->
        {{-- <div class="row">
            <div align="left">
                <label>*Participating Product/s</label>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <input type="number" class="form-control text-size" onchange="atLeastOne()" id="racing" pattern="[0-9]*" inputmode="numeric" min="0" max="20" step="1" oninvalid="setCustomValidity('Please enter a valid number and must be lower than 20')" oninput="setCustomValidity('')"name="racing">
            </div>
            <div class="col">
                <input type="text" class="form-control text-size" value="Mobil 1 Racing 4T" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <input type="number" class="form-control text-size" onchange="atLeastOne()" id="super" pattern="[0-9]*" inputmode="numeric" min="0" max="20" step="1" oninvalid="setCustomValidity('Please enter a valid number and must be lower than 20')" oninput="setCustomValidity('')" name="super">
            </div>
            <div class="col">
                <input type="text" class="form-control text-size" value="Mobil Super Moto 800ml or 1 liter" readonly>
            </div>
        </div> --}}

        <!-- receipt upload -->
        {{-- <div class="row">
            <div align="left">
                <label for="">
                    *Upload Receipt
                    <br>
                    *Only accepts .jpeg or .png as format
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="input-group mb-3" >
                    <input type="file"  name="receipt" accept="image/*" id="receipt" class="form-control" required>
                </div>
            </div>
        </div> --}}

        <!-- t&c -->
        <div class="row">
            <center>
                <div class="col">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                    <label class="form-check-label" for="flexCheckDefault">
                        By registering I agree to McKupler's
                    </label>
                    <br>
                    <label class="form-check-label" for="flexCheckDefault">
                        <a href="https://mckupler.com/pages/privacy-statement" target=”_blank”>Privacy Policy</a>
                    </label>
                </div>
            </center>
        </div>

        <!-- submit -->
        <br>
        <div class="row">
            <div class="col">
            <input type="submit" class="btn btn-primary" value="Submit" id="submit">
            </div>
        </div>
    </form>


<!-- popup on submit -->
@if ($joined = Session::get('joined'))

    <div class="modal fade" id="pop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="popupLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color: #6477AB;">
                <div class="modal-body">
                    <h6 style="color: white">
                            Thank you for joining Race to MotoGP with Mobil.
                            <br>
                            We have received your e-raffle entry.
                            <br>
                            <br>
                            Please keep your receipt as winners shall be
                            requested to present the proof of purchase
                            for verification purposes.
                            <br>
                            <br>
                            Send more entries now!
                    </h6>
                    <br>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@else

    <div class="modal fade" id="pop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="popupLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content mech-pop" style="background-color: #6477AB;">
                <div class="modal-header text-center">
                    <h1 class="modal-title fs-5 w-100" style="text-align: center"id="staticBackdropLabel">Mechanics</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" style="background-color: white" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid" id="mechanics">
                        <ol type="I">
                            <li>
                                <strong>Who can join?</strong>
                                <ol>
                                    <li>
                                        This nationwide promo is open to Filipino citizens 18 years old
                                        and above and must have a valid Philippine passport, who will
                                        purchase Mobil participating products from any dealers nationwide
                                        within the promo period.
                                    </li>
                                    <li>
                                        Passport application, expense, etc. will be shouldered by the winner.
                                    </li>
                                </ol>
                            </li>
                            <br>
                            <li>
                                <strong>How to join the promo?</strong>
                                <ol>
                                    <li>
                                        Every purchase of Mobil participating products within the promo duration
                                        entitles customers to earn entries for e-raffle entry.
                                        <br>
                                        <strong>
                                            What are the Participating Products and Equivalent E-Raffle Entries?
                                        </strong>
                                        <br>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>E-Raffle Entries</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Mobil 1 Racing 4T</td>
                                                    <td>2 E-Raffle Entries</td>
                                                </tr>
                                                <tr>
                                                    <td>Mobil Super Moto 800ml or 1 liter</td>
                                                    <td>1 E-Raffle Entry</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        Multiple entries are allowed.
                                    </li>
                                </ol>
                            </li>
                            <br>
                            <li>
                                <strong>How to Register, Send Entries and Join the E-Raffle?</strong>
                                <ol>
                                    <li>
                                        Customers must visit racetomotogp.com or scan
                                        the QR code found on promotional materials to
                                        enter Mobil promo website.
                                    </li>
                                    <li>
                                        Customers must complete the following details
                                        in order to earn e-raffle entries:
                                        <ol type="a">
                                            <li>Name</li>
                                            <li>Address</li>
                                            <li>Province</li>
                                            <li>City</li>
                                            <li>Mobile Number</li>
                                            <li>Email Address</li>
                                            <li>Birthday</li>
                                            <li>Participating Product/s</li>
                                            <li>Quantity</li>
                                            <li>
                                                Photo of Valid Receipt Purchase (Sales Invoice)
                                                <ol>
                                                    <li>
                                                        Once successful, the customer will receive a system confirmation
                                                        about the successful entry.
                                                    </li>
                                                    <li>
                                                        Multiple individuals uploading the same receipt will disqualify
                                                        the entries all together.
                                                    </li>
                                                    <li>
                                                        The prize will only be awarded to the person registered to the
                                                        winning number.
                                                    </li>
                                                    <li>
                                                        Customers can enter as many entries with unique proof of
                                                        purchase(s) (receipts) as they want.
                                                    </li>
                                                    <li>
                                                        For Lazada, Shopee or any other Mobil online stores, customer
                                                        must provide screenshot of online order receipt that includes
                                                        the participating items with Shopee, Lazada or online store order
                                                        number or any reference number. Only purchases marked “Order Delivered”
                                                        or “Received” shall be considered valid.
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </li>
                            <br>
                            <strong>Total Winners, Prizes and Draw Schedule</strong>
                            <br>
                            <br>
                            <li>
                                <strong>Grand Prize</strong>
                                <ol>
                                    <li>
                                        There will be FOUR (4) lucky winners from: NCR, Luzon,
                                        Visayas and Mindanao. The grand prize is a paid trip to
                                        Malaysia to witness the thrilling MotoGP on November 12, 2023.
                                        This prize is good for one (1) person per winner only.
                                        <br>
                                        <br>
                                        Prize Package includes:
                                        <ol type="a">
                                            <li>Round trip-airfare tickets to Malaysia</li>
                                            <li>Hotel accommodation for 3 days and 2 nights</li>
                                            <li>
                                                Transfers to and from the airport, hotel, and
                                                race venue.
                                            </li>
                                            <li>
                                                Allowance of worth P1,000 per day or a total
                                                of P3,000 for the whole trip
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        The grand prize winners must have a valid Philippine
                                        passport within 6 months prior to the departure date.
                                    </li>
                                    <li>
                                        The grand prize winners must comply with all the terms
                                        and conditions set by McKupler Inc. and follow the travel
                                        itinerary provided.
                                    </li>
                                    <li>
                                        The grand prize winners will shoulder other travel-related
                                        taxes, documents and other related expenses.
                                    </li>
                                </ol>
                                <br>
                                <i>
                                    NOTE: Round-trip local airfare tickets for VISAYAS & MINDANAO
                                    winners will be shouldered by the winner
                                </i>
                            </li>
                            <br>
                            <li>
                                <strong>Consolation Prize</strong>
                                <ol>
                                    <li>
                                        Two (2) Yamaha Mio Gear
                                        <table>
                                            <tr>
                                                <th>Brand:</th>
                                                <td>Yamaha</td>
                                            </tr>
                                            <tr>
                                                <th>Model:</th>
                                                <td>Yamaha Mio Gear</td>
                                            </tr>
                                            <tr>
                                                <th>Year:</th>
                                                <td>2023</td>
                                            </tr>
                                            <tr>
                                                <th>Category:</th>
                                                <td>Scooter</td>
                                            </tr>
                                            <tr>
                                                <th>Fuel Type:</th>
                                                <td>Petrol/Gasoline</td>
                                            </tr>
                                            <tr>
                                                <th>Engine Type:</th>
                                                <td>
                                                    Single Cylinder, 2 Valves, 4---Stroke,
                                                    Air Cooled, SOHC Engine
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Displacement:</th>
                                                <td>125cc</td>
                                            </tr>
                                            <tr>
                                                <th>Start Option:</th>
                                                <td>Kick and Electric</td>
                                            </tr>
                                            <tr>
                                                <th>Front Brake:</th>
                                                <td>Disc</td>
                                            </tr>
                                            <tr>
                                                <th>Transmission Type:</th>
                                                <td>CVT</td>
                                            </tr>
                                            <tr>
                                                <th>Maximum Power:</th>
                                                <td>9.3hp</td>
                                            </tr>
                                            <tr>
                                                <th>Ground Clearance</th>
                                                <td>135mm</td>
                                            </tr>
                                            <tr>
                                                <th>Color:</th>
                                                <td>Per availability from the branch</td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li>Fifty (50) Motorcycle Covers</li>
                                </ol>
                                <i>
                                    Note: Consolation Prize Winners will shoulder the initial
                                    registration of the Yamaha Mio Gear prize and other related
                                    expenses.
                                </i>
                            </li>
                            <br>
                            <li>
                                <strong>Prize Breakdown</strong>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Prize Type</th>
                                            <th>Number of Winners</th>
                                            <th>Unit Prize Amount</th>
                                            <th>Total Prize Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Grand Prize</td>
                                            <td>4</td>
                                            <td>Php 90,000</td>
                                            <td>Php 360,000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Consolation Prize Yamaha Mio Gear
                                            </td>
                                            <td>2</td>
                                            <td>Php 79,900</td>
                                            <td>Php 159,800</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Consolation PrizeFifty (50) Motorcycle Covers
                                            </td>
                                            <td>50</td>
                                            <td>Php 150</td>
                                            <td>Php 7,500</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>TOTAL</th>
                                            <th>56</th>
                                            <th></th>
                                            <th>Php 527,300</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </li>
                            <br>
                            <li>
                                <strong>Draw Schedule</strong>
                                <ol>
                                    <li>
                                        The raffle draw will be held on October 16, 2023, at
                                        McKuper Inc. office at Unit 2508, High Street South
                                        Corporate Plaza Tower 2 11th Ave. cor. 26th St., Bonifacio
                                        Global City Taguig in the presence of a DTI representative.
                                        This raffle promo is in no way sponsored, endorsed, or administered,
                                        by or associated by ExxonMobil or any of its affliates.
                                    </li>
                                    <li>
                                        The winner will be chosen randomly through an automated
                                        raffle system.
                                    </li>
                                    <li>
                                        Winners who are selected in the automated raffle system that
                                        will be drawn more than once, will get the prize with a higher
                                        value.
                                    </li>
                                </ol>
                            </li>
                            <br>
                            <li>
                                <strong>Are prizes transferable or convertible to cash?</strong>
                                <ol>
                                    <li>
                                        All prizes are non-transferrable and cannot be exchanged
                                        for cash or any other products or services. The grand
                                        prize winner of the trip has the option to use or forgo the
                                        travel opportunity.
                                    </li>
                                </ol>
                            </li>
                            <br>
                            <li>
                                <strong>How do I claim my prize?</strong>
                                <ol>
                                    <li>
                                        All winners will be notified via registered mail, email,
                                        SMS or phone call within three (3) days after the draw.
                                        If the winner cannot be reached within the sixty (60) days
                                        from the receipt of registered mail, email, SMS and phone
                                        call, an alternative winner will be selected.
                                    </li>
                                    <li>
                                        Mobil 1 shall only release the prize to the winners upon
                                        securing the following requirements to claim their prizes:
                                        <ol type="a">
                                            <li>
                                                Valid Philippine passport at least six (6) months
                                                prior to flight date (Grand Prize)
                                            </li>
                                            <li>Two (2) Valid IDs</li>
                                            <li>Proof of purchase (receipt/sales invoice)</li>
                                        </ol>
                                    </li>
                                    <li>
                                        All prizes must be claimed within sixty (60) days
                                        from the receipt of the registered notice, otherwise,
                                        prizes will be forfeited in favor of McKupler Inc.
                                        with prior DTI approval.
                                    </li>
                                </ol>
                            </li>
                            <br>
                            <li>
                                <strong>
                                    Who are NOT qualified or eligible to join the promo?
                                </strong>
                                <ol>
                                    <li>
                                        All employees of Mobil 1, promo suppliers, Megamobile Inc.,
                                        including their relatives up to second degree of
                                        consanguinity or affinity are disqualified from joining the
                                        promotion.
                                    </li>
                                    <li>
                                        Mobil 1 reserves the right to refuse the awarding of prizes
                                        to customers that are proven to be invalid or fraudulent or
                                        a result of gaming (i.e. abuse of system of weakness in the
                                        promo to win prizes or receive benefits).
                                    </li>
                                </ol>
                            </li>
                            <br>
                            <li>
                                <strong>Other Reminders:</strong>
                                <ol>
                                    <li>
                                        The winner will be announced on our official McKupler Inc.
                                        website, social media platforms, and through other
                                        communication channels.
                                    </li>
                                    <li>
                                        The winner's name will be posted in-store and on our online
                                        channels for public recognition.
                                    </li>
                                    <li>
                                        By participating in the raffle draw, participants agree to
                                        allow McKupler Inc. to use their names, photos, and
                                        testimonials for promotional and marketing purposes.
                                    </li>
                                    <li>
                                        Winners will shoulder the 20% tax for prizes exceeding
                                        P10,000.
                                    </li>
                                    <li>
                                        Employees and immediate family members of McKupler Inc., its
                                        trade partners and third-party agencies and their relatives up
                                        to 2nd degree of affinity or consanguinity are disqualified
                                        from the promotion.
                                    </li>
                                    <li>
                                        McKupler Inc. reserves the right to disqualify any participant
                                        proven to be engaging in fraudulent or unethical practices.
                                    </li>
                                </ol>
                            </li>
                            <br>
                            <li>
                                <strong>CONTROL MEASURES:</strong>
                                <ol>
                                    <li>
                                        DTI representatives shall be invited to check, test,
                                        validate, and verify the computer system for receiving
                                        entries and registration.
                                    </li>
                                    <li>
                                        DTI representatives shall be invited on the e-raffle
                                        draw schedule.
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif

<script>
    $(document).ready(function(){
        $("#pop").modal('show');
    });

    var uploadField = document.getElementById("receipt");

    uploadField.onchange = function () {
    if (this.files[0].size > 1048576 * 5) {
        alert("File is too big!");
        this.value = "";
    }
    };

    // function atLeastOne() {
    //     let submit = document.getElementById("submit");
    //     let _racing = document.getElementById("racing").value;
    //     let _super = document.getElementById("super").value;

    //     if (_super <= 0 && _racing <= 0) {
    //         submit.disabled = true;
    //     } else {
    //         submit.disabled = false;
    //     }
    // }

    function setMaxDate() {
      var today = new Date();
      today.setFullYear(today.getFullYear() - 18);

      var year = today.getFullYear();
      var month = today.getMonth() + 1;
      var day = today.getDate();
      if (month < 10) {
        month = '0' + month;
      }
      if (day < 10) {
        day = '0' + day;
      }

      var maxDate = year + '-' + month + '-' + day;
      document.getElementById('birthday').max = maxDate;
    }

    setMaxDate();
</script>

@endsection
