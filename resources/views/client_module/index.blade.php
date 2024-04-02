@extends('master.navbar')

@section('main')
        
    <div class="card mx-5">
        <div class="card-body text-center">
            <h1>Vista principal CLIENTES</h1>
        </div>
    </div>

    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content px-4">
                <div class="modal-header">
                    <h1 class="modal-title fs-2" id="exampleModalLabel">New client</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post" id="newLandlord">
                    <div class="modal-body p-2">
                        <div class="row mb-2">
                            <label class="col">
                                <strong class="ps-2">Name</strong>
                                <input type="text" name="userName" id="userName" class="form-control" placeholder="Insert a name" required/>
                            </label>
                            <label class="col">
                                <strong class="ps-2">Surnames</strong>
                                <input type="text" name="userSurnames" id="userSurnames" class="form-control" placeholder="Insert one or more surnames" />
                            </label>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="clearForm()">Close</button>
                        <button type="submit" class="btn btn-success border border-none">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    <div class="row justify-content-center">
        <!--New landlord card-->
        <button class="card m-4 p-3 align-items-center informationCard" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <div class="d-flex justify-content-center p-2">
                <h4>Add new landlord</h4>
            </div>
            <div class="d-flex justify-content-center p-2">
                <img src="../img/add_user_nobg.png">
            </div>
        </button>

        <!--Landlords cards-->
        <?php
        $landlords = $_SESSION['landlords'];
        $n = count($landlords);

        for ($i = 0; $i < $n; $i++) {
            echo '
                <a href="#" class="card m-4 p-3 informationCard">
                    <div class="d-grid gap-2 d-md-flex">
                        <div class="col justify-content-center ps-1">
                            <div class="row">
                                <h3 class="w-100">' . $landlords[$i]['name'] . ' </br></h3>
                            </div>
                            <div class="row">
                                <h4 class="w-100">' . $landlords[$i]['surnames'] . '</h4>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <img class="border border-secondary rounded" src="' . $landlords[$i]['picture'] . '">
                        </div>
                    </div>
                    <div class="justify-content-start pt-1">
                        <div class="row">
                            <i class="bi bi-telephone"></i>
                            ' . $landlords[$i]['phone_number'] . '<br>
                        </div>
                        <div class="row">
                            ' . $landlords[$i]['email'] . '<br>
                        </div>
                    </div>
                </a>
            ';
        }
        ?>
    </div>

@endsection
