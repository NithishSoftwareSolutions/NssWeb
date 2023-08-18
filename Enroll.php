<!-- header -->

        <?php
            include_once 'include/header.php';
        ?>

        <main>
            <div class="bg-dark border-top border-bottom">
                <h1 class="text-center text-white fw-bold">Enroll Course</h1>
            </div>
        </main>

        <section>
            <form action="" class="w-100 mx-auto shadow-lg col-lg-6 col-md-6">

                <div class="row mb-4">
                    <div class="col">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Name"
                            required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Last Name"
                            required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com" required>
                    </div>
                    <div class="col">
                        <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Mobile Number"
                            required>
                    </div>
                </div>

                <div class="mb-4">
                    <select name="Courses" id="Courses" class="form-select form-control"
                        area-label="Default select example">
                        <option selected>Select</option>
                        <option value="1">C,C++</option>
                        <option value="2">Java</option>
                        <option value="3">.NET</option>
                        <option value="4">Python</option>
                        <option value="5">Web Application Development</option>
                        <option value="5">Mobile App Development</option>
                        <option value="4">UI/UX</option>
                        <option value="4">AWS Cloud Services</option>
                    </select>
                </div>
                <div class="mb-4 form-outline">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="Please Write Your Queries"></textarea>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <input type="text" class="form-control" id="inputCity" placeholder="City">
                    </div>

                    <div class="col">
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>

                    <div class="col">
                        <input type="text" class="form-control" id="inputZip" placeholder="Zip">
                    </div>

                    <div class="row text-center">
                        <div class="col">
                            <a class="btn" href="./Technology.php">Back</a>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </div>

                </div>
            </form>
        </section>
    <!-- ======= Footer ======= -->
    <?php
        include_once 'include/footer.php';
    ?>
