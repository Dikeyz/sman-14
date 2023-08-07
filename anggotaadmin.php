<?php
 // auth/koneksi.php
    include 'auth/koneksi.php'; // Melakukan Koneksi ke Database

        // Query to retrieve the names from the database
        $query = "SELECT * FROM akses";
        $result = mysqli_query($koneksi, $query);

        // Generate the HTML output for each user
            while ($data = mysqli_fetch_assoc($result)) {
                    echo '<li>';
                    echo '<img src="dist/img/user2-160x160.jpg" alt="User Image">';
                    echo '<a class="users-list-name" href="#">' . $data['name'] . '</a>';
                    echo '</li>';
                }

        // Close the MySQL connection
     mysqli_close($koneksi);
    ?>