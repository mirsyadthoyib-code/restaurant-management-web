let data;

async function init() {
  const data = await getTableData();
  showTable(data);
}

function getTableData() {
  return fetch("/belanja/json").then((response) => {
    if (!response.ok) {
      throw new Error(response.statusText);
    } else {
      return response.json();
    }
  });
}

function showTable(value) {
  let table = [];
  value.forEach((m) => {
    let row = [];
    row.push(m.tanggal_belanja);
    row.push(m.foto_invoice);
    row.push(`
    <a class="btn btn-success" href="belanja/detail/${m.id_belanja}">
      <i class="ri-eye-line"></i>
    </a>
    <a class="btn btn-primary" href="belanja/edit/${m.id_belanja}">
      <i class="ri-pencil-line"></i>
    </a>
    <a class="btn btn-secondary" href="belanja/delete/${m.id_belanja}">
      <i class="ri-delete-bin-line"></i>
    </a>`);
    table.push(row);
  });

  data = table;

  $("#table").DataTable({
    data: data,
    columns: [
      { title: "Tanggal Belanja" },
      { title: "Foto Invoice" },
      { title: "Action" },
    ],
  });
}

init();
