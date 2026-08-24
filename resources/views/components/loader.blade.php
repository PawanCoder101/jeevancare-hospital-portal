<!-- resources/views/components/loader.blade.php -->

<div id="loader" class="loader-overlay">
    <div class="spinner"></div>
</div>

<style>
/* Full Screen Overlay */
.loader-overlay{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255,255,255,0.85);
    backdrop-filter: blur(3px);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 99999;
}

/* ChatGPT Style Spinner */
.spinner{
    width: 42px;
    height: 42px;
    border: 4px solid rgba(0,0,0,0.12);
    border-top-color: blue;
    border-radius: 50%;
    animation: spin .7s linear infinite;
}

@keyframes spin{
    from{
        transform: rotate(0deg);
    }
    to{
        transform: rotate(360deg);
    }
}
</style>