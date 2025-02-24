<!-- Preloader -->
<div class="loader-wrap">
    <div class="preloader">
        <div class="preloader-close"><span class="fa fa-times fw-normal"></span></div>
        <div id="handle-preloader" class="handle-preloader">
            <div class="animation-preloader">
                {{-- <div class="spinner"></div> --}}
                <div class="logo-preloader">
                    <img src="assets/img/logo.png" alt="Logo" class="animated-logo">
                </div>
            </div>  
        </div>
    </div>
</div>
<!-- End Preloader -->

<style>
    .loader-wrap {
        position: fixed;
        width: 100%;
        height: 100%;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    .animation-preloader {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .spinner {
        width: 50px;
        height: 50px;
        border: 4px solid rgba(0, 0, 0, 0.2);
        border-top-color: #000;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin-bottom: 20px;
    }

    .logo-preloader img {
        width: 500px; /* Sesuaikan ukuran logo */
        height: auto;
        animation: fadeInOut 2s ease-in-out infinite alternate;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    @keyframes fadeIn {
        0% { opacity: 0.5; transform: scale(0.9); }
        100% { opacity: 1; transform: scale(1); }
    }

    @keyframes fadeInOut {
    0% { opacity: 0; }
    50% { opacity: 1; }
    100% { opacity: 0; }
    }

</style>
