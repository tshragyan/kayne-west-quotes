<div>
    <div class="container d-flex justify-content-center mt-5 mb-5 flex-wrap">
        <form wire:submit.prevent="auth" class="col col-lg-7 col-md-12">
            <div class="form-group mb-2">
                <label for="exampleInputPassword1" class=" mb-1">Password</label>
                <input type="password" class="form-control" wire:model="password" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        @if($message)
            <div class="alert alert-danger col col-lg-7 col-md-12 mt-3">{{ $message }}</div>
        @endif
    </div>

</div>
