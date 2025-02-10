<div class="container-fluid px-4">
    <h1 class="mt-4">User</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">User</li>
    </ol>

    <hr>

    <style>
        /* Warna dasar tabel */
        .table-custom {
            background-color: #FFEBF0; /* Pink lembut */
            border: 2px solid #FF66A3;
        }

        /* Header tabel */
        .table-custom thead {
            background-color: #FF66A3;
            color: white;
        }

        /* Hover efek */
        .table-custom tbody tr:hover {
            background-color: #FFD1DC;
        }

        /* Border untuk sel */
        .table-custom th, .table-custom td {
            border: 1px solid #FF66A3;
            padding: 10px;
            text-align: center;
        }
    </style>

    <table class="table table-custom">
        <thead>
            <tr>
                <th>Nama User</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = mysqli_query($koneksi, "SELECT * FROM user");
                while($data = mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>
