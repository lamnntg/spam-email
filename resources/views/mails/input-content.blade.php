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
