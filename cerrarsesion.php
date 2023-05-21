<?php
session_start();
session_destroy();



echo '<p class="texto-invi"></p>';
echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
echo "<script>
    Swal.fire({
        icon: 'info',
        title: 'Cerrando sesión',
        text: 'Estás saliendo del sistema',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true
    }).then(function() {
        window.location.href = 'index.php';
    });
</script>"
?>