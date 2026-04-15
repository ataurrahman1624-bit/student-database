<?php
include "./layout/header.php";
?>
<main>
    <div class="container mt-5">
        <div class="row align-item-center justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0 text-center">Student sign in form</h3>
                    </div>
                    <div class="card-body">
                    <form action="./controller/save_student.php" method="POST">
                    <div class="mb-3">
                        <label for="full_name" class="from-label">
                            Full name
                        </label>
                        <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="from-label">
                            Email
                        </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="class_no" class="from-label">
                            Education
                        </label>
                        <input type="text" class="form-control" id="class-no" name="class_no" placeholder="Education" required>
                    </div>
                    <div class="mb-3">
                        <label for="roll_no" class="from-label">
                            Roll-no
                        </label>
                        <input type="number" class="form-control" id="roll-no" name="roll_no" placeholder="Roll-no" required>
                    </div>
                    <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    <a href="student_list.php" class="btn btn-outline-secondary">Student list</a>
                    </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php
include "./layout/footer.php";
?>