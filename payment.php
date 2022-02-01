<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Payment Form</title>
    <link rel="stylesheet" href="pay.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Confirm Your Payment</h1>
        <form action="">
            <div class="first-row">
                <div class="owner">
                    <h3>Name on Card</h3>
                    <div class="input-field" id="name">
                        <input type="text" required>
                    </div>
                </div>
                <div class="cvv">
                    <h3>CVV</h3>
                    <div class="input-field" id="number">
                        <input type="password" required>
                    </div>
                </div>
            </div>
            <div class="second-row">
                <div class="card-number">
                    <h3>Card Number</h3>
                    <div class="input-field">
                        <input type="number" required>
                    </div>
                </div>
            </div>
            <div class="third-row">
                <h3>Expiry Date</h3>
                <div class="selection">
                    <div class="date">
                        <select name="months" id="months">
                            <option value="Jan">Jan</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Apr">Apr</option>
                            <option value="May">May</option>
                            <option value="Jun">Jun</option>
                            <option value="Jul">Jul</option>
                            <option value="Aug">Aug</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Oct</option>
                            <option value="Nov">Nov</option>
                            <option value="Dec">Dec</option>
                        </select>
                        <select name="years" id="years">
                            <option value="2026">2026</option>
                            <option value="2025">2025</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                        </select>
                    </div>
                    <div class="cards">
                        <img src="mc.png" alt="">
                        <img src="vi.png" alt="">
                        <img src="pp.png" alt="">
                    </div>
                </div>
            </div>
            <!-- <a href="#" class="btn">Confirm</a> -->
            <button class="btn" onclick="alertfunction()">Confirm</button>
            <p><a href="./index.html" class="a">Back to Home Page</a></p>
        </form>
    </div>

    <script>
        function alertfunction() {
            swal({
                title: "Are you sure?",
                text: "Once you confirm the payment you can not return back",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Your Payment is Confirmed", {
                            icon: "success",
                        });
                    } else {
                        swal("Please Check your details");
                    }
                });
        }
    </script>

</body>

</html>