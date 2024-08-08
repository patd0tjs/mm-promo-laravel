<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

        <!-- jquery form -->
        <script src="https://malsup.github.io/jquery.form.js"></script>

        <title>Mobil1 Promo</title>

        <!-- ph location dropdowns -->
        <script src={{ URL::asset('assets/promo/location.js') }}></script>

        <!-- custom css -->
        <link rel="stylesheet" href={{ URL::asset('assets/promo/styles.css') }}>
    </head>
    <body>
        <div id="main">

            <center>
                <img src={{ URL::asset('assets/promo/img/header_new.png') }} id="header_img">
                @yield('content')


                <!-- links -->
                <div id="footer">
                    <div class="row">
                        <div class="col">
                            <a href="mechanics" class="footer-links">Mechanics</a>
                        </div>
                        <div class="col-6">
                            <a type="button" class="footer-links" data-bs-toggle="modal" data-bs-target="#products">See List of Participating Stores</a>
                        </div>
                        <div class="col">
                            <a href="contact" class="footer-links">Contact Us</a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <p class="text-size">
                                DTI Fair Trade Permit No. FTEB-172583 Series of 2023
                                <br>
                                Promo runs from August 1 - October 15, 2023
                            </p>
                        </div>
                    </div>
                </div>
            </center>

            <div class="modal fade" id="products" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="popupLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content mech-pop" style="background-color: #6477AB;">
                        <div class="modal-header text-center">
                            <h1 class="modal-title fs-5 w-100" style="text-align: center"id="staticBackdropLabel">Participating Outlets</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" style="background-color: white" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid" id="mechanics">
                                <table style="width: 100%">
                                    <tr>
                                        <td>Mobil Official Lazada Flagship Store</td>
                                    </tr>
                                    <tr>
                                        <td>Mobil Official Store, Shopee Mall</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11 TWENTY SEVEN MOTORCYCLE PARTS & ACCESSORIES STO
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3J MOTOR SHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            A.V.C. CYCLE PARTS & ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            AAF SCOOTER PART, ACCESSORIES & GEN. MERCHANDISE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ABIS MOTOR PARTS AND ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ABKIL MOTOR PARTS TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ACINAS MOTOR SALES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ADOLFA GENERAL MERCHANDISE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            AG MOTORCYCLE PARTS & SERVICE CENTER
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            AGAPE PARTS SALES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ALLAN MOTOR ACCESSORIES & SHOP SERVICES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ALRHE CYCLE PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ALTURAS SUPERMARKET
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            AMERGER ENERPRISES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            AMJJ MOTOR CENTER
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ANLURICH OPC
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            APEX MINING CO., INC.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            APO CYCLE MARKETING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ARGUELLES AUTO & MOTORCYCLE SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ARION ENTERPRISES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ARMADEL TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ARMTECH AUTO PARTS AND SERVICES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            AUTOTEKNIX GENERAL ENTERPRISES CORP.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            BACK TO BACK MOTORCYCLE PARTS SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            BAESA FLEX HYDRAULIC HOSE & MOTORCYCLE PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            BAUTISTALLA CYCLE PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            BAYLOR SUPREME TRADING INC.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            BERNEL MOTORPARTS AND ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            BL ENTERPRISES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            BNYU AUTO SUPPLY INC.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            BOHOL AUTOTEC SERVICE AND PARTS CENTER
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            BOHOL BIKES AND SHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            BOHOL QUALITY CORPORATION
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            BOSS AUTOMOTIVE CARE CORP.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            BRAVO UNO AUTO PARTS AND SURPLUS SHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            BRISTOL AUTO SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            BUENOS ENTERPRISES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CANTILA'S MOTOR SPARE PARTS.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CARDING & LIZA MOTOR PARTS AND REPAIR SHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CARKEN AUTOSHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CASH SALES - B2B CDO
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CASH SALES - B2C DVO
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CASH SALES – B2C DVO
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CASH SALES - B2C NORTH LUZON
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CASH SALES - B2C SOUTH LUZON
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CEBU MASSIVE AUTO PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CG & J BICYCLE AND MOTORCYCLE ACCESSORIES SHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CITY CYCLE CENTER
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CLC MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CLE AUTO SUPPLY MARKETING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CRINTH MOTOR PARTS & ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CSDC MOTOR/CHAVEZ SURPLUS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CYCLE MART & GENERAL MERCHANDISE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CYCLINE EXTREME GENERAL MERCHANDISE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            DADIANGAS CAR MASTERS CENTER (GENSAN)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            DAIRIN AUTO TRUCKLINE, INC.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            DANGHIL GENERAL MERCHANDISE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            DAVE AUTO PARTS AND ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            DE ORO MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            DELIMA AUTO SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            DELTHAN'S MOTOR AND AUTO PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            DHONG LEIGH MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            DODGE CYCLE PARTS & GEN. MDSE.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            E.C. ENTERPRISE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ECTAN ENTERPRISES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ELOISE MARKETING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            EMJB AUTO SUPPLY AND MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ENTONG MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            FATIMA MITH MOTORBIKE STATION
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            FENROSE MARKETING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            FINETUNE AUTO REPAIR SHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            FIVE STAR SURPLUS & HARDWARE-DACUDAO
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            FIX N' SAVE TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            FRANKMOTO CYCLE PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            FRIA KATHYRINE TRUCKING SERVICES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            FZS AUTO PARTS SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            GAB AUTOPARTS TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            GALAN MOTORPARTS & ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            GARAGE KINGS AUTOCENTER INCORPORATED
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            GBA MOTOR PARTS AND GENERAL MERCHANDISE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            GE-AI MOTOR PARTS AND ACCESSORIES STORE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            GLENMARIE CYCLE PARTS AND ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            GLISTEN MOTORCYCLE PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            GO MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            GOLDEN THREE CYCLE PARTS CENTER
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            GSUIZ MOTORPARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            GT PHILIPPINES, INC
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            GTS AUTO CARE PLAZA, INC
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            IZUMI MOTOR PARTS CORPORATION
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            J.C.A. MOTORSHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JAMES ANGHAG MOTOR PARTS & REPAIR SHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JANNAEUS CYCLE CENTER
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JARVIS AUTO PARTS SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JAS MOTOR PARTS & ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JB MOTOBIKE CYCLE PARTS SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JCN MOTOR SHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JDG MOTORCYCLE PARTS AND ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JEB ENTERPRISES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JEEPRAL TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JERRY AUTO ELECTRICAL SHOP AND AUTO SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JESSIE A. YPARRAGUIRRE STORE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JETTI CAMAMAN-AN
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JETTI KAUSWAGAN SERVICE STATION
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JETTI MACANHAN
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JIF TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JKSS TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JM PAZ MOTORCYCLE PARTS & RECAPPING SERVICE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JMP-KIER GENERAL MERCHANDISE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JN15 MOTORCYCLE PARTS AND ACCESSORIES SHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JOEN AUTO BENZ SUPPLY CENTER CO. INC.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JOHN KYLERS TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JONIETHERS ENTERPRISES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            J-POY MOTORPARTS AND SERVICES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JSA JYPSY MOTORCYCLE PARTS TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JULEX MOTOR PARTS & ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            JULIETA VULCANIZING SHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            K.S. ENTERPRISES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            KB'S VEHICLE PARTS AND ACCESSORIES TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            KCJ & DNB MOTOR PARTS & BICYCLE SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            KERVZ MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            KIM CHING MARKETING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            KIM MOTORCYCLE PARTS & ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            KING'S RIDESHOP MOTOR PARTS & ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            KIRV'S TOPSPEED
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            KRING-KRING LUBS & ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            KRISMAR MERCHANDISE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            KUPLER INDUSTRIES, INC.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            KWIK FIX AUTO SERVICES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            L.O.V. AUTO SUPPLY & BATTERY CENTER
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            LAZADA PHILIPPINES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            LCN MOTOR PARTS TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            LIEMERS AUTOMOTIVE PARTS STORE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            LIGHTWHEELS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            LJN MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            LTS HARDWARES, INC.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MACLYN SPARE PARTS & MERCHANDISE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MACTAN PARTS ENTERPRISES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MAGALLANES AUTO SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MAI AUTO SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MANDAUE TRUST MARKETING AND AUTO SUPPLY CORP.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MANIEGO MOTORCYCLE SPARE PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MARANDING AUTO PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MARK MOTO LOUNGE PARTS ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MARKETING PROMOTIONS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MARMAN AUTO CARE CENTER
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MARS ENTERPRISES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MATI CHAIN & SPROCKET MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MAXIL MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MC LOY CYCLE PARTS & GENERAL MDSE.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MCDC AUTO SUPPLIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MERIN LUBRICANTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MGA.414 CORPORATION
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MHEGUEL BUS TRUCK AUTO SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MIGOY MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MIKH'S GENERAL MERCHANDISE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MINDORO AUTO PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MISTER RIGHT MOTOR PARTS AND ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MJ MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MJTP MAMU TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MMHT CYCLE PARTS & ACCESSORIES TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MOBIL GASOLINE STATION
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MOBILIA AUTO PARTS AND ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MOM CYCLE PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MOTO HUB
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MOTO PIT FI MASTERS INC.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MOTOCAVE MOTORCYCLE PARTS SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MOTO-R REPUBLIC CORPORATION
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MOTOVITA MOTORCYCLE OIL SHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MOYA AUTOCARE CENTER
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MP MOTOR PARTS & ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MPING MOTORCYCLE PARTS & ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MRCJR AUTO PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            MTJ AUTO CENTER
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            NAA-1 SPARE PARTS & ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            NAJRAN ENTERPRISES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            NEGROS BUILDERS HOME DEPOT INC.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            NELDON ENTERPRISES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            NEW BIAN YEK COMMERCIAL, INC. - TIRE DIVISION
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            NEW KOBE MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            NEXXUS ENTERPRISES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            NICK MOTORPARTS & SERVICES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            NIM-NIM MOTOR PARTS AND ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ORIGINAL'S AUTO SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ORO SOLID HARDWARE, INC.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            O-WHEELS TIRES & AUTO SUPPLIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            PAUL CHRIST MOTORCYCLE PARTS SHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            POLSHAJEM MOTOR PARTS & SERVICES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            POTOTAN CYCLE CENTER
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            POTOTAN JOLO MOTOR CENTER
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            POWER ROAD MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            PPZ RACING MOTORCYCLE PARTS & ACCESSORIES TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            PREVIA AUTO SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            PRINCESS BIKERS MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            PRIYA & ROYCE ENTERPRISES MOTORPARTS & ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            PUERTO AUTO SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            R & F AUTO SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RADD POWER TOOLS TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RAJAH AUTO SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RAKK-B CYCLE PARTS & MARKETING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RAPHA MOTOR PARTS ACCESSORIES & SERVICES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RAYLEEN CYCLE PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RD SPEED MOTOR PARTS & ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            REDLINE AUTO PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            REVANS MOTORCARE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            REYNALDO AUTO & MOTORCYCLE PARTS & ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RG ZENAROSA TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RHEAN MARKETING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RICHLOID AUTO PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RICKYBOY MOTORPARTS, ACCESSORIES & REPAIR
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RIDE ON MOTOR PARTS & ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RJ SPARE PARTS SUPPLY AND SERVICES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RJC AUTO PARTS SHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RJR CYCLE CENTER
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RJT AUTO PARTS TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RJV AUTO SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RM & N ENTERPRISES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RM AUTO & CYCLE PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RMG MOTOR PARTS & GENERAL MERCHANDISE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RMM MARKETING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ROAD TREKKER TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ROMGEN MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ROSE AQUARIUS MERCHANDISING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RPRB MOTORCYCLE AND AUTO PARTS SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RPS MOTORCYCLE PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RS MARKETING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            RTS PARTS SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            S&B CYCLE PARTS CENTER
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            SAGA MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            SAMPALOC MOTOR AND AUTO PARTS SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            SAN JOSE MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            SBJ HARDWARE AND CONSTRUCTION SUPPLIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            SEN GUAN HING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            SHAR'S OILS & SUPPLIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            SHOUN MOTOR PARTS CENTER
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            SILVER WINGS AUTO SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            SJ MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            SKYWHEELS MOTOR CYLE PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            SON & VAN MOTORCYCLE PARTS & ACCESSORIES STORE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            SOUTH PHIL LIQUID GOLD CORP.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            SP MOTOR ACCESSORIES AND REPAIR SERVICES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            SUNDRAGON SALES INC.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            SURIGAONON VISAYAN MARKETING CORP.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            TAGBILARAN MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            TATA G MOTORCYCLE PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            TGCITI CORPORATION
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            THAILOTO MOTORCYCLE PARTS AND ACCESSORIES SHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            THE RIDER'S CRIB MOTOR PARTS & RIDING GEARS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            TIFFANY MOTORCYCLE PARTS AND ACCESSORIES SHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            TOPDEAL AUTOMOTIVE LUBRICANTS TRADING
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            TWIN ALPHA AUTOMOTIVE, INC.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            TWITY MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ULTRA GRIP MOTOR CARE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            UNAJAN ENTERPRISES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            VIEN AUTO SUPPLY AND WELDING SHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Vozgy Auto Supply
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            VSPEED MOTOR PARTS AND ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            WAGNER LAO AUTO SUPPLY
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            WAJ AUTO PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            WENG-WENG MOTOR PARTS AND SERVICES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            XEDPAR CORPORATION
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            XIAN'S BIKE SHOP
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            YAHWEH AUTO SUPPLY AND MOTOR PARTS
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            YN MOTOR WHEELS PARTS & ACCESSORIES
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ZHANE SECOND HAND AUTO & CYCLE PARTS CENTER
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ZURCMOTO MOTORCYCLE PARTS AND ACCESSORIES
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
