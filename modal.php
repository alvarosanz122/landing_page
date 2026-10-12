<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div
    class="modal fade"
    id="modalId"
    tabindex="-1"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    
    role="dialog"
    aria-labelledby="modalTitleId"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
        role="document"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                   <i class="bi bi-person-fill-check"></i> Entrar usuario
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <form name="login" method="post">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input
                        type="text"
                        class="form-control"
                        name="nombreUsuario"
                        id="nombreUsuario"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                
            <div class="mb-3">
                <label for="" class="form-label">Clave</label>
                <input
                    type="password"
                    class="form-control"
                    name="claveUsuario"
                    id="claveUsuario"
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>
            


            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    Cerrar
                </button>
                <button type="button" class="btn btn-primary" onclick="envio()">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Optional: Place to the bottom of scripts -->
<script>
    const myModal = new bootstrap.Modal(
        document.getElementById("modalId"),
        options,
    );
</script>