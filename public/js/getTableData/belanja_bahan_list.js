let data;

async function init() {
  data = await getTableData();
  showTable(data);
}

function getTableData() {
  return fetch("/belanja_bahan/json/1")
    .then((response) => {
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
    const capitalized =
    m.nama_bahan.charAt(0).toUpperCase()
    + m.nama_bahan.slice(1)
    row.push(capitalized);
    row.push(m.kuantitas);
    row.push(m.satuan);
    row.push(m.harga);
    row.push(`
    <a class="btn btn-primary" href="belanja_bahan/edit/${m.id_belanja}/${m.id_bahan}">
      <i class="ri-pencil-line"></i>
    </a>
    <a class="btn btn-secondary" href="belanja_bahan/delete/${m.id_belanja}/${m.id_bahan}">
      <i class="ri-delete-bin-line"></i>
    </a>`);
    table.push(row);
  });

  data = table;

  $("#table").DataTable({
    data: data,
    columns: [
      { title: "Nama Bahan" },
      { title: "Kuantitas" },
      { title: "Satuan" },
      { title: "Harga" },
      { title: "Action" },
    ],
  });
}

init();
