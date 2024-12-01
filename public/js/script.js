document.getElementById('foto').addEventListener('change',

    function(event) {

    const fileInput = event.target;
    const preview = document.getElementById('preview');
    if (fileInput.files && fileInput.files[0]) {
    const reader = new FileReader();
    reader.onload = function(e) {
    preview.src = e.target.result;
    preview.style.display = 'block'; // Mostrar la

    imagen

    };
    reader.readAsDataURL(fileInput.files[0]);
    } else {
    preview.style.display = 'none'; // Ocultar si no hay

    archivo

    }
});


