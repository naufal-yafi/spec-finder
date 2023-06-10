<style>
    #riseUp {
        position: fixed;
        right: 2rem;
        bottom: 2rem;
        z-index: 99;
        border: none;
        height: 40px;
        width: 40px;
    }

    #riseUp:hover {
        opacity: .8;
    }

    .hilang {
        display: none;
    }
</style>

<a href="#">
    <button id="riseUp" class="hilang rounded" style="background: #d1e7dd; color: #198754;">
        <img src="{{ url('/assets/icons/arrow-up.svg') }}" width="20px" height="20px" alt="arrow up">
    </button>
</a>

<script>
    const btn = document.querySelector('#riseUp');

    window.onscroll = function() {
        if (window.pageYOffset > 0) {
            btn.classList.remove('hilang');
        } else {
            btn.classList.add('hilang');
        }
    }
</script>
