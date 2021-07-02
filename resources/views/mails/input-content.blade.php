<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                Input Content
            </div>
            <div class="card-body">
                <form method="POST" action="{{ Route('send.email') }}">
                    @csrf

                    <div class="form-group">
                        <label class="fw-bold">Chọn loại email:</label>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="type_email" id="radioDefault1" value="1" checked>
                            <label class="form-check-label" for="radioDefault1">
                                Email Thông Báo Hết Hạn
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type_email" id="radioDefault2" value="2" >
                            <label class="form-check-label" for="radioDefault2">
                                Email Thông Báo Nâng Cấp Version
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email Subject :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="subject" placeholder="Chủ đề Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example Content :</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="7" placeholder="Nội dung Email"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Email</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
