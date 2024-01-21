@extends('layouts.app_landing')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    #header {

        background: radial-gradient(79.63% 79.63% at 70.87% 20.37%, #1A0653 0%, #3C0046 100%)
            /* warning: gradient uses a rotation that is not supported by CSS and may not behave as expected */
        ;
    }
</style>
@section('content')
    @include('landing.header_new_page')

    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="crew" class="crew page-crew">
            <div class="container" data-aos="fade-up">
                <h2 class="text-center">FORM CREW</h2>
                <div class="text-center">
                    <img src="{{ asset('img/crew.png') }}" alt="Crew" class="img-crew">
                </div>
                <div class="form-container">
                    <hr>
                    <h3 class="text-center pt-4 pb-4">Data Crew</h3>

                    <form id="form-crew">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="divisi">Divisi</label>
                            <select name="divisi" class="form-control" required>
                                <option value="">Pilih Divisi</option>
                                <option value="Ticketing">Ticketing</option>
                                <option value="Production">Production</option>
                                <option value="Tenant">Tenant</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phone">Nomor Handphone</label>
                            <input type="number" class="form-control" id="phone" name="phone"
                                placeholder="Nomor Handphone" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Photo</label>
                            <small class="form-text text-muted"><br />- foto semi formal<br />
                                - menghadap depan<br />
                                - wajah tidak terhalang oleh topi dan aksesoris lainnya kecuali hijab <br />
                                Contoh : </small>
                            <img src="{{ asset('img/crew_example.jpg') }}" alt="Example" width="150px" height="auto"
                                class="mb-2" style="border-radius:10px">
                            <input type="file" class="form-control" id="photo" name="photo" placeholder="Photo"
                                accept="image/png, image/gif, image/jpeg" required>

                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-info" id="btn-submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        @include('landing.contact')

    </main><!-- End #main -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            // alert('oke');
            $('#form-crew').on('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(this);
                url = "{{ route('crew.store') }}";
                $.ajax({
                    url: url,
                    method: 'POST',
                    headers: {
                        'accept': 'application/json',
                    },
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function() {
                        $('#btn-submit').prop('disabled', true);
                        $('#btn-submit').html('Loading');
                    },
                    success: function(response) {
                        const meta = response.meta;

                        if (meta.status !== 'success') {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: meta.message,
                            });

                            return;
                        }

                        Swal.fire({
                            icon: 'success',
                            title: 'Terimakasih, Data Anda Sudah Kami Terima',
                            // text: meta.message,
                        }).then((result) => {
                            resetForm()
                        });
                    },
                    error: function(error) {
                        // const message = error?.responseJSON?.message ?? 'Error';
                        // const meta = error?.responseJSON?.meta;
                        // const data = error?.responseJSON?.data;

                        // if (meta) {
                        //     if (data) {
                        //         var idx = 0;

                        //         for (const key in data) {
                        //             const value = data[key];

                        //             $('#product_event-form .' + key + '-invalid-feedback').html(
                        //                 value.join(' '));

                        //             if (idx == 0) {
                        //                 $('#product_event-form .' + key + '-input').focus();
                        //             }

                        //             idx++;
                        //         }

                        //         return;
                        //     }

                        //     Swal.fire({
                        //         icon: 'error',
                        //         title: 'Gagal',
                        //         text: meta.message,
                        //     });
                        // } else {
                        //     Swal.fire({
                        //         icon: 'error',
                        //         title: 'Gagal',
                        //         text: message,
                        //     });
                        // }
                    },
                    complete: function(jqXHR, textStatus) {
                        // $btnSave.prop('disabled', false);
                        // $btnSave.html('Simpan');

                        $('#btn-submit').prop('disabled', false);
                        $('#btn-submit').html('Simpan');
                    },
                });
            });

            function resetForm() {
                $('#form-crew').each(function() {
                    this.reset();
                });
            }
        })
    </script>
    @include('landing.footer')
@endsection
