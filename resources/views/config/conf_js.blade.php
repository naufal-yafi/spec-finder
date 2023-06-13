<script src="{{ asset('js/app.js') }}" defer></script>

<script>
    const btn = document.querySelector('#riseUp');
    const btn2 = document.querySelector('#riseDown');

    window.onscroll = function() {
        if (window.pageYOffset > 0) {
            btn.classList.remove('hidden-btn');
            btn2.classList.add('hidden-btn');
        } else {
            btn.classList.add('hidden-btn');
            btn2.classList.remove('hidden-btn');
        }
    }
</script>
