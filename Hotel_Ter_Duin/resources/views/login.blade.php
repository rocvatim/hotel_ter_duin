<x-layout>
<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3 col-xl-4 offset-xl-4">
            <div class="card shadow">
                <img src="https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80"
                    alt="" class="card-img-top" />
                <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    <form action="/login" method="POST">
                        @csrf
                        @if($errors->any())
                            <p class="text-danger fs-6">{{ implode('', $errors->all(':message')) }}</p>
                        @endif
                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" type="text" id="email" name="email" value="{{ old('email')}}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input class="form-control" type="password" id="password" name="password">
                        </div>
                        <button class="btn btn-success btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-layout>

