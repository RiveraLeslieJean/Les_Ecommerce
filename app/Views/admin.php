<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: lightpink;
            margin: 0;
            font-family: 'georgia', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
        }

        /* Style for centered form elements */
        .form-group {
            text-align: center;
            margin: 10px 0;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group textarea,
        .form-group input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group textarea {
            height: 100px;
        }

        .form-group button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Petshop</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="pet_area"></div>
    <header class="header_section">
        <div class="container">
            <div class="top_contact-container">
            </div>
        </div>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="">
                </a>
            </nav>
        </div>
    </header>

    <!-- Centered table items -->
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div id="addEmployeeModal">
                    <div class="edit">
                        <form method="post" action="/save" enctype="multipart/form-data">
                            <div class="modal-body">
                                <!-- Centered form elements -->
                                <div class="form-group">
                                    <label for="image">Insert Picture: </label>
                                    <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
                                    <input type="file" class="form-control-file" id="image" name="image"
                                        accept="image/*" required>
                                </div>

                                <div class="form-group">
                                    <label for="name">Pet Name: </label>
                                    <input type="text" class="form-control" id="name" name="name" required
                                        value="<?= isset($pro['name']) ? $pro['name'] : '' ?>">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description: </label>
                                    <textarea class="form-control" id="description" name="description" rows="3"
                                        required><?= isset($pro['description']) ? $pro['description'] : '' ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="price">Price: </label>
                                    <input type="number" class="form-control" id="price" name="price" required
                                        value="<?= isset($pro['price']) ? $pro['price'] : '' ?>">
                                </div>
                                <!-- End centered form elements -->
                            </div>
                            <div class="modal-footer">
                                <a href="/admin" class="btn btn-secondary">Remove details</a>
                                <button type="submit" class="btn btn-success">Submit</button>
                                <div class="login_btn-container">
                                    <a href="/logout">Logout</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Picture</th>
                            <th>Pet Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($tablepet)):
                            foreach ($tablepet as $pet): ?>
                                <tr>
                                    <td><img src="/uploads/<?= $pet['image']; ?>" alt="<?= $pet['name']; ?>"
                                            width="100">
                                    </td>
                                    <td>
                                        <?= $pet['name']; ?>
                                    </td>
                                    <td>
                                        <?= $pet['description']; ?>
                                    </td>
                                    <td>
                                        <?= $pet['price']; ?>
                                    </td>
                                    <td>
                                        <a href="/edit/<?= $pet['id'] ?>" class="edit">Edit</a>
                                        <a href="/delete/<?= $pet['id'] ?>" class="edit">Delete</a>
                                        <!-- You may want to add a similar line for the "Delete" link here -->
                                    </td>
                                </tr>
                            <?php endforeach; else: ?>
                            <tr>
                                <td colspan="4">No items found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

</body>

</html>
