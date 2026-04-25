<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="/assets/coreui/css/coreui.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container d-flex align-items-center justify-content-center min-vh-100">

    <div class="row justify-content-center w-100">
        
        <div class="col-md-4">

            <div class="card shadow-sm">
                
                <div class="card-body p-4">

                    <h3 class="text-center mb-2">Jr Variedades</h3>
                    <p class="text-medium-emphasis text-center mb-4">Faça login para continuar</p>

                    <form id="form_login">

                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label class="form-label">Usuário</label>
                            <input 
                                type="text" 
                                name="usuario" 
                                class="form-control" 
                                placeholder="Digite seu usuário"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Senha</label>
                            <input 
                                type="password" 
                                name="senha" 
                                class="form-control" 
                                placeholder="Digite sua senha"
                                required
                            >
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember">
                                <label class="form-check-label" for="remember">Lembrar-me</label>
                            </div>
                            <a href="#" class="small">Esqueceu a senha?</a>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Entrar
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

    </div>
    <script src="/assets/coreui/js/coreui.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="/scripts/login/submit.js"></script>
</body>
</html>
