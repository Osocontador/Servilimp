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

    dataTable = $("#datatable_clientes").DataTable(dataTableOptions);

    dataTableIsInitialized = true;
};

const listUsers = async () => {
    try {
        const response = await fetch("tablaclientes.php");
        const users = await response.json();
        let content = ``;
    users.forEach((user, index) => {
        content += `
            <tr>
                <td>${user.IDCliente}</td>
                <td>${user.Nombre}</td>
                <td>${user.Telefono}</td>
                <td>${user.Correo}</td>
                <td>${user.Barrio}</td>
                <td>${user.Calle}</td> 
                <td><a href="#" class="Select_boton">Seleccionar</a></td>
            </tr>`;
    });
        tableBody_clientes.innerHTML = content;
    } catch (ex) {
        alert(ex);
    }
};

window.addEventListener("load", async () => {
    await initDataTable();
});
})();