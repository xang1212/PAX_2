@extends('layout')

@section('title', 'My Profile')

@section('extra-css')
@endsection

@section('content')
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
    <div class="breadcrumbs">
        <div class="container">
            <div>
                <a href="/">ໜ້າຫຼັກ</a>
                <i class="fa fa-chevron-right breadcrumb-separator"></i>
                <span class="visited">ຕິດຕໍ່ພວກເຮົາ</span>
            </div>
            
            
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="container text-center mt-5 mb-2 py-5">
        <h1 class="mb-0">Pax Shop Team</h1>
    </div>
    <div class="container mt-3 pb-5 d-flex text-center ">
        <div class="row d-flex justify-content-center gap-3 py-5 mb-5">
            <div class="col-md-3 shadow border border-dark rounded py-3 mx-3">
                <div class="bg-white p-3 text-center rounded box"><img class="img-responsive rounded-circle" src="https://media.discordapp.net/attachments/826834529435648000/898260756791971870/Alieng_1.png" width="90">
                    <h5 class="mt-3 name">Alieng Keolany</h5><span class="work d-block">Backend Developer</span><span class="work d-block">"Hello, I'm Zang"</span>
                    <div class="mt-4 about"><span>ສາຂາການພັດທະນາເວບໄຊ, ພາກວິຊາວິທະຍາສາດຄອມພິວເຕີ, ຄະນະວິທະຍາສາດທຳມະຊາດ, ມະຫາວິທະຍາໄລແຫ່ງຊາດລາວ</span></div>
                    <div class="mt-4">
                        <a href="https://www.facebook.com/alieng.kln" target="_blank"><h6 class="v-profile">Facebook</h6></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 shadow border border-dark rounded py-3 mx-3">
                <div class="bg-white p-3 text-center rounded box"><img class="img-responsive rounded-circle" src="https://cdn.discordapp.com/attachments/826834529435648000/898245716063948870/PAPSI_PROFILE.png" width="90">
                    <h5 class="mt-3 name">Thanouthong Nanthavong</h5><span class="work d-block">UX/UI Designer</span><span class="work d-block">"Hello, I'm Papsi"</span>
                    <div class="mt-4 about"><span>ສາຂາການພັດທະນາເວບໄຊ, ພາກວິຊາວິທະຍາສາດຄອມພິວເຕີ, ຄະນະວິທະຍາສາດທຳມະຊາດ, ມະຫາວິທະຍາໄລແຫ່ງຊາດລາວ</span></div>
                    <div class="mt-4">
                        <a href="https://www.facebook.com/profile.php?id=100068467746235" target="_blank"><h6 class="v-profile">Facebook</h6></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 shadow border border-dark rounded py-3 mx-3">
                <div class="bg-white p-3 text-center rounded box"><img class="img-responsive rounded-circle" src="https://cdn.discordapp.com/attachments/930512327290265621/947947262351405166/Profile_Green_BG.jpg" width="90">
                    <h5 class="mt-3 name">Xaypanya Phongsa</h5><span class="work d-block">Frontend Developer</span><span class="work d-block">"Hello, I'm Ogan"</span>
                    <div class="mt-4 about"><span>ສາຂາການພັດທະນາເວບໄຊ, ພາກວິຊາວິທະຍາສາດຄອມພິວເຕີ, ຄະນະວິທະຍາສາດທຳມະຊາດ, ມະຫາວິທະຍາໄລແຫ່ງຊາດລາວ</span></div>
                    <div class="mt-4">
                        <a href="https://www.facebook.com/Xaypanya.Phongsaaaa" target="_blank"><h6 class="v-profile">Facebook</h6></a>
                    </div>
                </div>
            </div>
          
        </div>
    </div>

@endsection

@section('extra-js')
@endsection

