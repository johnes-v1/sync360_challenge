<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div id="user-info">
                    <h1>Informações do Usuário</h1>
                    <img id="profile-pic" src="#" alt="Foto de Perfil" style="max-width: 200px; max-height: 200px;">
                    <p><strong>Nome:</strong> <span id="user-name"></span></p>
                    <p><strong>Idade:</strong> <span id="user-age"></span></p>
                    <p><strong>Endereço:</strong> <span id="user-address"></span></p>
                    <p><strong>Biografia:</strong></p>
                    <p id="user-bio"></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="user-image">
                    <h2>Foto de Perfil</h2>

                    <br>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="update-form">
                    <h2>Atualizar Informações</h2>
                    <form id="info-form" method="POST">
                        <label for="name">Nome:</label>
                        <input type="text" id="name" name="name" required class="form-control"><br>
                        <label for="age">Idade:</label>
                        <input type="number" id="age" name="age" min="0" required class="form-control"><br>
                        <label for="address">Endereço:</label>
                        <input type="text" id="address" name="address" required class="form-control"><br>
                        <label for="bio">Biografia:</label><br>
                        <textarea id="bio" name="bio" required class="form-control"></textarea><br>
                        <input type="file" id="profile-pic-upload" accept="image/*" onchange="previewImage(event)">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary" onclick="submitForm()">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="index.js"></script>

</body>

<style>@import url('https://fonts.googleapis.com/css2?family=Freeman&display=swap');


body{

    background: linear-gradient(to right, #2c3e50, #0c629b);
    font-family: freeman, Geneva, Tahoma, sans-serif;
}
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.user-info, .update-form {
    margin-bottom: 20px;
}

.user-info img {
    max-width: 200px;
    height: auto;
}

.update-form label, .update-form input, .update-form textarea {
    display: block;
    margin-bottom: 10px;
}
</style>
</html>