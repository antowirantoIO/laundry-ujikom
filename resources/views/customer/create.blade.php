<x-app-layout title="Tambah Data Customer">
    <main>
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Form Tambah Data Customer</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('customer.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">ID Customer</label>
                                        <div class="input-group input-group-merge">
                                            <input disabled type="text" name="id_customer" class="form-control"
                                                id="basic-icon-default-fullname" value="CSM0005"
                                                aria-describedby="basic-icon-default-fullname2">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-fullname">Nama Lengkap</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                    class="ti ti-user"></i></span>
                                            <input type="text" name="name" class="form-control"
                                                id="basic-icon-default-fullname" placeholder="John Doe"
                                                aria-describedby="basic-icon-default-fullname2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-company">Email</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                                    class="ti ti-mail"></i></span>
                                            <input type="text" id="basic-icon-default-company" class="form-control"
                                                placeholder="email@laundry.com"
                                                aria-describedby="basic-icon-default-company2">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-icon-default-phone">No Hp/Wahtsapp</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                    class="ti ti-phone"></i></span>
                                            <input type="text" id="basic-icon-default-phone"
                                                class="form-control phone-mask" placeholder="+62 813 1233 4422"
                                                aria-describedby="basic-icon-default-phone2">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-message">Alamat</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-message2" class="input-group-text"><i
                                            class="ti ti-message-dots"></i></span>
                                    <textarea id="basic-icon-default-message" rows="4" class="form-control" placeholder="Jln. Jendral Sudirman No 45"
                                        aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                            <a href="#" class="btn btn-danger waves-effect waves-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
