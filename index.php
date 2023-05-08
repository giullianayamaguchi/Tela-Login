<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>login</title>
</head>
       
<body id="textocenter" style="background-color: #eee;">
    <section class=" gradient-form">
        <div class="container py-5 h-100" id="margem" >
          <div class="row d-flex justify-content-center align-items-center h-100">
            
            <!-- 2 tela -->
            <div class="col-xl-10 Signin" id="Signin">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="../img/logo.png" width="100">
                      </div>
                    
                      <form action="" method="POST">
                        <br>
                        <p>Por favor, faça login na sua conta</p>
                        <div class="form-outline mb-3">
                          <input type="email" name="Email_User" id="EmailSc" class="form-control input-form email "
                            placeholder="Email" />
                          
                        </div>
      
                        <div class="form-outline ">
                          <input type="password" name="Senha_User" id="SenhaSc" onchange="Senha()" class="form-control input-form senha" 
                          placeholder="Senha" />
                        </div>
                       <input type="submit" name="button1" class="btn btn-primary btn-block fa-lg button gradient-custom-2 mt-3" value="Conectar"
                       <?php 

                        if(array_key_exists('button1', $_POST)) {
                          Valida();
                        }

                        function Valida() {
                          $Email = $_POST['Email_User'];
                          $Senha = $_POST['Senha_User'];

                          If (($Email == "giu@gmail.com") and ($Senha == '1234')){
                            header("location: CadProd.php"); 
                          }
                          if(($Email == "")){
                            echo '<script> email em branco </script';
                          }
                          if(($Senha == "")){
                              echo '<script> senha em branco</script';
                            }
                          }
                       ?>
                       />
      
                        <div class="d-flex align-items-center justify-content-center pb-5  mt-5 mp-5">
                          <p class="mb-0 me-2 mt-4">Não tem uma conta?</p>
                          <button type="button" class="btn btn-outline-info btn-Second signup-btn mt-4" onclick="Cadastrar()" id="signup">Cadastre-se</button>
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h3 class="mb-4">Olá!</h3> <br>
                      <p>Esta é a primeira versão oficial do projeto solicitado pelo professor Michel
                        Como forma de obtenção de notas e comprovação de aprendizado da ementa da matéria
                        de Programação WEB, com tópicos como CSS, HTML e Bootstrap.</p><br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- 1 tela -->
            <div class="col-xl-10 Signup visible" id="Signup"  class="visible">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div  id="corpologin">
                      <h3 class="mb-4" >Criar uma conta</h3>
                      <p class="small mb-0" >Para manter-se conectado conosco</p>
                      <p class="small mb-0">faça o login com suas informações pessoais</p><br>
                      <div class="d-flex align-items-center justify-content-center pb-3">
                        <p class="mb-0 me-1 mt-5">Possui uma conta? </p>
                        <button type="button" class="btn btn-outline-info btn-Second signin-btn mt-5" id="signin" onclick="Entrar()">Conecte-se</button>
                      </div>
                        
                      </div>
                  </div>

                  <div class="col-lg-6 ">
                    <div class="card-body p-md-5">
      
                      <div class="text-center">
                      <img src="../img/logo.png" width="100">
                      </div>
                    
                      <form>
                        <br>
                        <div class="form-outline">
                          <input type="Nome" id="NomeSs" onchange="Nome()" class="form-control input-form usuario"
                            placeholder="Nome Completo" />
                        </div>

                        <div class="form-outline">
                          <input type="email" id="EmailSs" onchange="Email2()" class="form-control input-form email"
                            placeholder="Email" />
                        </div>
      
                        <div class="form-outline ">
                          <input type="cargo" class="form-control input-form cargo"
                          placeholder="Cargo" />
                        </div>

                        <div class="form-outline ">
                          <input type="Endereço" class="form-control input-form ender"
                          placeholder="Endereço" />
                        </div>
                        <form class="form-inline">
                          <label class="form-outline mb-4 col-2 mt-2" for="inlineFormCustomSelectPref">Gênero:</label>
                          <select class="custom-select " id="inlineFormCustomSelectPref">
                            <option selected>Escolher...</option>
                            <option value="1">Feminino</option>
                            <option value="2">Masculino</option>
                          </select>
                        
                        
                        <form class="form-inline">
                          <label class="form-outline mb-4 col-2 mt-2" for="inlineFormCustomSelectPref">Turno:</label>
                          <select class="custom-select " id="inlineFormCustomSelectPref">
                            <option selected>Escolher...</option>
                            <option value="1">Manhã</option>
                            <option value="2">Tarde</option>
                            <option value="3">Noite</option>
                          </select>
                      </form>
                    </form>
                      
                      
                        <div class="text-center pt-4">
                          <button class="btn btn-primary btn-block fa-lg button gradient-custom-2 mb-3" type="button" onclick="Cadastrando()">Cadastrar</button>
                         
                        </div>
                      
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
            <script src="../js/index.js"></script>
</body>
</html>
