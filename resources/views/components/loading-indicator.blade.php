<div wire:loading.delay {{ $attributes }}>
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

@push('css')
<style>
    .loading {
    position: fixed;
    z-index: 9999;
    height: 2em;
    width: 2em;
    overflow: show;
    margin: auto;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    }

    /* Transparent Overlay */
    .loading:before {
    content: '';
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));

    background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));
    opacity: .50;
    }
  </style>
@endpush