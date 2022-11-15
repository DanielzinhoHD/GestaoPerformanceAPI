<script>

/*funcionalidade dark mode teste*/

const $html = document.querySelector('html')
const $checkbox= document.querySelector('.switch-dark-mode')

$checkbox.addEventListener('click', function(){
    $html.classList.toggle('dark-mode')
})
</script>


