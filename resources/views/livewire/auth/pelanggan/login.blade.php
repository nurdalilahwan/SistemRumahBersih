<div>
    <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <span class="h1">Login Pelanggan</span>
        </div>
        <div class="card-body">
          @if (session()->has('message-danger'))
              <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              {{ session('message-danger') }}
              </div>
          @endif



            <form wire:submit.prevent="login">

                <div class="input-group mb-3">
                  <input wire:model.defer="username" id="username" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="IC / Passport / Sijil Lahir" data-inputmask='"mask": "999999-99-9999"' data-mask>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                  @error('username')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="input-group mb-3">

                  <input wire:model.defer="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" @error('password') is-invalid @enderror" autocomplete="current-password">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="row">
                  <div class="col-8">
                    <div class="icheck-primary">
                      <input wire:model.defer="remember" type="checkbox" id="remember">
                      <label for="remember">
                        Remember Me
                      </label>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                  </div>
                  <!-- /.col -->
                </div>
              </form>
            <br/>
            <div class="row">
                <div class="col-8">
                    <p class="mb-1">
                        <a href="{{ route('root') }}"><i class="fas fa-home"></i> Halaman Utama</a>
                    </p>
                </div>
                <div class="col-4">
                    <p class="mb-1">
                        <a href="#" data-toggle="modal" data-target="#modal-daftar-pelanggan"><i class="fas fa-edit"></i>{{ __(' Daftar') }}</a>
                    </p>
                </div>
            </div>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <x-modal id="modal-daftar-pelanggan" title="{{ __('Daftar Pelanggan') }}"  size="xl" icon="fas fa-book" >
        <x-slot name="body">
            <livewire:auth.pelanggan.register />
        </x-slot>
        <x-slot name="footer">
        </x-slot>
    </x-modal>
    <!-- /.login-box -->
  </div>
