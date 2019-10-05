        <?php 

            session_start();
            if(!isset($_SESSION['username'])) {
                header('Location: login.php');
            }

            require_once('header.php');
            require_once('footer.php');
            require_once('db/dbconf.php');
            require_once('showProfilePic');

            include 'action.php';

        ?>

        <div id="nav-section">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">
                            <h1 class="title-note">CRUD</h1>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?php echo $profilePic ?>" alt="profile" class="profile">
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a>
                                            <h4><?php echo $fullName ?></h4>
                                        </a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="logout.php">Déconnexion</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="fa fa-plus"></span> Nouveau</a>
                    <?php 
                        session_start();
                        if(isset($_SESSION['message'])) {
                    ?>
                    <div class="alert alert-dismissible alert-success" style="margin-top:20px;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
                        unset($_SESSION['message']);
                        }
                    ?>
                    <table class="table table-bordered table-striped" style="margin-top:20px;">
                        <thead>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Adresse postal</th>
                            <th>Contrôle</th>
                        </thead>
                        <tbody>
                            <?php 
                            include_once('connection.php');

                            $database = new Connection();
                            $db = $database->open();
                            try {
                                $sql = 'SELECT * FROM members';
                                foreach ($db->query($sql) as $row) {
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td>
                                    <a href="#edit_<?php echo $row['id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"></span> Editer</a>
                                    <a href="#delete_<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="fa fa-trash"></span> Supprimer</a>
                                </td>
                                <?php include('edit_delete_modal.php'); ?>
                            </tr>
                            <?php
                                }
                            }
                            catch(PDOException $e) {
                                echo "Désolé, un problème est survenu lors de la connection " . $e->getMessage();
                            }

                            $database->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php 
            include('add_modal.php');
        ?>
    </body>
</html>