<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="image/favicon.png">

    <title>TastySpread</title>
  </head>
  <body>
    <!-- navbar -->
        <?php
        include 'header.html';
        ?>
    <!-- menus -->
    <div class="menu">
        
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-7 leftprt">
                    <h1>Packages</h1>
                    <select name="" id="" class="mb-4">
                        <option value="">Indian Breakfast package</option>
                        <option value="">Veg Lunch / Dinner package</option>
                        <option value="">Veg Hi-Tea package</option>
                        <option value="">Birthday package – Veg</option>
                        <option value="">Veg Continental package</option>
                        <option value="">N/V Continental Breakfast package</option>
                        <option value="">N/V Lunch / Dinner package</option>
                        <option value="">N/V Hi-Tea package</option>
                        <option value="">Birthday package – N/V</option>
                        <option value="">N/V Continental package</option>
                    </select>
                </div>
                <div class="col-md-5">
                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider round"></span>
                </label>
                Veg
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label> Non-Veg
                </div>
            </div>
            <table class="table">
                <tr>
                    <td>Chicken Burger</td>
                    <td>Mutton Burger</td>
                    <td>Egg Burger</td>
                </tr>
                <tr>
                    <td>Chicken Tex Mex Rolls</td>
                    <td>Chicken Shangai Rolls</td>
                    <td>Burmese Parcel (Non-Veg)</td>
                </tr>
                <tr>
                    <td>Chicken Manchurian</td>
                    <td>Pepper Chicken</td>
                    <td>Chilli Chicken</td>
                </tr>
                <tr>
                    <td>Ginger Chicken</td>
                    <td>Garlic Chicken</td>
                    <td>Chicken 65</td>
                </tr>
                <tr>
                    <td>Chicken Salt&Pepper</td>
                    <td>Chicken Momos</td>
                    <td>Vegetable Spring Rolls</td>
                </tr>
                <tr>
                    <td>Vegetable Tex Mex Rolls</td>
                    <td> Vegetable Shanghai Rolls</td>
                    <td>Burmese Parcel (Veg)</td>
                </tr>
                <tr>
                    <td>Wontons (Veg)</td>
                    <td>Vegtable Manchurain</td>
                    <td>Vegetable Chilli</td>
                </tr>
                <tr>
                    <td>Vegetable Salt & Pepper</td>
                    <td>Vegetable Mejestic</td>
                    <td>Vegetables Momos</td>
                </tr>
                <tr>
                    <td>Chocolate Brownie</td>
                    <td>Chocolate Walnut Brownie</td>
                    <td>Flavored Cup Cakes</td>
                </tr>
                <tr>
                    <td>Fruit Truffle</td>
                    <td>Chicken Cutelet</td>
                    <td>Chicken Cheese Potato Dumplings</td>
                </tr>
            </table>
            <button class="book">Choose Existing Package</button>

        </div>
    </div></div>

    <!-- menus -->
<!-- contact us  -->

<div class="contact">
            <div class="container">
                <h1>Contact us</h1>
            <form action="">
                <input type="text" placeholder="Name*" required><br>
                <input type="number" placeholder="Mobile*" required><br>
                <input type="email" placeholder="Email*" required><br>
                <label for="">TYPE OF SERVICE*</label>
                <select name="service" id="service" required>
                    <option value="Institutional Catering">Institutional Catering</option>
                    <option value="Special Event Catering">Special Event Catering</option>
                  </select>
                  <label for="">NUMBER OF PAX*</label>
                <select name="service" id="service" required>
                    <option value="50-100">50-100</option>
                    <option value="100-200">100-200</option>
                    <option value="200-500">200-500</option>
                    <option value="Ago 500">Ago 500</option>
                  </select>
            </form>
            <button class="submit">SUBMIT</button>
            </div>
        </div>
    <!-- contact us  -->

        <?php
        include 'footer.html';
        ?>
        <!-- footer  -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>