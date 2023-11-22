const table = document.getElementById('myTable');
const currentPageElement = document.getElementById('currentPage');
const rowsPerPage = 6;
let currentPage = 1;
const totalPages = Math.ceil(table.rows.length / rowsPerPage);

showPage(currentPage);

function showPage(page) {
  currentPage = page;
  const start = (page - 1) * rowsPerPage;
  const end = start + rowsPerPage;

  for (let i = 0; i < table.rows.length; i++) {
    table.rows[i].style.display = i >= start && i < end ? '' : 'none';
  }

  currentPageElement.textContent = currentPage;
}

function changePage(offset) {
  const newPage = currentPage + offset;
  if (newPage >= 1 && newPage <= totalPages) {
    showPage(newPage);
  }
}