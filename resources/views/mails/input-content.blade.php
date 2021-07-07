<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <div class="container">
        <div class="card mt-4">
            <div class="card-header" style="font-weight: bold">
                Input Content Gmail API
            </div>
            <div class="card-body">
                <form method="POST" action="{{ Route('send.email') }}">
                    @csrf
                    <div class="form-group">
                        <label class="font-weight-bold">Công ty cung cấp dịch vụ :</label>
                        <select class="custom-select" name="supply_company_id">
                            <option value="1">VNPT-CA</option>
                            <option value="2">Viettel-CA</option>
                            <option value="3">NewCA</option>
                            <option value="4">FPT-CA</option>
                          </select>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Chọn loại email:</label>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="type_email" id="radioDefault1" value="1" checked>
                            <label class="form-check-label" for="radioDefault1">
                                Email Thông Báo Hết Hạn
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="type_email" id="radioDefault2" value="2" >
                            <label class="form-check-label" for="radioDefault2">
                                Email Thông Báo Nâng Cấp Version
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="type_email" id="radioDefault3" value="3" >
                            <label class="form-check-label" for="radioDefault3">
                                Email Báo Giá - Mrs Vân <b style="color: orange">( Không sử dụng tại AmazonSES )</b>
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="type_email" id="radioDefault4" value="4" >
                            <label class="form-check-label" for="radioDefault4">
                                Email Nội Dung Tùy Chỉnh <b style="color: red">( Chưa sử dụng được tại Gmail API )</b>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold" for="exampleFormControlInput1">Chủ đề email :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="subject" placeholder="Chủ đề Email" required>
                    </div>
                    <div class="form-group" id="ck_editor" >
                        <label class="font-weight-bold" for="editor">Nội dung email :</label>
                        <textarea class="form-control" id="editor" name="content" rows="10" placeholder="Nội dung Email"></textarea>
                    </div>
                    <button id="btn-submit" type="submit" class="btn btn-primary">Send Email</button>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        $('#ck_editor').hide();
        $( document ).ready(function() {
            $('input[type=radio][name=type_email]').change( function() {
                if ($("#radioDefault4").prop("checked") == true) {
                    $(':button[type="submit"]').prop('disabled', true)
                    $('#ck_editor').show();
                } else {
                    $('#ck_editor').hide();
                    $(':button[type="submit"]').prop('disabled', false)
                }
            });
        });
    </script>
    @endpush
</x-app-layout>
