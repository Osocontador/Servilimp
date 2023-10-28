(function () {
let dataTable;
let dataTableIsInitialized = false;

const dataTableOptions = {
    pageLength: 3,
    destroy: true,
    language: {
        lengthMenu: "Mostrar _MENU_ registros por página",
        zeroRecords: "Ningún usuario encontrado",
        info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
        infoEmpty: "Ningún usuario encontrado",
        infoFiltered: "(filtrados desde _MAX_ registros totales)",
        search: "Buscar:",
        loadingRecords: "Cargando...",
        paginate: {
            first: "Primero",
            last: "Último",
            next: "Siguiente",
            previous: "Anterior"
        }
    }
};
const initDataTable = async () => {
    if (dataTableIsInitialized) {
        dataTable.destroy();
    }
    await listUsers();
    dataTable = $("#datatable_users").DataTable(dataTableOptions);
    dataTableIsInitialized = true;
};

const listUsers = async () => {
    try {

        console.log("no");
        const response = await fetch("tabla.php");
        const users = await response.json();
        
        console.log("si");
        let content = ``;
        users.forEach((user, index) => {
            content += `
                <tr>
                    <td>${user.DNI}</td>
                    <td>${user.Nombre}</td>
                    <td>${user.Apellido}</td>
                    <td>${user.NroTelefono}</td>
                    <td>${user.Rol}</td>
                    <td>
                        <button class="btn btn-sm btn-primary"><i class="fa-solid fa-pencil"></i></button>
                        <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></button>

                    </td>
                </tr>`;
        });
        tableBody_users.innerHTML = content;
    } catch (ex) {
       alert(ex);
    }
};

window.addEventListener("load", async () => {
    await initDataTable();
});
})();