function confirmarExclusao(id, tipo) {
    Swal.fire({
        title: 'Você tem certeza?',
        text: "Esta ação não pode ser desfeita!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, excluir!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = `index.php?action=excluir_${tipo}&id=${id}`;
        }
    });
}

