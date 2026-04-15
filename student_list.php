<?php
include "./controller/db_connection.php";
include "./layout/header.php";
?>

<main>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Student List</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Education</th>
                    <th>Roll No</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM students ORDER BY id DESC");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["full_name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["class_no"] . "</td>";
                    echo "<td>" . $row["roll_no"] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</main>

<?php
include "./layout/footer.php";
?>