<div>
    <x-content title="Pendaftaran">

        <x-forms.alert-validation />

        <x-card title="Akaun Pengguna" style="width: 90%; margin: 0 auto; float: none; margin-bottom: 10px;">
            <x-slot name="body">
                <form id="register-form"  wire:submit.prevent="register">

                    <div class="row">
                        <div class="col-6">
                            <x-forms.text id="form_nama" label="Nama" wire:model.defer="userCreate.name" required />

                            <div x-data="{ username_type: @entangle('username_type') }">
                                <div x-show="username_type == '1'">
                                    <!-- class="mask-ic" id="ic-create" letak luar utk automation -->
                                    <x-forms.text id="form_ic_baru" label="No. Kad Pengenalan (Baru)" wire:model.defer="userCreate.profile.no_pengenalan"   required />
                                </div>
                                <div x-show="username_type == '2'">
                                    <x-forms.text id="passport-create" label="No. passport" wire:model.defer="userCreate.profile.no_pengenalan" required />
                                </div>
                                <div x-show="username_type == '3'">
                                    <x-forms.text id="sijil-kelahiran-create" label="No. Sijil Kelahiran" wire:model.defer="userCreate.profile.no_pengenalan" required />
                                </div>
                                <div x-show="username_type == '4'">
                                    <x-forms.text id="pengenalan-create" label="No. Pengenalan" wire:model.defer="userCreate.profile.no_pengenalan" required />
                                </div>
                            </div>

                            <x-forms.text id="form_email" label="Email" wire:model.defer="userCreate.email" required />
                        </div>
                        <div class="col-6">
                            <x-forms.select id="gender" label="Jantina" wire:model.defer="userCreate.profile.id_jantina" required>
                                <x-slot name="option">
                                    @foreach($genders as $key => $value)
                                        <option value="{{ $value->id }}" >{{ $value->nama }}</option>
                                    @endforeach
                                </x-slot>
                            </x-forms.select>

                            <x-forms.select id="religion" label="Agama" wire:model.defer="userCreate.profile.id_agama" required>
                                <x-slot name="option">
                                    @foreach($religions as $key => $value)
                                        <option value="{{ $value->id }}" >{{ $value->nama }}</option>
                                    @endforeach
                                </x-slot>
                            </x-forms.select>

                            <x-forms.select id="ethnic" label="Bangsa" wire:model.defer="userCreate.profile.id_bangsa" required>
                                <x-slot name="option">
                                    @foreach($ethnics as $key => $value)
                                        <option value="{{ $value->id }}" >{{ $value->nama }}</option>
                                    @endforeach
                                </x-slot>
                            </x-forms.select>
                            <x-forms.text id="no-tel-rumah" type="text" label="No Telefon (R)" class="mask-phoneno" wire:model.defer="userCreate.profile.no_tel_rumah"  />
                            <x-forms.text id="no-tel-bimbit" type="text" label="No Telefon Bimbit" class="mask-mobileno" wire:model.defer="userCreate.profile.no_tel_bimbit"  />
                            <x-forms.text id="no-tel-pejabat" type="text" label="No Telefon (P)" class="mask-phoneno" wire:model.defer="userCreate.profile.no_tel_pejabat"  />
                        </div>
                    </div>

                    <x-card title="Alamat Tetap" collapseButton>
                        <x-slot name="body">
                            <div class="row">
                                <div class="col-md-6">
                                    <x-forms.text id="form_alamat_1" label="Alamat 1" wire:model.defer="userCreate.profile.alamat_tetap1" />
                                    <x-forms.text id="form_alamat_2" label="Alamat 2" wire:model.defer="userCreate.profile.alamat_tetap2" />
                                    <x-forms.text id="form_alamat_3" label="Alamat 3" wire:model.defer="userCreate.profile.alamat_tetap3" />
                                </div>
                                <div class="col-md-6">
                                    <x-forms.postcode id="form_postcode" selectedMethod="selectedPostcode" wire:model.defer="postcode.poskod" :data="$resultPostcodes" label="Poskod" />
                                    <x-forms.text id="form_town" wire:model.defer="postcode.bandar.nama" label="Bandar" readonly required />
                                    <x-forms.text id="form_state" wire:model.defer="postcode.bandar.negeri.nama" label="Negeri" readonly required />
                                </div>
                            </div>
                        </x-slot>
                    </x-card>

                    <x-card title="Alamat Surat Menyurat" collapseButton>
                        <x-slot name="body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button wire:click="alamatSuratSalinAlamatTetap" type="button" class="form-group btn btn-primary">Salin Alamat Tetap</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <x-forms.text id="form_surat_alamat_1" label="Alamat 1" wire:model.defer="userCreate.profile.alamat_surat1" />
                                    <x-forms.text id="form_surat_alamat_2" label="Alamat 2" wire:model.defer="userCreate.profile.alamat_surat2" />
                                    <x-forms.text id="form_surat_alamat_3" label="Alamat 3" wire:model.defer="userCreate.profile.alamat_surat3" />
                                </div>
                                <div class="col-md-6">
                                    <x-forms.postcode id="form_surat_poskod" selectedMethod="selectedPostcodeSurat" wire:model.defer="postcodeSurat.poskod" :data="$resultPostcodesAddOn" label="Poskod" />
                                    <x-forms.text id="form_bandar" wire:model.defer="postcodeSurat.bandar.nama" label="Bandar" readonly required />
                                    <x-forms.text id="form_negeri" wire:model.defer="postcodeSurat.bandar.negeri.nama" label="Negeri" readonly required />
                                </div>
                            </div>
                        </x-slot>
                    </x-card>

                    <x-card title="Keselamatan Pendaftaran Pengguna" collapseButton>
                        <x-slot name="body">
                            <!-- soalan keselamatan keluarkan required , load testing purpose -->
                            <x-forms.select id="question_one" label="Soalan Keselamatan (1)" wire:model.defer="userCreate.profile.soalan_satu" >
                                <x-slot name="option">
                                    <option value="Apa?" >Apa?</option>
                                    <option value="Dimana?" >Dimana?</option>
                                    <option value="Bila?" >Bila?</option>
                                    <option value="SPM dapat berapa A?" >SPM dapat berapa A?</option>
                                    <option value="Bila nak kawen?" >Bila nak kawen?</option>
                                </x-slot>
                            </x-forms.select>

                            <x-forms.text id="form_jawapan_question_one" label="Jawapan" wire:model.defer="userCreate.profile.jawapan_satu"/>

                            <!-- required -->
                            <x-forms.select id="question_two" label="Soalan Keselamatan (2)" wire:model.defer="userCreate.profile.soalan_dua" >
                                <x-slot name="option">
                                    <option value="Apa?" >Apa?</option>
                                    <option value="Dimana?" >Dimana?</option>
                                    <option value="Bila?" >Bila?</option>
                                    <option value="SPM dapat berapa A?" >SPM dapat berapa A?</option>
                                    <option value="Bila nak kawen?" >Bila nak kawen?</option>
                                </x-slot>
                            </x-forms.select>

                            <x-forms.text id="form_jawapan_question_two" label="Jawapan" wire:model.defer="userCreate.profile.jawapan_dua"/>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Kod Keselamatan :') }}</label>

                                <div class="col-md-6">
                                    {!! captcha_img('flat') !!}
                                </div>
                            </div>

                            <div class="form-group row">

                                <label for="" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>
                                <div class="col-md-6">

                                    <x-forms.text id="form_captcha" label="Masukkan kod keselamatan yang dipaparkan di dalam ruangan dibawah dan klik Daftar untuk melengkapkan pendaftaran" wire:model.defer="captcha" placeholder="Masukkan Kod Keselamatan" required/>
                                    @error('captcha')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </x-slot>
                    </x-card>

                </form>
            </x-slot>
            <x-slot name="footer">
                <button type="button" class="btn btn-default">
                    <a href="{{ route('awam.login') }}">Log Masuk</a>
                </button>
                <button id="form_hantar" type="submit" class="btn btn-primary" form="register-form">
                    {{ __('Daftar') }}
                </button>
            </x-slot>
        </x-card>
    </x-content>
    <div wire:loading.delay wire:target="register">
        <div class="loading">
            <div class="la-pacman la-3x">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>

        $(document).ready(function(){
            $('#username_type').on('change', function (e) {
                var data = $(this).select2("val");
                console.log(data);
                @this.set('username_type', data);
            });

            /* disable for automation testing
            $('#ic-create').on('change', function (e) {
                @this.set('userCreate.profile.no_pengenalan', $(this).val());
            });
            */

            $('#passport-create').on('change', function (e) {
                @this.set('userCreate.profile.no_pengenalan', $(this).val());
            });

            $('#no-tel-rumah').on('change', function (e) {
                @this.set('userCreate.profile.no_tel_rumah', $('#no-tel-rumah').val());
            });

            $('#no-tel-bimbit').on('change', function (e) {
                @this.set('userCreate.profile.no_tel_bimbit', $('#no-tel-bimbit').val());
            });

            $('#no-tel-pejabat').on('change', function (e) {
                @this.set('userCreate.profile.no_tel_pejabat', $('#no-tel-pejabat').val());
            });

            $('#religion').on('change', function (e) {
                var data = $(this).select2("val");
                console.log(data);
                @this.set('userCreate.profile.id_agama', data);
            });

            $('#gender').on('change', function (e) {
                var data = $(this).select2("val");
                console.log(data);
                @this.set('userCreate.profile.id_jantina', data);
            });

            $('#ethnic').on('change', function (e) {
                var data = $(this).select2("val");
                console.log(data);
                @this.set('userCreate.profile.id_bangsa', data);
            });

            $('#question_one').on('change', function (e) {
                var data = $(this).select2("val");
                console.log(data);
                @this.set('userCreate.profile.soalan_satu', data);
            });

            $('#question_two').on('change', function (e) {
                var data = $(this).select2("val");
                console.log(data);
                @this.set('userCreate.profile.soalan_dua', data);
            });
        });

    </script>
@endpush
