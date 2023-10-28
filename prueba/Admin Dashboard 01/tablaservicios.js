(function () {
    let dataTable;
    let dataTableIsInitialized = false;
    
    const dataTableOptions = {
        pageLength: 9,
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
    
        dataTable = $("#datatable_servicios").DataTable(dataTableOptions);
    
        dataTableIsInitialized = true;
    };
    
    const listUsers = async () => {
        try {
            const response = await fetch("tablaservicios.php");
        const users = await response.json();
        let content = ``;
        users.forEach((user, index) => {
            content += `
                <tr>
                    <td>${user.IDServicio}</td>
                    <td>${user.nombreCliente}</td>
                    <td>${user.nombreServicio}</td>
                    <td>${user.Barrio}</td>
                    <td>${user.Calle}</td>

                    <td>
                        <button class="btn btn-sm btn-primary"><i class="fa-solid fa-pencil"></i></button>
                        <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></button>

                    </td>
                </tr>`;
        });
            tableBody_servicios.innerHTML = content;
        } catch (ex) {
            alert(ex);
        }
    };
    
    window.addEventListener("load", async () => {
        await initDataTable();
    });
    })();