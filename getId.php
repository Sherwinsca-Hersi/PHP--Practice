<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Table Row Click Example</title>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  border: 1px solid black;
  padding: 8px;
  text-align: left;
}

tr:hover {
  background-color: #f5f5f5;
}
</style>
</head>
<body>

<h2>Clickable Table</h2>

<table id="myTable">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <tr data-id="1">
      <td>1</td>
      <td>John Doe</td>
      <td>john@example.com</td>
    </tr>
    <tr data-id="2">
      <td>2</td>
      <td>Jane Smith</td>
      <td>jane@example.com</td>
    </tr>
    <tr data-id="3">
      <td>3</td>
      <td>Michael Johnson</td>
      <td>michael@example.com</td>
    </tr>
  </tbody>
</table>

<script>
document.addEventListener('DOMContentLoaded', function() {
  document.getElementById('myTable').addEventListener('click', function(event) {
    let target = event.target;
    while (target && target.tagName !== 'TR') {
      target = target.parentNode;
    }
    if (target) {
      let id = target.getAttribute('data-id');
      if (id) {
        console.log('Clicked row ID:', id);
        // You can perform further actions with the ID here
      }
    }
  });
});
</script>

</body>
</html>