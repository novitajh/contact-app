<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard - Contact Manager</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Akun</h2>
    <ul>
      <li><a href="#" class="active">Dashboard</a></li>
      <li><a href="#">Kontak</a></li>
      <li><a href="#">Grup Kontak</a></li>
      <li><a href="#">Pengaturan</a></li>
      <li><a href="#" id="logout-btn">Logout</a></li> <!-- Tambahkan id="logout-btn" -->
    </ul>
  </div>

  <!-- Content -->
  <div class="content">
    <div class="header">
      <h1>Contacts Manager Dashboard</h1>
      <a href="views/add_contact.php" class="add-btn">Tambah Kontak</a>
    </div>
    <table id="contact-table">
      <thead>
        <tr>
          <th>ID Contact</th>
          <th>No HP</th>
          <th>Owner</th>
          <th>Email</th>
          <th>Alamat</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Perusahaan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($contactList as $contact): ?>
          <tr>
              <td><?php echo $contact["id_contact"]; ?></td>
              <td><?php echo $contact["no_hp"]; ?></td>
              <td><?php echo $contact["owner"]; ?></td>
              <td><?php echo $contact["email"]; ?></td>
              <td><?php echo $contact["alamat"]; ?></td>
              <td><?php echo $contact["tanggal_lahir"]; ?></td>
              <td><?php echo $contact["jenis_kelamin"]; ?></td>
              <td><?php echo $contact["perusahaan"]; ?></td>
              <td>
              <button class='edit-btn' onclick='editContact(<?php echo $contact["id_contact"]; ?>)'>Edit</button>
              <button class='delete-btn' onclick='deleteContact(<?php echo $contact["id_contact"]; ?>)'>Delete</button>
              </td>
          </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <script src="script.js"></script>
  <script>
    // Function to redirect to edit_contact.php with contact ID as parameter
    function editContact(id) {
        // Redirect to edit_contact.php with contact ID as parameter
        window.location.href = 'edit_contact.php?id=' + id;
    }

    // Function to delete contact
    function deleteContact(id) {
        // Confirmation dialog
        if (confirm('Apakah Anda yakin ingin menghapus kontak ini?')) {
            // Send request to delete_contact.php with contact ID as parameter
            window.location.href = 'delete_contact.php?id=' + id;
        }
    }
</script>

</body>
</html>
